<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=0.1,user-scalable=no">
    <title>
        home page
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <link rel="stylesheet" href="style.css">
    <style>
        .para p {
            color: black;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: linear-gradient(to left, hsl(356, 100%, 64%), hsl(300, 80%, 54%));
        }

        .column {
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: linear-gradient(to left, hsl(256, 100%, 64%), hsl(300, 80%, 54%));
        }

        h1 {
            font-weight: bold;
            font-family: fantasy;
            background: linear-gradient(to right, hsl(356, 100%, 64%), hsl(300, 80%, 54%));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h2 {
            font-weight: bold;
            font-family: fantasy;
            color: greenyellow;
            justify-content: center;
            text-align: center;
        }



        .carousel-cell {
            width: 100px;
            height: 50px;
            margin-right: 10px;
            background: white;
            border-radius: 5px;
            counter-increment: gallery-cell;
        }

        .carousel-cell:before {
            display: block;
            text-align: center;
            content: counter(gallery-cell);
            line-height: 70px;
            font-size: 80px;
            color: white;
        }

        h3 {
            font-size: larger;
            font-weight: bolder;
            font-family: cursive;
            color: red;
        }



        .rcb2 {
            position: relative;
            width: 1100px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }



        .rcb2 .card {
            position: relative;
            width: 300px;
            height: 420px;
            background: white;
            margin: 20px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
        }

        .rcb2:hover .card {

            transform: scale(0.9);
            opacity: 0.3;
        }

        .rcb2 .card:hover {
            filter: blur(0px);
            transform: scale(1.1);
            opacity: 1;
        }

        .rcb2 .card .circle {
            position: relative;
            width: 100%;
            height: 100%;
            background: black;
            clip-path: circle(180px at center 0);
            text-align: center;
        }

        .rcb2 .card .circle h2 {
            color: white;
            font-size: 4.5em;
            padding: 30px 0;
        }

        .rcb2 .card .content1 {
            position: absolute;
            bottom: 10px;
            padding: 20px;
            text-align: center;
        }

        .rcb2 .card .content1 p {
            color: #666;
        }

        .rcb2 .card .content1 a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            background: #000;
            color: white;
            border-radius: 40px;
            text-decoration: none;
            margin-top: 20px;
        }

        .rcb2 .card:nth-child(1) .circle,
        .rcb2 .card:nth-child(1) .content1 a {
            background: rgb(248, 162, 3);
        }

        .rcb2 .card:nth-child(2) .circle,
        .rcb2 .card:nth-child(2) .content1 a {
            background: rgb(241, 17, 28);
        }

        .rcb2 .card:nth-child(3) .circle,
        .rcb2 .card:nth-child(3) .content1 a {
            background: rgb(7, 128, 128);
        }

        .rcb2 .card:nth-child(4) .circle,
        .rcb2 .card:nth-child(4) .content1 a {
            background: blue;
        }

        .rcb2 .card:nth-child(5) .circle,
        .rcb2 .card:nth-child(5) .content1 a {
            background: orange;
        }

        .rcb2 .card:nth-child(6) .circle,
        .rcb2 .card:nth-child(6) .content1 a {
            background: black;
        }

        .rcb2 .card:nth-child(7) .circle,
        .rcb2 .card:nth-child(7) .content1 a {
            background: green;
        }

        .rcb2 .card:nth-child(8) .circle,
        .rcb2 .card:nth-child(8) .content1 a {
            background: greenyellow;
        }



        .rcb {
            background: url(./images/a2.jpg);

        }

        .intro {
            background: url(./images1/play.jpg);

        }





        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }

        .flex ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;

        }

        .flex ul li {
            padding: 2rem;
            margin: 1rem;
            background-color: red;
            border-radius: 2px;
        }

        .flex ul li:hover {
            padding: 3rem;
            background-color: blue;
            border-radius: 3px;

        }





        .timer h2 {
            text-align: center;
            font-size: 10em;
            line-height: 0.7em;
            color: rgb(28, 211, 67);
            margin-top: 20px;

        }

        .timer h2 span {
            display: block;
            font-weight: 300;
            letter-spacing: 6px;
            font-size: 0.2em;

        }

        .countdown {
            display: flex;
            margin-top: 50px;
            justify-content: center;
            align-content: center;
        }

        .countdown div {
            position: relative;
            width: 100px;
            height: 100px;
            line-height: 100px;
            justify-content: center;
            text-align: center;
            background: rgb(187, 25, 25);
            color: #fff;
            margin: 0 15px;
            font-size: 3em;
            font-weight: 500;
        }

        .countdown div:before {
            content: '';
            position: absolute;
            bottom: -30px;
            left: 0;
            width: 100%;
            height: 35px;
            background: #ff0;
            color: #333;
            font-size: 0.35em;
            line-height: 35px;
            font-weight: 300;
        }

        .countdown #day:before {
            content: 'Days';
        }

        .countdown #hour:before {
            content: 'Hours';
        }

        .countdown #minute:before {
            content: 'Minutes';
        }

        .countdown #second:before {
            content: 'Seconds';
        }
    </style>
