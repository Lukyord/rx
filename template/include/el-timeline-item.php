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
        <?= $item["lotte"] ?>
    </div>
    <div class="stair">
    </div>
</div>