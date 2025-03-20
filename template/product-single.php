<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="product-single-main">
    <section data-section="product-single">
        <?php
        $product = [
            [
                "variation" => "air-x",
                "id" => "air-x",
                "image" => [
                    "./assets/media/design/product-image-1.png",
                    "./assets/media/design/product-image-1.png",
                    "./assets/media/design/product-image-1.png",
                ],
                "name_en" => "AIR-X",
                "name_th" => "แอร์-เอ็กซ์",
            ],
            [
                "variation" => "air-x SF",
                "id" => "air-x-sf",
                "image" => [
                    "./assets/media/design/product-image-1.png",
                    "./assets/media/design/product-image-1.png",
                    "./assets/media/design/product-image-1.png",
                ],
                "name_en" => "AIR-X SF",
                "name_th" => "แอร์-เอ็กซ์ เอสเอฟ",
            ],
            [
                "variation" => "air-x 120",
                "id" => "air-x-120",
                "image" => [
                    "./assets/media/design/product-image-1.png",
                    "./assets/media/design/product-image-1.png",
                    "./assets/media/design/product-image-1.png",
                ],
                "name_en" => "AIR-X 120",
                "name_th" => "แอร์-เอ็กซ์ 120",
            ]
        ]
        ?>

        <div class="sc-inner">
            <div class="container lg">
                <div class="tab-container">
                    <div class="gallery">
                        <?php
                        foreach ($product as $index => $item) {
                        ?>
                            <div class="tab-content <?= $index == 0 ? "active" : "" ?>" id="<?= $item["id"]; ?>">
                                <div class="swiper auto">
                                    <div class="swiper-wrapper">
                                        <?php
                                        foreach ($item["image"] as $img) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="slide-image">
                                                    <?php
                                                    $section_cover = $img;
                                                    $section_cover_m = "";
                                                    include("include/function-group.php");
                                                    ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="tab-links">
                            <div class="swiper auto insufficient">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($product as $index => $item) {
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="tab animate fadeIn">
                                                <a
                                                    href="#<?php echo $item["id"]; ?>"
                                                    class="open-sibling-tab <?php if ($index == 0) echo "active" ?>">
                                                    <?= $item["variation"] ?>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <?php
                        foreach ($product as $index => $item) {
                        ?>
                            <div class="tab-content <?= $index == 0 ? "active" : "" ?>" id="<?= $item["id"]; ?>-sibling-tab">
                                <div class="product-header">
                                    <div class="product-ttl">
                                        <h2><?= $item["name_en"] ?></h2>
                                    </div>
                                    <div class="product-subttl">
                                        <p><?= $item["name_th"] ?></p>
                                    </div>
                                </div>

                                <div class="product-body"></div>

                                <div class="product-footer">
                                    <a href="#outer" class="button filled">
                                        ติดต่อสั่งซื้อ
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>