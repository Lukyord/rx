<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="news-main">
    <?php
    $hero = [
        "subttl" => "อัพเดต",
        "ttl" => "ข่าวสารและกิจกรรม",
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="news-feed">
        <div class="sc-inner sc-inner--top-0">
            <div class="container xl">
                <div class="tab-container">
                    <?php
                    $news_tabs = [
                        [
                            "tab-id" => "all",
                            "text" => "ทั้งหมด",
                        ],
                        [
                            "tab-id" => "news",
                            "text" => "ข่าวสาร",
                        ],
                        [
                            "tab-id" => "activity",
                            "text" => "กิจกรรม",
                        ],
                        [
                            "tab-id" => "csr",
                            "text" => "กิจกรรมเพื่อสังคม",
                        ],
                    ]
                    ?>
                    <div class="tab-links">
                        <div class="swiper auto">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($news_tabs as $index => $tab) { ?>
                                    <div class="swiper-slide">
                                        <div class="tab">
                                            <a href="#<?= $tab["tab-id"] ?>" class="<?= $index == 0 ? "active" : ""  ?>">
                                                <?= $tab["text"] ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-contents">
                        <?php
                        foreach ($news_tabs as $index => $tab) { ?>
                            <div class="tab-content <?= $index == 0 ? "active" : "" ?>" id="<?= $tab["tab-id"] ?>">
                                <div class="card-container" data-card-layout="grid">
                                    <?php
                                    for ($i = 0; $i < 8; $i++) {
                                        include($root . "include/el-news-card.php");
                                    }
                                    ?>
                                </div>
                                <div class="news-pagination animate fadeIn">
                                    <?php include($root . "include/_wp-code/wp-pagenavi.php") ?>
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