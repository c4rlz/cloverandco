export default {
  init() {
    // JavaScript to be fired on all pages
    $('input, select').focus(function(){
      $(this).parents('.control').addClass('focused');
    });
    
    $('input').blur(function(){
      var inputValue = $(this).val();
      if ( inputValue == "" ) {
        $(this).removeClass('filled');
        $(this).parents('.control').removeClass('focused');  
      } else {
        $(this).addClass('filled');
      }
    })  

    // $('select').active(function(){
    //   $(this.parents)
    // })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
