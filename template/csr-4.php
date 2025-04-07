<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="csr-4-main">
    <?php
    $hero = [
        "subttl" => "โครงการเพื่อความยั่งยืน",
        "ttl" => "โครงการช่วยเหลือน้องออทิสติก",
        "banner-class" => "banner-with-content",
        "cover" => [
            "pc" => "./assets/media/design/csr-4-hero.jpg",
            "mb" => ""
        ],
        "banner-content" => [
            "icon-countup" => [
                [
                    // "icon" => "diversity",
                    "icon" => "./assets/media/design/icon-svg-test.svg",
                    "subttl-1" => "ปัจจุบันประเทศไทยมีผู้เป็นออทิสติกกว่า",
                    "start-number" => "100,000",
                    "stop-number" => "300,000",
                    "count-duration" => 3000,
                    "unit" => "คน",
                    "subttl-2" => "และดูเหมือนว่า...จะมีแนวโน้มเพิ่มขึ้นเรื่อย ๆ",
                ],
            ]
        ]
    ];

    include($root . "include/sc-hero-template.php");
    ?>

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
        <div class="sc-inner sc-inner--follows">
            <div class="container xl">
                <?php
                $content_arr = [
                    [
                        "ttl" => "LOVE IN THE ART",
                        "desc" => "<p>อาร์เอ็กซ์ กรุ๊ป ตระหนักถึงการสร้างโอกาสให้คนทุกกลุ่มในสังคม เราจึงร่วมมือกับมูลนิธิออทิสติกไทย “ART STORY” สร้างสรรค์แคมเปญดี ๆ เพื่อสังคม กับโปรเจค “LOVE IN THE ART ระบายรอยยิ้มบนกระเป๋าผ้า” ที่ช่วยสร้างงาน และสร้างรายได้ให้แก่น้อง ๆ ออทิสติกในโครงการฯ ผ่านผลงานการออกแบบ แก้วน้ำ หมวก กระเป๋า ร่ม</p>",
                        "img" => [
                            [
                                "pc" => "./assets/media/design/csr-4-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-4-info-1.jpg",
                                "mb" => ""
                            ],
                            [
                                "pc" => "./assets/media/design/csr-4-info-1.jpg",
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
                "image" => "./assets/media/design/dual-image-5.jpg",
                "ttl" => "โครงการสนับสนุนด้านการศึกษา",
                "desc" => "“การสร้างคนคือสิ่งสำคัญที่สุด” บริษัทจึงได้สนับสนุนโครงการต่าง ๆ",
                "link" => $root . "csr-3.php",
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