<section data-section="hero-template">
    <div class="container xl">
        <div class="hero-template-layout">
            <div class="sc-header">
                <div class="sc-subttl animate fadeIn">
                    <p><?= $hero["subttl"] ?></p>
                </div>
                <div class="sc-ttl animate fadeIn">
                    <h1><?= $hero["ttl"] ?></h1>
                </div>
            </div>

            <div class="hero-banner <?= $hero["banner-class"] ?>">
                <!-- COVER -->
                <?php
                if (isset($hero["cover"]["pc"])) {
                ?>
                    <div class="cover inner-parallax">
                        <?php
                        $section_cover = $hero["cover"]["pc"];
                        $section_cover_m = $hero["cover"]["mb"];
                        include("include/function-group.php");
                        ?>
                    </div>
                <?php } ?>

                <!-- COVER VIDEO -->
                <?php
                if (isset($hero["cover-video"]["pc"])) {
                    $section_cover = $hero["cover-video"]["pc"];
                    $section_cover_m = $hero["cover-video"]["mb"];
                ?>
                    <div class="cover">
                        <figure class="object-fit">
                            <video playsinline muted loop src="" class="vdojs" data-vdo-src="<?php echo $section_cover; ?>" data-vdo-srcset="<?php echo $section_cover_m; ?>"></video>
                            <a href="javascript:;" class="video-play-button"></a>
                        </figure>
                    </div>
                <?php } ?>

                <!-- BANNER HEADER -->
                <?php
                if (isset($hero["banner-header"])) {
                ?>
                    <div class="banner-header">
                        <div class="banner-subttl">
                            <p data-split data-split-animate><?= $hero["banner-header"]["subttl"] ?></p>
                        </div>
                        <div class="banner-ttl">
                            <h2 data-split data-split-animate><?= $hero["banner-header"]["ttl"] ?></h2>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>