<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styless.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
</head>

<style>
    body{
        margin: 0;
        padding: 0;
    }
    .wrapper{
        height: 100vh;
        background-image: url('img/img1.avif');
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }

    .banner{
        width: 700px;
        height: 420px;
        background: inherit;
        position: absolute;
        overflow: hidden;
        top:60%;
        left: 50%;
        border-radius: 5px;
        transform: translate(-50%,-50%);
    }
    .banner::before{
        width: 750px;
        height: 500px;
        content: '';
        position: absolute;
        top: -25px;
        left: -25px;
        bottom: 0;
        right: 0;
        background: inherit;
        box-shadow: inset 0 0 0 500px rgb(255, 255,255,0.2);
        filter: blur(5px);
    }
    .img-text{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
        width: 500px;
    }
    .img-text h2{
        color: rgb(54, 49, 49);
        font-family: 'Baloo Bhai 2', cursive;
        font-size: 60px;
    }

    .end{
        background-color:white;
        width: 100%;
        height: 300px;
    }
    .navbar a {
    background: #555555;
    color: white;
    display: block;
    font-weight: bold;
    font-size: 20px;
    font-family: 'Baloo Bhai 2', cursive;
    padding: 15px 42px;
    text-align: center;
    text-decoration: none;
    transition: all 0.25s ease;
}
.mid {
    /* border: 2px solid white; */
    display: block;
    width: 55%;
    margin: -63px auto;
    padding: 0px;
    font-family: 'Baloo Bhai 2', cursive;
    font-size: 17px;
}

</style>
<body>
    <header class="header">
        <div class="mid">
            <div class="navbar">
                <ul>
                    <li>
                        <a href="#" class="active">Home</a>
                    </li>
                    <li>
                        <a href="/hall management system/profile.html">Administration</a>
                    </li>
                    <li>
                        <a href="/hall management system/notice.php">Notice</a>
                    </li>
                    <li>
                        <a href="/hall management system/apply.php">Apply Now</a>
                    </li>
                    <li>
                        <a href="/hall management system/profile.html">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="enter-information">
            <button class="btn"><a href="/hall management system/index.php" style="text-decoration: none;">Log Out</a></button>
            <!-- <button class="btn">Search</button> -->
        </div>
    </header>
    <div class="wrapper">
        <div class="banner">
            <div class="img-text">
                <h2>Welcome to Sheikh Rehana Hall</h2>
            </div>
        </div>
    </div>
    <!-- <div class="end">
        <div class="team">
        <div class="team_member">
        <h3>1</h3>
        <p>After 8:00 PM student cannot entry into the hall</p>
        </div>

        <div class="team_member">
        <h3>2</h3>
        <p>Hall Festible held on July 30</p>
        </div>

        <div class="team_member">
        <h3>3</h3>
        <p >2018-19 Session Can applied for Room</p>
        </div>

        <div class="team_member">
        <h3>4</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, autem.</p>
        </div>
    </div> -->
</body>
</html>