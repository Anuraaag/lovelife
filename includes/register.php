  <form id="registration_form" class="form_bg_image" name="reg_form">

      <div id="register_form">

          <span id="form_heading_register">New here! Let's get started</span>
          Email:<br>
          <input type=email name="mail" autofocus required />
          Phone: <br>
          <input type=tel pattern="[0-9]{10}" name="phone" required />
          Password:<br>
          <div id="register_pswd_div">
              <input id="pswd" style="width: 300rem;" type=password name="pswd" title='*Password should be greater than 6 characters. &#10*Password should contain atleast one alphabet. &#10*Password should contain atleast one special character such as !(exclamation mark ),.(dot),-(hyphen),_(underscore),&(ampersand),"(double inverted comma). ' required />

              <img id="vis" onclick="myFunction()" src="./images/invisible.png" title="Click to show/hide password" width="20rem" height="20rem">
              <img id="pswd_rules" src="./images/info_icon.png" onclick="pass_info()" width="20rem" height="20rem">

              <dialog id="pass_info" draggable="true">
                  *Password should be greater than 6 characters.<br>
                  *Password should contain atleast one alphabet.<br>
                  *Password should contain atleast one special character such as !(exclamation mark ),.(dot),-(hyphen),_(underscore),&(ampersand),"(double inverted comma).
              </dialog>
          </div>
          <div id="t_and_c_div"><input type="checkbox" value="Agree" />Hereby agree to&nbsp;<a href="./t&c.php" target="_blank"> terms and conditions</a>.
          </div>
          <br><br>
          <div id="already_a_user_div">
              <a href="./Login.php">Already a user?</a>
              <input style="font-size:18rem;margin-left:120rem" type="button" value="Register" onclick="validate_register()" />
          </div>


  </form>
  </body>

  </html>