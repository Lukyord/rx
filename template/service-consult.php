 <?php $root = ""; ?>

 <?php include($root . "header.php"); ?>

 <main id="main" class="service-consult-main">
     <?php
        $hero = [
            "subttl" => "ผลิตภัณฑ์และบริการ",
            "ttl" => "ปรึกษาผู้เชี่ยวชาญ",
        ];

        include($root . "include/sc-hero-template.php");
        ?>

     <section data-section="consult">
         <div class="sc-inner sc-inner--top-0">
             <div class="container xl">
                 <div class="tab-container">
                     <?php
                        $consult_arr = [
                            [
                                "tab-id" => "consult-1",
                                "ttl" => "รับคำปรึกษาจากเภสัชกร",
                                "subttl" => "ให้คำปรึกษาด้านยาโดยเภสัชกรได้โดยตรง ผ่านทาง Line Official account RX Company",
                                "contact-link" => "#line",
                                "contact-text" => "@rxofficial",
                                "contact-icon" => "line",
                                "contact-qr-text" => "Scan QR Code เพื่อปรึกษาเภสัชกร",
                                "contact-qr-image" => "./assets/media/design/consult-qr.png",
                            ],
                            [
                                "tab-id" => "consult-2",
                                "ttl" => "ปรึกษาผู้เชี่ยวชาญ Rexcuer",
                                "subttl" => "ให้คำปรึกษาด้านยาโดยเภสัชกรได้โดยตรง ผ่านทาง Line Official account RX Company",
                                "contact-link" => "#line",
                                "contact-text" => "@rxofficial",
                                "contact-icon" => "line",
                                "contact-qr-text" => "Scan QR Code เพื่อปรึกษาผู้เชี่ยวชาญ Rexcuer",
                                "contact-qr-image" => "./assets/media/design/consult-qr.png",
                            ],
                            [
                                "tab-id" => "consult-3",
                                "ttl" => "ปรึกษาผู้เชี่ยวชาญ ศูนย์เลสิค",
                                "subttl" => "ให้คำปรึกษาด้านยาโดยเภสัชกรได้โดยตรง ผ่านทาง Line Official account RX Company",
                                "contact-link" => "#line",
                                "contact-text" => "@rxofficial",
                                "contact-icon" => "line",
                                "contact-qr-text" => "Scan QR Code เพื่อปรึกษาศูนย์เลสิค",
                                "contact-qr-image" => "./assets/media/design/consult-qr.png",
                            ],
                        ];
                        ?>
                     <div class="tab-links">
                         <div class="accordion-container toggle no-animate trigger-first">
                             <?php foreach ($consult_arr as $index => $consult) : ?>
                                 <div class="accordion">
                                     <div class="entry-title tab">
                                         <a href="#<?= $consult["tab-id"] ?>" class="<?= $index == 0 ? "active" : ""  ?>">
                                             <h2><?= $consult["ttl"] ?></h2>
                                         </a>
                                     </div>
                                     <div class="entry-panel">
                                         <p class="consult-desc">
                                             <?= $consult["subttl"] ?>
                                         </p>
                                         <?php
                                            include($root . "include/el-consult-link.php");
                                            ?>
                                     </div>
                                 </div>
                             <?php endforeach; ?>
                         </div>
                     </div>
                     <div class="tab-contents">
                         <?php foreach ($consult_arr as $index => $consult) : ?>
                             <div class="tab-content <?= $index == 0 ? "active" : ""  ?>" id="<?= $consult["tab-id"] ?>">
                                 <div class="consult-qr">
                                     <p><?= $consult["contact-qr-text"] ?></p>
                                     <div class="qr-container">
                                         <img src="<?= $consult["contact-qr-image"] ?>" alt="<?= $consult["contact-qr-text"] ?>" />
                                     </div>
                                     <?php
                                        include($root . "include/el-consult-link.php");
                                        ?>
                                 </div>
                             </div>
                         <?php endforeach; ?>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>

 <?php include($root . "footer.php"); ?>