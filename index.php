<?php get_header(); ?>
<?php if (!function_exists('dynamic_sidebar') || !is_active_sidebar('home-content-panel-2')): ?>
    <?php if (is_localhost()): ?>
        <div class="content-panel-2">
            <div class="container">
                <div class="div-on-Center">
                    <section class="col-sm-4 pull_left">
                        <h2 class="row white">Testimonials</h2>
                        <div class="row contentBox white lineheight"><span class="row marginbtm lineheight"> <p>We convey our gratitude
                                    for your sincere efforts to ensure release of POs in time and sending the same
                                    within a short time as it was urgent in the interest of execution of sale deed
                                    of said property. I am sure your superiors would appreciate and place it on
                                    record.</p><p>We
                                    also extend our sincere thanks to Mr MK Mishra Deutsche Bank, Loanmoney.in Team [ Ms. Arora-&nbsp;bank
                                    DSA] and other bank .....
                                </p></span></div>
                        <div class="row">
                            <div class="col-sm-8 contnrpadding">
                                <h4 class="row white">Krishna Lochab - Pilot</h4>
                                <a href="https://www.loanmoney.in/testimonial.php"><img src="images/testi-readmore.png"></a>
                            </div>
                        </div>
                    </section>
                    <div class="col-sm-1">&nbsp;</div>
                    <section class="col-sm-5 pull_left">
                        <h2 class="row white">Recent Articles</h2>
                        <div class="row contentBox white">
                            <p class="row marginbtm lineheight">CIBIL [Credit Information Bureau of India Limited] keeps records for all lending you had since 1998 onwards. CIBIL collects and maintains records of an individual‘s payments pertaining to loans and credit cards. These records are submitted to CIBIL by banks and other lenders, on a monthly basis. This information is then used to create Credit Information Reports (CIR) and credit scores which are provided to lenders in order to help evaluate and approve loan applications.</p>
                            <!--<p class="row lineheight"></p>-->
                        </div>
                        <div class="row contnrpadding"><a href="https://www.loanmoney.in/recent-articles.php"><img src="images/testi-readmore.png"></a></div>
                    </section>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="content-panel-2">
        <div class="container">
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>