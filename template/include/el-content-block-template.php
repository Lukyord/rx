<div class="content-block-template">
    <div class="content-container">
        <div class="content">
            <?php
            if (isset($content["ttl"])) {
            ?>
                <div class="content-ttl animate fadeIn">
                    <h2><?= $content["ttl"] ?></h2>
                </div>
            <?php } ?>


            <div class="content-desc animate fadeIn">
                <?= $content["desc"] ?>
            </div>
        </div>
    </div>

    <div class="slide-container animate fadeIn">
        <div class="swiper auto autoplay" data-autoplay-interval="6000">
            <div class="swiper-wrapper">
                <?php
                foreach ($content["img"] as $img) {
                    $section_cover = $img["pc"];
                    $section_cover_m = $img["mb"];
                ?>
                    <div class="swiper-slide">
                        <div class="cover">
                            <?php
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

</div>