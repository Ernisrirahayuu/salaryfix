<!DOCTYPE html> 
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2018 14:08:25 GMT -->
<head>



    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> {{ config('app.name', 'Salary') }} </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/coba/assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/coba/assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/coba/assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/coba/assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="/coba/assets/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="/coba/assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="/coba/assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="/coba/assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="/coba/assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="/coba/assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="/coba/assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="/coba/assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="/coba/assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="/coba/assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="/coba/assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="/coba/assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="/coba/assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="/coba/assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="/coba/assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="/coba/assets/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>


    <body>
    <div id="sb-site">
    <div class="sb-slidebar bg-black sb-left sb-style-overlay">
    <div class="scrollable-content scrollable-slim-sidebar">
        <div class="pad10A">
            <div class="divider-header">Online</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial1.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Grace Padilla
                    </b>
                    <p>On the other hand, we denounce...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial2.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Carl Gamble
                    </b>
                    <p>Dislike men who are so beguiled...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial3.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Michael Poole
                    </b>
                    <p>Of pleasure of the moment, so...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial4.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Bill Green
                    </b>
                    <p>That they cannot foresee the...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial5.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Cheryl Soucy
                    </b>
                    <p>Pain and trouble that are bound...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Idle</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial6.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Jose Kramer
                    </b>
                    <p>Equal blame belongs to those...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial7.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Dan Garcia
                    </b>
                    <p>Weakness of will, which is same...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial8.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Edward Bridges
                    </b>
                    <p>These cases are perfectly simple...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Offline</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial1.jpg" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Randy Herod
                    </b>
                    <p>In a free hour, when our power...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="/coba/assets/image-resources/people/testimonial2.jpg" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Patricia Bagley
                    </b>
                    <p>when nothing prevents our being...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="sb-slidebar bg-black sb-right sb-style-overlay">
<div class="scrollable-content scrollable-slim-sidebar">
<div class="pad15A">
<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
    Cloud status
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-1" class="collapse in">
    <div class="pad15A container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
            </div>
        </div>
        <div class="divider mrg15T mrg15B"></div>
        <div class="text-center">
            <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                <i class="glyph-icon icon-refresh"></i>
                Update charts
            </a>
        </div>
    </div>
</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
    Latest transfers
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-6" class="collapse in">

    <ul class="files-box">
        <li>
            <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
            <div class="files-content">
                <b>blog_export.zip</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>22.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon icon-file-code-o"></i>
            <div class="files-content">
                <b>homepage-test.html</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added  <b>19.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
            <div class="files-content">
                <b>monthlyReport.jpg</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>10.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
            <div class="files-content">
                <b>new_presentation.doc</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>5.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
    Tasks for today
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-3" class="collapse in">

    <ul class="progress-box">
        <li>
            <div class="progress-title">
                New features development
                <b>87%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="87">
                <div class="progressbar-value bg-azure">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <b class="pull-right">66%</b>
            <div class="progress-title">
                Finishing uploading files
                
            </div>
            <div class="progressbar-smaller progressbar" data-value="66">
                <div class="progressbar-value bg-red">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Creating tutorials
                <b>58%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="58">
                <div class="progressbar-value bg-blue-alt"></div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Frontend bonus theme
                <b>74%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="74">
                <div class="progressbar-value bg-purple"></div>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
    Pending notifications
    <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-4" class="collapse in">
    <ul class="notifications-box notifications-box-alt">
        <li>
            <span class="bg-purple icon-notification glyph-icon icon-users"></span>
            <span class="notification-text">This is an error notification</span>
            <div class="notification-time">
                a few seconds ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
            <span class="notification-text">This is a warning notification</span>
            <div class="notification-time">
                <b>15</b> minutes ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-green icon-notification glyph-icon icon-random"></span>
            <span class="notification-text font-green">A success message example.</span>
            <div class="notification-time">
                <b>2 hours</b> ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
</div>
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="index.html" title="Gaji Ku"></a>
    </div>
    <div id="header-logo">
        <a href="{{ url('/home')}}" title="GajiKU">
           <img src="{{asset('cc.png')}}" style="width: 150px;height: 70px;">
        </a>
        <a href="{{ url('/home')}}" class="logo-content-small" title="Gaji">
            Gaji <i>KU</i>
            <span>The perfect</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                @if(Auth::check())
                <span>{{ Auth::user()->name }}</span>
                <i class="glyph-icon icon-angle-down"></i>
                @endif
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="icon-users">
                           
                            <img class="icon-users">
                        </div>
                        <div class="user-info">
                            <span>
                            @if(Auth::check())
                                {{ Auth::user()->name }}
                              <!--   <i> developer</i> -->
                               @endif
                            </span>
                           
                        </div>
                    </div>
                    <div class="divider"></div>
                   
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn display-block font-normal btn-danger">Logout
                            <i class="glyph-icon icon-power-off"></i>
                          
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->

    <div id="header-nav-right">
      
      
       
    </div><!-- #header-nav-right -->

