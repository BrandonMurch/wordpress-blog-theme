
export const runFormValidation = () => {
  jQuery(window).load(() => {
    jQuery('.comment-form-submit').on('click', () => {
      jQuery('.needs-validation').addClass('was-validated');
      jQuery('.needs-validation').removeClass('needs-validation');
      console.log('Validated.');
    });
  });
};
