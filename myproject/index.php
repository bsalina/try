<?php
if (isset($_SESSION["email_id"])) {
    header("location: products.php");
}

require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LifeStyle Stores</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="index.css">
    </head>

    <body>
        <?php
        require './includes/header.php';
        ?>
        <section>
           
                <div class="container">
                     <div id="banner-image">
                    <div id="banner_content">
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF</p>
                        <a href="products.php">
                            <button class="btn btn-danger btn-lg active">Shop Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class="container">
            <h2>SHOP WITH US</h2>  
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/11.jpg" class="img-fluid" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/3.jpg" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/2.jpg" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br>
        <section>
            <div class="container">

                <div class="row">
                    <div class="cont">
                        <div class="col-md-4 pd-4">
                            <div class="thumbnail">
                                <a href="products.php">
                                    <img src="images/c1.jpeg" alt="Lights" style="width:600px" class="image">
                                    <div class="overlay">
                                        <div class="text">CANON</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <div class="col-md-4 pd-4">
                            <div class="thumbnail">
                                <a href="products.php">
                                    <img src="images/c2.jpg" alt="Nature" style="width:300px">
                                    <div class="overlay">
                                        <div class="text">NIKON!</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <div class="col-md-4 pd-4">
                            <div class="thumbnail">
                                <a href="products.php">
                                    <img src="images/2.jpg" alt="Fjords" style="width:300px">
                                    <div class="overlay">
                                        <div class="text">SONY</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
        require './includes/footer.php';
        ?>
    </body>
</html>