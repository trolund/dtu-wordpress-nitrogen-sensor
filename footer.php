			<!-- footer -->
			<footer class="footer" role="contentinfo">

                <div class="footerTop">
                    <div class="flex-container">
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/ac-logo.png"></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/CKIC_EU_flag_black_right.svg"></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/kulogo.svg"></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/FIC.jpg"></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/danmarks-tekniske-universitet-seeklogo.com.svg"></div>
                    </div>
                </div>
                <div class="footerMiddel">
                    <div class="row">
                        <div class="col-sm-4"><h3>Navigation</h3><?php html5blank_nav(); ?></div>
                        <div class="col-sm-4"><h3>Links</h3>
                            <!--
                            <ul>
                                <li><a href="https://www.diplom.dtu.dk/">Technical University of Denmark - Diplom</a></li>
                                <li><a href="https://www.climate-kic.org/">Climate kic</a></li>
                                <li><a href="https://www.ficlima.org/">The Foundation for Climate Research</a></li>
                                <li><a href="https://www.ku.dk/">University of Copenhagen</a></li>
                            </ul>-->
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-link-menu' ) ); ?></div>
                        <div class="col-sm-4">
                            <?php show_post('stay-up-to-date'); ?>
                            <!--
                            <h3>Stay up to date</h3><h4>Newsletter</h4><?php //echo do_shortcode('[email-subscribers-form id="1"]') ?>
                            <h4>Follow the project on Social media</h4>
                            <a href="#facebook"><img src="<?php// echo get_template_directory_uri(); ?>/img/logo_facebook.svg"></a>
                            <a href="#facebook"><img src="<?php// echo get_template_directory_uri(); ?>/img/logo_instagram.svg"></a>
                            <a href="#facebook"><img src="<?php// echo get_template_directory_uri(); ?>/img/logo_twitter.svg"></a>
                            <a href="#facebook"><img src="<?php// echo get_template_directory_uri(); ?>/img/logo_youtube.svg"></a>
                            -->
                        </div>
                    </div>

                </div>
                <div class="footerBottom">
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright Nitrogen Sensor Consortium -
					<a href="https://www.dtu.dk/" title="DTU">Technical University of Denmark</a>.
				</p>
				<!-- /copyright -->
                </div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
-->
	</body>
</html>
