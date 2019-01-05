
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets-new") ?>/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/'.$this->cms->row()->favicon) ?>"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BDash</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--GroceryCRUD CSS-->
    <?php if (isset($css_files)) : ?>
        <?php foreach($css_files as $file): ?>
            <link rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
    <?php endif ?>
     <!--CSS PLUGINS-->
    <?php if (isset($css_plugins)): ?>
        <?php foreach ($css_plugins as $url_plugin): ?>
            <link rel="stylesheet" href="<?php echo base_url("$url_plugin") ?>">
        <?php endforeach ?>
    <?php endif ?>
    <!--Bootstrap-->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!--Alertify-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/alertify.min.css') ?>">
    <!-- CSS Files -->
    <link href="<?php echo base_url("assets-new") ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets-new") ?>/css/lbd.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url("assets-new") ?>/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/custom.css") ?>">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo base_url("assets-new") ?>/img/sidebar-5.jpg" data-color="purple">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo" style="text-align: center;">
                    <a href="<?php echo site_url('admin/crud/index') ?>" style="color: #fff">
                       <span class="logo-lg"><img src="<?php echo base_url("assets/img/".$this->cms->row()->logo); ?>" style="max-height:37px;color:#fff" > <?php echo $this->cms->row()->judul; ?></span>
                    </a>

                </div>

                <ul class="nav" id="menuSub">
                    <?php foreach ($header_menu->result() as $header): ?>
                        <?php foreach ($menu->result() as $key => $menu_item): ?>
                            <?php if ($header->id_header_menu == $menu_item->id_header_menu): ?>
                                <?php if ($menu_item->url == "#" && $menu_item->level_one == "0") { ?>
                                    <li  class="nav-item">

                                        <a class="nav-link collapsed" data-toggle="collapse" href="#<?php echo str_replace(" ", "",$menu_item->label) ?>" aria-expanded="false">
                                            <i class="fa fa-<?php echo $menu_item->icon ?>"></i>
                                            <p>
                                                <?php echo $menu_item->label ?>
                                                <b class="caret"></b>
                                            </p>
                                        </a>
                                        <div class="collapse" id="<?php echo str_replace(" ", "",$menu_item->label) ?>"  style="">
                                            <ul class="nav">
                                                <?php foreach ($menu_lvlOne->result() as $lvlOne): ?>
                                                    <?php if ($menu_item->id_menu == $lvlOne->level_one): ?>                                        
                                                        <?php if ($lvlOne->url == "#") { ?>
                                                            <li class="nav-item ">
                                                                <a class="nav-link" href="#" ><i class="fa fa-<?php echo $lvlOne->icon ?>"></i> <span><?php echo $lvlOne->label ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                                                                <ul class="treeview-menu level-2">
                                                                    <?php foreach ($menu_lvlTwo->result() as $lvlTwo): ?>
                                                                        <?php if ($lvlOne->id_menu == $lvlTwo->level_two): ?>
                                                                            <li id="<?php echo $lvlTwo->menu_id ?>"><a href="<?php echo site_url($lvlTwo->url) ?>" class="name"><i class="fa fa-<?php echo $lvlTwo->icon ?>" class="name"></i> <?php echo $lvlTwo->label ?></a></li>
                                                                        <?php endif ?>                                    
                                                                    <?php endforeach ?>
                                                                </ul>
                                                            </li>
                                                        <?php }else{ ?>
                                                            <li class="nav-item child-menu" id="<?php echo $lvlOne->menu_id ?>"><a href="<?php echo site_url($lvlOne->url) ?>" class="name  nav-link"><i class="fa fa-<?php echo $lvlOne->icon ?>" class="name"></i> <?php echo $lvlOne->label ?></a></li>
                                                        <?php } ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                        
                                    </li>
                                <?php }else{ ?>
                                    <li class="nav-item" id="<?php echo $menu_item->menu_id ?>">
                                        <a href="<?php echo site_url($menu_item->url) ?>" class="name  nav-link"><i class="fa fa-<?php echo $menu_item->icon ?>"></i> <span><?php echo $menu_item->label ?></span></a></li>
                                <?php } ?>
                            <?php endif ?>
                        <?php endforeach ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand animation-slide animation1" href="#pablo"> <?php echo $title_page ?> </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <!-- <ul class="nav navbar-nav mr-auto ">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul> -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon"><?php echo $this->ion_auth->user()->row()->username ?></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url('admin/crud/account/edit/'.$this->ion_auth->get_user_id()) ?>">My Profile</a>
                                    <div class="divider"></div>
                                    <a href="<?php echo  site_url('admin/auth/logout')?>" class="dropdown-item">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
            <?php echo $page ?>

            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu" style="display: none;">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            <?php echo $this->cms->row()->footer; ?>
                            &nbsp<?php echo $this->cms->row()->version; ?>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="<?php echo base_url("assets-new") ?>/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="<?php echo base_url("assets-new") ?>/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="<?php echo base_url("assets-new") ?>/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<!-- GroceryCRUD JS -->
<?php if (isset($js_files)) { foreach($js_files as $file): ?> 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; } else { ?>
    <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>             
<?php } ?>       
<!--JS Plugins-->
<?php if (isset($js_plugins)): ?>
    <?php foreach ($js_plugins as $url_plugin): ?>
        <script src="<?php echo base_url($url_plugin) ?>"></script>                
    <?php endforeach ?>
<?php endif ?>


<script src="<?php echo base_url("assets-new") ?>/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("assets-new") ?>/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--Alertify JS-->
<script src="<?php echo base_url('assets/js/alertify.min.js') ?>"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url("assets-new") ?>/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url("assets-new") ?>/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url("assets-new") ?>/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo base_url("assets-new") ?>/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("assets-new") ?>/js/demo.js"></script>

<script>
    site         = '<?php echo site_url(); ?>';
    ur_class     = '<?php echo $this->uri->segment(1); ?>';
    url_function = '<?php echo $this->uri->segment(2); ?>';
    <?php echo isset($script) ? $script : '' ?>
    function datatablesOptions() { var option = { "orderClasses": false, <?php echo isset($data['script_datatables']) ? $data['script_datatables'] : ''  ?> }; return option; }
    function afterDatatables() { <?php echo isset($data['script_grocery']) ? $data['script_grocery']: '' ?> }
</script>
<script src="<?php echo base_url('assets/js/list.min.js') ?>"></script>
<?php echo isset($scriptView) ? $scriptView : ''; ?>

</html>