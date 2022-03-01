function validatecn_form() {
    var name =  document.getElementById('name').value;
    if (name == "") {
        document.querySelector('.status').innerHTML = "Please fill 'Your Name'.";
        return false;
    }
    var email =  document.getElementById('email').value;
    if (email == "") {
        document.querySelector('.status').innerHTML = "Please fill 'Your Email'.";
        return false;
    } else {
        var emailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!emailformat.test(email)){
            document.querySelector('.status').innerHTML = "Please fill email in proper format.<br>for e.g.xxx@yyyyy.com.";
            return false;
        }
    }
    var subject =  document.getElementById('subject').value;
    if (subject == "") {
        document.querySelector('.status').innerHTML = "Please write the subject.";
        return false;
    }
    var message =  document.getElementById('message').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Please write your message.";
        return false;
    } else {
        var messagelength=2000;
        if (message.length>messagelength) {
            document.querySelector('.status').innerHTML = "Please write your message brieftly, should not exceed 2000 characters.";
            return false;
    }
  
    }
    
    document.getElementById('contact-form').submit();
  }