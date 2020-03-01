<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/20200129_154329_0000.png">
    <title>bariS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5ac1dba0a5.js" crossorigin="anonymous"></script>
    <style>
        .logo {
            box-shadow: 0px 1px 2px 1px orangered;
        }

        .navs i {
            font-size: 20px;
            color: blue;
        }

        .icon i {
            font-size: 25px;
            color: orangered;
        }

        .carousel-item img {
            height: 55vh;
        }




        @media (min-width: 768px) {
            .book {
                display: none;
            }

            .icon i {
                font-size: 30px;
            }


        }

        @media (max-width: 768px) {
            .btn-login button {
            display: none;
        }


        }
        

    </style>

</head>

<body>
    <cimiko>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img class="logo" src="img/20200129_154329_0000.png" alt="Image Error" width="50px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link navs" href="#"><i class="fas fa-home"></i> Home <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link navs" href="#"><i class="fas fa-store"></i> Restaurant</a>
                        <a class="nav-item nav-link navs" href="#"><i class="fas fa-phone-volume"></i> Contact US</a>
                        <div class="btn-login">
                            <a href="#"><button type="button" name="login">Login</button></a></div>
                        <a class="nav-item nav-link icon" href="#"><i class="fas fa-shopping-bag"></i> <span
                                class="book">Booking</span></a>
                    </div>
                </div>
            </nav>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.kumparan.com/image/upload/v1567740530/ahwz7nigkgn3uvrgkjth.jpg"
                            class="d-block w-100" alt="Ber-sabaR">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.kumparan.com/image/upload/v1567740530/ahwz7nigkgn3uvrgkjth.jpg"
                            class="d-block w-100" alt="Ber-sabaR">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.kumparan.com/image/upload/v1567740530/ahwz7nigkgn3uvrgkjth.jpg"
                            class="d-block w-100" alt="Ber-sabaR">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
    </cimiko>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>