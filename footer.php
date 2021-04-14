<?php
/**
 * The template for displaying the footer
 *
 * Displays from <div class="footer"> to </html>
 *
 * @package WordPress
 * @subpackage WRDSB
 */
?>
      <div class="footer" id="address">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
            <!-- automate address -->
            <h1>Student Transportation Services of Waterloo Region</h1>
            <address>102 – 550 Bingemans Centre Dr.<br />
            Kitchener ON  N2B 3X9<br />
            Phone: 519-744-7575<br />
            Fax: 519-744-7564</address>
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
                <?php dynamic_sidebar( 'footer-left' ); ?>
              <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-centre' ) ) : ?>
                <?php dynamic_sidebar( 'footer-centre' ); ?>
              <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-3">
              <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                <?php dynamic_sidebar( 'footer-right' ); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
          <div class="container" id="loginbar">
              <p class="copyright" style="text-align: center;">
            	<?php if ( is_user_logged_in() ) 
            	{
            		wp_loginout();
            	} 
            	else 
            	{ ?>
            		<a href="<?php echo site_url(); echo '/wp-login.php';?>">Log into <?php echo get_bloginfo('name'); ?></a>
            	<?php }?> 
              <br />&copy; STSWR 2015 - <?php echo date("Y"); ?></p>
          </div>

    <?php wp_footer(); ?>
    </body>
    </html>
