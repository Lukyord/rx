<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="not-found-main">
    <section data-section="not-found">
        <div class="sc-inner">
            <div class="container lg">
                <div class="sc-header">
                    <div class="sc-ttl">
                        <h2>
                            ขออภัย ไม่พบหน้าที่คุณค้นหา
                        </h2>
                    </div>
                </div>

                <p class="not-found-desc">ขออภัย หน้าที่คุณกำลังค้นหาไม่สามารถใช้งานได้ โปรดตรวจสอบ URL หรือกลับไปยังหน้าหลัก</p>

                <a href="<?= $root ?>index.php" class="button">
                    หน้าหลัก
                </a>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>