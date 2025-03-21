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

                                <div class="product-body">
                                    <div class="product-body-scroll" data-lenis-prevent>
                                        <div class="entry-content">
                                            <p>
                                                ยาเม็ดเเก้ท้องอืด ท้องเฟ้อ ไซเมธิโคน <br>
                                                ใน1 เม็ด ประกอบด้วยตัวยาสำคัญคือ Simethicone 80 mg. <br>
                                                มี 3 รสชาติ <br>
                                                1.รสมะนาว <br>
                                                2.รสส้ม <br>
                                                3.รสมิ้นต์ <br>
                                            </p>

                                            <p>
                                                <strong>สรรพคุณ</strong> <br>
                                                บรรเทาอาการท้องอืด ท้องเฟ้อ จุกเสียด <br>
                                                ขนาดเเละวิธีใช้ : เคี้ยวก่อนกลืน ผู้ใหญ่รับประทานครั้งละ 1-2 เม็ด เมื่อมีอาการ วันละ 4 ครั้ง (ไม่เกินวันละ 6 เม็ด)
                                            </p>

                                            <p>
                                                <strong>การเก็บรักษา</strong> <br>
                                                เก็บในที่อุณหภูมิต่ำกว่า 30 องศาเซลเซียส <br>
                                                ขนาดบรรจุ : กล่องละ 100 เม็ด (25 เเผง x 4 เม็ด)
                                            </p>

                                            <p>
                                                <strong>คำเตือน</strong>
                                            </p>
                                            <ol>
                                                <li>1.รสมะนาว</li>
                                                <li>2.รสส้ม</li>
                                                <li>3.รสมิ้นต์</li>
                                            </ol>

                                            <p>
                                                ยาเม็ดเเก้ท้องอืด ท้องเฟ้อ ไซเมธิโคน <br>
                                                ใน1 เม็ด ประกอบด้วยตัวยาสำคัญคือ Simethicone 80 mg. <br>
                                                มี 3 รสชาติ <br>
                                                1.รสมะนาว <br>
                                                2.รสส้ม <br>
                                                3.รสมิ้นต์ <br>
                                            </p>

                                            <p>
                                                <strong>สรรพคุณ</strong> <br>
                                                บรรเทาอาการท้องอืด ท้องเฟ้อ จุกเสียด <br>
                                                ขนาดเเละวิธีใช้ : เคี้ยวก่อนกลืน ผู้ใหญ่รับประทานครั้งละ 1-2 เม็ด เมื่อมีอาการ วันละ 4 ครั้ง (ไม่เกินวันละ 6 เม็ด)
                                            </p>

                                            <p>
                                                <strong>การเก็บรักษา</strong> <br>
                                                เก็บในที่อุณหภูมิต่ำกว่า 30 องศาเซลเซียส <br>
                                                ขนาดบรรจุ : กล่องละ 100 เม็ด (25 เเผง x 4 เม็ด)
                                            </p>

                                            <p>
                                                <strong>คำเตือน</strong>
                                            </p>
                                            <ol>
                                                <li>1.รสมะนาว</li>
                                                <li>2.รสส้ม</li>
                                                <li>3.รสมิ้นต์</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <a href="mailto:customercare@rx.co.th" class="button filled">
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