<?php include 'header.php';?>

<div class="content-wrap"><div class="pace  pace-inactive pace-inactive pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
        <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
        <main id="content" class="content" role="main">
            <!-- Page content -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">YOU ARE HERE</li>
            <li class="breadcrumb-item active">UI Carousel</li>
        </ol>
        <p>The carousel is a slideshow for cycling through a series of content, built with CSS 3D 
            transforms and a bit of JavaScript. It works with a series of images, text, or custom 
            markup. It also includes support for previous/next controls and indicators.</p>
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../img/slides/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/slides/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/slides/3.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

            <footer class="content-footer hidden-print">
                Sing App - Bootstrap 4.2.1 Admin Dashboard Template - Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank">Flatlogic</a>
            </footer>
        </main>
    </div>

<?php include 'footer.php';?>