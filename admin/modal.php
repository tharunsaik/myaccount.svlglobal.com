<?php include 'header.php';?>

<div class="content-wrap"><div class="pace  pace-inactive pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
        <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
        <main id="content" class="content" role="main">
            <!-- Page content -->
         <ol class="breadcrumb">
            <li class="breadcrumb-item">YOU ARE HERE</li>
            <li class="breadcrumb-item active">UI Modal</li>
        </ol>
        <h1 class="page-title">Components - <span class="fw-semi-bold">Bootstrap</span></h1>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Live <span class="fw-semi-bold">demo</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#" style="display: none;"><i class="la la-angle-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                            <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>

                        <!-- Buttons trigger modal -->
                       <div class="d-flex">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Demo
                            </button>
                            <button type="button" class="btn btn-primary ml-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                Vertically centered
                            </button>   
                            <button type="button" class="btn btn-primary ml-sm" data-toggle="modal" data-target="#exampleModalLong">
                                Scrolling long content
                            </button>
                       </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque minima sit, suscipit 
                                        quidem enim molestiae aut. Nesciunt, commodi non voluptas ipsum cumque dicta praesentium, a 
                                        aspernatur similique ullam tempora quam voluptatem modi repudiandae dolore sit quod at odio 
                                        quasi debitis eveniet. Praesentium vel in ullam neque vitae nemo cupiditate eaque.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque minima sit, suscipit 
                                        quidem enim molestiae aut. Nesciunt, commodi non voluptas ipsum cumque dicta praesentium, a 
                                        aspernatur similique ullam tempora quam voluptatem modi repudiandae dolore sit quod at odio 
                                        quasi debitis eveniet. Praesentium vel in ullam neque vitae nemo cupiditate eaque.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque minima sit, suscipit 
                                        quidem enim molestiae aut. Nesciunt, commodi non voluptas ipsum cumque dicta praesentium, a 
                                        aspernatur similique ullam tempora quam voluptatem modi repudiandae dolore sit quod at odio 
                                        quasi debitis eveniet. Praesentium vel in ullam neque vitae nemo cupiditate eaque.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque minima sit, suscipit 
                                        quidem enim molestiae aut. Nesciunt, commodi non voluptas ipsum cumque dicta praesentium, a 
                                        aspernatur similique ullam tempora quam voluptatem modi repudiandae dolore sit quod at odio 
                                        quasi debitis eveniet. Praesentium vel in ullam neque vitae nemo cupiditate eaque.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque minima sit, suscipit 
                                        quidem enim molestiae aut. Nesciunt, commodi non voluptas ipsum cumque dicta praesentium, a 
                                        aspernatur similique ullam tempora quam voluptatem modi repudiandae dolore sit quod at odio 
                                        quasi debitis eveniet. Praesentium vel in ullam neque vitae nemo cupiditate eaque.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque minima sit, suscipit 
                                        quidem enim molestiae aut. Nesciunt, commodi non voluptas ipsum cumque dicta praesentium, a 
                                        aspernatur similique ullam tempora quam voluptatem modi repudiandae dolore sit quod at odio 
                                        quasi debitis eveniet. Praesentium vel in ullam neque vitae nemo cupiditate eaque.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="widget mt-xlg">
                    <header>
                        <h5>
                            Optional  <span class="fw-semi-bold">sizes</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#" style="display: none;"><i class="la la-angle-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                            <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p>Modals have two optional sizes, available via modifier <code>.modal-sm</code> and <code>.modal-lg</code> classes to be placed on a 
                            <code>.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>

                         <!-- Buttons -->
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                            <button type="button" class="btn btn-primary ml-sm" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                        </div>

                        <!-- Large modal -->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Large modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, illum harum? Quidem, quisquam, natus repellat debitis veniam quia facilis 
                                        magni tempora cupiditate odio vitae? Eligendi nisi consequuntur vero tenetur nemo!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Small modal -->
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Small modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, illum harum? Quidem, quisquam, natus repellat debitis veniam quia facilis 
                                        magni tempora cupiditate odio vitae? Eligendi nisi consequuntur vero tenetur nemo!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>
                            Using <span class="fw-semi-bold">grid</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#" style="display: none;"><i class="la la-angle-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                            <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                    <p>Utilize the Bootstrap grid system within a modal by nesting <code>.container-fluid</code> within the <code>.modal-body</code>. 
                        Then, use the normal grid system classes as you would anywhere else.</p>
                    <div class="bg-light p-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalGrid">
                            Launch
                        </button>
                        <pre class="bg-light text-info mb-0 mt-xs">&lt;div <span class="text-primary">class=</span><span class="text-danger">"modal-body"</span>&gt;
    &lt;div <span class="text-primary">class=</span><span class="text-danger">"container-fluid"</span>&gt;
        &lt;div <span class="text-primary">class=</span><span class="text-danger">"row"</span>&gt;
            &lt;div <span class="text-primary">class=</span><span class="text-danger">"col-md-4"</span>&gt;<span class="text-dark">.col-md-4</span>&lt;/div&gt;
            &lt;div <span class="text-primary">class=</span><span class="text-danger">"col-md-4 ml-auto"</span>&gt;<span class="text-dark">.col-md-4 .ml-auto</span>&lt;/div&gt;
        &lt;/div&gt;
        &lt;div <span class="text-primary">class=</span><span class="text-danger">"row"</span>&gt;
            &lt;div <span class="text-primary">class=</span><span class="text-danger">"col-md-3 ml-auto"</span>&gt;<span class="text-dark">.col-md-4</span>&lt;/div&gt;
            &lt;div <span class="text-primary">class=</span><span class="text-danger">"col-md-4 ml-auto"</span>&gt;<span class="text-dark">.col-md-4 .ml-auto</span>&lt;/div&gt;
        &lt;/div&gt;
        &lt;div <span class="text-primary">class=</span><span class="text-danger">"row"</span>&gt;
            &lt;div <span class="text-primary">class=</span><span class="text-danger">"col-md-6 ml-auto"</span>&gt;<span class="text-dark">.col-md-6 .ml-auto</span>&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre></div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalGrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalGridTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalGridTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid text-white">
                                    <div class="row">
                                        <div class="col-md-4"><div class="h-100 w-100 bg-primary p-2">.col-md-4</div></div>
                                        <div class="col-md-4 ml-auto"><div class="h-100 w-100 bg-primary p-2">.col-md-4 .ml-auto</div></div>
                                    </div>
                                    <div class="row mt-sm">
                                        <div class="col-md-3 ml-auto"><div class="h-100 w-100 bg-primary p-2">.col-md-3 .ml-auto</div></div>
                                        <div class="col-md-4 ml-auto"><div class="h-100 w-100 bg-primary p-2">.col-md-4 .ml-auto</div></div>
                                    </div>
                                    <div class="row mt-sm">
                                        <div class="col-md-6 ml-auto"><div class="h-100 w-100 bg-primary p-2">.col-md-6 .ml-auto</div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div></section>
            </div>
        </div>
            <footer class="content-footer hidden-print">
                Sing App - Bootstrap 4.2.1 Admin Dashboard Template - Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank">Flatlogic</a>
            </footer>
        </main>
    </div>

<?php include 'footer.php';?>