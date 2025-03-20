<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-main">
    <?php
    $hero = [
        "subttl" => "เกี่ยวกับเรา",
        "ttl" => "ประวัติและวิสัยทัศน์ของบริษัท",
        "cover" => [
            "pc" => "./assets/media/design/about-hero.jpg",
            "mb" => "./assets/media/design/about-hero.jpg"
        ],
        "banner-header" => [
            "subttl" => "วิสัยทัศน์",
            "ttl" => "สร้างสรรค์ผลิตภัณฑ์และบริการที่เป็นเลิศ สร้างเสริมคุณภาพชีวิตเพื่อทุกคน"
        ]
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="about-info">
        <div class="container xl">
            <div class="card-container" data-card-layout="slider">
                <div class="swiper auto">
                    <div class="swiper-wrapper">
                        <?php
                        $about_info = [
                            [
                                "desc" => "มุ่งเน้นสินค้าที่มีคุณภาพและให้บริการที่เป็นเลิศกับลูกค้าในราคาที่แข่งขันได้",
                                "img" => "./assets/media/design/about-info.jpg"
                            ],
                            [
                                "desc" => "รับผิดชอบต่อพนักงานโดยมอบความมั่นคงในการทำงาน การฝึกอบรม ตลอดจนการพัฒนาตนเองให้ก้าวหน้าเคารพในความคิดริเริ่ม สร้างสรรค์ และส่งเสริมให้พนักงานมีความเจริญก้าวหน้าด้วยศักดิ์ศรีและคุณความดี",
                                "img" => "./assets/media/design/about-info.jpg"
                            ],
                            [
                                "desc" => "พัฒนาความสัมพันธ์กับคู่ค้าบนพื้นฐานของประโยชน์ร่วมกัน",
                                "img" => "./assets/media/design/about-info.jpg"
                            ],
                            [
                                "desc" => "ดำเนินกิจกรรมเพื่อตอบแทนสังคมอย่างเต็มความสามารถ",
                                "img" => "./assets/media/design/about-info.jpg"
                            ]
                        ];

                        foreach ($about_info as $index => $info) {
                        ?>
                            <div class="swiper-slide">
                                <div class="card animate fadeIn" data-card="about-info" data-wow-delay="<?= 0.2 * $index ?>s">
                                    <div class="cover">
                                        <?php
                                        $section_cover = $info["img"];
                                        $section_cover_m = "";
                                        include("include/function-group.php");
                                        ?>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-counter">
                                            <p><?= str_pad($index + 1, 2, "0", STR_PAD_LEFT) ?></p>
                                        </div>
                                        <div class="card-desc">
                                            <h5><?= $info["desc"] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="info-text">
                <div class="info-text-ttl animate fadeIn">
                    <h2>เพราะความใส่ใจ ทำให้เราเติบโต</h2>
                </div>

                <div class="info-text-desc animate fadeIn">
                    <p>บริษัท อาร์เอ็กซ์ จำกัด ก่อตั้งเมื่อปี พ.ศ.2518 เกิดจากการรวมตัวกันของกลุ่มแพทย์ เภสัชกร และนักธุรกิจ เพื่อประกอบกิจการจำหน่ายยาและเครื่องมือแพทย์ให้กับโรงพยาบาล คลินิก และร้านขายยาทั่วประเทศ ปัจจุบันมีทุนจดทะเบียน 120 ล้านบาท สำนักงานตั้งอยู่ที่ อาคาร อาร์เอ็กซ์ ซ.รัชดาภิเษก 64 ถ.รัชดาภิเษก บางซื่อ กรุงเทพฯ 10800</p>
                </div>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <section data-section="about-timeline">
        <div class="sc-inner">
            <div class="container xl">
                <div class="timeline"
                    style="--right-stair: url(../media/design/stair-right.png); --left-stair: url(../media/design/stair-left.png);">

                    <?php
                    $timeline_arr = [
                        [
                            "year" => "1975",
                            "text" => "จดทะเบียน หจก. อาร์เอ็กซ์ ฟามาซูติคัล",
                            "desc" => "Company's registration of RX Pharmaceutical",
                            "lotte" => '<dotlottie-player src="https://lottie.host/9e207a95-2a0f-447a-9e67-98b08f581902/McZAioqtpv.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "1976",
                            "text" => "จดทะเบียน บริษัท อาร์เอ็กซ์ จำกัด",
                            "desc" => "Company's registration of RX Company",
                            "lotte" => '<dotlottie-player src="https://lottie.host/ca8e1e7d-0f9e-4aa9-95d9-df3a27468209/jBa2cyFHdf.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "1984",
                            "text" => "จัดจำหน่ายยา Air-X",
                            "desc" => "Start selling Air-X medicine ",
                            "lotte" => '<dotlottie-player src="https://lottie.host/6998398f-477d-4a3f-a9b4-f063ffde2de8/uehOVpK2DU.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "2003",
                            "text" => "ก่อตั้ง บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง จำกัดและเริ่มธุรกิจให้บริการศูนย์เลสิก (รพ.ยันฮี)",
                            "desc" => "RX Manufacturing was founded and start Lasik center (Yanhee Hospital)",
                            "lotte" => '<dotlottie-player src="https://lottie.host/de09c07e-9044-471a-b27b-9d16b0da8d61/D0DKLgUTUW.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "2013",
                            "text" => "เปิดโกดังเก็บสินค้าใหม่ขนาดพื้นที่ 2,000 Pallets",
                            "desc" => "New warehouse",
                            "lotte" => '<dotlottie-player src="https://lottie.host/5708b4a3-55a3-4e06-a4bc-4f913c834806/WOVvBOGz6t.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "2019",
                            "text" => "เปิดและเริ่มดำเนินธุรกิจโรงประกอบรถพยาบาล REXCUER",
                            "desc" => "Start Rexcuer ambulance service",
                            "lotte" => '<dotlottie-player src="https://lottie.host/0713dcba-d7f4-4c20-908b-55730bb3c64d/PhBKmtC9A4.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "2020",
                            "text" => "เริ่มผลิตและจัดจำหน่ายยา ONE GERD",
                            "desc" => "Start manufaturing and selling ONE GERD",
                            "lotte" => '<dotlottie-player src="https://lottie.host/0a95b928-2d94-40fb-8f04-9fc5be98bba3/9I2kEhow8D.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "2022",
                            "text" => "เปิดให้บริการศูนย์เลสิกแห่งที่ 6 (รพ.ธรรมศาสตร์)",
                            "desc" => "Open the 6th lasik center at Thammasart Hospital",
                            "lotte" => '<dotlottie-player src="https://lottie.host/55dc6bad-8d7c-48fe-a57f-c61a6b7247c9/OYfVVNjpFc.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ],
                        [
                            "year" => "2025",
                            "text" => "ครบรอบ 50 ปี บริษัท อาร์เอ็กซ์ จำกัด",
                            "desc" => "50th year annivesary of RX Pharmaceutical ",
                            "lotte" => '<dotlottie-player src="https://lottie.host/890facdf-82ab-4e8c-9e08-e8defbc2efeb/RXOhbw6ZCu.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>'
                        ]
                    ];

                    foreach ($timeline_arr as $index => $item) {
                        include("include/el-timeline-item.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    $dual_image_block = [
        "block" => [
            [
                "image" => "./assets/media/design/dual-image-3.jpg",
                "ttl" => "นโยบายความยั่งยืน",
                "desc" => "บริษัท อาร์เอ็กซ์ แมนูแฟคเจอริ่ง จำกัด ก่อตั้งในปี พศ. 2546 โดยผู้บริหารจากบริษัท อาร์เอ็กซ์ จำกัด",
                "link" => $root . "csr.php",
                "button-text" => "รายละเอียก"
            ],
            [
                "image" => "./assets/media/design/dual-image-1.jpg",
                "ttl" => "ติดต่อเรา",
                "desc" => "บริษัท อาร์เอ็กซ์ จำกัด<br>93/90 ซอยประชานุกูล 2 ถนนรัชดาภิเษก<br>แขวงบางซื่อ เขตบางซื่อ กรุงเทพฯ 10800",
                "link" => $root . "contact.php",
                "button-text" => "ติดต่อเรา"
            ],
        ]
    ];

    include($root . "include/sc-dual-image-block.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>