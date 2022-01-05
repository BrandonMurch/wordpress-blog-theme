<?php

/*
 * Custom Avatar Without a Plugin
 *  Modified from original code by Paolo (https://userswp.io/wordpress-profile-picture/)
 */

// 1. Enqueue the needed scripts.
add_action("admin_enqueue_scripts", function ($hook) {
    // Load scripts only on the profile page.
    if ($hook === "profile.php" || $hook === "user-edit.php") {
        add_thickbox();
        wp_enqueue_script("media-upload");
        wp_enqueue_media();
    }
});

// 2. Scripts for Media Uploader.
function avatar_admin_media_scripts()
{
    ?>
	<script>
		jQuery(document).ready(function ($) {
			$(document).on('click', '.avatar-image-upload', function (e) {
				e.preventDefault();
				var $button = $(this);
				var file_frame = wp.media.frames.file_frame = wp.media({
					title: 'Select or Upload an Custom Avatar',
					library: {
						type: 'image' // mime type
					},
					button: {
						text: 'Select Avatar'
					},
					multiple: false
				});
				file_frame.on('select', function() {
					var attachment = file_frame.state().get('selection').first().toJSON();
					$button.siblings('#custom-avatar').val( attachment.sizes['avatar-large'].url );
					jQuery('.custom-avatar-preview').attr( 'src', attachment.sizes['avatar-large'].url );
				});
				file_frame.open();
			});
		});
	</script>
	<?php
}
add_action(
    "admin_print_footer_scripts-profile.php",
    "avatar_admin_media_scripts"
);
add_action(
    "admin_print_footer_scripts-user-edit.php",
    "avatar_admin_media_scripts"
);

// 3. Adding the Custom Image section for avatar.
function custom_user_profile_fields($profileuser)
{
    ?>
	<h3><?php _e("Custom Local Avatar", "brandon-blog"); ?></h3>
	<table class="form-table avatar-upload-options">
		<tr>
			<th>
				<label for="image"><?php _e("Custom Local Avatar", "brandon-blog"); ?></label>
			</th>
			<td style="width: 70%; display: inline-block">
		    <?php
      // Check whether we saved the custom avatar, else return the default avatar.
      $custom_avatar = get_the_author_meta("custom-avatar", $profileuser->ID);
      if ($custom_avatar == "") {
          $custom_avatar = get_avatar_url($profileuser->ID);
      } else {
          $custom_avatar = esc_url_raw($custom_avatar);
      }
      ?>
				<input type="text" name="custom-avatar" id="custom-avatar" value="<?php echo esc_attr(
        esc_url_raw(get_the_author_meta("custom-avatar", $profileuser->ID))
    ); ?>" class="regular-text" />
				<input type='button' class="avatar-image-upload button-primary" value="<?php esc_attr_e(
        "Upload Image",
        "brandon-blog"
    ); ?>" id="custom-avatar-button"/><br />
				<span class="description">
					<?php _e(
         "Please upload a custom avatar for your profile, to remove the avatar simple delete the URL and click update.",
         "brandon-blog"
     ); ?>
				</span>
			</td>
      <td style="width: 20%; display: inline-block">
        <img
          style="width: 96px; height: 96px; display: block; margin-bottom: 15px; margin-left: 20px;"
          class="custom-avatar-preview"
          src="<?php echo $custom_avatar; ?>">
      </td>
    </tr>

	</table>
	<?php
}
// add_action( $tag, $function_to_add, $priority = 10, $accepted_args = 1 )
add_action("show_user_profile", "custom_user_profile_fields", 10, 1);
add_action("edit_user_profile", "custom_user_profile_fields", 10, 1);

// 4. Saving the values.
add_action("personal_options_update", "save_avatar");
add_action("edit_user_profile_update", "save_avatar");
function save_avatar($user_id)
{
    if (current_user_can("edit_user", $user_id)) {
        if (isset($_POST["custom-avatar"])) {
            $avatar = esc_url_raw($_POST["custom-avatar"]);
            update_user_meta($user_id, "custom-avatar", $avatar);
        }
    }
}

// 5. Set the uploaded image as default gravatar.
add_filter("get_avatar_url", "get_custom_avatar_url", 10, 3);
function get_custom_avatar_url($url, $id_or_email, $args)
{
    $id = "";
    if (is_numeric($id_or_email)) {
        $id = (int) $id_or_email;
    } elseif (is_object($id_or_email)) {
        if (!empty($id_or_email->user_id)) {
            $id = (int) $id_or_email->user_id;
        }
    } else {
        $user = get_user_by("email", $id_or_email);
        $id = !empty($user) ? $user->data->ID : "";
    }

    //Preparing for the launch.
    $custom_url = $id ? get_user_meta($id, "custom-avatar", true) : "";

    // If there is no custom avatar set, return an empty string.
    if ($custom_url == "" || !empty($args["force_default"])) {
        return "";
    } else {
        return esc_url_raw($custom_url);
    }
}

?>
