<div class="sub-tab-item sub-tab-list-trigger hidden-device-sm">
    <p>
        <?php
        if (isset($sub_tab_arr[0])) {
            echo $sub_tab_arr[0]["text"];
        }
        ?>
    </p>
    <i class="ic ic-chevron-down c-white"></i>
</div>
<div class="sub-tabs-list">
    <?php
    foreach ($sub_tab_arr as $index => $subtab) {
    ?>
        <div class="sub-tab-item <?= $index == 0 ? "active" : "" ?>">
            <a href="<?php echo $subtab["link"]; ?>" class="sub-tab-link">
                <?php echo $subtab["text"]; ?>
            </a>
        </div>
    <?php
    }
    ?>
</div>