<html>
    <head>
        <title>Login Page</title>
                    <!-- hello -->
        <script>
            function register()
            {
                window.location="./Register.php";
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
            #fields{
            margin:100px 100px 100px 450px;
            border:2px solid black;
            display:flex;
            flex-direction:column;
            align-items:flex-start;
            justify-items: left;
            width:fit-content;
            height:fit-content;
            padding: 10px;
           
            
         }   

         #fields>input{
            margin: 2px 2px 2px 2px;
           
            font-size: 24px;
         }   
         #div2>input{
            margin: 2px 2px 4px 2px;
           
            font-size: 24px;
         }  
        </style>
    </head>
    <body>
        
        <form>
            <div id="fields">
            <input type=text placeholder="Email or Mobile" autofocus required /><br>
            <div id="div2">
                <input id="pswd" type=password placeholder="Password" required />
                <img  id="vis" onclick="myFunction()" src="./invisible.png" title="Click to show/hide password"width="20px" height="20px">
            </div>
            <input type="submit" value="Login"/><br>
            <input type="button" value="Register"  onclick="register()"/>
        </div>
        </form>
    </body>
</html>