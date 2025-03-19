<div class="tab-links">
    <div class="swiper auto">
        <div class="swiper-wrapper">
            <?php
            foreach ($tabs_arr as $index => $value) {
            ?>
                <div class="swiper-slide">
                    <div class="tab animate fadeIn" data-wow-delay="<?= $index * 0.1 ?>s">
                        <a href="<?php echo $value["tab-id"]; ?>" class="link-overlay <?php if ($index == 0) echo "active" ?>">
                            &nbsp;
                        </a>
                        <div class="cover">
                            <?php
                            $section_cover = $value["img"];
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>
                        <h5>
                            <?php echo $value["tab-text"]; ?>
                        </h5>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>