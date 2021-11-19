<html>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="./script.js">
    </script>
</head>

<body>
    <div id="landing_main">
        <div id="landing_header">
            <?php include("./includes/header.php"); ?>
        </div>

        <div id="landing_body">
            <img id="background_img" src="./includes/images/background_img.png" />
            <div id="login_register">
                <?php
                if (isset($_GET['p'])) {
                    if ($_GET['p'] == "login") {
                        include("./includes/login.php");
                    } elseif ($_GET['p'] == "forget_password") {
                        include("./includes/forget_password.php");
                    } elseif ($_GET['p'] == "register") {
                        include("./includes/register.php");
                    } else {
                        include("./includes/register.php");
                    }
                } else {
                    include("./includes/register.php");
                }

                ?>
            </div>
        </div>

        <div id="landing_footer">
            <?php include("./includes/footer.php"); ?>
        </div>
    </div>

    </div>
</body>

</html>