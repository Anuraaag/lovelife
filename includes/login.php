<form id="login_form">
    <div id="login_fields">
        <span id="login_heading"> Welcome Back! </span>
        
        <div id="login_pswd">
            <input id="login_username" type="text" placeholder="Email or Mobile" name="email_mobile" autofocus required /><br>
            <div id="login_pswd_div">
                <input id="pswd" name="pass" type=password placeholder="Password" required />
                <img id="pswd_vis" onclick="change_pswd_visibility('login')" src="./includes/images/invisible.png" title="Click to show/hide password" width="20rem" height="20rem" style="filter: invert(0%);" >
            </div>
            <a id="forgot_pswd" onclick="page_change('forget_password')">Forgot password? </a> <br><br>
        </div>
        <div id="buttons_div">
            <input id="login" type="button" onclick="validate_login()" value="Login" /><br>
            <!-- <input id="register" type="button" onclick="page_change('register')" value="Register" /><br> -->
        </div>
        <br/>
        <div id="div4">
            <hr id="hr1" />
                <span>OR</span>
            <hr id="hr2" />
        </div>
        
        <div id="link_images_div">
            <a href=""> <img id="google_icon" style="margin-left: 5rem;" onclick="" src="./includes/images/google_icon.png" title="Click to login using google" width="25rem" height="25rem"> </a>
            <a href=""> <img id="fb_icon" style="margin-left: 3rem;" onclick="" src="./includes/images/fb_icon.png" title="Click to login using facebook" width="25rem" height="25rem"> </a>
            <a href=""> <img id="twitter_icon" style="margin-left: 3rem;" onclick="" src="./includes/images/twitter_icon.png" title="Click to login using twitter" width="33rem" height="32rem"> </a>
        </div>
    </div>
</form>