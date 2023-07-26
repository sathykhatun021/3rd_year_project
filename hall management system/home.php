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
        color: rgb(141 83 7);
        font-family: 'Baloo Bhai 2', cursive;
        font-size: 60px;
    }

    .end{
        background-color:white;
        width: 100%;
        height: 300px;
    }
    .btn {
    margin: 0px;
    padding: 15px 15px;
    background: rgb(205, 203, 203);
    cursor: pointer;
    text-decoration: none;
    font-weight: bold;
    border-radius: 10px;
}
.navbar a {
    background: #555555;
    color: white;
    display: block;
    font-weight: bold;
    font-size: 20px;
    font-family: 'Baloo Bhai 2', cursive;
    padding: 17px 40px;
    text-align: center;
    text-decoration: none;
    transition: all 0.25s ease;
}
.mid {
    /* border: 2px solid white; */
    display: block;
    width: 75%;
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
                    <li><a href="#" class="active">Home</a></li>
                    <li> <a href="">Student</a>
                        <ul id="subnav">
                            <li><a href="/hall management system/Student/insert_student.php">Entry New student</a></li>
                            <li><a href="/hall management system/Student/student.php">Update & Delete student</a></li>
                            <li><a href="/hall management system/Student/details_student.php">Student Details</a></li>
                        </ul>
                    </li>
                    <li><a href="">Room</a>
                        <ul id="subnav">
                            <li><a href="/hall management system/Room/insert_room.php">Add new Room</a></li>
                            <li><a href="/hall management system/Room/room.php">Update & Delete Room</a></li>
                            <li><a href="/hall management system/Room/allot_room.php">Allot Room</a></li>
                            <li><a href="/hall management system/Room/vacating.php">Vacating Seat</a></li>
                        </ul>
                    </li>
                    <li><a href="/hall management system/Payment/jan.php">Payment</a>
                    </li>
                    <li><a href="/hall management system/profile.html">Administration</a>
                    </li>
                    <li><a href="/hall management system/Notice/add_notice.php">Notice Board</a></li>
                    <li><a href="/hall management system/applier.php">Applier</a></li>
                </ul>
            </div>
        </div>
        <div class="enter-information">
            <button class="btn"><a href="/hall management system/index.php" style="text-decoration: none;">Log Out</a></button>
            <button class="btn"> <a href="/hall management system/search.php" style="text-decoration: none;">Search</a></button>
        </div>
    </header>
    <div class="wrapper">
        <div class="banner">
            <div class="img-text">
                <h2>WELCOME TO SHEIKH REHANA HALL</h2>
            </div>
        </div>
    </div>
    
</body>
</html>