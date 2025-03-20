<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="csr-2-main">
    <?php
    $hero = [
        "subttl" => "โครงการเพื่อความยั่งยืน",
        "ttl" => "โครงการพลังงานทดแทน",
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
                    "start-number" => "1,000,000",
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

    <?php
    $dual_image_block = [
        "sc-ttl" => "โครงการอื่นๆ",
        "block" => [
            [
                "image" => "./assets/media/design/dual-image-5.jpg",
                "ttl" => "โครงการสนับสนุนด้านการศึกษา",
                "desc" => "“การสร้างคนคือสิ่งสำคัญที่สุด” บริษัทจึงได้สนับสนุนโครงการต่าง ๆ",
                "link" => $root . "csr-3.php",
                "button-text" => "รายละเอียด"
            ],
            [
                "image" => "./assets/media/design/dual-image-6.jpg",
                "ttl" => "โครงการช่วยเหลือน้องออทิสติก",
                "desc" => "สปัจจุบันประเทศไทยมีผู้เป็นออทิสติกกว่า 3 แสนคน",
                "link" => $root . "csr-4.php",
                "button-text" => "รายละเอียด"
            ],

        ]
    ];

    include($root . "include/sc-dual-image-block.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>