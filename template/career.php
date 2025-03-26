<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="career-main">
    <?php
    $hero = [
        "subttl" => "ร่วมงานกับเรา",
        "ttl" => "ร่วมเป็นส่วนหนึ่งของ RX Group",
        "banner-class" => "banner-with-header-text",
        "cover" => [
            "pc" => "./assets/media/design/career-hero.jpg",
            "mb" => "./assets/media/design/career-hero.jpg"
        ],
        "banner-header" => [
            "subttl" => "เป้าหมายร่วมกัน",
            "ttl" => "ส่งต่อสุขภาพที่ยั่งยืน"
        ]
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="career-list">
        <div class="sc-inner">
            <div class="container xl">
                <div class="content-with-sub-tabs">
                    <div class="sub-tabs">
                        <?php
                        $sub_tab_arr = [
                            [
                                "text" => "RX Group",
                                "link" => "#",
                            ],
                            [
                                "text" => "RX Manufacturing",
                                "link" => "#",
                            ],
                            [
                                "text" => "ศูนย์เลสิค",
                                "link" => "#",
                            ]
                        ];

                        include($root . "include/el-sub-tabs.php");
                        ?>
                    </div>
                    <div class="content">
                        <div class="card-container" data-card-layout="grid">
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                $card = [
                                    "department" => "RX Group",
                                    "ttl" => "ผู้จัดการฝ่ายขายผลิตภัณฑ์ยาและเครื่องมือแพทย์",
                                    "number" => 1,
                                    "hour" => "Full Time",
                                    "team" => "แผนกฝ่ายขาย",
                                    "jd" => [
                                        "มีความรู้และประสบการณ์ งานขาย ในสินค้าหรือบริการในประเภทธุรกิจนั้น ๆ",
                                        "มีประสบการณ์เป็นผู้จัดการฝ่ายขายมาก่อน",
                                        "มีทักษะในการติดต่อสื่อสารกับบุคคลภายนอกเป็นอย่างดี",
                                        "มีทักษะในการติดต่อสื่อสารกับบุคคลภายนอกเป็นอย่างดี"
                                    ],
                                    "link" => [
                                        "link" => $root . "career-single.php",
                                        "text" => "สมัครงาน"
                                    ],


                                ];

                                include($root . "include/el-career-card.php");
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>