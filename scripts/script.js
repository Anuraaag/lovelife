// login.php scripts starting 

function GoToRegister()
{
    //window.location="./Register.php";
    let s='<?php include($_SERVER["DOCUMENT_ROOT"]."./register.php");?>'
    document.getElementById("mypage").=s;
}
function validate_login()
{
    var str="";
    
       

     formfield=log_form.email_mobile;
    if(formfield.value=="")
    {
        str+="Please enter your email id or mobile number.\n"
    }
    
    formfield=login_form.pass;
    var x=formfield.value;
    

    if(x=="")
    {
        str+="Please enter your password.\n"
    }
  
    
    if(str=="")
    {

        document.log_form.submit();
    }
    else

    alert(str);
}

function myFunction() 
    {
        var x = document.getElementById("pswd");
        var y=document.getElementById("vis");
        if (x.type === "password") 
        {
            x.type = "text";
            y.src="./images/visible.png";

        } 
        else
        {
            x.type = "password";
            y.src="./images/invisible.png";
        }
    }

    // login.php scripts ending

    // register.php scripts starting
    function validate_register()
    {
        var str="";
        
           

         formfield=reg_form.mail;
        if(formfield.value=="")
        {
            str+="Please enter your email id.\n"
        }
        else
        {
            var strEmail = formfield.value;
            var pos1 = strEmail.indexOf("@")
            var pos2 = strEmail.indexOf(".")

            if (pos1 >= 1 && pos2 >(pos1+1) && (pos2<(strEmail.length))) { } else { str+= "Please enter valid email id.\n"; }
        }
        
        formfield=reg_form.phone;
        var phn=formfield.value;
        var count=0;
        if(phn=="")
        {
            str+="Please enter your phone.\n"
        }
        else
        if(phn.length==10)
        {
            for(var i=0;i<10;i++)
            {
                if(phn[i].match(/[0-9]/))
                count++;
            }
            if(count!=10)
        {
            str+="Phone number is not valid. \n"
        }
        
        }
        else{
            {
            str+="Phone number is not valid. \n"
        }
        }
        

        formfield=reg_form.pswd;

        
       var x=formfield.value;
        var charCount=0;

        if(x=="")
        {
            str+="Please enter your password.\n"
        }
        else
        {
            if(x.length<=6)
                 {
                    str+="Password length should be more than 6 characters"+"\n"
                }
            for(var i=0;i<x.length;i++)
                {
            
                    if(x[i].match(/[a-z]/i) )
                    charCount++;
                 }

            if(charCount==0)
                str+="Password must contain atleast an alphabet";
        }

        if(str=="")
        {

            document.registration_form.submit();
        }
        else

        alert(str);


    }
    function login()
    {
        window.location="./Login.html";
    }
 
    function pass_info()
    {
        
        if(document.getElementById("pass_info").style.display=="none")
        document.getElementById("pass_info").style.display="block";
        else
        document.getElementById("pass_info").style.display="none";
        

    }




