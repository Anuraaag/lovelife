<?php include($_SERVER["DOCUMENT_ROOT"]."./header.php");?>    
        <form id="registration_form" name="reg_form">  
            
                
            <div id="fields_register">
            
                <span id="form_heading_register">New here! Let's get started</span>
                 Email:<br>
                <input type=email  name="mail" autofocus required/>
                Phone: <br>
                <input type=tel  pattern="[0-9]{10}"  name="phone" required/>
                Password:<br>
                <div id="div2">
                    <input id="pswd" style="width: 300px;" type=password  name="pswd" title='*Password should be greater than 6 characters. &#10*Password should contain atleast one alphabet. &#10*Password should contain atleast one special character such as !(exclamation mark ),.(dot),-(hyphen),_(underscore),&(ampersand),"(double inverted comma). ' required />
                
                    <img  id="vis" onclick="myFunction()" src="./images/invisible.png" title="Click to show/hide password"width="20px" height="20px">
                    <img  id="pswd_rules" src="./images/info_icon.png" onclick="pass_info()" width="20px" height="20px">
            
                    <dialog id="pass_info" draggable="true">
                    *Password should be greater than 6 characters.<br>
                    *Password should contain atleast one alphabet.<br>
                    *Password should contain atleast one special character such as !(exclamation mark ),.(dot),-(hyphen),_(underscore),&(ampersand),"(double inverted comma). 
                    </dialog>
            </div>
            <div id="div3"><input type="checkbox" value="Agree" />Hereby agree to&nbsp;<a href="C:\xampp\htdocs\LoveLife\t&c.txt" > terms and conditions</a>.
            </div>
            <br><br>
            <div id="div4">
            <a href="./Login.php">Already a user?</a>
            <input style="font-size:18px;margin-left:120px"type="button" value="Register" onclick="validate_register()"/>
            </div>
        
    
        </form>
    </body>
</html>