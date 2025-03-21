<section data-section="column-info-text">
    <div class="sc-inner <?= $section["sc-inner-extra-class"] ?? "" ?>">
        <div class="container xl">
            <div class="sc-content">
                <div class="sc-header">
                    <div class="sc-ttl animate fadeIn">
                        <h2><?= $section["ttl"] ?></h2>
                    </div>
                </div>

                <div class="sc-desc animate fadeIn">
                    <?= $section["desc-1"] ?>
                </div>

                <div class="sc-desc animate fadeIn">
                    <?= $section["desc-2"] ?>
                </div>
            </div>
        </div>
    </div>
</section>