<?php 
    include("connection.php");
    include("login.php");
    include("user_login.php");

 ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <style>
        body {
            background-image: url('img/img3.avif');
            background-size: cover;
            background-position: center;
            height: 50vh;
            background-repeat: no-repeat;
        }
    
        #form{
            display: inline-block;
            background-color: #b8bbe7;
            width:25%;
            height: 80%;
            border-radius: 4px;
            margin:80px 110px 60px;
            padding:50px;
            box-shadow: 10px 10px 5px rgb(82, 11, 77);
        }

        #btn1{
            color:rgb(255, 255, 255);
            background-color: #ce4404;
            padding:10px;
            font-size: large;
            border-radius: 10px;
        }
        #btn1:hover{
        color: white;
        background: green;
        }

        .btn{
        margin: 0px;
        padding: 13px 15px;
        background: #37d09e;
        cursor: pointer;
        text-decoration: none;
        font-weight: bold;
        border-radius: 10px;
    }

    </style>

    <body>
        
        <div id="form">
            <h1>Admin Login</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn1" value="Login" name = "submit"/>
            </form>
        </div>

        <div id="form">
            <h1>User Login</h1>
            <form name="form" action="user_login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn1" value="Login" name = "submit"/>
                <!-- <input type="submit" id="btn1" value="SignUp" name = "submit"/> -->
                <button class="btn"><a href="/hall management system/reg.php" style="text-decoration: none;">Sign Up</a></button>

            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>