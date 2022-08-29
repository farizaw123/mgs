<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="icon" href="./assets/img/mgs.ico">
    <link rel="stylesheet" href="./assets/css/style-navbar.css">
    <script src="./assets/js/script.js"></script>
</head>
<body>
    <section id="header">
        <nav id="main-nav">
            <div class="logoNav">
                <a href="homepage.php"><img src="assets/img/mgs1.png" alt="Mega Giga Solusindo"></a>
            </div>
            <a href="homepage.php">Home</a>
            <a href="about.php">About</a>
            <a href="career.php">Career</a>
            <a class="btn" href="#">Learn More</a>
        </nav>
    </section>
    <script src="../assets/js/script.js"></script>
    <script>
        window.onscroll = function(){myFunction()};

        var header = document.getElementById("header");
        var sticky = header.offsetTop;

        function myFunction(){
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                header.classList.add("nav-sticky");
            } else {
                header.classList.remove("sticky");
                header.classList.remove("nav-sticky");
            }
        }
    </script>
</body>