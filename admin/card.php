<?php include 'header.php';?>

<div class="content-wrap"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
        <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
        <main id="content" class="content" role="main">
            <!-- Page content -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">YOU ARE HERE</li>
            <li class="breadcrumb-item active">UI Card</li>
        </ol>
        <h1 class="page-title">Cards - <span class="fw-semi-bold">Examples</span></h1>
        <p class="mb-lg">A card is a flexible and extensible content container. It includes options for headers and footers, 
            a wide variety of content, contextual background colors, and powerful display options. If you’re 
            familiar with Bootstrap 3, cards replace its old panels, wells, and thumbnails. Similar functionality 
            to those components is available as modifier classes for cards.</p>
        <div class="row">
            <div class="col-12">
                <div class="card mb-xlg text-white" style="overflow: hidden;">
                    <div class="card-img-bg" style="background-image: url(../img/lifestyle.jpg)">
                        <span>13 Mar</span>
                        <h3 class="mt-lg">Lifestyle brand</h3>
                        <p class="w-75">A lifestyle brand is a company that markets its products or services to embody the 
                            interests, attitudes, and opinions of a group or a culture. Lifestyle brands 
                            seek to inspire, guide, and motivate people, with the goal of their products 
                            contributing to the definition of the consumer's way of life.</p>
                        <a href="#" class="btn btn-danger btn-rounded-f mt-lg">Full Article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-xlg">
                    <img class="card-img-top" src="../img/isometric.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Isometric design</h4>
                        <p class="card-text">Isometric projection is a method for visually representing three-dimensional in two 
                            dimensions in technical and engineering drawings.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary btn-rounded-f">Full Article</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-xlg">
                    <div class="card-body">
                        <a href="#" class="fw-semi-bold text-success">Avg Rating</a>
                        <a href="#" class="fw-semi-bold text-muted ml-sm">All Time</a>
                        <hr>
                        <div class="d-flex justify-content-between mb-lg">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="text-muted"><small>342 REVIEWS</small></span>
                        </div>
                        <div class="mb-lg">
                            <h3 class="text-success mb-0">69%</h3>
                            of customers recomend this product
                        </div>
                        <a href="#" class="btn btn-success btn-rounded-f">Write a Review</a>
                    </div>
                </div>
                <div class="card mb-xlg">
                    <div class="d-flex align-items-start" style="position: relative;">
                        <img class="card-img-top" src="../img/mountains.jpeg" alt="Card image cap">
                        <div class="bg-success text-white mt-lg" style="position: absolute;">&nbsp;New&nbsp;</div>
                    </div>
                    <div class="card-body">
                        <h4>Weekly Inspiration</h4>
                        <hr>
                        <p>There are at least 109 mountains on Earts with elevations greeter than 7,200 meters</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-xlg">
                     <img class="card-img-top" src="../img/rns.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="text-muted mb-sm"><small>Technology</small></p>
                        <h4 class="mb-lg">React Native Starter</h4>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0 text-muted fw-semi-bold">from $49.95</p>
                            <a href="#" class="btn btn-info">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <footer class="content-footer hidden-print">
                Sing App - Bootstrap 4.2.1 Admin Dashboard Template - Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank">Flatlogic</a>
            </footer>
        </main>
    </div>

<?php include 'footer.php';?>