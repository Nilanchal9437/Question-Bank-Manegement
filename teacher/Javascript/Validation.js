function validation()
{
    var pass=document.getElementById("password_id").value;
    var cpassword=document.getElementById("cpassword").value;

    if(pass.length<5 || pass.length>15)
    {
        document.getElementById("pass_message").innerHTML="Password must be between 5 to 15 character";
        return false;
    }
    else if(pass.search(/[A-Z]/)==-1)
    {
      document.getElementById("pass_message").innerHTML="password must contain atleast one uppercase";
      return false;
    }
    else if(pass.search(/[a-z]/)==-1)
    {
      document.getElementById("pass_message").innerHTML="password must contain atleast one lowercase";
      return false;
    }
    else if(pass.search(/[0-9]/)==-1)
    {
      document.getElementById("pass_message").innerHTML="password must contain atleast one numeric value";
      return false;
    }
    else if(pass.search(/[!@#$%^&*~]/)==-1)
    {
      document.getElementById("pass_message").innerHTML="password must contain atleast one of these special character(!@#$%^&*~)";
      return false;
    }
    else{
      document.getElementById("pass_message").innerHTML="";
    }
    if(pass!=cpassword)
    {
      document.getElementById("cpass_message").innerHTML="Password and Confirm Password must be same";
      return false;
    }
    
}