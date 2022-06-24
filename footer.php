<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>

<footer class="footer">
	<img alt="footer-logo" class="img-footer-logo canvas-img img-responsive"
		src="<?php echo get_stylesheet_directory_uri() ?>/images/-1.jpg" width="430" height="105" />
	<div class="footer-contact">
		<h2 class="footer-contact-title">Contact</h2>
		<div class="footer-contact-item">
			<span class="ai-font-phone"></span>
			<?php echo do_shortcode('[ai_phone href="+1.206.779.8105"] 206.779.8105[/ai_phone]')?>
		</div>
		<div class="footer-contact-item">
			<span class="ai-font-envelope-f"></span>
			<?php echo do_shortcode('[mail_to email="team@laurapapritzteam.com"] team@laurapapritzteam.com[/mail_to]')?>
		</div>
		<div class="footer-contact-item">
			<span class="ai-font-location-c"></span>
			<span class="location">700 110th Ave NE #270, Bellevue, WA 98004</span>
		</div>
		<p class="footer-text">Laura Papritz is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any
			accessibility problems, please contact us at 206.779.8105 to specify the nature of the accessibility issue and any assistive technology you use.
			We strive to provide the content you need in the format you require.</p>
	</div>
	div class="footer-bot">
    <p class="copyright">Copyright ©
        <?php echo do_shortcode('[currentYear]')?> <span class="sitename">Laura Paprit. </span> All rights
        reserved. |<a class="disclaimer" href="<?php echo do_shortcode('[blogurl]')?>/disclaimer">Sitemap</a>|  <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a>|
        <?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
    </p>

    <!-- MLS -->
    <div class="mls">
        <em class="ai-font-eho" title="MLS"></em>
        <em class="ai-font-realtor-mls" title="MLS"></em>
    </div>
</div>

</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>