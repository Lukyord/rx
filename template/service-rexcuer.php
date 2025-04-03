<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="service-rexcuer-main">
    <?php
    $hero = [
        "subttl" => "ผลิตภัณฑ์และบริการ",
        "ttl" => "Rexcuer (Ambulance)",
        "banner-class" => "banner-with-header-text",
        "cover" => [
            "pc" => "./assets/media/design/rexcuer-hero.jpg",
            "mb" => "./assets/media/design/rexcuer-hero.jpg"
        ],
        "banner-header" => [
            "subttl" => "Rexcuer",
            "ttl" => "Ambulance service 24 hours a day with specially trained and experienced medical teams."
        ]
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <?php
    $section = [
        "sc-inner-extra-class" => "sc-inner--precedes sc-inner--follows",
        "ttl" => "Rexcuer บริการรถพยาบาล มาตรฐานสากล",
        "desc-1" => "
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus metus quis ultrices consectetur. Fusce quis justo volutpat, fermentum tellus eget, tincidunt libero. Aenean a mauris auctor, eleifend mi non, ullamcorper leo. Sed vel libero sed erat malesuada tincidunt. Fusce cursus vestibulum massa, ac condimentum justo mattis eget. Integer eget laoreet mauris, quis rhoncus massa. Etiam nibh lorem, consectetur eu libero vel, tincidunt finibus libero. Vivamus blandit sapien at elit tincidunt, sit amet convallis lectus aliquet. Curabitur a nulla eget arcu tristique elementum ullamcorper non dui. Praesent tincidunt lacus eget finibus volutpat.
                 </p>
                    ",
        "desc-2" => "
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus metus quis ultrices consectetur. Fusce quis justo volutpat, fermentum tellus eget, tincidunt libero. Aenean a mauris auctor, eleifend mi non, ullamcorper leo.
                </p>
                ",
    ];

    include($root . "include/sc-column-info-text.php");
    ?>

    <?php
    $section = [
        "ttl" => "ประเภท",
        "sc-inner-extra-class" => "sc-inner--follows sc-inner--precedes",
        "card" => [
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "รถพยาบาล"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "รถพยาบาล(วีไอพี)",
                "extra-class" => "c-black"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "เก้าอี้นั่งในรถพยาบาล SafetyBelt"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "ไฟกระพริบฉุกเฉินรอบคัน",
                "extra-class" => "c-black"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "วิทยุสื่อสารในรถพยาบาล"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "เก้าอี้นั่งในรถพยาบาล SafetyBelt"
            ]
        ]
    ];

    include($root . "include/sc-general-card-info.php");
    ?>

    <section data-section="rexcuer-info">
        <div class="sc-inner sc-inner--follows sc-inner--precedes">
            <div class="container xl">
                <?php
                $content_arr = [
                    [
                        "ttl" => "เกี่ยวกับ Rexcuer",
                        "desc" => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus metus quis ultrices consectetur. Fusce quis justo volutpat, fermentum tellus eget, tincidunt libero. Aenean a mauris auctor, eleifend mi non, ullamcorper leo. Sed vel libero sed erat malesuada tincidunt. Fusce cursus vestibulum massa, ac condimentum justo mattis eget. Integer eget laoreet mauris, quis rhoncus massa. Etiam nibh lorem, consectetur eu libero vel, tincidunt finibus libero. Vivamus blandit sapien at elit tincidunt, sit amet convallis lectus aliquet. Curabitur a nulla eget arcu tristique elementum ullamcorper non dui. Praesent tincidunt lacus eget finibus volutpat.</p>",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/rexcuer-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/rexcuer-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/rexcuer-info-1.jpg",
                                "mb" => ""
                            ]
                        ]
                    ],
                    [
                        "ttl" => "งานบริการหลังการขาย",
                        "desc" => "
                            <ul class='check-list'>
                                <li>งาน PM รถพยาบาล</li>
                                <li>งานซ่อมรถพยาบาล</li>
                                <li>งาน Refurbish รถพยาบาล</li>
                            </ul>
                        ",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/rexcuer-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/rexcuer-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/rexcuer-info-2.jpg",
                                "mb" => ""
                            ]
                        ]
                    ],
                ];

                foreach ($content_arr as $content) {
                    include($root . "include/el-content-block-template.php");
                }
                ?>
            </div>
        </div>
    </section>

    <section data-section="video-banner">
        <div class="sc-inner sc-inner--bottom-0 sc-inner--follows">
            <div class="container xl">
                <div class="video-container animate fadeIn">
                    <?php
                    $section_cover = "./assets/media/design/rexcuer-video.mp4";
                    $section_cover_m = "";
                    ?>
                    <figure class="object-fit">
                        <video playsinline muted loop src="" class="vdojs" data-vdo-src="<?php echo $section_cover; ?>" data-vdo-srcset="<?php echo $section_cover_m; ?>" poster="./assets/media/design/rexcuer-info-2.jpg"></video>
                        <a href="javascript:;" class="video-play-button"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <?php
    $sc = [
        "ttl" => "ติดต่อเรา",
        "desc" => "
        <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus metus quis ultrices consectetur. Fusce quis justo volutpat, fermentum tellus eget, tincidunt libero. Aenean a mauris auctor, eleifend mi non,
        </p>
        ",
        "block-1" => [
            "pc" => "./assets/media/design/rexcuer-dual-image-1.jpg",
            "mb" => "./assets/media/design/rexcuer-dual-image-1.jpg"
        ],
        "block-2" => [
            "pc" => "./assets/media/design/rexcuer-dual-image-2.jpg",
            "mb" => "./assets/media/design/rexcuer-dual-image-2.jpg",
            "desc" => "<p>177 หมู่ 10 ตำบล นราภิรมย์ อำเภอบางเลน นครปฐม 73130 <a href='#google-map'>Google Maps</a>  <br>
                        Service call : <a href='tel:+66614134879'>061-413-4879</a></p>"
        ]
    ];

    include($root . "include/sc-header-desc-dual-block.php");
    ?>

    <?php
    $dual_image_block = [
        "sc-ttl" => "บริการอื่นๆ",
        "block" => [
            [
                "image" => "./assets/media/design/dual-image-8.jpg",
                "ttl" => "RX Manufacturing",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "link" => $root . "service-manufacturing.php",
                "button-text" => "รายละเอียด"
            ],
            [
                "image" => "./assets/media/design/dual-image-9.jpg",
                "ttl" => "ศูนย์เลสิค",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "link" => $root . "service-lasik.php",
                "button-text" => "รายละเอียด"
            ],
        ]
    ];

    include($root . "include/sc-dual-image-block.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>