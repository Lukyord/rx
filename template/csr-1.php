<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="csr-1-main">
    <?php
    $hero = [
        "subttl" => "โครงการเพื่อความยั่งยืน",
        "ttl" => "โครงการแผงยาช่วยโลก",
        "banner-class" => "banner-with-video",
        "cover-video" => [
            "pc" => "./assets/media/design/csr-1-video.mp4",
            "mb" => ""
        ],
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="csr-info">
        <div class="sc-inner">
            <div class="container">
                <div class="content-block-template">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cover">
                                    <?php
                                    $section_cover = "./assets/media/design/csr-1-info-1.jpg";
                                    $section_cover_m = "";
                                    include("include/function-group.php");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="content-ttl">
                            <h2>โครงการแผงยาช่วยโลก</h2>
                        </div>

                        <div class="content-desc">
                            <p>“แผงยาช่วยโลก” ไอเดียสร้างสรรค์ช่วยโลกเพื่อความยั่งยืน ภายใต้การนำของ ภก.ชาญชัย อุดมลาภธรรม CEO อาร์เอ็กซ์ กรุ๊ป โครงการดี ๆ ส่งเสริมการจัดการขยะอย่างยั่งยืน โดยนำขยะจากแผงฟอยล์อะลูมิเนียมที่เหลือจากการผลิตภายในโรงงานในการผลิตยาสามัญประจำบ้าน เช่น air x, degas ฯลฯ ที่สร้างขยะมากกว่า 20 ตันต่อปี ยังไม่รวมกับ บรรจุภัณฑ์ที่อยู่ในฝั่งของผู้บริโภคอีกมหาศาล ซึ่งอะลูมิเนียมฟอยล์ดังกล่าวใช้เวลาใน
                                การย่อยสลายตามธรรมชาติประมาณ 100 ปี และหากไม่ถูกการจัดการที่ถูกต้องส่งผลเสียต่อ
                                สิ่งแวดล้อมอย่างหลีกเลี่ยงไม่ได้ ทางบริษัทฯ จึงต้องการเป็นส่วนหนึ่งในการสร้างความยั่งยืน
                                ที่แท้จริง จึงเกิดเป็นโครงการดังกล่าวนี้.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>