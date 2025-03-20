<div class="card animate fadeIn" data-card="product"
    <?php
    if (isset($product_stagger_delay)) {
        echo "data-wow-delay='" . 0.2 * $i . "s'";
    }
    ?>>
    <a href="<?= $root; ?>product-single.php" class="link-overlay">&nbsp;</a>
    <div class="card-image">
        <?php
        $section_cover = "./assets/media/design/product-image-1.png";
        $section_cover_m = "";
        include("include/function-group.php");
        ?>
    </div>
    <div class="card-content">
        <div class="card-ttl">
            <h4>
                AIR-X
                <br> แอร์-เอ็กซ์
            </h4>
        </div>

        <div class="card-desc">
            Simethicone 80 mg. ยาเม็ดแก้ท้องอืด ท้องเฟ้อ ไซเมธิโคน
        </div>
    </div>
</div>