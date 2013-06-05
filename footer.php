<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
$options = get_option( 'adapt_theme_settings' );
?>
</div>
<!-- /main -->

    <div id="footer" class="clearfix">
    
        <div id="footer-widget-wrap" class="clearfix">
    
            <div id="footer-one">
            	<?php dynamic_sidebar('footer-one'); ?>
            </div>
            <!-- /footer-one -->
            
            <div id="footer-two">
            	<?php dynamic_sidebar('footer-two'); ?>
            </div>
            <!-- /footer-two -->
            
            <div id="footer-three">
            	<?php dynamic_sidebar('footer-three'); ?>
            </div>
            <!-- /footer-three -->
            
			<div id="footer-four">
            	<?php dynamic_sidebar('footer-four'); ?>
            </div>
            <!-- /footer-four -->
        
        </div>
        <!-- /footer-widget-wrap -->
          
		<div id="footer-bottom" class="clearfix">
        
            <div id="copyright">
                &copy; <?php echo date('Y'); ?>  <?php bloginfo( 'name' ) ?>
            </div>
            <!-- /copyright -->
            
            <div id="back-to-top">
                <a href="#toplink"><?php _e('back up', ''); ?> &uarr;</a>
            </div>
            <!-- /back-to-top -->
        
        </div>
        <!-- /footer-bottom -->
        
	</div>
	<!-- /footer -->
    
</div>
<!-- wrap --> 

<!-- WP Footer -->
<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41348159-1', 'hku.hk');
  ga('send', 'pageview');

</script>

</body>
</html>
