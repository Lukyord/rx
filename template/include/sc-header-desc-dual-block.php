<section data-section="header-desc-dual-block">
    <div class="sc-inner">
        <div class="container xl">
            <div class="sc-header">
                <div class="sc-ttl animate fadeIn">
                    <h2><?= $sc["ttl"] ?></h2>
                </div>
                <div class="sc-desc">
                    <div class="entry-content">
                        <?= $sc["desc"] ?>
                    </div>
                </div>
            </div>

            <div class="dual-block">
                <div class="block">
                    <div class="block-image animate fadeIn">
                        <?php
                        $section_cover = $sc["block-1"]["pc"];
                        $section_cover_m = $sc["block-1"]["mb"];
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>

                <div class="block  <?php
                                    if (isset($sc["block-2"]["desc"])) {
                                        echo "has-desc";
                                    }
                                    ?>">
                    <div class="block-image animate fadeIn">
                        <?php
                        $section_cover = $sc["block-2"]["pc"];
                        $section_cover_m = $sc["block-2"]["mb"];
                        include("include/function-group.php");
                        ?>
                    </div>

                    <?php
                    if (isset($sc["block-2"]["desc"])) {
                    ?>
                        <div class="entry-content">
                            <?= $sc["block-2"]["desc"] ?>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>