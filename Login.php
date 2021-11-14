<?php include($_SERVER["DOCUMENT_ROOT"]."./header.php");?>
        <form id="login_form" name="log_form">
        
            <div id="fields_login">
               <span id="form_heading_login"> Welcome Back! </span>
            <input type=text placeholder="Email or Mobile" name="email_mobile"autofocus required /><br>
            <div id="div2">
                <input id="pswd" name="pass" type=password placeholder="Password" required />
                <img  id="vis" onclick="myFunction()" src="./images/invisible.png" title="Click to show/hide password"width="20px" height="20px">
            </div>
            <a style="margin-left: 172px;" href="">Forgot password? </a> <br>
            
            <div id="div3">
                <input  id="login"type="button" onclick="validate_login()" value="Login"/><br>
                <input id="register"type="button" onclick="GoToRegister()" value="Register"/><br>
            </div>
            <br>
            <div id="div4">
            
                <hr id="hr1"  />
            
            
                  <span style="margin-left: 10px;">or</span>
    
                <hr id="hr2"  />
            </div>
            <br>
            <div>
            <a href=""> <img  id="google_icon" style="margin-left: 100px;"onclick="" src="./images/google_icon.png" title="Click to login using google"width="25px" height="25px"> </a>  
            <a href=""> <img  id="fb_icon" style="margin-left: 35px;" onclick="" src="./images/fb_icon.png" title="Click to login using facebook"width="25px" height="25px"> </a> 
            <a href=""> <img  id="twitter_icon" style="margin-left: 35px;" onclick="" src="./images/twitter_icon.png" title="Click to login using twitter"width="33px" height="32px"> </a>
        </div>
            
            
        </div>
        </form>
       
    </body>
</html>