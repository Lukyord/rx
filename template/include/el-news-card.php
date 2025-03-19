<div class="card" data-card="news">
    <a href="<?= $root; ?>news-single.php" class="link-overlay">&nbsp;</a>
    <div class="card-image">
        <?php
        $section_cover = "./assets/media/design/news-image-1.jpg";
        $section_cover_m = "";
        include("include/function-group.php");
        ?>
    </div>
    <div class="card-content">
        <div class="card-date">
            <p>12.01.2024</p>
        </div>

        <div class="card-ttl">
            <h5>Health in Harmony 50 Years of Impact 50 ปี ก้าวที่ยิ่งใหญ่ ส่งต่อสุขภาพที่ยั่งยืน</h5>
        </div>

        <div class="card-content-footer">
            <div class="card-desc">
                <p>บริษัท อาร์เอ็กซ์ จำกัด ก่อตั้งเมื่อปี พ.ศ.2518 เกิดจากการรวมตัวกันของกลุ่มแพทย์ เภสัชกร และนักธุรกิจ เพื่อประกอบกิจการจำหน่ายยาและเครื่องมือแพทย์ให้กับโรงพยาบาล คลินิก และร้านขายยาทั่วประเทศ ปัจจุบันมีทุนจดทะเบียน 120 ล้านบาท</p>
            </div>

            <a href="<?= $root; ?>news-single.php" class="<?php if ($news_grid == "featured") {
                                                                echo "button";
                                                            } else {
                                                                echo "underline";
                                                            } ?>">อ่านต่อ</a>
        </div>
    </div>
</div>