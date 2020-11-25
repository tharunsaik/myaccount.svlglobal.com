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
    <li class="breadcrumb-item active">Form Elements</li>
</ol>
<h1 class="page-title">Form - <span class="fw-semi-bold">Inputs &amp; Controls</span></h1>
<div class="row">
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    Inputs
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form class="form-horizontal" role="form">
                    <fieldset>
                        <legend><strong>Horizontal</strong> form</legend>
                        <div class="form-group row">
                            <label for="normal-field" class="col-md-4 form-control-label text-md-right">Normal
                                field</label>
                            <div class="col-md-7">
                                <input type="text" id="normal-field" class="form-control" placeholder="May have placeholder">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hint-field" class="col-md-4 control-label text-md-right">
                                Label hint
                                <span class="help-block">Some help text</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="hint-field" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label text-md-right" for="tooltip-enabled">Tooltip
                                enabled</label>
                            <div class="col-md-7">
                                <input type="text" id="tooltip-enabled" class="form-control" data-placement="top" data-original-title="Some explanation text here" placeholder="Hover over me..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label text-md-right" for="disabled-input">Disabled
                                input</label>
                            <div class="col-md-7">
                                <input type="text" id="disabled-input" class="form-control" disabled="disabled" value="Default value">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label text-md-right" for="max-length">Max length</label>
                            <div class="col-md-7">
                                <input type="text" id="max-length" maxlength="3" class="form-control" placeholder="Max length 3 characters" data-placement="top" data-original-title="You cannot write more than 3 characters.">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4  col-form-label text-md-right" for="prepended-input">Prepended
                                input</label>
                            <div class="col-md-7 ">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                    <input id="prepended-input" class="form-control" size="16" type="text" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4  col-form-label text-md-right" for="password-field">Password</label>
                            <div class="col-md-7 ">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                    <input type="password" class="form-control" id="password-field" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4  col-form-label text-md-right" for="appended-input">Appended
                                input</label>
                            <div class="col-md-7 ">
                                <div class="input-group">
                                    <input id="appended-input" class="form-control" size="16" type="text">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            .00
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4  col-form-label text-md-right" for="combined-input">Combined</label>
                            <div class="col-md-7 ">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </span>
                                    <input id="combined-input" class="form-control" size="16" type="text">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            .00
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4  col-form-label text-md-right" for="transparent-input">
                                Append Transparent
                            </label>
                            <div class="col-md-7 ">
                                <div class="input-group input-group-transparent">
                                    <input id="transparent-input" class="form-control" type="text">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-camera"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="offset-md-4 col-md-7 col-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    Prepended and appended inputs
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form role="form">
                    <fieldset>
                        <legend><strong>Default</strong> Form</legend>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="search-input">Search type input</label>
                                    <div class="input-group">
                                        <input type="search" class="form-control" id="search-input">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-default">Search</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bar">Whole bar appended</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="bar">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-warning"><i class="fa fa-plus"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-refresh"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dropdown-appended">Actions dropdown</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="dropdown-appended">
                                        <div class="input-group-append">
                                            <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type-dropdown-appended">Types dropdown</label>

                                    <div class="input-group z-index-10">
                                        <input type="text" class="form-control" id="type-dropdown-appended">
                                        <div class="input-group-append">
                                            <div class="dropdown bootstrap-select dropup" style="width: 127px;"><select id="phone-type" class="selectpicker" data-style="btn-primary" data-width="auto" tabindex="-98">
                                                <option class="dropdown-item">Type one</option>
                                                <option class="dropdown-item">Another type</option>
                                                <option class="dropdown-item">Next type</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="phone-type" title="Type one"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Type one</div></div> </div></button><div class="dropdown-menu " style="min-width: 0px; max-height: 545.562px; overflow: hidden; min-height: 0px;"><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 529.562px; overflow-y: auto; min-height: 0px;"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                        </div>
                                    </div>
                                    <p class="help-block">You can select some type of a field just right in the place.
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="segmented-dropdown">Segmented dropdown</label>
                                    <div class="input-group">
                                        <input id="segmented-dropdown" class="form-control" type="text">
                                        <div class="input-group-append">
                                            <button class="btn btn-warning" tabindex="-1">Action</button>
                                            <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="help-block">Anything can be appended to the right</span>
                                </div>
                                <div class="form-group">
                                    <label for="no-borders-input">Transparent input</label>
                                    <input id="no-borders-input" class="form-control input-no-border bg-gray-lighter" type="text" placeholder="Search Dashboard">
                                    <p class="help-block">With <code>.bg-gray-lighter</code>. White by default.</p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-inverse">Save Changes</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <section class="widget">
            <header>
                <h6>
                    Form <span class="fw-semi-bold">Options</span>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form role="form">
                    <fieldset>
                        <legend>
                            Control sizing
                        </legend>
                        <p>
                            Set input heights using classes like <code>.form-control-lg</code> and
                            <code>.form-control-sm</code>.
                            Also works with <code>type="search"</code> inputs and selects. For input groups use
                            <code>.input-group-lg</code> &amp; <code>.input-group-sm</code>.
                        </p>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="default input">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
    <div class="col-lg-4">
        <section class="widget">
            <header>
                <h6>
                    Form <span class="fw-semi-bold">Options</span>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form role="form">
                    <fieldset>
                        <legend>
                            Input Groups
                        </legend>
                        <p>
                            Different colors &amp; sizes for any elements including input groups. Elements may be
                            easily styled with classes like <code>.bg-primary</code> or <code>.bg-transparent</code>
                        </p>
                        <br>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text bg-transparent">
                                        <i class="fa fa-github-alt"></i>
                                    </span>
                                </span>
                                <input class="form-control" size="16" type="text" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-bars"></i>
                                    </span>
                                </span>
                                <input class="form-control" size="16" type="text" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <input class="form-control" size="16" type="text" placeholder="City">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-danger text-white">
                                        <i class="fa fa-code-fork"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    <i class="fa fa-font"></i>
                    Textareas
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form class="form-horizontal" role="form">
                    <fieldset>
                        <legend>Small form</legend>
                        <div class="form-group row">
                            <label class="col-md-3 control-label text-md-right" for="default-textarea">Default
                                textarea</label>
                            <div class="col-md-9">
                                <textarea rows="4" class="form-control" id="default-textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 control-label text-md-right" for="elastic-textarea">
                                Auto-growing textarea
                            </label>
                            <div class="col-md-9">
                                <textarea rows="3" class="autogrow form-control transition-height" id="elastic-textarea" placeholder="Try to add few new lines.." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 76px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 control-label text-md-right" for="wysiwyg">
                                Summernote
                                <span class="help-block">
                                    With top toolbar appended
                                </span>
                            </label>
                            <div class="col-md-9">
                                <textarea rows="4" class="form-control" id="summernote"></textarea>
                                <div class="btn-toolbar justify-content-end">
                                    <button type="button" class="btn btn-sm btn-success">Save</button>
                                    <button type="button" class="btn btn-sm btn-default">Clear</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 control-label text-md-right" for="markdown">
                                Markdown Editor
                            </label>
                            <div class="col-md-9">
                                <div class="md-editor" id="1589259450039"><div class="md-header btn-toolbar"><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span class="glyphicon glyphicon-bold"></span> </button><button class="btn-default btn-sm btn" type="button" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span class="glyphicon glyphicon-italic"></span> </button><button class="btn-default btn-sm btn" type="button" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span class="glyphicon glyphicon-header"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span class="glyphicon glyphicon-link"></span> </button><button class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span class="glyphicon glyphicon-picture"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span class="glyphicon glyphicon-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Ordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span class="glyphicon glyphicon-th-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span class="glyphicon glyphicon-asterisk"></span> </button><button class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span class="glyphicon glyphicon-comment"></span> </button></div><div class="btn-group"><button class="btn-sm btn btn-primary" type="button" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button"><span class="glyphicon glyphicon-search"></span> Preview</button></div><div class="md-controls"><a class="md-control md-control-fullscreen" href="#"><span class="glyphicon glyphicon-fullscreen"></span></a></div></div><textarea class="form-control md-input" id="markdown" data-provide="markdown" rows="6" style="resize: none;">### Hello there
