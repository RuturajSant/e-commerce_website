<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | E-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./css/style.css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
 <div class="ef-carousel">
  <!--  Each carousel on the page needs to have an unique name  -->
  <input type="radio" name="unique-name" id="unique-name-1" checked class="ef-carousel__state"/>
  <input type="radio" name="unique-name" id="unique-name-2" class="ef-carousel__state"/>
  <input type="radio" name="unique-name" id="unique-name-3" class="ef-carousel__state"/>
  <div class="ef-carousel__items">
    <img src="img/caro1.jpg" alt="" class="ef-carousel__item"/>
    <img src="img/caro2.jpg" alt=" " class="ef-carousel__item" />
    <img src="img/caro3.jpg" alt="" class="ef-carousel__item" />
  </div>
  <div class="ef-carousel__next-group">
    <label for="unique-name-2" class="ef-carousel__next"></label>
    <label for="unique-name-3" class="ef-carousel__next"></label>
    <label for="unique-name-1" class="ef-carousel__next"></label>
  </div>
  <div class="ef-carousel__prev-group">
    <label for="unique-name-3" class="ef-carousel__prev"></label>
    <label for="unique-name-2" class="ef-carousel__prev"></label>
    <label for="unique-name-1" class="ef-carousel__prev"></label>
  </div>
  <div class="ef-carousel__dots">
    <label for="unique-name-1" class="ef-carousel__dot"></label>
    <label for="unique-name-2" class="ef-carousel__dot"></label>
    <label for="unique-name-3" class="ef-carousel__dot"></label>
  </div>
</div>
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online Mobile Store</h1>
                            <h4><p>Flat &nbsp;&#8377;2,000&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:#013645">Choose&nbsp;&nbsp;From&nbsp;&nbsp;wide&nbsp;&nbsp;ranges&nbsp;&nbsp;of&nbsp;&nbsp;brands</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#ios">
                               <div class="thumbnail">
                                    <img src="./img/iphonex.png" alt="iphone x" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                    <img src="./img/samsungnote8plus.png" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>Samsung</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/op5t.png" alt="oneplus" >
                                        <div class="caption">
                                            <h3>OnePlus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#xiaomi">
                               <div class="thumbnail">
                                    <img src="./img/mimix2.png" alt="mi mix 2" >
                                        <div class="caption">
                                            <h3>Xioami</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>

            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
