<div class="card" data-card="lasik-slide">
    <a href="<?= $card["link"] ?>" class="link-overlay">&nbsp;</a>
    <div class="cover">
        <?php
        $section_cover = $card["cover"]["pc"];
        $section_cover_m = $card["cover"]["mb"];
        include("include/function-group.php");
        ?>
    </div>
    <div class="card-content">
        <div class="card-date">
            <p>
                <?= $card["date"] ?>
            </p>
        </div>

        <div class="card-ttl">
            <h3><?= $card["ttl"] ?></h3>
        </div>

        <a href="<?= $card["link"] ?>" class="underline">
            อ่านต่อ
        </a>
    </div>
</div>