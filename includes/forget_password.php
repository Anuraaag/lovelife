<div id=forget_pswd_div>
    <span id="forget_pswd_head">Trouble Logging In?</span><br>
    <span id="enter_mail_or_phone">Enter your mail or phone number,we will send you a link to get back into your account.</span>
    <form id="forget_pswd_form">
        <input id="email_mobile_field" type=text placeholder="Email or Mobile" name="email_mobile" autofocus required /><br>
        <div id="validation_div" >Please enter mobile or email id!</div>
        <input id="val-btn" type="button" value="Submit" onclick="validateForgetPswd()" />
    </form>
</div>

<div id="pswd_reset" style="display:none">
    <span id="reset_pswd_head">Welcome Back!!</span><br><br>
    <span id="your_acc_is_restored">Your account is restored , kindly enter new password</span><br><br>
    <form id="reset_pswd_form">
        <span id="lbl1">New Password:</span><br>
        <div id="new_pass_div">
            <input id="pswd" type=password name="pass" autofocus required />
            <img id="pswd_vis" onclick="change_pswd_visibility('forget_pswd')" src="./includes/images/invisible.png" title="Click to show/hide password" width="20rem" height="20rem">
            <img id="pswd_rules" src="./includes/images/info_icon.png" onclick="pass_info()" width="20rem" height="20rem">

            <dialog id="pass_info" draggable="true">
                    Password Should Be:<br>
                    * Greater than 6 Characters<br>
                    * Contain atleast 1 Alphabet.<br>
                    * Contain atleast 1 Special Character !.-_&"
            </dialog>
        </div>

        <span id="lbl2">Re-enter Password:</span><br>
        <input id="again_pswd_field" type=password name="again_pass" autofocus required /><br>
            <input id="pswd-set-btn" type="button" value="Submit" onclick="validateSetNewPswd()" />
    </form>
</div>