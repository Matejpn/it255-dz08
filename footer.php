<div class="slika">
        <img src="images/more.jpg" class="img-fluid" alt="Responsive image">
    </div>


    <div class="row text-center">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/letovanje.jpg" width="400" height="300">
                <p><strong>LETOVANJA</strong></p>

                <a href="letovanje.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Procitaj vise</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/zimovanje.jpg" width="400" height="300">
                <p><strong>ZIMOVANJA</strong></p>
                <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Procitaj vise</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/avanture.jpg" width="400" height="300">
                <p><strong>AVANTURE</strong></p>

                <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Procitaj vise</a>
            </div>
        </div>
    </div>

    <section id="lokacija">
        <h1>Lokacija</h1>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {
                    lat: 43.861477,
                    lng: 21.422272
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXJjSFSBmK7Ri7BdU48FRQmEsGR988AJM&callback=initMap">
        </script>
    </section>

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