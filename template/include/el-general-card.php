<div class="card animate fadeIn <?= $item["extra-class"] ?? '' ?>" data-card="general" data-wow-delay="<?= $index * 0.2 ?>s">
    <div class="cover">
        <?php
        $section_cover = $item["cover"]["pc"];
        $section_cover_m = $item["cover"]["mb"];
        include("include/function-group.php");
        ?>
    </div>
    <div class="card-body">
        <div class="card-content">
            <?php
            if (isset($item["ttl"])) {
            ?>
                <div class="card-ttl">
                    <h2><?= $item["ttl"] ?></h2>
                </div>
            <?php } ?>

            <div class="card-subttl">
                <h5><?= $item["subttl"] ?></h5>
            </div>
        </div>
    </div>
    <?php
    if (isset($item["footer"])) {
    ?>
        <div class="card-footer">
            <div class="footer-avatar">
                <?php
                $section_cover = $item["footer"]["avater"];
                $section_cover_m = "";
                include("include/function-group.php");
                ?>
            </div>
            <a href="<?= $item["footer"]["link"] ?>" class="underline">
                ติดต่อศูนย์เลสิค
            </a>
        </div>
    <?php } ?>
</div>