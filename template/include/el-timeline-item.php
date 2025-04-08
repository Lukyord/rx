<?php
$animation_class = (($index + 1) % 2 === 0) ? "fadeInRight" : "fadeInLeft";
?>


<div class="timeline-item">
    <div class="timeline-text">
        <div class="year animate <?= $animation_class ?>">
            <p><?= $item["year"] ?></p>
        </div>
        <div class="text animate <?= $animation_class ?>">
            <h5><?= $item["text"] ?></h5>
        </div>
        <div class="desc animate <?= $animation_class ?>">
            <p><?= $item["desc"] ?></p>
        </div>
    </div>

    <div class="lotte animate fadeIn">
        <dotlottie-player
            src="<?= $item["lotte"] ?>"
            background="transparent"
            speed="1"
            style="width: 300px; height: 300px"
            loop
            autoplay></dotlottie-player>

        <?php /*
        <canvas
            class="lottie-canvas"
            data-index="<?= $index ?>"
            width="300"
            height="300"
            loading="lazy"
            data-src="<?= htmlspecialchars($item["lotte"]) ?>">
        </canvas>
        */ ?>
    </div>
    <div class="stair">
    </div>
</div>