How are you?

I have bellow task for you :

Select from this text...
Click the bold on THIS WORD and make THESE ONE italic
Link GOOGLE to google.com
Test to insert image (and try to tab after write the image description)
Test Preview
And ending here... Click "List"

Enjoy!
                                        </textarea><div class="md-fullscreen-controls"><a href="#" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a></div></div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    <i class="fa fa-list-alt"></i>
                    Selects
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form class="form-horizontal form-label-left" role="form">
                    <fieldset>
                        <legend>Default form with labels on left</legend>
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="default-select">Default select</label>
                            <div class="col-md-8">
                                <select data-placeholder="Which galaxy is closest to Milky Way?" data-width="auto" data-minimum-results-for-search="10" tabindex="-1" class="select2 form-control select2-hidden-accessible" id="default-select" aria-hidden="true">
                                    <option value=""></option>
                                    <option value="Magellanic">Large Magellanic Cloud</option>
                                    <option value="Andromeda">Andromeda Galaxy</option>
                                    <option value="Sextans">Sextans A</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-default-select-container"><span class="select2-selection__rendered" id="select2-default-select-container"><span class="select2-selection__placeholder">Which galaxy is closest to Milky Way?</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="country-select">Select with search</label>
                            <div class="col-md-8">
                                <select id="country-select" data-placeholder="Select country" class="select2 form-control select2-hidden-accessible" tabindex="-1" name="country" aria-hidden="true">
                                    <option value=""></option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 383px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-country-select-container"><span class="select2-selection__rendered" id="select2-country-select-container"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="multiple-select">
                                Multiple select
                                <span class="help-block">Search enabled</span>
                            </label>
                            <div class="col-md-8">
                                <select multiple="" data-placeholder="Multiple countries this time" data-minimum-results-for-search="10" tabindex="-1" class="select2 form-control select2-hidden-accessible" id="multiple-select" aria-hidden="true">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option selected="selected" value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South Sandwich Islands</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 383px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Belarus"><span class="select2-selection__choice__remove" role="presentation">×</span>Belarus</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="grouped-select">Select with groups</label>
                            <div class="col-md-8">
                                <select data-placeholder="Your Favorite Football Team" multiple="" tabindex="-1" data-minimum-results-for-search="10" class="select2 form-control select2-hidden-accessible" id="grouped-select" aria-hidden="true">
                                    <option value=""></option>
                                    <optgroup label="NFC EAST">
                                        <option>Dallas Cowboys</option>
                                        <option>New York Giants</option>
                                        <option>Philadelphia Eagles</option>
                                        <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                        <option>Chicago Bears</option>
                                        <option>Detroit Lions</option>
                                        <option>Green Bay Packers</option>
                                        <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                        <option>Atlanta Falcons</option>
                                        <option>Carolina Panthers</option>
                                        <option>New Orleans Saints</option>
                                        <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                        <option>Arizona Cardinals</option>
                                        <option>St. Louis Rams</option>
                                        <option>San Francisco 49ers</option>
                                        <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                        <option>Buffalo Bills</option>
                                        <option>Miami Dolphins</option>
                                        <option>New England Patriots</option>
                                        <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                        <option>Baltimore Ravens</option>
                                        <option>Cincinnati Bengals</option>
                                        <option>Cleveland Browns</option>
                                        <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                        <option>Houston Texans</option>
                                        <option>Indianapolis Colts</option>
                                        <option>Jacksonville Jaguars</option>
                                        <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                        <option>Denver Broncos</option>
                                        <option>Kansas City Chiefs</option>
                                        <option>Oakland Raiders</option>
                                        <option>San Diego Chargers</option>
                                    </optgroup>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 383px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Your Favorite Football Team" style="width: 381px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Dropdown based colored selects</legend>
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="simple-select">Simple select</label>
                            <div class="col-md-8">
                                <div class="dropdown bootstrap-select dropup" style="width: 127px;"><select class="selectpicker" data-style="btn-default" data-width="auto" tabindex="-98" id="simple-select">
                                    <option class="dropdown-item" value="0">Option One</option>
                                    <option class="dropdown-item" value="1">Option Two</option>
                                    <option class="dropdown-item" value="2">Option Three</option>
                                </select><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" data-id="simple-select" tabindex="-1" title="Option One"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Option One</div></div> </div></button><div class="dropdown-menu " style="min-width: 0px; max-height: 1716.44px; overflow: hidden; min-height: 0px;"><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1" style="max-height: 1700.44px; overflow-y: auto; min-height: 0px;"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                <span class="help-block">Auto size</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="simple-red-select">
                                Colored ones
                                <span class="help-block">
                                    A bit of Japanese
                                </span>
                            </label>
                            <div class="col-md-8">
                                <div class="dropdown bootstrap-select dropup" style="width: 67px;"><select class="selectpicker" data-style="btn-danger btn-sm" data-width="auto" tabindex="-98" id="simple-red-select">
                                    <option class="dropdown-item" value="0">Ichi</option>
                                    <option class="dropdown-item" value="1">Ni</option>
                                    <option class="dropdown-item" value="2">San</option>
                                </select><button type="button" class="btn dropdown-toggle btn-danger btn-sm" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" data-id="simple-red-select" tabindex="-1" title="Ichi"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Ichi</div></div> </div></button><div class="dropdown-menu " style="min-width: 0px; max-height: 1786.94px; overflow: hidden; min-height: 0px;"><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1" style="max-height: 1770.94px; overflow-y: auto; min-height: 0px;"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                <div class="dropdown bootstrap-select dropup" style="width: 77px;"><select class="selectpicker" data-style="btn-warning btn-sm" data-width="auto" tabindex="-98" id="simple-orange-select">
                                    <option class="dropdown-item" value="0">Shi</option>
                                    <option class="dropdown-item" value="1">Go</option>
                                    <option class="dropdown-item" value="2">Roku</option>
                                </select><button type="button" class="btn dropdown-toggle btn-warning btn-sm" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" data-id="simple-orange-select" tabindex="-1" title="Shi"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Shi</div></div> </div></button><div class="dropdown-menu " style="min-width: 0px; max-height: 1786.94px; overflow: hidden; min-height: 0px;"><div class="inner show" role="listbox" id="bs-select-4" tabindex="-1" style="max-height: 1770.94px; overflow-y: auto; min-height: 0px;"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                <div class="dropdown bootstrap-select dropup" style="width: 77px;"><select class="selectpicker" data-style="btn-success btn-sm" data-width="auto" tabindex="-98" id="simple-green-select">
                                    <option class="dropdown-item" value="0">Hichi</option>
                                    <option class="dropdown-item" value="1">Hachi</option>
                                    <option class="dropdown-item" value="2">Ku</option>
                                    <option class="dropdown-item" value="3">Ju</option>
                                </select><button type="button" class="btn dropdown-toggle btn-success btn-sm" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" data-id="simple-green-select" tabindex="-1" title="Hichi"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Hichi</div></div> </div></button><div class="dropdown-menu " style="min-width: 0px; max-height: 1816.72px; overflow: hidden; min-height: 104px;"><div class="inner show" role="listbox" id="bs-select-5" tabindex="-1" style="max-height: 1800.72px; overflow-y: auto; min-height: 88px;"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="simple-big-select">
                                Big One
                                <span class="help-block">
                                    Size can be controlled with <code>.btn-lg</code> &amp; <code>.btn-sm</code>
                                </span>
                            </label>
                            <div class="col-md-8">
                                <div class="dropdown bootstrap-select"><select class="selectpicker" data-style="btn-default btn-lg" tabindex="-98" id="simple-big-select">
                                    <option class="dropdown-item" value="0">Fourth Item</option>
                                    <option class="dropdown-item" value="1">Fifth Item</option>
                                    <option class="dropdown-item" value="2">Sixth item</option>
                                </select><button type="button" class="btn dropdown-toggle btn-default btn-lg" data-toggle="dropdown" role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" data-id="simple-big-select" tabindex="-1" title="Fourth Item"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Fourth Item</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-6" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="widget">
            <header>
                <h6>
                    Checkbox <strong>Controls</strong>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form role="form">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <fieldset>
                                <legend>
                                    Basic
                                </legend>
                                <p>
                                    Supports bootstrap brand colors: <code>.abc-checkbox-primary</code>,
                                    <code>.abc-checkbox-info</code> etc.
                                    Pure <abbr title="Cascading Style Sheet">css</abbr> solution with no javascript.
                                    Let your checkboxes shine!
                                </p>
                                <div class="form-check abc-checkbox">
                                    <input class="form-check-input" id="checkbox1" type="checkbox">
                                    <label class="form-check-label" for="checkbox1">
                                        Default
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-primary">
                                    <input class="form-check-input" id="checkbox2" type="checkbox" checked="">
                                    <label class="form-check-label" for="checkbox2">
                                        Primary
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-success">
                                    <input class="form-check-input" id="checkbox3" type="checkbox">
                                    <label class="form-check-label" for="checkbox3">
                                        Success
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-info">
                                    <input class="form-check-input" id="checkbox4" type="checkbox">
                                    <label class="form-check-label" for="checkbox4">
                                        Info
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-warning">
                                    <input class="form-check-input" id="checkbox5" type="checkbox" checked="">
                                    <label class="form-check-label" for="checkbox5">
                                        Warning
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-danger">
                                    <input class="form-check-input" id="checkbox6" type="checkbox" checked="">
                                    <label class="form-check-label" for="checkbox6">
                                        Check me out
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <fieldset>
                                <legend>
                                    Circled
                                </legend>
                                <p>
                                    <code>.abc-checkbox-circle</code> for roundness. No more sad controls controls.
                                    Check out this brand-new square checkboxes!
                                </p>
                                <div class="form-check abc-checkbox abc-checkbox-circle">
                                    <input class="form-check-input" id="checkbox7" type="checkbox">
                                    <label class="form-check-label" for="checkbox7">
                                        Simply Rounded
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-info abc-checkbox-circle">
                                    <input class="form-check-input" id="checkbox8" type="checkbox" checked="">
                                    <label class="form-check-label" for="checkbox8">
                                        Me too
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <fieldset>
                                <legend>
                                    Disabled
                                </legend>
                                <p>
                                    Disabled state also supported. Full stack checkbox functionality.
                                </p>
                                <div class="form-check abc-checkbox">
                                    <input class="form-check-input" id="checkbox9" type="checkbox" disabled="">
                                    <label class="form-check-label" for="checkbox9">
                                        Can't check this
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-success">
                                    <input class="form-check-input" id="checkbox10" type="checkbox" disabled="" checked="">
                                    <label class="form-check-label" for="checkbox10">
                                        This too
                                    </label>
                                </div>
                                <div class="form-check abc-checkbox abc-checkbox-warning abc-checkbox-circle">
                                    <input class="form-check-input" id="checkbox11" type="checkbox" disabled="" checked="">
                                    <label class="form-check-label" for="checkbox11">
                                        And this
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <p class="fs-mini">Built with <a href="https://github.com/okendoken/awesome-bootstrap-checkbox" target="_blank">awesome-bootstrap-checkbox</a>.</p>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="widget">
            <header>
                <h6>
                    Radio <strong>Controls</strong>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form role="form">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <fieldset>
                                <legend>
                                    Basic
                                </legend>
                                <p>
                                    Supports bootstrap brand colors: <code>.abc-radio-primary</code>,
                                    <code>.abc-radio-danger</code> etc.
                                    Pure css solution with no javascript. Let your radios shine!
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check abc-radio">
                                            <input class="form-check-input" type="radio" name="radio1" id="radio1" value="option1" checked="">
                                            <label class="form-check-label" for="radio1">
                                                Small
                                            </label>
                                        </div>
                                        <div class="form-check abc-radio">
                                            <input class="form-check-input" type="radio" name="radio1" id="radio2" value="option2">
                                            <label class="form-check-label" for="radio2">
                                                Big
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check abc-radio abc-radio-danger">
                                            <input class="form-check-input" type="radio" name="radio2" id="radio3" value="option1">
                                            <label class="form-check-label" for="radio3">
                                                Next
                                            </label>
                                        </div>
                                        <div class="form-check abc-radio abc-radio-danger">
                                            <input class="form-check-input" type="radio" name="radio2" id="radio4" value="option2" checked="">
                                            <label class="form-check-label" for="radio4">
                                                One
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <fieldset>
                                <legend>
                                    Disabled
                                </legend>
                                <p>
                                    Disabled state also supported. Full stack radios functionality.
                                </p>
                                <div class="form-check abc-radio abc-radio-danger">
                                    <input class="form-check-input" type="radio" name="radio3" id="radio5" value="option1" disabled="">
                                    <label class="form-check-label" for="radio5">
                                        Next
                                    </label>
                                </div>
                                <div class="form-check abc-radio">
                                    <input class="form-check-input" type="radio" name="radio3" id="radio6" value="option2" checked="" disabled="">
                                    <label class="form-check-label" for="radio6">
                                        One
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <fieldset>
                                <legend>
                                    Cool iOS-like switches
                                </legend>
                                <p>
                                    Simple component that helps you turn your default HTML checkbox inputs into
                                    beautiful iOS 7 style switches in just few simple steps.
                                </p>
                                <div class="form-check-inline checkbox-ios">
                                    <label for="checkbox-ios1">
                                        <input type="checkbox" id="checkbox-ios1" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                    </label>
                                </div>
                                <div class="form-check-inline checkbox-ios">
                                    <label for="checkbox-ios2">
                                        <input type="checkbox" id="checkbox-ios2" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    Pickers
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form role="form">
                    <fieldset>
                        <legend>
                            Date &amp; Time
                        </legend>
                        <div class="form-group">
                            <label>In-Place</label>
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4">
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                Time-enabled
                                <span class="help-block">
                                    Can be customized for both 24 hour and 12 hour clocks.
                                </span>
                            </label>
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1">
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Colors
                        </legend>
                        <div class="form-group">
                            <label for="colorpickeri">
                                Simple select
                                <span class="help-block">
                                    Colorpicker plugin for Twitter Bootstrap, originally written by Stefan Petre
                                </span>
                            </label>
                            <div id="colorpicker" class="input-group colorpicker-element">
                                <input type="text" value="#999999" class="form-control" id="colorpickeri">
                                <span class="input-group-append input-group-addon"><span class="input-group-text"><i style="background-color: rgb(248, 249, 250);"></i></span></span>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    Input <strong>Masks</strong>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form role="form" class="form-horizontal form-label-left">
                    <fieldset>
                        <legend>
                            Masked inputs
                        </legend>
                        <div class="form-group row">
                            <label class="control-label col-md-4" for="mask-phone">
                                Phone
                                <span class="help-block">(123) 456-7890</span>
                            </label>
                            <div class="col-md-7">
                                <input id="mask-phone" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4" for="mask-int-phone">
                                International Phone
                                <span class="help-block">+375 123 456 789</span>
                            </label>
                            <div class="col-md-7">
                                <input id="mask-int-phone" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4" for="mask-date">
                                Date Format
                                <span class="help-block">07-03-2013</span>
                            </label>
                            <div class="col-md-7">
                                <input id="mask-date" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4" for="mask-time">
                                Time
                                <span class="help-block">13:43</span>
                            </label>
                            <div class="col-md-7">
                                <input id="mask-time" type="text" class="form-control">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="widget">
            <header>
                <h6>
                    Sliders
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>Color Options</h5>
                        <p>Sing extends Bootstrap Slider and provides different color options:</p>
                        <form>
                            <div class="mb-sm">
                                <div class="slider slider-horizontal" id="ex1Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 70%;"></div><div class="slider-track-high" style="right: 0px; width: 30%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 70%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">14</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="14" tabindex="0" style="left: 70%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="left: 0%;"></div></div><input class="js-slider" id="slider-ex1" data-slider-id="ex1Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" data-value="14" value="14" style="display: none;">
                            </div>
                            <div class="slider-danger mb-sm">
                                <div class="slider slider-horizontal" id="ex2Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 90%;"></div><div class="slider-track-high" style="right: 0px; width: 10%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 90%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">18</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="18" tabindex="0" style="left: 90%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="left: 0%;"></div></div><input class="js-slider" id="slider-ex2" data-slider-id="ex2Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="18" data-value="18" value="18" style="display: none;">
                            </div>
                            <div class="slider-warning mb-sm">
                                <div class="slider slider-horizontal" id="ex3Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 35%;"></div><div class="slider-track-high" style="right: 0px; width: 65%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 35%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">7</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="7" tabindex="0" style="left: 35%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="left: 0%;"></div></div><input class="js-slider" id="slider-ex3" data-slider-id="ex3Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="7" data-value="7" value="7" style="display: none;">
                            </div>
                            <div class="slider-success mb-sm">
                                <div class="slider slider-horizontal" id="ex4Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 55%;"></div><div class="slider-track-high" style="right: 0px; width: 45%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 55%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">11</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="11" tabindex="0" style="left: 55%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="left: 0%;"></div></div><input class="js-slider" id="slider-ex4" data-slider-id="ex4Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="11" data-value="11" value="11" style="display: none;">
                            </div>
                            <div class="slider-inverse mb-sm">
                                <div class="slider slider-horizontal" id="ex5Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 20%;"></div><div class="slider-track-high" style="right: 0px; width: 80%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 20%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">4</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="4" tabindex="0" style="left: 20%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="left: 0%;"></div></div><input class="js-slider" id="slider-ex5" data-slider-id="ex5Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="4" data-value="4" value="4" style="display: none;">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <h5>Slider Orientation</h5>
                        <p>Vertical orientation is also possible. Simply changing
                            <strong>data-slider-orientation</strong>
                            attribute does the thing.</p>
                        <form>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <span class="">
                                        <div class="slider slider-vertical" id="ex6Slider"><div class="slider-track"><div class="slider-track-low" style="top: 0px; height: 0%;"></div><div class="slider-selection" style="top: 0%; height: 70%;"></div><div class="slider-track-high" style="bottom: 0px; height: 30%;"></div></div><div class="tooltip tooltip-main right" role="presentation" style="left: 100%; top: 70%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">14</div></div><div class="tooltip tooltip-min right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="14" tabindex="0" style="top: 70%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="top: 0%;"></div></div><input class="js-slider" id="slider-ex6" data-slider-orientation="vertical" data-slider-id="ex6Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" data-value="14" value="14" style="display: none;">
                                    </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="slider-inverse">
                                        <div class="slider slider-vertical" id="ex7Slider"><div class="slider-track"><div class="slider-track-low" style="top: 0px; height: 0%;"></div><div class="slider-selection" style="top: 0%; height: 90%;"></div><div class="slider-track-high" style="bottom: 0px; height: 10%;"></div></div><div class="tooltip tooltip-main right" role="presentation" style="left: 100%; top: 90%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">18</div></div><div class="tooltip tooltip-min right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="18" tabindex="0" style="top: 90%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="top: 0%;"></div></div><input class="js-slider" id="slider-ex7" data-slider-orientation="vertical" data-slider-id="ex7Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="18" data-value="18" value="18" style="display: none;">
                                    </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="">
                                        <div class="slider slider-vertical" id="ex8Slider"><div class="slider-track"><div class="slider-track-low" style="top: 0px; height: 0%;"></div><div class="slider-selection" style="top: 0%; height: 35%;"></div><div class="slider-track-high" style="bottom: 0px; height: 65%;"></div></div><div class="tooltip tooltip-main right" role="presentation" style="left: 100%; top: 35%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">7</div></div><div class="tooltip tooltip-min right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="7" tabindex="0" style="top: 35%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="top: 0%;"></div></div><input class="js-slider" id="slider-ex8" data-slider-orientation="vertical" data-slider-id="ex8Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="7" data-value="7" value="7" style="display: none;">
                                    </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="slider-inverse">
                                        <div class="slider slider-vertical" id="ex9Slider"><div class="slider-track"><div class="slider-track-low" style="top: 0px; height: 0%;"></div><div class="slider-selection" style="top: 0%; height: 55%;"></div><div class="slider-track-high" style="bottom: 0px; height: 45%;"></div></div><div class="tooltip tooltip-main right" role="presentation" style="left: 100%; top: 55%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">11</div></div><div class="tooltip tooltip-min right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="11" tabindex="0" style="top: 55%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="top: 0%;"></div></div><input class="js-slider" id="slider-ex9" data-slider-orientation="vertical" data-slider-id="ex9Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="11" data-value="11" value="11" style="display: none;">
                                    </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="">
                                        <div class="slider slider-vertical" id="ex10Slider"><div class="slider-track"><div class="slider-track-low" style="top: 0px; height: 0%;"></div><div class="slider-selection" style="top: 0%; height: 20%;"></div><div class="slider-track-high" style="bottom: 0px; height: 80%;"></div></div><div class="tooltip tooltip-main right" role="presentation" style="left: 100%; top: 20%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">4</div></div><div class="tooltip tooltip-min right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max right" role="presentation" style="left: 100%;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="4" tabindex="0" style="top: 20%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="20" aria-valuenow="0" tabindex="0" style="top: 0%;"></div></div><input class="js-slider" id="slider-ex10" data-slider-orientation="vertical" data-slider-id="ex10Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="4" data-value="4" value="4" style="display: none;">
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <h5>Range Selector</h5>
                        <p>Range selector, options specified via <strong>data-slider-value</strong> attribute as
                            an array. Price range selector:</p>
                        <form>
                            <span class="slider-warning">
                                <div class="slider slider-horizontal" id="ex11Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 10%;"></div><div class="slider-selection" style="left: 10%; width: 67.35%;"></div><div class="slider-track-high" style="right: 0px; width: 22.65%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 43.675%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">200 : 1547</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 10%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">200</div></div><div class="tooltip tooltip-max top" role="presentation" style="left: 77.35%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1547</div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="2000" aria-valuenow="200" tabindex="0" style="left: 10%;"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="2000" aria-valuenow="1547" tabindex="0" style="left: 77.35%;"></div></div><input class="js-slider" id="slider-ex11" data-slider-id="ex11Slider" type="text" data-slider-min="0" data-slider-max="2000" data-slider-step="1" data-slider-value="[200,1547]" data-value="200,1547" value="200,1547" style="display: none;">
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    Simple <strong>file uploads</strong>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form class="form-horizontal" role="form">
                    <fieldset>
                        <blockquote class="blockquote-reverse">
                            <p>The man who is really serious, with the urge to find out what truth is, has no style at
                                all. He lives only in what is.</p>
                            <footer>Bruce Lee</footer>
                        </blockquote>
                        <div class="form-group row">
                            <label class="control-label col-md-4 text-md-right" for="fileupload1">
                                File input widget
                            </label>
                            <div class="col-md-8">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput">
                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename"></span>
                                    </div>
                                    <button class="input-group-addon btn btn-default btn-file">
                                        <span class="fileinput-new">Select file</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input id="fileupload1" type="file">
                                    </button>
                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                                <span class="help-block">Awesome file input plugin allows you to create a visually
                                    appealing file or image inputs.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4 text-md-right" for="fileupload1">
                                Image upload widget
                            </label>
                            <div class="col-md-8">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img data-src="holder.js/100px380" alt="100%x380" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22191%22%20height%3D%22141%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20191%20141%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_172073ed6f7%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_172073ed6f7%22%3E%3Crect%20width%3D%22191%22%20height%3D%22141%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2269.546875%22%20y%3D%2275%22%3E191x141%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" style="height: 380px; width: 100%; display: block;" data-holder-rendered="true">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select
                                                image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                                <span class="help-block">Showing a thumbnail instead of the filename when uploading an
                                    image.</span>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="widget">
            <header>
                <h6>
                    <strong>Drop</strong> Zone
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="la la-cog"></i></a>
                    <a href="#"><i class="la la-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form class="dropzone dz-clickable" action="#" id="my-awesome-dropzone">
                    <div class="dz-message">
                        <p class="mb-xs fw-normal">Drop files here or click to upload.</p>
                        <p class="text-muted">(This is just a demo dropzone. Selected files are <strong>not</strong>
                            actually uploaded.)</p>
                    </div>
                </form>
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