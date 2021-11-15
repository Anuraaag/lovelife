<html>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="./script.js">
    </script>
</head>

<body>
    <div id="landing_header">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "./includes/header.php"); ?>
    <div>

    <div id="landing_body">
        <div id="heart_image_div">
            
            <div id="login_and_register">
                <?php
                    if($_GET['p']=="login"){
                        include($_SERVER["DOCUMENT_ROOT"] . "./includes/login.php");
                    }
                    elseif($_GET['p']=="forget_password"){
                        include($_SERVER["DOCUMENT_ROOT"] . "./includes/forget_password.php");
                    }
                    else {
                        include($_SERVER["DOCUMENT_ROOT"] . "./includes/register.php");
                    }
                ?>
            </div>
        </div>
    </div>

    <div id="landing_footer">

    </div>
</body>

</html>