<footer id="footer">
    <div class="footer-nav">
        <div class="footer-body">
            <div class="footer-content">
                <div class="block">
                    <ul>
                        <li>
                            <h4 class="list-ttl">เกี่ยวกับเรา</h4>
                        </li>
                        <li><a href="<?= $root ?>index.php">หน้าหลัก</a></li>
                        <li><a href="<?= $root ?>about.php">เกี่ยวกับเรา</a></li>
                        <li><a href="<?= $root ?>csr.php">นโยบายความยั่งยืน</a></li>
                        <li><a href="<?= $root ?>career.php">ร่วมงานกับเรา</a></li>
                        <li><a href="<?= $root ?>contact.php">ติดต่อเรา</a></li>
                    </ul>
                </div>
                <div class="block">
                    <ul>
                        <li>
                            <h4 class="list-ttl">ผลิตภัณฑ์และบริการ</h4>
                        </li>
                        <li><a href="<?= $root ?>products.php">จำหน่ายยาและอุปกรณ์ทางการแพทย์</a></li>
                        <li><a href="<?= $root ?>service-rexcuer.php">Rexcuer (Ambulance)</a></li>
                        <li><a href="<?= $root ?>service-manufacturing.php">ผลิตยา (RX Manufacturing)</a></li>
                        <li><a href="<?= $root ?>service-lasik.php">ศูนย์เลสิค</a></li>
                    </ul>
                </div>
                <div class="block">
                    <ul class="with-icon">
                        <li>
                            <h4 class="list-ttl">ติดต่อ</h4>
                        </li>
                        <li>
                            <i class="ic ic-phone"></i>
                            <a href="tel:+6629100950">0 2910 0950 (10 คู่สาย)</a>
                        </li>
                        <li>
                            <i class="ic ic-mail-min"></i>
                            <a href="mailto:customercare@rx.co.th">customercare@rx.co.th</a>
                        </li>
                        <li>
                            <i class="ic ic-map-marker"></i>
                            <a href="#outer">
                                93/90 ซอยประชานุกูล 2 ถนนรัชดาภิเษก
                                <br>แขวงบางซื่อ เขตบางซื่อ กรุงเทพฯ 10800
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="block">
                    <div class="object-fit">
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/collections/drones/">buy drones</a></iframe>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-footer bg-white">
            <ul>
                <li><a href="<?= $root; ?>terms.php">ข้อกำหนดและเงื่อนไข</a></li>
                <li><a href="<?= $root; ?>terms.php">นโยบายความเป็นส่วนตัว</a></li>
                <li><a href="<?= $root; ?>terms.php">นโยบายการใช้คุ้กกี้</a></li>
            </ul>

            <ul class="social">
                <a href="#outer">
                    <i class="ic ic-facebook"></i>
                </a>
                <a href="#outer">
                    <i class="ic ic-line"></i>
                </a>
                <a href="#outer">
                    <i class="ic ic-youtube"></i>
                </a>
            </ul>

            <p>All Rights Reserved, Copyright © 2024 R.X. Company | Web ::*</p>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php
if ($page_index) {
    include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
}
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/js/library/jquery-ui-effect.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/util.js?v=<?php echo time(); ?>"></script>

</body>

</html>