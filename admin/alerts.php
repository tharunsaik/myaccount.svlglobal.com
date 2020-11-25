<?php include 'header.php';?>

<div class="content-wrap"> 
	<!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
	<main id="content" class="content" role="main">
            <!-- Page content -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">YOU ARE HERE</li>
            <li class="breadcrumb-item active">UI Alerts</li>
        </ol>
        <h1 class="page-title">Alerts</h1>
          <div class="row">
              <div class="col-md-8">
                <section class="widget">
                  <header>
                      <h5>
                          Alert <span class="fw-semi-bold">Messages</span>
                      </h5>
                      <div class="widget-controls">
                          <a data-widgster="expand" title="Expand" href="#"><i class="la la-angle-up"></i></a>
                          <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                          <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                      </div>
                  </header>
                  <div class="widget-body">
                    <p>Alerts are available for any length of text, as well as an optional dismiss button.</p>
                      <div class="alert alert-success alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Success:</span> You successfully read this important alert message.
                      </div>
                      <div class="alert alert-info alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Info:</span> This alert needs your attention, but it's not super important.
                      </div>
                      <div class="alert alert-warning alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Warning:</span> Best check yo self, you're not looking too good.
                      </div>
                      <div class="alert alert-danger alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Danger:</span> Change this and that and try again.
                          <a class="btn btn-default btn-xs float-md-right mr" href="#">Ignore</a>
                          <a class="btn btn-danger btn-xs float-md-right mr-xs" href="#">Take this action</a>
                      </div>
                  </div>
              </section>
            </div>
            <div class="col-md-8">
              <section class="widget">
                <header>
                    <h5>
                        Transparent <span class="fw-semi-bold">Alerts</span>
                    </h5>
                    <div class="widget-controls">
                        <a data-widgster="expand" title="Expand" href="#"><i class="la la-angle-up"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                        <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                    </div>
                </header>
                <div class="widget-body">
                  <p>Transparent alerts are also available by adding <code>.alert-transparent</code> class.</p>
                    <div class="alert alert-success alert-transparent">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span class="fw-semi-bold">Success:</span> You successfully read this important alert message.
                    </div>
                    <div class="alert alert-info alert-transparent alert-sm">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span class="fw-semi-bold">Info:</span> This alert needs your attention, but it's not super important.
                        <a class="btn btn-default btn-xs float-md-right mr" href="#">Ignore</a>
                        <a class="btn btn-info btn-xs float-md-right mr-xs" href="#">Take this action</a>
                    </div>
                    <div class="alert alert-warning alert-transparent alert-sm">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span class="fw-semi-bold">Warning:</span> Best check yo self, you're not looking too good.
                    </div>
                    <div class="alert alert-danger alert-transparent alert-sm">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span class="fw-semi-bold">Danger:</span> Change this and that and try again.
                    </div>
                </div>
              </section>
            </div>
            <div class="col-md-8">
                <section class="widget">
                  <header>
                      <h5>
                          Rounded <span class="fw-semi-bold">Alerts</span>
                      </h5>
                      <div class="widget-controls">
                          <a data-widgster="expand" title="Expand" href="#"><i class="la la-angle-up"></i></a>
                          <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                          <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                      </div>
                  </header>
                  <div class="widget-body">
                    <p>Rounded alerts are available by adding <code>.alert-rounded</code> class.</p>
                      <div class="alert alert-success alert-transparent alert-rounded alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Success:</span> You successfully read this important alert message.
                      </div>
                      <div class="alert alert-info alert-rounded alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Info:</span> This alert needs your attention, but it's not super important.
                          <a class="btn btn-default btn-xs float-md-right mr" href="#">Ignore</a>
                          <a class="btn btn-info btn-xs float-md-right mr-xs" href="#">Take this action</a>
                      </div>
                      <div class="alert alert-warning alert-rounded alert-transparent alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Warning:</span> Best check yo self, you're not looking too good.
                      </div>
                      <div class="alert alert-danger alert-rounded alert-sm">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="fw-semi-bold">Danger:</span> Change this and that and try again.
                      </div>
                  </div>
                </section>
              </div>
            <div class="col-md-8">
                <section class="widget">
                  <header>
                      <h5>
                          Additional <span class="fw-semi-bold">Content</span>
                      </h5>
                      <div class="widget-controls">
                          <a data-widgster="expand" title="Expand" href="#"><i class="la la-angle-up"></i></a>
                          <a data-widgster="collapse" title="Collapse" href="#"><i class="la la-angle-down"></i></a>
                          <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                      </div>
                  </header>
                  <div class="widget-body">
                    <p>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p class="mb-0">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    </div>
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