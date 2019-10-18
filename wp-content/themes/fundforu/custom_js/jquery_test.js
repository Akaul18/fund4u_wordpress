(function($) {
  $(document).ready(function(){

    // $('#menu-item-55').click(function(e){
    //
    // e.preventDefault();
    //
    // $('#post-76').scroll();
    //
    //
    // })

  $('#burger-menu').click(function(){


  $('#site-navigation').toggle("slide");


  });


  if(window.matchMedia("(min-width: 900px)").matches){

  $('#site-navigation').show();

  }

  else {
    $('#site-navigation').hide();

  }

  });

})(jQuery);
