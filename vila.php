<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="icon" href="images/palm-tree.png">
    <title>Petrovic Travel</title>




</head>

<body class="paralia-bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img id="logo" src="images/palm-tree.png" alt="">

            </a>
            <h3>Petrović Travel</h4>


                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Početna
                                                            <span class="sr-only">(current)</span>
                                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">O nama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ponude</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galerija</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontakt</a>
                        </li>
                    </ul>

                </div>
        </div>
    </nav>

    <div class="container single-shop">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/vilaEfi.jpg" height="300px" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/vilaEfi2.jpg" height="300px" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/vilaEfi3.jpg" height="300px" alt="Third slide">
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
            </div>
            <div class="col-md-4	 details">
                <h1 class="title">Vila Efi</h1>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ipsum dicta ea pariatur quam, similique ducimus sunt sapiente velit vero ullam dolorum optio quaerat minima vel voluptatum iure commodi odit!
                </p>
                <p class="price"><i class=""></i>285$</p>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div class="container shop">
        <div class="proizvod">
            <h1 class="display-4">Rezervisi</h1>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Ime</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Ime">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Prezime</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Prezime">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Adresa</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Adresa">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Email</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Email">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Grad</label>
                    <input type="text" class="form-control" id="Grad">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Država</label>
                    <select id="inputState" class="form-control">
          <option selected>Izaberi</option>
          <option>Beograd</option>
          <option>Novi Sad</option>
          <option>Užice</option>
          <option>Nova Varoš</option>
          <option>Subotica</option>
          <option>Zrenjanin</option>
          <option>Čačak</option>
                        
        </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
          Siguran sam
        </label>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Kupi</button>
        </form>

        <footer class="page-footer font-small mdb-color lighten-3 pt-4 mt-4">

            <!--Footer Links-->
            <div class="container text-center text-md-left">
                <div class="row my-4">

                    <!--First column-->
                    <div class="col-md-4 col-lg-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold">Footer Content</h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum. </p>
                    </div>
                    <!--/.First column-->

                    <hr class="clearfix w-100 d-md-none">

                    <!--Second column-->
                    <div class="col-md-2 col-lg-2 ml-auto">
                        <h5 class="text-uppercase mb-4 font-weight-bold">About</h5>
                        <ul class="list-unstyled">
                            <p>
                                <a href="#!">PROJECTS</a>
                            </p>
                            <p>
                                <a href="#!">ABOUT US</a>
                            </p>
                            <p>
                                <a href="#!">BLOG</a>
                            </p>
                            <p>
                                <a href="#!">AWARDS</a>
                            </p>
                        </ul>
                    </div>
                    <!--/.Second column-->

                    <hr class="clearfix w-100 d-md-none">

                    <!--Third column-->
                    <div class="col-md-4 col-lg-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold">Address</h5>
                        <!--Info-->
                        <p>
                            <i class="fa fa-home mr-3"></i> Dostojevskog 1, Paracin</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> petrovictravel@gmail.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> +381 444 222</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!--/.Third column-->

                    <hr class="clearfix w-100 d-md-none">

                    <!--Fourth column-->
                    <div class="col-md-2 col-lg-2 text-center">
                        <h5 class="text-uppercase mb-4 font-weight-bold">Follow Us</h5>
                        <!--Social buttons-->
                        <div class="mt-2">
                            <!--Facebook-->
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <!--/.Fourth column-->

                </div>
            </div>

            <!--Copyright-->
            <div class="footer-copyright py-3 text-center">
                © 2018 Copyright:
                <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> PetrovicTravel.com </a>
            </div>
            <!--/Copyright-->

        </footer>

</body>

</html>