</head>

<body>
    <div class="fixed-top">
        <header class="topbar">
            <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
                <div class="container">

                    <a class="navbar-brand" style="text-transform: uppercase;"> RCB.COM</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">

                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="home.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="records.php">Achievements</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Sign up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?logout='1'">
                                    Logout
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

    </div>

    <section>

        <div class="intro">


            <div class="para">

                <h1><u>Welcome to the biggest IPL Franchise team.</u></h1><br>
                <p>The 2020 season will be the 13th season for the IPL cricket franchise Royal Challengers Bangalore. <br>
                    They will one of the eight teams compete in the tournament.<br>
                    The team is currently being captain by Virat Kohli with Simon Katich as team coach.</p>

            </div>


            <div class="youtube">
                <iframe width="300" height="315" src="https://www.youtube.com/embed/MNq2-PG-1jo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="column">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="./images/rcb-logo1.jpg" class="w-100" alt="logo">
                    </div>



                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="mt-0""><u>Know More about RCB</u></h3>
                        <p>The Royal Challengers Bangalore (often abbreviated as RCB) are a franchise cricket team based in Bangalore, Karnataka, that plays in the Indian Premier League (IPL). It was founded in 2008 by United Spirits and named after the company's liquor brand Royal Challenge. Since its inception, the team has played its home matches at the M. Chinnaswamy Stadium.</p>
                        <a href=" https://www.royalchallengers.com/" class="stretched-link">Click here for Main RCB Web</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="timer">
        <h2><span>CountDown </span>GANDHI JAYANTHI</h2>
        <div class="countdown">
            <div id="day">NA</div>
            <div id="hour">NA</div>
            <div id="minute">NA</div>
            <div id="second">NA</div>
        </div>

    </div>
    <script>
        var countDate = new Date("october 2,2020 00:00:00").getTime();

        function firstMatch() {
            var now = new Date().getTime();
            gap = countDate - now;

            var second = 1000;
            var minute = second * 60;
            var hour = minute * 60;
            var day = hour * 24;

            var d = Math.floor(gap / day);
            var h = Math.floor((gap % day) / hour);
            var m = Math.floor((gap % hour) / minute);
            var s = Math.floor((gap % minute) / second);

            document.getElementById("day").innerText = d;
            document.getElementById("hour").innerText = h;
            document.getElementById("minute").innerText = m;
            document.getElementById("second").innerText = s;
        }
        setInterval(function() {
            firstMatch();
        }, 1000);
    </script>


    <section>
        <div class="squad">
            <h1>Squad</h1>
            <div class="carousel" data-flickity='{ "autoPlay": 2000, "pauseAutoPlayOnHover": false }'>
                <div class="virat">
                    <img src="./images1/v-kohli.png" alt="virat" />
                    <h3>Virat Kohli</h3>
                </div>
                <div class="yuzi">
                    <img src="./images1/yuzi.png" alt="chahal" />
                    <h3>Yuzvendra chahal</h3>
                </div>
                <div class="ABD">
                    <img src="./images1/abde.png" alt="abde" />
                    <h3>AB devillers</h3>
                </div>
                <div class="Moeen">
                    <img src="./images1/Moeen front full.png" alt="mooen" />
                    <h3>Moeen Ali</h3>
                </div>
                <div class="DEV">
                    <img src="./images1/dev-p.png" alt="paddikal" />
                    <h3>Devdutt Padikkal</h3>
                </div>
                <div class="Finch">
                    <img src="./images1/Finch 800_1200.png" alt="finch" />
                    <h3>Aaron Finch</h3>
                </div>
                <div class="isuru">
                    <img src="./images1/isuru.png" alt="udana" />
                    <h3>Isuru Udana</h3>
                </div>
                <div class="pavan">
                    <img src="./images1/pavan.png" alt="deshpande  " />
                    <h3>Pavan Deshpande</h3>
                </div>
                <div class="phili">
                    <img src="./images1/phili.png" alt="joshi" />
                    <h3>Josh Philippe</h3>
                </div>
                <div class="partiv">
                    <img src="./images1/pp.png" alt="partiv" />
                    <h3>Partiv Patel</h3>
                </div>
                <div class="Shabaz">
                    <img src="./images1/shahbaz.png" alt="ahmed" />
                    <h3>Shabaz Ahmed</h3>
                </div>
                <div class="shivam">
                    <img src="./images1/shivam-dube.png" alt="shivam" />
                    <h3>Shivam Dube</h3>
                </div>
                <div class="Steyn">
                    <img src="./images1/steyn.png" alt="steyn" />
                    <h3>Dale Steyn</h3>
                </div>
                <div class="gm">
                    <img src="./images1/gm.png" alt="mann" />
                    <h3>Gurpreet Mann Singh</h3>
                </div>
                <div class="div class siraj">
                    <img src="./images1/md-siraj.png" alt="siraj" />
                    <h3>Mohammed Siraj</h3>
                </div>
                <div class="negi">
                    <img src="./images1/negi.png" alt="pavan" />
                    <h3>pavan negi</h3>
                </div>
                <div class="saini">
                    <img src="./images1/nsaini.png" alt="saini" />
                    <h3>Navdeep Saini</h3>
                </div>
                <div class="morris">
                    <img src="./images1/tipo-morris.png" alt="morris" />
                    <h3>Chris Morriss</h3>
                </div>
                <div class="umi">
                    <img src="./images1/umi.png" alt="umesh" />
                    <h3>Umesh Yadav</h3>
                </div>
                <div class="washi">
                    <img src="./images1/washi.png" alt="washington" />
                    <h3>Washington Sundar</h3>
                </div>

            </div>
        </div>
    </section>
    <div class="rcb">

        <div class="rcb2 col-12">


            <div class="card">
                <div class="circle">
                    <h2>Finch</h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-140</h5>
                    <h5>Matches-87</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                    <h2>Steyn</h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-80</h5>
                    <h5>Matches-100</h5>
                    <h5>Wickets-140</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                    <h2>Udana</h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-140</h5>
                    <h5>Matches-40</h5>
                    <h5>Wickets-45</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                    <h2>Zampa</h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-90</h5>
                    <h5>Matches-80</h5>
                    <h5>Wickets-97</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                    <h2>Shabaz </h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-120</h5>
                    <h5>Domestic Matches-70</h5>
                    <h5>Wickets-80</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                    <h2>Philipe</h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-150</h5>
                    <h5> BBL Matches-40</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                    <h2>Morris</h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-140</h5>
                    <h5>Matches-80</h5>
                    <h5>Wickets-90</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                    <h2>Pavan</h2>
                </div>
                <div class="content1">
                    <h5>Strike rate-130</h5>
                    <h5> Domestic Matches-40</h5>
                    <a href="#">Read more</a>
                </div>
            </div>

        </div>

    </div>

    <div class="top">
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </button>

        <script>
            var mybutton = document.getElementById("myBtn");


            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </div>

    <footer>

        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="login.php">Login</a>
        <a href="contact.php">Contact</a>
        <a href="signup.php">Sign up</a>

        <div class="flex">
            <ul>
                <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                <li><i class="fa fa-github" aria-hidden="true"></i></li>
                <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
            </ul>
            <p>&copy Copyright to Abhilash D G -2020</p>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>