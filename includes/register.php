  <form id="registration_form" class="form_bg_image" name="reg_form">

      <div id="register_form">

          <span id="register_heading">New here! Let's Get Started</span>
          <br>
          <div id="email_phone_pass_div">
              Email:<br>
              <input type=email name="mail" autofocus required />
              
              Phone: <br>
              <input type=tel pattern="[0-9]{10}" name="phone" required />
              
              Password:<br>

              <div id="pswd_block">
                <input id="pswd" type=password name="pswd" title='*Password should be greater than 6 characters. &#10*Password should contain atleast one alphabet. &#10*Password should contain atleast one special character such as !(exclamation mark ),.(dot),-(hyphen),_(underscore),&(ampersand),"(double inverted comma). ' required />

                <img id="pswd_vis" onclick="change_pswd_visibility('register')" src="./includes/images/invisible.png" title="Click to show/hide password" width="20rem" height="20rem">

                <img id="pswd_rules" src="./includes/images/info_icon.png" onclick="pass_info()" width="20rem" height="20rem">

                <dialog id="pass_info" draggable="true">
                    Password Should Be:<br>
                    * Greater than 6 Characters<br>
                    * Contain atleast 1 Alphabet.<br>
                    * Contain atleast 1 Special Character !.-_&"
                </dialog>
              </div>
          </div>

          <div id="t_and_c_div">
              <input id="cb" type="checkbox" value="Agree" />
              Hereby agree to all&nbsp;<a href="./tnc" target="_blank">Terms and Conditions</a>
          </div>

          <br>
          <div id="already_a_user_div">
              <a id="already_a_user_link" onclick="page_change('login')">Already a User?</a>
          </div>

          <input id="reg_btn" type="button" value="Register" onclick="validate_register()" />
  </form>