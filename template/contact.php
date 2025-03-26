<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="contact-main">
    <?php
    $hero = [
        "subttl" => "ติดต่อเรา",
        "ttl" => "RX Group",
    ];

    include($root . "include/sc-hero-template.php");
    ?>

    <section data-section="contact-info">
        <div class="sc-inner sc-inner--top-0">
            <div class="container xl">
                <div class="contact-block">
                    <?php
                    $content_arr = [
                        [
                            "ttl" => "บริษัท อาร์เอ็กซ์ จำกัด",
                            "desc" => '
                                    <ul class="with-icon">
                                        <li>
                                            <i class="ic ic-phone"></i>
                                            <a href="tel:+6629100950">0 2910 0950</a>
                                            <span>(10 คู่สาย)</span>
                                        </li>
                                        <li>
                                            <i class="ic ic-phone"></i>
                                            <span>โทรสั่งสินค้าฟรี</span>
                                            <a href="tel:+661800900600">1800-900-600</a>
                                            <span>(เฉพาะโทรศัพท์พื้นฐานในประเทศไทย)</span>
                                        </li>
                                        <li>
                                            <i class="ic ic-mail-min"></i>
                                            <a href="mailto:customercare@rx.co.th">customercare@rx.co.th</a>
                                        </li>
                                        <li>
                                            <i class="ic ic-map-marker"></i>
                                            <span>
                                                93/90 ซอยประชานุกูล 2 ถนนรัชดาภิเษก <br>
                                                แขวงบางซื่อ เขตบางซื่อ กรุงเทพฯ 10800 <br>
                                                <a href="#outer">
                                                    Google Maps
                                                </a>
                                            </span>                            
                                        </li>
                                    </ul>
                                    ',
                            "iframe" => '
                                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/collections/drones/">buy drones</a></iframe>
                                    </iframe>
                                    '
                        ]
                    ];

                    foreach ($content_arr as $content) {
                        include($root . "include/el-content-block-template.php");
                    }
                    ?>
                </div>

                <div class="contact-block">
                    <?php
                    $content_arr = [
                        [
                            "ttl" => "บริษัท อาร์เอ็กซ์แมนูแฟคเจอริ่ง จำกัด",
                            "desc" => '
                                    <ul class="with-icon">
                                        <li>
                                            <i class="ic ic-phone"></i>
                                            <a href="tel:+66632057085">0 6320 57085 - 8</a>
                                        </li>
                                        <li>
                                            <i class="ic ic-fax"></i>
                                            <a href="tel:+6629100959">0 2910 0969</a>
                                            <span>,</span>
                                            <a href="tel:+6625877168">0 2587 7168</a>

                                        </li>
                                        <li>
                                            <i class="ic ic-map-marker"></i>
                                            <span>
                                               76 หมู่ 10 ถนนศาลายา - บางภาษี ต.นราภิรมย์ <br>
                                               อ.บางเลน จ.นครปฐม 73130 <br>
                                                <a href="#outer">
                                                    Google Maps
                                                </a>
                                            </span>                            
                                        </li>
                                    </ul>
                                    ',
                            "iframe" => '
                                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/collections/drones/">buy drones</a></iframe>
                                    </iframe>
                                    '
                        ]
                    ];

                    foreach ($content_arr as $content) {
                        include($root . "include/el-content-block-template.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>