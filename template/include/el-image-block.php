<div class="card" data-card="image-block">
    <div class="card-image inner-parallax">
        <?php
        $section_cover =  $value["image"];
        $section_cover_m = "";
        include("include/function-group.php");
        ?>
    </div>

    <div class="card-content">
        <div class="card-text">
            <div class="card-ttl animate fadeIn">
                <h2><?= $value["ttl"] ?></h2>
            </div>
            <div class="card-desc animate fadeIn">
                <p><?= $value["desc"] ?></p>
            </div>
        </div>

        <a href="<?= $value["link"] ?>" class="button white animate fadeIn">
            <?= $value["button-text"] ?>
        </a>
    </div>
</div>