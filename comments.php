<?php

$fields = [
    "author" => '<div class="row">

         <div class="col">
          <label for="author">Name</label>
          <input class="form-control" type="text" id="author" name="author" size="30" maxlength="64" required />
        </div>',
    "email" => '<div class="col"><label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" size="30" maxlength="100" aria-describedby="email-notes" required /></div></div>',
    "cookies" => "",
];

comment_form([
    "fields" => $fields,
    "comment_field" => '<div class="form-group comment-textarea"><label for="comment">Comment</label>
          <textarea name="comment" class="form-control " rows="8" cols="40" maxlength="65525" required></textarea></div>',
    "title_reply" => "Leave a Comment!",
    "comment_notes_before" => "",
    "class_submit" => "btn btn-primary comment-form-submit",
    "class_container" => "container comment-form-container",
]);
?>



<div class="container comment-list-container">
  <?php
  $args = [
      "status" => "approve",
  ];

  $comments_query = new WP_Comment_Query();
  $comments = $comments_query->query($args);

  if ($comments) {
      foreach ($comments as $comment) {
          echo "<div class='card'>
          <h5>
            " .
              $comment->comment_author .
              "
          </h5>
          <h6>
            " .
              $comment->comment_date .
              "
          </h6>
          <p>" .
              $comment->comment_content .
              "</p></div>";
      }
  } else {
      echo "No comments found";
  }
  ?>
</div>
