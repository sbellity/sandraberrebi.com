
<div style="clear:both;">&nbsp;</div>
<?php if ( is_active_sidebar( 'gridly_footer')) { ?>     
  <div id="footer-area"><?php dynamic_sidebar( 'gridly_footer' ); ?></div>
<?php }  ?>     



 <div id="copyright">
    <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
    <p><a href="<?php echo esc_url( __('http://www.eleventhemes.com/', 'eleventhemes') ); ?>" title="Eleven WordPress Themes" target="_blank">Theme by Eleven Themes </a></p>
 </div><!-- // copyright -->   
     
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	
</body>
</html>