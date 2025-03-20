<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="csr-3-main">
    <?php
    $hero = [
        "subttl" => "โครงการเพื่อความยั่งยืน",
        "ttl" => "โครงการสนับสนุนด้านการศึกษา",
        "banner-class" => "banner-with-content",
        "cover" => [
            "pc" => "./assets/media/design/csr-3-hero.jpg",
            "mb" => ""
        ],
        "banner-content" => [
            "ttl" => "โครงการสนับสนุนด้านการศึกษา",
            "desc" => "นอกจากความยั่งยืนด้านสุขภาพแล้ว บริษัทฯ ยังเล็งเห็นความสำคัญของการสร้างเมล็ดพันธุ์ที่ดีแก่สังคมไทย คือการมีคุณภาพการศึกษาที่ดี เพราะเราเชื่อว่า “การสร้างคนคือสิ่งสำคัญที่สุด” บริษัทจึงได้สนับสนุนโครงการต่าง ๆ ที่สนับสนุนศักยภาพเด็กไทย ไม่ว่าจะเป็นโครงการ X Campus เวทีประกวดคลิปโฆษณา ที่ให้น้อง ๆ นิสิต นักศึกษาได้มาระเบิดไอเดียความคิดสร้างสรรค์ของโลกโฆษณา"
        ]
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="csr-info">
        <div class="sc-inner">
            <div class="container xl">
                <?php
                $content_arr = [
                    [
                        "ttl" => "Marketing Trainee",
                        "desc" => "<p>หรือแม้แต่การเป็นสปอนเซอร์โครงการ Marketing Trainee ซึ่งจัดโดย J-MAT (ชมรมยุวสมาชิกสมาคมการตลาดแห่งประเทศไทย) โดยโครงการนี้เป็นโครงการอบรมพิเศษ เพื่อเตรียมความพร้อมให้กับนักการตลาดรุ่นเยาว์ที่กำลังจะจบการศึกษาระดับปริญญาตรีจากทุกสถาบันทั่วประเทศ ก่อนเข้าสู่โลกการทำงานจริง โดยจะได้รับความรู้ ประสบการณ์ คำแนะนำจากผู้เชี่ยวชาญทางด้านการตลาดระดับประเทศ เป็นการต่อยอดความรู้ของน้อง ๆ อย่างยั่งยืน</p>",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/csr-3-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-3-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-3-info-1.jpg",
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
    $dual_image_block = [
        "sc-ttl" => "โครงการอื่นๆ",
        "block" => [
            [
                "image" => "./assets/media/design/dual-image-6.jpg",
                "ttl" => "โครงการช่วยเหลือน้องออทิสติก",
                "desc" => "สปัจจุบันประเทศไทยมีผู้เป็นออทิสติกกว่า 3 แสนคน",
                "link" => $root . "csr-4.php",
                "button-text" => "รายละเอียด"
            ],
            [
                "image" => "./assets/media/design/dual-image-7.jpg",
                "ttl" => "โครงการแผงยาช่วยโลก",
                "desc" => "ปัจจุบันประเทศไทยมีผู้เป็นออทิสติกกว่า 3 แสนคน",
                "link" => $root . "csr-1.php",
                "button-text" => "รายละเอียด"
            ],


        ]
    ];

    include($root . "include/sc-dual-image-block.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>