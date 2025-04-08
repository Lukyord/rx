<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <section data-section="index-hero-banner">
        <div class="container xl">
            <div class="card-container" data-card-layout="slider">
                <div class="swiper auto" data-slidespergroup="3">
                    <div class="swiper-wrapper">
                        <?php
                        $hero_banner = [
                            [
                                "image" => "./assets/media/design/index-hero-1.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "service-manufacturing.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-2.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "products.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-3.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "service-lasik.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-1.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "service-manufacturing.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-2.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "products.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-3.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "service-lasik.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-1.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "service-manufacturing.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-2.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "products.php"
                            ],
                            [
                                "image" => "./assets/media/design/index-hero-3.jpg",
                                "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                                "desc" => "โรงงานผลิตยา<br>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s), ISO 9001 , ISO 14001 และ ISO 17025",
                                "link" => "service-lasik.php"
                            ]
                        ];

                        foreach ($hero_banner as $key => $value) {
                        ?>
                            <div class="swiper-slide">
                                <div class="card" data-card="index-banner-slide">
                                    <div class="cover">
                                        <div class="card-image animate matrixZoomOut">
                                            <?php
                                            $section_cover = $value["image"];
                                            $section_cover_m = "";
                                            include("include/function-group.php");
                                            ?>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="card-ttl">
                                                <h3 data-split data-split-animate><?= $value["ttl"] ?></h3>
                                            </div>

                                            <div class="card-desc">
                                                <p><?= $value["desc"] ?></p>
                                            </div>
                                        </div>

                                        <a href="<?= $root . $value["link"] ?>" class="card-link">
                                            <i class="ic ic-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination custom show-sm"></div>
                    <div class="swiper-button-prev hidden-device-sm"></div>
                    <div class="swiper-button-next hidden-device-sm"></div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="bento-info">
        <div class="container xl">
            <div class="bento-container">
                <div class="box">
                    <div class="cover inner-parallax">
                        <?php
                        $section_cover = "./assets/media/design/bento-1.jpg";
                        $section_cover_m = "./assets/media/design/bento-1-mb.jpg";
                        include("include/function-group.php");
                        ?>
                    </div>

                    <div class="box-content">
                        <div class="box-ttl animate fadeIn">
                            <h2>Health in Harmony 50 Years of Impact 50 ปี ก้าวที่ยิ่งใหญ่ ส่งต่อสุขภาพที่ยั่งยืน</h2>
                        </div>
                        <div class="box-footer">
                            <div class="box-desc animate fadeIn">
                                <p>
                                    บริษัท อาร์เอ็กซ์ จำกัด ก่อตั้งเมื่อปี พ.ศ.2518 เกิดจากการรวมตัวกันของกลุ่มแพทย์ เภสัชกร และนักธุรกิจ เพื่อประกอบกิจการจำหน่ายยาและเครื่องมือแพทย์ให้กับโรงพยาบาล คลินิก และร้านขายยาทั่วประเทศ ปัจจุบันมีทุนจดทะเบียน 120 ล้านบาท
                                </p>
                            </div>
                            <a href="<?= $root ?>about.php" class="button white animate fadeIn">
                                อ่านต่อ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="cover inner-parallax">
                        <?php
                        $section_cover = "./assets/media/design/bento-2.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
                <div class="box">
                    <div class="cover inner-parallax">
                        <?php
                        $section_cover = "./assets/media/design/bento-3.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
                <div class="box">
                    <div class="cover inner-parallax">
                        <?php
                        $section_cover = "./assets/media/design/bento-4.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="our-service">
        <div class="sc-inner sc-inner--follows sc-inner--precedes">
            <div class="container xl">
                <div class="sc-header">
                    <div class="sc-ttl animate fadeIn">
                        <h2>บริการของเรา</h2>
                    </div>
                </div>

                <div class="sc-desc animate fadeIn">
                    <p>บริษัท อาร์เอ็กซ์ จำกัด ก่อตั้งเมื่อปี พ.ศ.2518 เกิดจากการรวมตัวกันของกลุ่มแพทย์ เภสัชกร และนักธุรกิจ เพื่อประกอบกิจการจำหน่ายยาและเครื่องมือแพทย์ให้กับโรงพยาบาล คลินิก และร้านขายยาทั่วประเทศ ปัจจุบันมีทุนจดทะเบียน 120 ล้านบาท</p>
                </div>

                <ul class="service-list">
                    <li class="animate fadeIn"><a class="underline-hover" href="<?= $root ?>service-rexcuer.php">Rexcuer (Ambulance)</a></li>
                    <li class="animate fadeIn"><a class="underline-hover" href="<?= $root ?>service-manufacturing">ผลิตยา</a></li>
                    <li class="animate fadeIn"><a class="underline-hover" href="<?= $root ?>products.php">จำหน่ายเครื่องมือแพทย์</a></li>
                    <li class="animate fadeIn"><a class="underline-hover" href="<?= $root ?>products.php">จำหน่ายยา</a></li>
                    <li class="animate fadeIn"><a class="underline-hover" href="<?= $root ?>service-lasik.php">ศูนย์เลสิค</a></li>
                </ul>

                <div class="swipe-notice hidden-device-sm animate fadeIn">
                    <p>เลื่อนเพื่อดูเพิ่มเติม</p>
                    <i class="ic ic-swipe"></i>
                </div>

                <div class="service-diagram-container animate fadeIn">
                    <div class="service-diagram">
                        <div class="image default">
                            <?php
                            $section_cover = "./assets/media/design/service-default.png";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>

                        <?php
                        $service_arr = [
                            [
                                "ttl" => "Rexcuer",
                                "link" => "service-rexcuer.php"
                            ],
                            [
                                "ttl" => "ผลิตยา",
                                "link" => "service-manufacturing.php"
                            ],
                            [
                                "ttl" => "จำหน่าย<br class='hidden-device-sm' />เครื่องมือแพทย์",
                                "link" => "products.php"
                            ],
                            [
                                "ttl" => "จำหน่ายยา",
                                "link" => "products.php"
                            ],
                            [
                                "ttl" => "ศูนย์เลสิค",
                                "link" => "service-lasik.php"
                            ]
                        ];

                        foreach ($service_arr as $index => $value) {
                        ?>
                            <div class="image js-link-hover">
                                <a href="<?= $root . $value["link"] ?>" class="hover-object">
                                    <div class="clip-path-area"></div>
                                    <p class="service-ttl"><?= $value["ttl"] ?></p>
                                </a>
                                <?php
                                $section_cover = "./assets/media/design/service-hover-" . $index + 1 . ".png";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="featured-product">
        <div class="sc-inner sc-inner--follows sc-inner--precedes">
            <div class="container xl">
                <div class="sc-header justify-between">
                    <div class="sc-ttl animate fadeIn">
                        <h2>ผลิตภัณฑ์ของเรา</h2>
                    </div>

                    <a href="<?= $root ?>product.php" class="button">
                        ดูทั้งหมด
                    </a>
                </div>

                <div class="card-container" data-card-layout="slider">
                    <div class="swiper auto">
                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 1; $i <= 6; $i++) {
                                $product_stagger_delay = true
                            ?>
                                <div class="swiper-slide">
                                    <?php include('include/el-product-card.php') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="featured-news">
        <div class="sc-inner sc-inner--follows sc-inner--bottom-0">
            <div class="container xl">
                <div class="sc-header justify-between">
                    <div class="sc-ttl animate fadeIn">
                        <h2>ข่าวสาร</h2>
                    </div>

                    <a href="<?= $root ?>news.php" class="button">
                        ดูทั้งหมด
                    </a>
                </div>

                <div class="featured-news">
                    <?php
                    $news_grid = "featured";
                    include('include/el-news-card.php'); ?>
                </div>

                <div class="card-container" data-card-layout="slider">
                    <div class="swiper auto">
                        <div class="swiper-wrapper">
                            <?php
                            $news_grid = "default";
                            for ($i = 1; $i <= 3; $i++) {
                            ?>
                                <div class="swiper-slide">
                                    <?php include('include/el-news-card.php'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $dual_image_block = [
        "block" => [
            [
                "image" => "./assets/media/design/dual-image-1.jpg",
                "ttl" => "ติดต่อเรา",
                "desc" => "บริษัท อาร์เอ็กซ์ จำกัด<br>93/90 ซอยประชานุกูล 2 ถนนรัชดาภิเษก<br>แขวงบางซื่อ เขตบางซื่อ กรุงเทพฯ 10800",
                "link" => $root . "contact.php",
                "button-text" => "ติดต่อเรา"
            ],
            [
                "image" => "./assets/media/design/dual-image-2.jpg",
                "ttl" => "ร่วมงานกับเรา",
                "desc" => "มาร่วมเป็นส่วนหนึ่งของการเติบโต",
                "link" => $root . "career.php",
                "button-text" => "ร่วมงาน"
            ]
        ]
    ];

    include($root . "include/sc-dual-image-block.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>