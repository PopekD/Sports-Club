$(document).ready(function(){
    $(".pselect:nth-child(1)").click(function(){
      $(".pselect:nth-child(1):hover").css("opacity", "1");
      $(".pselect:nth-child(2), .pselect:nth-child(3)").animate({opacity: '0.00'}, "fast");
      $(".pselect:nth-child(2), .pselect:nth-child(3)").animate({right: '150%'}, "slow");
      $(".pselect:nth-child(1)").css("background-color", "#262626");
      $("form").animate({ right: '50%'}, "slow").css("display", "flex");

     
});
  });
  $(document).ready(function(){
    $(".pselect:nth-child(2)").click(function(){
      $(".pselect:nth-child(2):hover").css("opacity", "1");
      $(".pselect:nth-child(1), .pselect:nth-child(3)").animate({opacity: '0.00'}, "fast");
      $(".pselect:nth-child(1), .pselect:nth-child(3)").animate({right: '150%'}, "slow");
      $(".pselect:nth-child(2)").animate({right: '33%'}, "slow").css("background-color", "#262626");
      $("form").animate({ right: '50%'}, "slow").css("display", "flex");

    
    });
  });
  $(document).ready(function(){
    $(".pselect:nth-child(3)").click(function(){
      $(".pselect:nth-child(3):hover").css("opacity", "1");
      $(".pselect:nth-child(1), .pselect:nth-child(2)").animate({opacity: '0.00'}, "fast");
      $(".pselect:nth-child(1), .pselect:nth-child(2)").animate({ right: '150%'}, "slow");
      $(".pselect:nth-child(3)").animate({right: '65%'}, "slow").css("background-color", "#262626"); 
      $("form").animate({ right: '50%'}, "slow").css("display", "flex");

      
    });
  });

  //form validation
  
  $(document).ready(function () {

    let Errors = 0;

// CARD NUMBER
  function validateCardNumber() {

 
  let cardnumberValue = $('#cardnumber').val();
  
 
  if (cardnumberValue.length == '') {
    alert("Card Number is empty");
      return false;
  } else if ( (cardnumberValue.length  > 16)  || (cardnumberValue.length  < 16) ) {
          alert("The length of the card number should be 16 numbers");
          Errors++;
          return false;
          }
         
  }
//NAME OF CARD 
  function validateNameOfCard(){

    let nameofcardValue = $('#nameofcard').val();
    

    if(nameofcardValue.length == ''){
      alert("Name of card is empty");
      Errors++;
      return false;
    }
  }
//EXPIRY DATE
  function validateExpiryDate(){
    
    var VAL = expirydate.value;
    var regex = new RegExp('^(0[1-9]|1[0-2])\/?([0-9]{2})$');
    
    if(regex.test(VAL)){
     
    }else{
      alert("Please use the correct date (MM/YYY)");
      Errors++;
      return false;
    }
  }

//SECURITY CODE 
  function validSecurityCode(){

    var securitycodeValue = $('#securitycode').val();

    if (securitycodeValue.length > 3 || securitycodeValue.length < 3 ){
      alert("It should be a 3-digit code(CVV)");
      Errors++;
    }
  }

  
  $('#paymentbutton').click(function() {
    validateCardNumber(); validateNameOfCard(); validateExpiryDate(); validSecurityCode();
    if( Errors == 0 ){
      return true;
    } else{
      Errors = 0 ;
      return false; 
    }
  })
})
