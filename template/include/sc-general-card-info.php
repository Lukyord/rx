<section data-section="general-card-info" class="<?= $section["extra-class"] ?? "" ?>">
    <div class="sc-inner <?= $section["sc-inner-extra-class"] ?? "" ?>">
        <div class="container xl">
            <div class="sc-header">
                <div class="sc-ttl animate fadeIn">
                    <h2><?= $section["ttl"] ?></h2>
                </div>
            </div>

            <div class="card-container" data-card-layout="slider">
                <div class="swiper auto insufficient">
                    <div class="swiper-wrapper">
                        <?php
                        $general_card_arr = $section["card"];

                        foreach ($general_card_arr as $index => $item) {
                        ?>
                            <div class="swiper-slide">
                                <?php include($root . "include/el-general-card.php") ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>