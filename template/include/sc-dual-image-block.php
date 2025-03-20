<section data-section="dual-image-block" class="<?php
                                                if (isset($dual_image_block["sc-ttl"])) {
                                                    echo "bg-white";
                                                }
                                                ?>">
    <div class="sc-inner sc-inner--follows">
        <div class="container xl">
            <?php
            if (isset($dual_image_block["sc-ttl"])) {
            ?>
                <div class="sc-header">
                    <div class="sc-ttl animate fadeIn">
                        <h2><?= $dual_image_block["sc-ttl"] ?></h2>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="card-container" data-card-layout="flex">
                <?php
                foreach ($dual_image_block["block"] as $key => $value) {
                    include("include/el-image-block.php");
                }
                ?>
            </div>
        </div>
    </div>
</section>