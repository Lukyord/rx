<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="csr-1-main">
    <?php
    $hero = [
        "subttl" => "โครงการเพื่อความยั่งยืน",
        "ttl" => "โครงการแผงยาช่วยโลก",
        // "banner-class" => "banner-with-video",
        // "cover-video" => [
        //     "pc" => "./assets/media/design/csr-1-video.mp4",
        //     "mb" => "",
        //     "poster" => "./assets/media/design/csr-1-info-1.jpg"
        // ],
        "banner-class" => "banner-with-content margin-bottom",
        "cover" => [
            "pc" => "./assets/media/design/csr-2-hero.mp4",
            "mb" => ""
        ],
        "banner-content" => [
            "ttl" => "โครงการพลังงานทดแทน",
            "desc" => "สำหรับในส่วนของโรงงานผลิตของบริษัทอาร์เอ็กซ์ แมนูแฟคเจอริ่ง โรงงานผลิตยาในเครือ R.X. Group นอกจากโรงงานจะบำบัดน้ำเสียแล้ว ยังมีความพยายามรักษาสิ่งแวดล้อมมาอย่างยาวนานนับตั้งแต่ปี 2562 โดยได้ติดตั้งโซลาร์เซลล์ซึ่งปัจจุบันสามารถลดการปล่อยก๊าซเรือนกระจกได้มากถึง",
            "icon-countup" => [
                [
                    "icon" => "solar_power",
                    "subttl-1" => "โซลาร์เซลล์ซึ่งปัจจุบันสามารถลดการปล่อยก๊าซเรือนกระจกได้มากถึง",
                    "start-number" => 1000000,
                    "stop-number" => "1,344,421",
                    "count-duration" => 3000,
                    "unit" => "กิโลกรัมต่อปี",
                    "subttl-2" => "หรือเทียบเท่ากับการปลูกต้นไม้ 40,126 ต้น",
                ],
            ]
        ]
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="video-banner">
        <div class="sc-inner sc-inner--bottom-0 sc-inner--top-0">
            <div class="container xl">
                <div class="video-container animate fadeIn">
                    <?php
                    $section_cover = "./assets/media/design/csr-1-video.mp4";
                    $section_cover_m = "";
                    ?>
                    <figure class="object-fit">
                        <video playsinline muted loop src="" class="vdojs" data-vdo-src="<?php echo $section_cover; ?>" data-vdo-srcset="<?php echo $section_cover_m; ?>" poster="./assets/media/design/csr-1-info-1.jpg"></video>
                        <a href="javascript:;" class="video-play-button"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <?php
    $section = [
        "ttl" => "เพราะเราเชื่อว่า “โอกาส”เป็นของทุกคน",
        "sc-inner-extra-class" => "sc-inner--precedes",
        "card" => [
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "10%",
                "subttl" => "ของจำนวนที่พบมีความเป็นอัจฉริยะในบางด้าน เช่น การวาดภาพหรือเล่นดนตรี"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "20%",
                "subttl" => "มีไอคิวต่ำที่ระดับน้อยถึงปานกลาง และอาจมีปัญหาพฤติกรMMรมร่วมด้วย แต่สามารถเรียนร่วมและฝึกอาชีพได้"
            ],
            [
                "cover" => [
                    "pc" => "./assets/media/design/csr-4-slide.jpg",
                    "mb" => "./assets/media/design/csr-4-slide.jpg"
                ],
                "ttl" => "70%",
                "subttl" => "ที่เหลือ ต้องได้รับการดูแลอย่างต่อเนื่อง โดยการบำบัดรักษาที่ต้องผสมผสาน ทั้งด้านการส่งเสริมพัฒนาการ การจัดรูปแบบการศึกษาที่เหมาะสม การส่งเสริมอาชีพ การมีงานทำ-การอยู่ร่วมกันในสังคมของเด็กออทิสติก"
            ]
        ]
    ];

    include($root . "include/sc-general-card-info.php");
    ?>

    <section data-section="csr-info">
        <div class="sc-inner sc-inner--precedes">
            <div class="container xl">
                <?php
                $content_arr = [
                    [
                        "ttl" => "โครงการแผงยาช่วยโลก",
                        "desc" => "<p>“แผงยาช่วยโลก” ไอเดียสร้างสรรค์ช่วยโลกเพื่อความยั่งยืน ภายใต้การนำของ ภก.ชาญชัย อุดมลาภธรรม CEO อาร์เอ็กซ์ กรุ๊ป โครงการดี ๆ ส่งเสริมการจัดการขยะอย่างยั่งยืน โดยนำขยะจากแผงฟอยล์อะลูมิเนียมที่เหลือจากการผลิตภายในโรงงานในการผลิตยาสามัญประจำบ้าน เช่น air x, degas ฯลฯ ที่สร้างขยะมากกว่า 20 ตันต่อปี ยังไม่รวมกับ บรรจุภัณฑ์ที่อยู่ในฝั่งของผู้บริโภคอีกมหาศาล ซึ่งอะลูมิเนียมฟอยล์ดังกล่าวใช้เวลาในการย่อยสลายตามธรรมชาติประมาณ 100 ปี และหากไม่ถูกการจัดการที่ถูกต้องส่งผลเสียต่อสิ่งแวดล้อมอย่างหลีกเลี่ยงไม่ได้ ทางบริษัทฯ จึงต้องการเป็นส่วนหนึ่งในการสร้างความยั่งยืนที่แท้จริง จึงเกิดเป็นโครงการดังกล่าวนี้.</p>",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/csr-1-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-1-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-1-info-1.jpg",
                                "mb" => ""
                            ]
                        ]
                    ],
                    [
                        "desc" => "<p>แผงยาช่วยโลก เป็นโครงการหนึ่งภายใต้ 50 ปี ก้าวที่ยิ่งใหญ่ส่งต่อสุขภาพที่ยั่งยืน โดยอาร์เอ็กซ์ กรุ๊ป และความร่วมมือจากพันธมิตรในหลายภาคส่วน SF Cinema, ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย (SME D Bank), Pure Phamacy, Icare and Pharmax, Nation, WaveMaker, PlanB eleven, มหาวิทยาลัยศรีนครินทรวิโรฒ, มหาวิทยาลัยของแก่น, ร้านขายยาศิริเวช, ร้านขายยาวรมิตร, ร้านยาวีแคร์ และร้านขายยาที่เข้าร่วมโครงการ ที่จะร่วมโครงการในการเป็นจุดรับขยะแผงฟอยล์ มากกว่า 150 จุดทั่วประเทศ โดยโครงการดังกล่าวเปิดรับให้บริจาคแผงยา ทุกตราสินค้า (เป็นแผงยาที่ใช้แล้วในรูปแบบของวัสดุประเภทอะลูมิเนียมฟอยล์ไม่มีแผงพลาสติก) จากผู้บริโภค นำไปเข้าสู่กระบวนการ Upcycling สร้างประโยชน์และเพิ่มมูลค่าขยะเหลือทิ้ง พร้อมสร้างการตระหนักรู้ให้แก่ผู้บริโภคคนไทย ทางบริษัทมีเป้าหมายที่จะเป็นส่วนหนึ่งที่จะรับผิดชอบต่อการเสริมสร้างความรู้ ช่วยจัดการขยะดังกล่าว เพื่อให้กระทบต่อสิ่งแวดล้อมน้อยที่สุด โดยทางบริษัทฯ มีเป้าหมายที่จะลดคาร์บอนไดออกไซด์ (CO2) จากโครงการต่าง ๆ ของบริษัท ให้ได้อย่างน้อย 10,000,000 กิโลกรัมภายในปี 2030</p>",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/csr-1-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-1-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-1-info-2.jpg",
                                "mb" => ""
                            ]
                        ]
                    ],
                    [
                        "desc" => "
                        <p>แผงยาช่วยโลก เป็นโครงการหนึ่งภายใต้ 50 ปี ก้าวที่ยิ่งใหญ่ส่งต่อสุขภาพที่ยั่งยืน โดยอาร์เอ็กซ์ กรุ๊ป</p>
                        <ul class='check-list'>
                            <li>โรงงานได้รับการรับรองมาตรฐานคุณภาพ (GMP Certificate) จากสำนักงานคณะกรรมการอาหารและยาตั้งแต่ปี พ.ศ. 2547 ที่เริ่มการผลิตยา และผ่านการตรวจประเมินตามแนวทาง GMP (PIC/s) ในปี 2554</li>
                            <li>ได้เริ่มนำระบบการบริหารคุณภาพทั่วทั้งองค์กร (Total Quality Management) มาใช้ในปี พศ. 2548</li>
                            <li>
                                <p>บริษัทได้รับรองมาตรฐาน</p>
                                <ul class='disc'>
                                    <li>ISO 9001:2000 เมื่อวันที่ 18 ธันวาคม 2549</li>
                                    <li>ISO 14001:2004 เมื่อวันที่ เมื่อวันที่ 29 กรกฎาคม 2551</li>
                                    <li>ISO 17025 เมื่อวันที่ 14 ตุลาคม 2553 (วิเคราะห์ตัวยาสำคัญ AMK Tablet)</li>
                                </ul>
                            </li>
                        </ul>
                        <ul class='caution-list'>
                            <li>โรงงานได้รับการรับรองมาตรฐานคุณภาพ (GMP Certificate) จากสำนักงานคณะกรรมการอาหารและยาตั้งแต่ปี พ.ศ. 2547 ที่เริ่มการผลิตยา และผ่านการตรวจประเมินตามแนวทาง GMP (PIC/s) ในปี 2554</li>
                            <li>ได้เริ่มนำระบบการบริหารคุณภาพทั่วทั้งองค์กร (Total Quality Management) มาใช้ในปี พศ. 2548</li>
                            <li>
                                <p>บริษัทได้รับรองมาตรฐาน</p>
                                <ul class='disc'>
                                    <li>ISO 9001:2000 เมื่อวันที่ 18 ธันวาคม 2549</li>
                                    <li>ISO 14001:2004 เมื่อวันที่ เมื่อวันที่ 29 กรกฎาคม 2551</li>
                                    <li>ISO 17025 เมื่อวันที่ 14 ตุลาคม 2553 (วิเคราะห์ตัวยาสำคัญ AMK Tablet)</li>
                                </ul>
                            </li>
                        </ul>
                        ",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/csr-1-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-1-info-2.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-1-info-2.jpg",
                                "mb" => ""
                            ]
                        ]
                    ]
                ];

                foreach ($content_arr as $content) {
                    include($root . "include/el-content-block-template.php");
                }
                ?>
            </div>
        </div>
    </section>

    <section data-section="csr-banner">
        <div class="container xl">
            <div class="banner-image">
                <div class="cover">
                    <?php
                    $section_cover = "./assets/media/design/csr-1-banner.jpg";
                    $section_cover_m = "";
                    include("include/function-group.php");
                    ?>
                </div>

                <div class="banner-content">
                    <?php
                    $banner_items_arr = [
                        [
                            "icon" => "pill",
                            "subttl-1" => "อะลูมิเนียมฟอยล์ดังกล่าวใช้เวลาในการย่อยสลายตามธรรมชาติประมาณ",
                            "start-number" => "0",
                            "stop-number" => "100",
                            "count-duration" => 2000,
                            "unit" => "ปี",
                        ],
                        [
                            "icon" => "distance",
                            "subttl-1" => "จุดรับขยะแผงฟอยล์ ทั่วประเทศมากกว่า",
                            "start-number" => "0",
                            "stop-number" => "150",
                            "count-duration" => 2500,
                            "unit" => "จุด",
                        ],
                        [
                            "icon" => "dashboard",
                            "subttl-1" => "สร้างอิฐบล็อกสำหรับนำมาเป็นทางเดินและที่จอดรถผู้พิการ โรงพยาบาลดอยหล่อ",
                            "start-number" => "0",
                            "stop-number" => "5,000",
                            "count-duration" => 2500,
                            "unit" => "ก้อน",
                        ],
                    ];

                    foreach ($banner_items_arr as $item) {
                        include($root . "include/el-banner-icon-countup.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    $sc = [
        "ttl" => "ข้อมูลเพิ่มเติม",
        "desc" => "
        <p>
            อ่านรายละเอียดเพิ่มเติม <a href='" . $root . "csr-1.php'>ได้ที่โครงการแผงยาช่วยโลก</a> <br>
            หรือร่วมโครงการผ่านจุด Drop off ทั่วประเทศ <a href='#outer'>ได้ที่โครงการแผงยาช่วยโลก</a>
        </p>
        ",
        "block-1" => [
            "pc" => "./assets/media/design/csr-1-map-1.jpg",
            "mb" => "./assets/media/design/csr-1-map-1.jpg"
        ],
        "block-2" => [
            "pc" => "./assets/media/design/csr-1-map-2.jpg",
            "mb" => "./assets/media/design/csr-1-map-2.jpg",
        ]
    ];

    include($root . "include/sc-header-desc-dual-block.php");
    ?>

    <?php
    $dual_image_block = [
        "sc-ttl" => "โครงการอื่นๆ",
        "block" => [
            [
                "image" => "./assets/media/design/dual-image-4.jpg",
                "ttl" => "ครงการพลังงานทดแทน",
                "desc" => "สำหรับในส่วนของโรงงานผลิตของบริษัทอาร์เอ็กซ์ แมนูแฟคเจอริ่ง",
                "link" => $root . "csr-2.php",
                "button-text" => "รายละเอียด"
            ],
            [
                "image" => "./assets/media/design/dual-image-5.jpg",
                "ttl" => "โครงการสนับสนุนด้านการศึกษา",
                "desc" => "“การสร้างคนคือสิ่งสำคัญที่สุด” บริษัทจึงได้สนับสนุนโครงการต่าง ๆ",
                "link" => $root . "csr-3.php",
                "button-text" => "รายละเอียด"
            ],
        ]
    ];

    include($root . "include/sc-dual-image-block.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>