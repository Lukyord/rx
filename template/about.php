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

    <section data-section="about-timeline">
        <div class="sc-inner">
            <div class="container">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-text">
                            <div class="year animate fadeInLeft">
                                <p>1975</p>
                            </div>
                            <div class="text animate fadeInLeft">
                                <h4>จดทะเบียน หจก. อาร์เอ็กซ์ ฟามาซูติคัล</h4>
                            </div>
                            <div class="descriotion animate fadeInLeft">
                                Company's registration of RX Pharmaceutical
                            </div>
                        </div>
                        <div class="lotte"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>