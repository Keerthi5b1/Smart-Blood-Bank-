<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website design - Smart Blood Bank</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,300;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<style>
    .bgig {
height:100vh;
width: 100%;
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)),url("data:image/jpeg;base64,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");
background-position: center;
background-size: cover;
overflow-x:hidden;
position: relative;
background-repeat: no-repeat;
background-attachment: fixed;
}
</style>
</head>
<body>
<div class="bgig">
    
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    
                    <li><a href="#"><b>HOME</a></b></li>
                    <li><a href="about.php"><b>ABOUT</b></a></li>
                    <li><a href="contact.php"><b>CONTACT</b></a></li>
                    <li><a href="pateintrreg.php"><b>REGISTER</b></a></li>
                    <li><a href="login.php"><b>LOGIN</b></a></li>
                </ul>
            </div>
           
        </nav>
    <div class="text-box">
    <h1>Welcome To Smart Blood Bank</h1>
    <p class="quote">Helping one person might not change the world, but it could change the <br>world for one person </p>
     </div>
</div>

    
</body>
</html>