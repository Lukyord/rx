<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RX</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="RX">
    <meta property="og:image" content="<?php echo $root; ?>assets/media/share.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/media/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $root; ?>assets/media/favicon/favicon-96x96.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/media/favicon/safari-pinned-tab.svg" color="#3C2631">
    <meta name="msapplication-TileColor" content="#E0DAD0">
    <meta name="theme-color" content="#E0DAD0">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/jquery-ui-effect.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-wp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-default.css?v=<?php echo time(); ?>">
    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php /* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */ ?>

<body>
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">
        <header id="header" class="<?php if ($page_index) {
                                        echo 'translateY';
                                    } ?>">
            <div class="container xl">
                <div class="header-nav">
                    <?php
                    $show = "mb";
                    include($root . 'include/el-header-logo.php')
                    ?>

                    <div class="header-menu">
                        <div class="panel-overlay"></div>
                        <div class="panel">
                            <div class="panel-wrapper">
                                <div class="panel-scroll" data-lenis-prevent>
                                    <div class="panel-inner">
                                        <div class="panel-body">
                                            <ul class="menu">
                                                <li><a href="<?php echo $root; ?>about.php" class="underline-hover">เกี่ยวกับเรา</a></li>
                                                <li>
                                                    <a href="<?php echo $root; ?>csr.php" class="underline-hover">นโยบายความยั่งยืน</a>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="<?php echo $root; ?>product.php" class="underline-hover">ผลิตภัณฑ์และบริการ</a>

                                                    <div class="submenu">
                                                        <div class="submenu-inner">
                                                            <div class="hidden-device-sm">
                                                                <a href="javascript:;" class="submenu-mb-back">
                                                                    <i class="ic ic-chevron-left"></i>
                                                                    กลับ
                                                                </a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <h4 class="submenu-ttl">ผลิตภัณฑ์</h4>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>product.php" class="underline-hover">Pharmaceuticals</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>product.php" class="underline-hover">เครื่องมือและอุปกรณ์ทางการแพทย์</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>product.php" class="underline-hover">Diagnostic Products & Point of Care</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>product.php" class="underline-hover">Rexcuer (Ambulance)</a>
                                                                </li>
                                                            </ul>

                                                            <ul>
                                                                <li>
                                                                    <h4 class="submenu-ttl">บริการ</h4>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>service-rexcuer.php" class="underline-hover">Rexcuer (Ambulance)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>service-manufacturing.php" class="underline-hover">ผลิตยา (RX Manufacturing)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>service-lasik.php" class="underline-hover">ศูนย์เลสิค</a>
                                                                </li>
                                                            </ul>

                                                            <ul>
                                                                <li>
                                                                    <h4 class="submenu-ttl">เพิ่มเติม</h4>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo $root; ?>service-consult.php" class="underline-hover">ปรึกษาผู้เชี่ยวชาญ</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <?php
                                            $show = "pc";
                                            include($root . 'include/el-header-logo.php')
                                            ?>

                                            <ul class="menu">
                                                <li><a href="<?php echo $root; ?>news.php" class="underline-hover">ข่าวสารและกิจกรรม</a></li>
                                                <li><a href="<?php echo $root; ?>career.php" class="underline-hover">ร่วมงานกับเรา</a></li>
                                                <li><a href="<?php echo $root; ?>contact.php" class="underline-hover">ติดต่อเรา</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-menu-ctrl hidden-device-sm">
                        <a class="menu-ctrl" href="javascript:;">
                            <span class="hamburger">
                                <span class="bars">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </header>