</div>
        <div id="page-sidebar">
    <div class="scroll-sidebar bg-gradient-8">
        

    <ul id="sidebar-menu" data-color="bg-gradient-8">
    
        
    @role('admin')
    <li>
        <a href="/Jabatan" title="Elements">
            <i class="glyph-icon icon-briefcase"></i>
            <span>Jabatan</span>
        </a>  
    </li>
    <li>
        <a href="/Golongan" title="Elements">
            <i class="glyph-icon icon-linecons-database"></i>
            <span>Golongan</span>
        </a>  
    </li>
    <li>
        <a href="/Kategori_Lembur" title="Elements">
            <i class="glyph-icon icon-clock-o"></i>
            <span>Kategori Lembur</span>
        </a>  
    </li>
    <li>
        <a href="/Pegawai" title="Elements">
            <i class="glyph-icon icon-users"></i>
            <span>Pegawai</span>
        </a>  
    </li>
    <li>
        <a href="/Lembur_Pegawai" title="Elements">
            <i class="glyph-icon icon-clock-o"></i>
            <span>Lembur Pegawai</span>
        </a>  
    </li>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-gift"></i>
            <span>Tunjangan Pegawai</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="/Tunjangan" title="Buttons"><span>Tunjangan</span></a></li>
                <li><a href="/Status"><span> Status</span></a></li>
                <li><a href="/Jumlah" title="Content boxes"><span>Jumlah</span></a></li>
                
            </ul>
        </div>
        </li>

    <li>
        <a href="/Penggajian" title="Elements">
            <i class="glyph-icon icon-linecons-money"></i>
            <span>Penggajian</span>
        </a>  
    </li>
   @else
   
   <li>
        <a href="/Gaji" title="Elements">
            <i class="glyph-icon icon-linecons-money"></i>
            <span>Gaji Saya</span>
        </a>  
    </li>
    @endrole
    </ul><!-- #sidebar-menu -->

    </div>
</div>
        <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<div id="page-title">
    <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>
</div>
    @yield('content')
</div>


<div class="row">



  



    <!-- WIDGETS -->

<script type="text/javascript" src="{{ asset('/coba/assets/bootstrap/js/bootstrap.js')}}"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="/coba/assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="/coba/assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="/coba/assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="{{ asset('/coba/assets/widgets/progressbar/progressbar.js')}}"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="/coba/assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="/coba/assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="{{ asset('/coba/assets/widgets/superclick/superclick.js')}}"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="{{ asset('/coba/assets/widgets/input-switch/inputswitch-alt.js')}}"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="{{ asset('/coba/assets/widgets/slimscroll/slimscroll.js')}}"></script>

<!-- Slidebars -->

<script type="text/javascript" src="{{ asset('/coba/assets/widgets/slidebars/slidebars.js')}}"></script>
<script type="text/javascript" src="{{ asset('/coba/assets/widgets/slidebars/slidebars-demo.js')}}"></script>

<!-- PieGage -->

<script type="text/javascript" src="{{ asset('/coba/assets/widgets/charts/piegage/piegage.js')}}"></script>
<script type="text/javascript" src="{{ asset('/coba/assets/widgets/charts/piegage/piegage-demo.js')}}"></script>

<!-- Screenfull -->

<script type="text/javascript" src="{{asset('/coba/assets/widgets/screenfull/screenfull.js"')}}></script>

<!-- Content box -->

<script type="text/javascript" src="{{asset('/coba/assets/widgets/content-box/contentbox.js')}}"></script>

<!-- Overlay -->

<script type="text/javascript" src="{{asset('/coba/assets/widgets/overlay/overlay.js')}}"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="{{asset('/coba/assets/js-init/widgets-init.js')}}"></script>

<!-- Theme layout -->

<script type="text/javascript" src="{{asset('/coba/assets/themes/admin/layout.js')}}"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="{{asset('/coba/assets/widgets/theme-switcher/themeswitcher.js')}}"></script>


</div>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2018 14:10:49 GMT -->
</html>