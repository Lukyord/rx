<div class="header-brand <?php if ($show === "pc") {
                                echo "show-sm";
                            } elseif ($show === "mb") {
                                echo "hidden-device-sm";
                            } ?>">
    <a class="brand" href="<?php echo $root; ?>index.php">
        <div class="logo">
            <?php
            $section_cover = "./assets/media/logo-with-text.png";
            $section_cover_m = "./assets/media/logo.png";
            include("include/function-group.php");
            ?>
        </div>
    </a>
</div>