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
            <li class="breadcrumb-item active">UI Badge</li>
        </ol>
        <h1 class="page-title">Badge</h1>
        <div class="row">
            <div class="col-md-8">
                <section class="widget">
                    <header>
                        <h5>
                            Badge <span class="fw-semi-bold">Example</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#" style="display: none;"><i class="la la-angle-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                            <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p>Badges scale to match the size of the immediate parent element by using relative font sizing and em units.</p>
                        <h1>Example heading <span class="badge badge-primary">Primary</span></h1>
                        <h2>Example heading <span class="badge badge-info">Info</span></h2>
                        <h3>Example heading <span class="badge badge-warning">Warning</span></h3>
                        <h4>Example heading <span class="badge badge-success">Success</span></h4>
                        <h5>Example heading <span class="badge badge-danger">Danger</span></h5>
                        <h6>Example heading <span class="badge badge-secondary">Secondary</span></h6>
                        <p class="mt-lg">Badges can be used as part of links or buttons to provide a counter.</p>
                        <button type="button" class="btn btn-primary">
                            Notifications <span class="badge badge-danger">4</span>
                        </button>
                    </div>
                </section>
            </div>
            <div class="col-md-8">
                <section class="widget">
                    <header>
                        <h5>
                            Pill <span class="fw-semi-bold">Badges</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#" style="display: none;"><i class="la la-angle-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                            <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                    <p>Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger 
                        border-radius and additional horizontal padding).</p>
                    <span class="badge badge-pill badge-primary">Primary</span>
                    <span class="badge badge-pill badge-secondary">Secondary</span>
                    <span class="badge badge-pill badge-success">Success</span>
                    <span class="badge badge-pill badge-danger">Danger</span>
                    <span class="badge badge-pill badge-warning">Warning</span>
                    <span class="badge badge-pill badge-info">Info</span>
                    <span class="badge badge-pill badge-light">Light</span>
                    <span class="badge badge-pill badge-dark">Dark</span>
                    </div>
                </section>
            </div>
            <div class="col-md-8">
                <section class="widget">
                    <header>
                        <h5>
                            Links
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#" style="display: none;"><i class="la la-angle-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                            <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                    <p>Using the contextual <code>.badge-*</code> classes on an <code>&lt;a&gt;</code> element quickly 
                        provide actionable badges with hover and focus states.</p>
                    <a href="#" class="badge badge-primary">Primary</a>
                    <a href="#" class="badge badge-secondary">Secondary</a>
                    <a href="#" class="badge badge-success">Success</a>
                    <a href="#" class="badge badge-danger">Danger</a>
                    <a href="#" class="badge badge-warning">Warning</a>
                    <a href="#" class="badge badge-info">Info</a>
                    <a href="#" class="badge badge-light">Light</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    </div>
                </section>
            </div>
        </div>
            <footer class="content-footer hidden-print">
                Sing App - Bootstrap 4.2.1 Admin Dashboard Template - Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank">Flatlogic</a>
            </footer>
        </main>
    </div>

<?php include 'footer.php';?>