<div class="card" data-card="review">
    <a href="<?= $card["iframe-link"] ?>" class="link-overlay" data-fancybox="gallery">
        &nbsp;
    </a>
    <div class="card-image">
        <?php
        $section_cover = $card["cover"]["pc"];
        $section_cover_m = $card["cover"]["mb"];
        include("include/function-group.php");
        ?>
        <a href="javascript:;" class="video-play-button"></a>
    </div>
    <div class="card-content">
        <div class="card-subttl">
            <h5><?= $card["subttl"] ?></h5>
        </div>
        <a href="javascript:;" class="underline">
            เล่นวิดีโอ
        </a>
    </div>
</div>