(function ($) {

  "use strict";


  Drupal.behaviors.paragraphsAccordion = {
    attach: function (context, settings) {


      $('#block-wellbeing-content .field--name-field-hideable-text').hide(500);

      $('#block-wellbeing-content .field--name-field-heading-text').unbind('click').click(function(){
        //$(this).siblings('.field--name-field-hideable-text').toggle(500);
        console.log($(this).siblings('.field--name-field-hideable-text'));
        console.log($(this).siblings('.field--name-field-hideable-text'));
        if($(this).hasClass("accordion-open")){
        $(this).siblings('.field--name-field-hideable-text').toggle(500);
        $(this).toggleClass("accordion-open");

        }else{
          $(".accordion-open").click();
          $(this).siblings('.field--name-field-hideable-text').toggle(500);
          $(this).toggleClass("accordion-open");
        }
      });

    }
  };
  //add a class to the page based on menu branch.
  Drupal.behaviors.setBlockHeights = {
    attach: function (context, settings) {

 

    }
  };
setInterval(function(){ 
    var mb = document.getElementsByClassName('ifc-launcher-button')[0];
    mb.style.backgroundColor = "#e2939a";
    mb.style.borderColor = "#e2939a";
}, 1000);



}(jQuery));
