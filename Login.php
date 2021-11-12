<html>
    <head>
        <title>Login Page</title>
        <script>
            function validate()
            {
                var str="";
                
                   

                 formfield=log_form.email_mobile;
                if(formfield.value=="")
                {
                    str+="Please enter your email id or mobile number.\n"
                }
                else
                
                {


                    var strEmail = formfield.value;
			        var pos1 = strEmail.indexOf("@")
			        var pos2 = strEmail.indexOf(".")

			        if ((pos1!=-1)&& (pos2!=-1) )
                    {
                         if(pos1 >= 1 && pos2 >(pos1+1) && (pos2<(strEmail.length)))
                            { 

                            }
                      else 
                            { 
                                str+= "Please enter valid email id.\n";
                             }
                    }
                    else
                    {
                        if(formfield.value.length==10)
                        {
                            for(var i=0;i<10;i++)
                                {
                                    if(formfield.value[i].match(/[0-9]/))
                                     count++;
                                 }
                                if(count!=10)
                                {
                                    str+="Phone number is not valid. \n"
                                 }
                
                         }
                            else
                                {
                                str+="Phone number is not valid. \n"
                                }
                                
                
                            }
                

                }    
                
                if(str=="")
                {

                    document.log_form.submit();
                }
                else

                alert(str);
            }
            function register()
            {
                window.location="./Register.php";
            }
            function myFunction() 
                {
                    var x = document.getElementById("pswd");
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
                width:900px;
                height: 350px;
            }
            #form_heading
         {
             display: flex;
            
             margin-top: -30px;
             font-weight: bold;
             font-size: 20px;
             align-self: center;
         }
            #login_form
         {
             display: flex;
             margin-left: 50px;
             margin-top: 80px;
             margin-bottom: 200px;
             background-color:lightgrey;
             width: 1230px;
             height: 400px;
         }
       
            #fields
            {
                background-color:E6E6FA;
                margin:22px 20px 100px 30px;
                border:2px solid grey;
                border-radius: 5px;
                display:flex;
                flex-wrap: nowrap;
                flex-direction:column;
                align-items:flex-start;
                width:380px;
                height:280px;
                padding: 50px 10px 10px 20px;
                font-size: 18px;
           
            
         }   

         #fields>input{
            margin: 25px 2px 2px 2px;
           width: 300px;
            font-size: 18px;
         }   
         #div2>input{
            margin: 2px 2px 4px 2px;
            width: 300px;
            font-size: 18px;
         }  
         a{
             text-decoration: none;
             color:dodgerblue;
            
         }
         #div3
         {
           display: flex;
          
         }
         #hr1
         {
             width: 120px;
             margin-left: 0%;
             
             
         }   
         #hr2
         {
            width: 120px;
            
             margin-left: 10px;
            
             
         }
       
         
        </style>
    </head>
    <body>
    <div id="heading">Love Life</div>
        <form id="login_form" name="log_form">
        <img  id="background_image"  src="./heart_background.jpeg" title=""width="100px" height="100px">
            <div id="fields">
               <span id="form_heading"> Welcome Back! </span>
            <input type=text placeholder="Email or Mobile" name="email_mobile"autofocus required /><br>
            <div id="div2">
                <input id="pswd" type=password placeholder="Password" required />
                <img  id="vis" onclick="myFunction()" src="./invisible.png" title="Click to show/hide password"width="20px" height="20px">
            </div>
            <a style="margin-left: 100px;" href="">Forgot password? </a> <br><br>
            <input style="align-self: center;"type="button" onclick="validate()" value="Login"/><br>
            <div id="div3">
            
                <hr id="hr1"  />
            
            
                  <span style="margin-left: 10px;">or</span>
    
                <hr id="hr2"  />
            </div>
            <div>
            <a href=""> <img  id="google_icon" style="margin-left: 90px;"onclick="" src="./google_icon.png" title="Click to login using google"width="20px" height="20px"> </a>  
            <a href=""> <img  id="fb_icon" style="margin-left: 15px;" onclick="" src="./fb_icon.png" title="Click to login using facebook"width="20px" height="20px"> </a> 
            <a href=""> <img  id="twitter_icon" style="margin-left: 15px;" onclick="" src="./twitter_icon.png" title="Click to login using twitter"width="28px" height="27px"> </a>
        </div>
            
            
        </div>
        </form>
    </body>
</html>