//This code is a bit rudimentary.
//This is more of a proof of concept than code for production.
//The only thing it needs to do, however, is to check if the field has any value. The rest is done with CSS

$(document).ready(function(){

    $('#accordion').find('.accordion-toggle').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast').toggleClass('active');

      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('fast').removeClass('active');
      if ($(this).hasClass('active_head')) {

        $(this).removeClass('active_head').parent().removeClass('accordion_active');
        $(this).find('.expand_close').fadeOut(function() {
                                      $(this).text("+ Expand")
                                    }).fadeIn('fast');



      } else {

        $('.accordion-toggle').find('.expand_close').text("+ Expand");
                                                    
        $('.accordion-toggle').removeClass('active_head').parent().removeClass('accordion_active');
        $(this).find('.expand_close').fadeOut(function() {
                                      $(this).text("- Collapse")
                                    }).fadeIn('fast'); 

        $(this).addClass('active_head').parent().addClass('accordion_active');

      }

    });


  function updateText(event){
    var input=$(this);
    setTimeout(function(){
      var val=input.val();
      if(val!="")
        input.parent().addClass("floating-placeholder-float");
      else
        input.parent().removeClass("floating-placeholder-float");
    },1)
  }
  $(".frm_wrap input").keydown(updateText);
  $(".frm_wrap input").change(updateText);


// floating.form_wrap_control, #footer            
   var offset = $(".form_wrap_control, .easy_steps").offset();
    var mbOffset = $("#footer").offset();
    var mbPos = mbOffset.top - $(".form_wrap_control, .easy_steps").outerHeight() - 30; /*30px extra space*/
    var topPadding = 15;
    $(window).scroll(function() {
        if ($(window).scrollTop() > offset.top ) {
            if(  $(window).scrollTop() < mbPos ) {
                $(".form_wrap_control, .easy_steps").stop().animate({
                    marginTop: $(window).scrollTop() - offset.top + topPadding
                });
            }
        } else {
            $(".form_wrap_control, .easy_steps").stop().animate({
                marginTop: 0
            });
        };
    });

  $(".toggle").click(function(){ 
    $(".main_menu").slideToggle(700);
    $(this).toggleClass('active_icon');
  });


  

  


});