    <div class="banner-item-countup">
        <div class="icon">
            <i class="ic ic-<?= $item["icon"] ?>"></i>
        </div>
        <div class="text">
            <!-- Subtitle 1 -->
            <?php
            if (isset($item["subttl-1"])) {
            ?>
                <div class="subttl">
                    <p><?= $item["subttl-1"] ?></p>
                </div>
            <?php
            }
            ?>

            <!-- Count Up -->
            <div class="count-number">
                <p><span class="countup" data-stop="<?= $item["stop-number"] ?>" data-duration="<?= $item["count-duration"] ?>"><?= $item["start-number"] ?></span> <?= $item["unit"] ?></p>
            </div>

            <!-- Subtitle 2 -->
            <?php
            if (isset($item["subttl-2"])) {
            ?>
                <div class="subttl">
                    <p><?= $item["subttl-2"] ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>