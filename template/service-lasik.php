<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="service-lasik-main">
    <?php
    $hero = [
        "subttl" => "ผลิตภัณฑ์และบริการ",
        "ttl" => "ศูนย์เลสิค",
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="lasik-hero">
        <div class="sc-inner sc-inner--top-0 sc-inner--precedes">
            <div class="container xl">
                <div class="content">
                    <div class="slide">
                        <div class="swiper auto fade">
                            <div class="swiper-wrapper">
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    $card = [
                                        "link" => $root . "news-single.php",
                                        "cover" => [
                                            "pc" => "./assets/media/design/lasik-slide-1.jpg",
                                            "mb" => "./assets/media/design/lasik-slide-1.jpg"
                                        ],
                                        "date" => "12.01.2024",
                                        "ttl" => "SMILE with your eyes, Rely on Praram 9",
                                    ];
                                ?>
                                    <div class="swiper-slide">
                                        <?php
                                        include($root . "include/el-lasik-slide-card.php");
                                        ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="static">
                        <?php
                        $card = [
                            "link" => $root . "news-single.php",
                            "cover" => [
                                "pc" => "./assets/media/design/lasik-slide-2.jpg",
                                "mb" => "./assets/media/design/lasik-slide-2.jpg"
                            ],
                            "date" => "12.01.2024",
                            "ttl" => "SMILE with your eyes, Rely on Praram 9",
                        ];
                        include($root . "include/el-lasik-slide-card.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $section = [
        "sc-inner-extra-class" => "sc-inner--follows sc-inner--precedes",
        "ttl" => "เลสิกคืออะไร รักษาสายตาแบบใดบ้าง",
        "desc-1" => '
                <p>
                    <strong>"เลสิค"</strong> เป็นคําเรียกโดยรวมของการผ่าตัดแก้ไขสายตา โดยการยิงเลเซอร์ที่กระจกตา คําว่า LASIK ย่อมาจาก Laser In Situ Keratomileusis สามารถแก้ไขสายตาผิดปกติ ได้แก่ สายตาสั้น สายตายาว สายตาเอียง โดยกําเนิด โดยมุ่งเน้นการแก้ไขที่กระจกตาเป็นหลัก
                    <br><br>
                    <strong>ข้อดีของการทําเลสิค</strong> <br>
                    ความรู้สึกเป็นอิสระ ไม่ต้องกังวลหรือวุ่นวายกับการใส่แว่นหรือคอนแทคเลนส์ สะดวกสบายในการใช้ชีวิตและกิจกรรมที่ชื่นชอบได้ง่ายขึ้น และยังถือเป็นการปรับเปลี่ยนบุคลิกภาพให้ดูดีขึ้นอีกด้วย
                 </p>
                    ',
        "desc-2" => '
                <p>
                    <strong>เลสิคสามารถรักษาตาที่ผิดปกติรูปแบบใดได้บ้าง</strong> <br>
                    <ul class="check-list">
                        <li>
                            <p>
                                <strong>สายตาสั้น (Myopia)</strong><br>
                                คนไข้ที่มองเห็นวัตถุอยู่ไกลไม่ชัด แต่ บอกชัด มีสาเหตุมาจากกระจกตา โค้งมากเกินไป หรือกระบอกตายาว เกินไป
                            </p>
                        </li> 
                        <li>
                            <p>
                                <strong>สายตายาว (Hyperopia)</strong><br>
                                คนไข่จะมองเห็นวัตถุที่อยู่ใกล้ได้ไม่ชัด สาเหตุมาจากกระจกตาโค้งน้อยกว่าปกต (แบน) หรือกระบอกตาสั่นเกินไป หรือหากเป็นสายตายาวตามวัย มักจะมาจากสาเหตุของกล้ามเนื้อตา เสื่อมสภาพลงตามวัย
                            </p>
                        </li> 
                        <li>
                            <p>
                                <strong>สายตาเอียง (Astigmatism)</strong><br>คนไข้ของเห็นภาพไม่ชัดเจน เพราะ มีการหักเหของแสงที่ตกกระทบโฟกัส ที่จอประสาทตาไม่สม่าเสมอในระนาบเดียวกัน                            
                            </p>
                        </li> 
                        <li>
                            <p>
                                <strong>สายตาสั้นด้วยและมีสายตายาวตามวัย</strong><br>
                                อาการนี้เกิดจากกระบวนการสายตาสั้นตามปกติ ซึ่งเกิดจากกระจกตาโค้งเกินไปได้ไม่ชัด แต่เมื่อมีอายุมากขึ้นกล้ามเนื้อหรือกระบอกตายาวเกินไป ทําให้มองไกล ที่ใช้หักเหแสงของกระจกตาเริ่มเสื่อมลงจึงไม่มีกําลังมากพอที่จะบีบกระจกตา ให้โป่งออกเป็นเลนส์นูนได้เหมือนเดิม ทําให้มองใกล้ได้ไม่ชัด กรณีเช่นนี้สามารถรักษาด้วยการทําเลสิคได้เช่นกัน
                            </p>
                        </li> 
                    </ul>
                </p>
                ',
    ];

    include($root . "include/sc-column-info-text.php");
    ?>

    <?php
    $section = [
        "sc-inner-extra-class" => "sc-inner--follows sc-inner--precedes",
        "ttl" => "คุณสมบัติทั่วไปที่เหมาะสมเข้ารับการผ่าตัดแก้ไขสายตา",
        "desc-1" => '
                    <ul class="check-list">
                        <li>
                           ต้องเป็นผู้ป่วย ที่มีอายุตั้งแต่ 18-50 ปี และค่าสายตาคงที่ (เปลี่ยนแปลงได้ไม่เกิน 50 (0.5D)ในช่วง6 เดือน - 1 ปี )
                        </li>                       
                    </ul>
                    <ul class="caution-list">
                        <li>
                            ไม่อยู่ระหว่างการ ตั้งครรภ์หรือให้นมบุตร ไม่มีโรคของกระจกตา เช่น กระจกตาย้วย ตาแห้งรุนแรง หรือโรคตาอื่น ๆ ที่มีผลต่อการมองเห็น เช่น จอประสาทตาหลุด
                        </li>
                    </ul>
                    ',
        "desc-2" => '
                    <ul class="caution-list">
                        <li>
                            ไม่มีโรคประจําตัว อื่น ๆ ที่รุนแรง เช่น เบาหวานที่ควบคุมไม่ได้ โรคกลุ่มภูมิแพ้ตัวเอง เช่น SLE, โรคซัว หรือโรคภูมิแพ้รุนแรง                        
                        </li>
                    </ul>
                    <ul class="caution-list">
                        <li>
                            ไม่มีโรคในกลุ่ม จิตเวช ที่มีผลต่อ การปรับตัวและความคาด หวังที่เหมาะสมหลังการผ่าตัด
                        </li>
                    </ul>
                ',
    ];

    include($root . "include/sc-column-info-text.php");
    ?>

    <section data-section="lasik-info">
        <div class="sc-inner sc-inner--follows sc-inner--precedes">
            <div class="container xl">
                <?php
                $content_arr = [
                    [
                        "ttl" => "เกี่ยวกับเรา",
                        "desc" => "<p>ศูนย์รักษาเฉพาะทางด้านจักษุวิทยา สำหรับรักษาผู้ที่มีปัญหาสายตาที่ผิดปกติ ไม่ว่าจะเป็นสายตาสั้น สายตาเอียง สายตายาวแต่กำเนิดหรือสายตายาวตามอายุ โดยความร่วมมือกับโรงพยาบาลชั้นนำ และทีมจักษุแพทย์ทางจอประสาทตาและเลสิก ด้วยเทคโนโลยีที่ทันสมัยในการตรวจวินิจฉัยและการผ่าตัดแก้ไขสายตา  พร้อมให้บริการโดยเจ้าหน้าที่ที่มีความเชี่ยวชาญ และความเอาใจใส่ในการให้คำปรึกษากว่า 6 ศูนย์บริการ พร้อมให้บริการครอบคลุมพื้นที่กรุงเทพมหานครและจังหวัดใกล้เคียง เดินทางง่าย สะดวกสบาย</p>",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/lasik-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/lasik-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/lasik-info-1.jpg",
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
    $section = [
        "ttl" => "ประเภท",
        "sc-inner-extra-class" => "sc-inner--follows",
        "card" => [
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "ศูนย์เลสิค พระราม 9",
                "subttl" => "
                    สถานที่ตั้ง : ชั้น 9 โรงพยาบาลพระราม9 <br>
                    เวลาเปิดทำการ : 8.00 - 17.00 น. <br>
                    เบอร์โทรศัพท์ : <a href='tel:+66892014238' class='underline'>089-201-4238</a>
                ",
                "footer" => [
                    "avater" => "./assets/media/design/lasik-center.jpg",
                    "link" => "#outer"
                ]
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "ศูนย์เลสิค พระราม 9",
                "subttl" => "
                    สถานที่ตั้ง : ชั้น 9 โรงพยาบาลพระราม9 <br>
                    เวลาเปิดทำการ : 8.00 - 17.00 น. <br>
                    เบอร์โทรศัพท์ : <a href='tel:+66892014238' class='underline'>089-201-4238</a>
                ",
                "footer" => [
                    "avater" => "./assets/media/design/lasik-center.jpg",
                    "link" => "#outer"
                ]
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "ศูนย์เลสิค พระราม 9",
                "subttl" => "
                    สถานที่ตั้ง : ชั้น 9 โรงพยาบาลพระราม9 <br>
                    เวลาเปิดทำการ : 8.00 - 17.00 น. <br>
                    เบอร์โทรศัพท์ : <a href='tel:+66892014238' class='underline'>089-201-4238</a>
                ",
                "footer" => [
                    "avater" => "./assets/media/design/lasik-center.jpg",
                    "link" => "#outer"
                ]
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "ศูนย์เลสิค พระราม 9",
                "subttl" => "
                    สถานที่ตั้ง : ชั้น 9 โรงพยาบาลพระราม9 <br>
                    เวลาเปิดทำการ : 8.00 - 17.00 น. <br>
                    เบอร์โทรศัพท์ : <a href='tel:+66892014238' class='underline'>089-201-4238</a>
                ",
                "footer" => [
                    "avater" => "./assets/media/design/lasik-center.jpg",
                    "link" => "#outer"
                ]
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "ศูนย์เลสิค พระราม 9",
                "subttl" => "
                    สถานที่ตั้ง : ชั้น 9 โรงพยาบาลพระราม9 <br>
                    เวลาเปิดทำการ : 8.00 - 17.00 น. <br>
                    เบอร์โทรศัพท์ : <a href='tel:+66892014238' class='underline'>089-201-4238</a>
                ",
                "footer" => [
                    "avater" => "./assets/media/design/lasik-center.jpg",
                    "link" => "#outer"
                ]
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "ศูนย์เลสิค พระราม 9",
                "subttl" => "
                    สถานที่ตั้ง : ชั้น 9 โรงพยาบาลพระราม9 <br>
                    เวลาเปิดทำการ : 8.00 - 17.00 น. <br>
                    เบอร์โทรศัพท์ : <a href='tel:+66892014238' class='underline'>089-201-4238</a>
                ",
                "footer" => [
                    "avater" => "./assets/media/design/lasik-center.jpg",
                    "link" => "#outer"
                ]
            ],
        ]
    ];

    include($root . "include/sc-general-card-info.php");
    ?>

    <section data-section="image-banner">
        <div class="container xl">
            <div class="image-container">
                <div class="cover">
                    <?php
                    $section_cover = "./assets/media/design/lasik-banner.jpg";
                    $section_cover_m = "";
                    include("include/function-group.php");
                    ?>
                </div>
                <div class="image-content">
                    <div class="image-subttl animate fadeIn">
                        <p data-split data-split-animate>ศูนย์เลสิค</p>
                    </div>
                    <div class="image-ttl animate fadeIn">
                        <h2 data-split data-split-animate>ทีมจักษุแพทย์เฉพาะทาง</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="review">
        <div class="sc-inner">
            <div class="container xl">
                <div class="sc-header">
                    <div class="sc-ttl">
                        <h2>รีวิวประสบการณ์จากผู้เข้ารับบริการ</h2>
                    </div>
                </div>

                <div class="card-container" data-card-layout="slider">
                    <div class="swiper auto">
                        <div class="swiper-wrapper">
                            <?php
                            $card_arr = [
                                [
                                    "iframe-link" => "https://www.youtube.com/embed/IpFX2vq8HKw?si=HthACJtT-cr1nAu-",
                                    "cover" => [
                                        "pc" => "./assets/media/design/lasik-review-cover.jpg",
                                        "mb" => "./assets/media/design/lasik-review-cover.jpg"
                                    ],
                                    "subttl" => "คุณจอส เวอาห์"
                                ]
                            ];

                            foreach ($card_arr as $index => $card) {
                            ?>
                                <div class="swiper-slide">
                                    <?php
                                    include($root . "include/el-review-card.php");
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                "image" => "./assets/media/design/dual-image-8.jpg",
                "ttl" => "RX Manufacturing",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "link" => $root . "service-manufacturing.php",
                "button-text" => "รายละเอียด"
            ],
        ]
    ];

    include($root . "include/sc-dual-image-block.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>