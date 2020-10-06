<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Acheivements</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            color: blue;
            font-weight: bolder;
            font-family: monospace;

        }

        .records {
            background-color: lightcoral;
        }

        .runs {
            background: linear-gradient(to right, red, blue);
            justify-content: center;
            align-content: center;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .wickets {
            background: linear-gradient(to left, red, blue);
            justify-content: center;
            align-content: center;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
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
                                <a class="nav-link" href="records.php">Acheivements</a>
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
        </header>
    </div>
    <section>
        <div class="runs">
            <h1>Highest run scorer</h1>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="col-md-4">
                            <img data-aos="fade-right" data-aos-duration="1200" src="./images/vk.jpg" style="width:400px;height:300px;">
                        </div>
                    </div>
                    <div class=" flip-card-back">
                        <h1>VIRAT KOHLI</h1>
                        <p>5428 Runs</p>
                        <p>From 175 Matches</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="wickets">
            <h1>Highest Wicket taker</h1>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="col-md-4">
                            <img data-aos="fade-left" data-aos-duration="1200" src="./images/yuz.jpeg" alt="Virat Kohli" style="width:400px;height:300px;">
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>YUZVENDRA CHAHAL</h1>
                        <p>140 Wickets</p>
                        <p>From 125 Matches</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>