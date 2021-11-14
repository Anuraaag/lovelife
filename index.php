<html>
    <head>
        
        <title>Home Page</title>
        <script>
            function GoToRegister()
            {
                window.location="./Register.php";
            }
            function GoToLogin()
            {
                window.location="./Login.php";
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
                
                flex-direction:column;
                align-items:flex-start;
                width:380px;
                height:280px;
                padding: 50px 10px 10px 20px;
                font-size: 18px;
           
            
         }   

         

          
          
         .buttons{
             display:flex;
             
             align-self:center;
             font-size: 20px;
            
         }
         a{
            text-decoration: none;
             color:dodgerblue;
         }
         #div2
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
            width: 140px;
            
             margin-left: 40px;
            
             
         }
       
         
        </style>
    </head>
    <body>
    <div id="heading">Love Life</div>
        <form id="login_form">
        <img  id="background_image"  src="./heart_background.jpeg" title=""width="100px" height="100px">
            <div id="fields">
              
            
            <input class="buttons" type="button" onclick="GoToRegister()"   value="Sign up"/><br>
            <input class="buttons" type="button"onclick="GoToLogin()" value="Login"/><br>
            <div id="div2">
            
                <hr id="hr1"  />
            
            
                  <span style="margin-left: 30px;">or</span>
    
                <hr id="hr2"  />
            </div>
            <div>
            <a href=""> <img  id="google_icon" style="margin-left: 100px;"onclick="" src="./google_icon.png" title="Click to login using google"width="20px" height="20px"> </a>  
            <a href=""> <img  id="fb_icon" style="margin-left: 35px;" onclick="" src="./fb_icon.png" title="Click to login using facebook"width="20px" height="20px"> </a> 
            <a href=""> <img  id="twitter_icon" style="margin-left: 35px;" onclick="" src="./twitter_icon.png" title="Click to login using twitter"width="28px" height="27px"> </a>
        </div>
            
            
        </div>
        </form>
    </body>
</html>