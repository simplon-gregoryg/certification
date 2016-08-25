<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>album</title>
    </head>

    <?php include_once('../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("fonctions/librairie.php"); ?>

    <?php //sert a ajouter la class="active" dans le menu
        $page = "album";
    ?>

    <body>
        <?php include_once("includes/header.php"); ?>


        <!-- code corps de page ici -->

        <section id="portfolio">
            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2 class="title-one">Portfolio</h2>
                        <p>Voici un petit album photo retraçant notre petite escapade Simplon. </p>
                    </div>
                </div>

                <div class="portfolio-items">

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/1.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item jooma">
                        <div class="view efffect" >
                            <div class="portfolio-image">
                                <img src="images/portfolio/2.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/3.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item megento">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/4.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/5.jpg" alt="">
                            </div> <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/6.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/7.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item joomla">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/8.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/9.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/10.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item joomla">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/11.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item megento">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/12.jpg" alt="">
                            </div>
                            <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                                <a href="#" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                </div>
                <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
            </div>

        </section> <!--/#portfolio-->

        <?php include_once("includes/scripts.php"); ?>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>
