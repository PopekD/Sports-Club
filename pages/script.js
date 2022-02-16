$(document).ready(function(){
    $(".pselect:nth-child(1)").click(function(){
      $(".pselect:nth-child(2), .pselect:nth-child(3)").animate({right: '150%', opacity: '0.00'}, 900);
      $("form").animate({ right: '50%'}, 900);

      document.querySelector(".cform").style.display ="flex"; 
});
  });
  $(document).ready(function(){
    $(".pselect:nth-child(2)").click(function(){
      $(".pselect:nth-child(1), .pselect:nth-child(3)").animate({right: '150%', opacity: '0.00'}, 900);
      $(".pselect:nth-child(2)").animate({right: '33%'}, 900)
      $("form").animate({ right: '50%'}, 900);

      document.querySelector(".cform").style.display ="flex"; 
    });
  });
  $(document).ready(function(){
    $(".pselect:nth-child(3)").click(function(){
      $(".pselect:nth-child(1), .pselect:nth-child(2)").animate({ right: '150%', opacity: '0.00'}, 900);
      $(".pselect:nth-child(3)").animate({right: '65%'}, 900) 
      $("form").animate({ right: '50%'}, 900);

      document.querySelector(".cform").style.display ="flex"; 
    });
  });

