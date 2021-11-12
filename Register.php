<html>
    <head>
        <title>Registration Page</title>
        <script>
            function validate()
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
            function myFunction() 
                {
                    var x = document.getElementById("pass");
                    var y=document.getElementById("vis");
                    if (x.type === "password") 
                    {
                        x.type = "text";
                        y.src="./visible.png";

                    } 
                    else
                    {
                        x.type = "password";
                        y.src="./invisible.png";
                    }
                }
            function pass_info()
            {
                
                if(document.getElementById("pass_info").style.display=="none")
                document.getElementById("pass_info").style.display="block";
                else
                document.getElementById("pass_info").style.display="none";
                

            }


        </script>

        <style>
            body
         {
             background-color: #F5F5DC;
         }
             #heading{
                 
                padding-left: 60px;
                position: relative;
                font-size: 40px;
                font-style:italic;
                font-family:'papyrus';
                background-color: E6E6FA;
            }
            #background_image
            {
                margin-left: 20px;
                margin-top: 20px;
                width:940px;
                height: 350px;
            }
            #form_heading
         {
             display: flex;
             font-weight: bold;
             font-size: 20px;
             align-self: center;
         }
         #registration_form
         {
             display: flex;
             margin-left: 50px;
             margin-top: 80px;
             margin-bottom: 200px;
             background-color:lightgrey;
             width: 1230px;
             height: 400px;
         }
            #fields{
            background-color:E6E6FA;
            margin:22px 20px 100px 30px;
            
            border:2px solid grey;
            border-radius: 5px;
            display:flex;
            flex-direction:column;
            align-items:flex-start;
            
            width:fit-content;
            height:320px;
            padding: 10px;
            
            font-size: 18px;
            
           
           
            
         }   

         #fields>input{
            margin: 2px 2px 2px 2px;
           width:300px;
            font-size: 18px;
            
         }   
         #div2
         {
            display: flex;
            flex-wrap: nowrap;
            width: fit-content;
            
         }
       
         #div2>*,#div3{
             
            margin: 2px 2px 2px 2px;
            
            font-size: 18px;
         }   
        
         #pass_info{ 
             margin: 20px 20px 100px 370px ;
             display: none;
            height:fit-content;
            width:fit-content;
            font-size: medium;
         }
         
        #div4
        {
           display: flex;
           flex-wrap: nowrap; 
        }
          
        </style>
    </head>
    <body>
        <div id="heading">Love Life</div>
        
        
        <form id="registration_form" name="reg_form">  
            <img  id="background_image" onclick="" src="./heart_background.jpeg" title="">
                
            <div id="fields">
            
                <span id="form_heading">New here! Let's get started</span>
                 Email:<br>
                <input type=email  name="mail" autofocus required/>
                Phone: <br>
                <input type=tel  pattern="[0-9]{10}"  name="phone" required/>
                Password:<br>
                <div id="div2">
                    <input id="pass" style="width: 300px;" type=password  name="pswd" title='*Password should be greater than 6 characters. &#10*Password should contain atleast one alphabet. &#10*Password should contain atleast one special character such as !(exclamation mark ),.(dot),-(hyphen),_(underscore),&(ampersand),"(double inverted comma). ' required />
                
                    <img  id="vis" onclick="myFunction()" src="./invisible.png" title="Click to show/hide password"width="20px" height="20px">
                    <img  id="pswd_rules" src="./info_icon.png" onclick="pass_info()" width="20px" height="20px">
            
                    <dialog id="pass_info" draggable="true">
                    *Password should be greater than 6 characters.<br>
                    *Password should contain atleast one alphabet.<br>
                    *Password should contain atleast one special character such as !(exclamation mark ),.(dot),-(hyphen),_(underscore),&(ampersand),"(double inverted comma). 
                    </dialog>
            </div>
            <div id="div3"><input type="checkbox" value="Agree" />Hereby agree to <a href="C:\xampp\htdocs\LoveLife\t&c.txt" >terms and conditions</a>.
            </div>
            <br><br>
            <div id="div4">
            <a href="./Login.php">Already a user?</a>
            <input style="font-size:18px;margin-left:120px"type="button" value="Register" onclick="validate()"/>
            </div>
        
    
        </form>
    </body>
</html>