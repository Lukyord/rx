<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="product-main">
    <?php
    $hero = [
        "subttl" => "ผลิตภัณฑ์และบริการ",
        "ttl" => "ผลิตภัณฑ์ยาและอุปกรณ์ทางการแพทย์",
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="product-list">
        <div class="sc-inner sc-inner--top-0">
            <div class="container xl">
                <?php
                $tabs_arr = [
                    [
                        "img" => './assets/media/design/product-tab-image-1.jpg',
                        "tab-id" => '#outer',
                        "tab-text" => "Pharmaceuticals",
                    ],
                    [
                        "img" => './assets/media/design/product-tab-image-2.jpg',
                        "tab-id" => '#outer',
                        "tab-text" => "เครื่องมือและอุปกรณ์ทางการแพทย์",
                    ],
                    [
                        "img" => './assets/media/design/product-tab-image-3.jpg',
                        "tab-id" => '#outer',
                        "tab-text" => "Diagnostic Products & Point of Care",
                    ],
                    [
                        "img" => './assets/media/design/product-tab-image-4.jpg',
                        "tab-id" => '#outer',
                        "tab-text" => "Rexcuer (Ambulance)",
                    ],
                ];

                include($root . "include/el-tab-links.php");
                ?>

                <div class="content-with-sub-tabs">
                    <div class="sub-tabs">
                        <?php
                        $sub_tab_arr = [
                            [
                                "text" => "ยาระบบทางเดินอาหาร",
                                "link" => "#",
                            ],
                            [
                                "text" => "ยาปฏิชีวนะ",
                                "link" => "#",
                            ],
                            [
                                "text" => "ยาระบบกล้ามเนื้อและกระดูก",
                                "link" => "#",
                            ],
                            [
                                "text" => "ยาใช้เฉพาะที่/ยาใช้ภายนอก",
                                "link" => "#",
                            ],
                            [
                                "text" => "ยารักษาโรคเบาหวาน",
                                "link" => "#",
                            ],
                            [
                                "text" => "ยาระบบประสาท",
                                "link" => "#",
                            ],
                            [
                                "text" => "ยาฉีด",
                                "link" => "#",
                            ],
                            [
                                "text" => "แชมพู",
                                "link" => "#",
                            ],
                        ];

                        include($root . "include/el-sub-tabs.php");
                        ?>
                    </div>
                    <div class="content">
                        <div class="card-container" data-card-layout="grid">
                            <?php
                            for ($i = 1; $i <= 9; $i++) {
                                include('include/el-product-card.php');
                            } ?>
                        </div>

                        <a href="javascript:;" class="button loadmore">
                            ดูเพิ่มเติ่ม
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>

<script>
    document.querySelector('.loadmore').addEventListener('click', function() {
        const cardContainer = document.querySelector('.card-container');
        const originalCards = cardContainer.innerHTML;
        cardContainer.insertAdjacentHTML('beforeend', originalCards);
    });
</script>