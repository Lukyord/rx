<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="service-manufacuring-main">
    <?php
    $hero = [
        "subttl" => "ผลิตภัณฑ์และบริการ",
        "ttl" => "RX Manufacturing",
        "banner-class" => "banner-with-header-text",
        "cover" => [
            "pc" => "./assets/media/design/manufacturing-hero.jpg",
            "mb" => "./assets/media/design/manufacturing-hero.jpg"
        ],
        "banner-header" => [
            "subttl" => "RX Manufacturing",
            "ttl" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง จำกัด ก่อตั้งในปี พศ. 2546 โดยผู้บริหารจากบริษัท อาร์เอ็กซ์ จำกัด"
        ]
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <?php
    $section = [
        "sc-inner-extra-class" => "sc-inner--precedes sc-inner--follows",
        "ttl" => "Rx Manufacturing Profile",
        "desc-1" => "
                <p>
                    บริษัท อาร์เอ็กซ์ จำกัด ซึ่งมีประสบการณ์ด้านธุรกิจยาและเครื่องมือแพทย์มากว่า 30 ปี เริ่มสร้างโรงงานผลิตยาในเดือนตุลาคม 2546 และสร้างโรงงานเสร็จในเดือนสิงหาคม 2547 บนเนื้อที่ 27 ไร่
                 </p>
                    ",
        "desc-2" => "
                <p>
                    โรงงานตั้งอยู่เลขที่ 76 หมู่ 10 ถ. ศาลายา-บางภาษี ต.นราภิรมย์ อ.บางเลน จ.นครปฐม
                </p>
                ",
    ];

    include($root . "include/sc-column-info-text.php");
    ?>

    <?php
    $section = [
        "ttl" => "ผลิตภัณฑ์",
        "sc-inner-extra-class" => "sc-inner--follows sc-inner--precedes",
        "card" => [
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "Air-x"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "Pyramck",
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "AMK"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "One-gerd",
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "Sucovia"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "subttl" => "Sucovia"
            ]
        ]
    ];

    include($root . "include/sc-general-card-info.php");
    ?>

    <section data-section="manufacturing-info">
        <div class="sc-inner sc-inner--follows sc-inner--precedes">
            <div class="container xl">
                <?php
                $content_arr = [
                    [
                        "ttl" => "การควบคุมคุณภาพมาตรฐาน",
                        "desc" => "<p>มีมาตรฐานและวิธีปฏิบัติงานในการตรวจสอบและทดสอบ การควบคุมการบันทึกคุณภาพ เป็นไปตามมาตรฐาน GMP (PIC/s) , ISO 9001 , ISO 14001 และ ISO 17025</p>",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/manufacturing-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/manufacturing-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/manufacturing-info-1.jpg",
                                "mb" => ""
                            ]
                        ]
                    ],
                    [
                        "ttl" => "มาตรฐานและรางวัลที่ได้รับ",
                        "desc" => "
                            <ul class='check-list'>
                               <li>
                                    โรงงานได้รับการรับรองมาตรฐานคุณภาพ (GMP Certificate) จากสำนักงานคณะกรรมการอาหารและยาตั้งแต่ปี พ.ศ. 2547 ที่เริ่มการผลิตยา และผ่านการตรวจประเมินตามแนวทาง GMP (PIC/s) ในปี 2554
                               </li>
                               <li>
                                    ได้เริ่มนำระบบการบริหารคุณภาพทั่วทั้งองค์กร (Total Quality Management) มาใช้ในปี พศ. 2548
                               </li>
                               <li>
                                    <p>บริษัทได้รับรองมาตรฐาน</p>
                                    <ul class='disc'>
                                        <li>ISO 9001:2000 เมื่อวันที่ 18 ธันวาคม 2549</li>
                                        <li>ISO 14001:2004 เมื่อวันที่ เมื่อวันที่ 29 กรกฎาคม 2551</li>
                                        <li>ISO 17025 เมื่อวันที่ 14 ตุลาคม 2553 (วิเคราะห์ตัวยาสำคัญ AMK Tablet)</li>
                                    </ul>
                               </li>
                               <li>
                                    ได้รับเกียรติบัตรเพื่อแสดงว่าได้ให้ความร่วมมือเข้าร่วมโครงการอนุรักษ์พลังงานแบบมีส่วนร่วมโดยโรงงานควบคุมบรรลุผลสำเร็จเป็นอย่างดี ปี 2552 จากกรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงานกระทรวงพลังงาน
                               </li>
                               <li>
                                    ด้รับการประกาศเกียรติคุณเป็นแบบอย่างที่ดีด้านการบริหารงานที่มีความรับผิดชอบต่อสังคมและลูกจ้างในสถานการณ์อุทกภัย ปี 2554 จากกระทรวงแรงงาน
                               </li>
                            </ul>
                        ",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/manufacturing-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/manufacturing-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/manufacturing-info-2.jpg",
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

    <?php
    $sc = [
        "sc-inner-extra-class" => "sc-inner--follows",
        "ttl" => "ติดต่อเรา",
        "desc" => "
        <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus metus quis ultrices consectetur. Fusce quis justo volutpat, fermentum tellus eget, tincidunt libero. Aenean a mauris auctor, eleifend mi non,
        </p>
        ",
        "block-1" => [
            "pc" => "./assets/media/design/manufacturing-dual-image-1.jpg",
            "mb" => "./assets/media/design/manufacturing-dual-image-1.jpg"
        ],
        "block-2" => [
            "pc" => "./assets/media/design/manufacturing-dual-image-2.jpg",
            "mb" => "./assets/media/design/manufacturing-dual-image-2.jpg",
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
                "image" => "./assets/media/design/dual-image-10.jpg",
                "ttl" => "Rexcuer",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "link" => $root . "service-rexcuer.php",
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