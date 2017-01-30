<?php if (!function_exists('dynamic_sidebar') || !is_active_sidebar('footerstrip-referece')): ?>
    <?php if (is_localhost()): ?>
        <div class="footer-reference">
            <div class="container"></div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="footer-reference">
        <div class="container">
            <?php dynamic_sidebar('footerstrip-referece'); ?>
        </div>
    </div>
<?php endif; ?>




<?php if (!function_exists('dynamic_sidebar') || !is_active_sidebar('footerstrip-2')): ?>
    <?php if (is_localhost()): ?>
        <div class="footer-stip-2">
            <div class="container">
                <div class="col-md-6">
                    <h2>Disclaimer</h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </div>
                <div class="col-md-6">
                    <h2>About</h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </div>    
            </div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="footer-stip-2">
        <div class="container">
            <?php dynamic_sidebar('footerstrip-2'); ?>
        </div>
    </div>
<?php endif; ?>


<div class="footer-stip-3">
    <div class="container">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright')) : ?>            
            Copyright 2016 - <?php echo date("Y"); ?>, Designed and Developed by <a href="http://www.radiate.co.in">Radiate E Services Pvt. Ltd.</a>, Powered By <a href="http://www.smedunia.in">smedunia</a>
        <?php endif; ?>
    </div>
</div>
<?php wp_footer(); ?>
<body>
</html>