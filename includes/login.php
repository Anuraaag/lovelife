<form id="login_form">
    <div id="login_fields">
        <span id="form_heading_login"> Welcome Back! </span>
        <input type=text placeholder="Email or Mobile" name="email_mobile" autofocus required /><br>
        <div id="login_pswd_div">
            <input id="pswd" name="pass" type=password placeholder="Password" required />
            <img id="vis" onclick="myFunction()" src="./images/invisible.png" title="Click to show/hide password" width="20rem" height="20rem">
        </div>
        <a id="forgot_pswd" href="">Forgot password? </a> <br><br>

        <div id="buttons_div">
            <input id="login" type="button" onclick="validate_login()" value="Login" /><br>
            <input id="register" type="button" onclick="GoToRegister()" value="Register" /><br>
        </div>
        <br>
        <div id="div4">

            <hr id="hr1" />


            <span style="margin-left: 1rem;">or</span>

            <hr id="hr2" />
        </div>
        <br>
        <div id="link_images_div">
            <a href=""> <img id="google_icon" style="margin-left: 5rem;" onclick="" src="./images/google_icon.png" title="Click to login using google" width="25rem" height="25rem"> </a>
            <a href=""> <img id="fb_icon" style="margin-left: 3rem;" onclick="" src="./images/fb_icon.png" title="Click to login using facebook" width="25rem" height="25rem"> </a>
            <a href=""> <img id="twitter_icon" style="margin-left: 3rem;" onclick="" src="./images/twitter_icon.png" title="Click to login using twitter" width="33rem" height="32rem"> </a>
        </div>
    </div>

</form>