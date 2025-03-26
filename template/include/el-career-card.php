<div class="card animate fadeIn" data-card="career">
    <div class="card-content">
        <div class="card-header">
            <p class="department">
                <?= $card["department"] ?>
            </p>

            <h5 class="card-ttl">
                <?= $card["ttl"] ?>
            </h5>

            <p class="card-subttl">
                <span class="number">
                    <?= $card["number"] ?> ตำแหน่ง
                </span>
                |
                <span class="hour">
                    <?= $card["hour"] ?>
                </span>
                |
                <span class="team">
                    <?= $card["team"] ?>
                </span>
            </p>
        </div>

        <div class="card-body">
            <p class="weight-semibold">คุณสมบัติ</p>
            <ul class="disc">
                <?php
                foreach ($card["jd"] as $item) {

                ?>
                    <li>
                        <?= $item ?>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>

        <a href="<?= $card["link"]["link"] ?>" class="button">
            <?= $card["link"]["text"] ?>
        </a>
    </div>
</div>