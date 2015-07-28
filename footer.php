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
      <div class="footer" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <!-- automate address -->

              <?php 
                // from plugin wrdsb_schools_contact.php
                if (function_exists('wrdsb_school_info_display')) {
                  wrdsb_school_info_display();
                }
                else {
                  ?>
                  <h1>Student Transportation Services of Waterloo Region</h1>
                  <address>130 - 4275 King St. East<br />
                  Kitchener ON N2P 2E9<br />
                  Phone: 519-650-4934<br />
                  Fax: 519-650-2979</address>
              <?php  
                }
              ?>
              
              <div class="social-icons">
                <!--<a href="#"><span class="icon-facebook" title="Facebook"></span></a>-->
                <!--<a href="#"><span class="icon-twitter" title="Twitter"></span></a>-->
                <!--<a href="#"><span class="icon-youtube" title="YouTube"></span></a>-->
              </div>
             
            </div>
            <div class="col-sm-6 col-md-3">
            <!-- nothing in here yet -->
            </div>
            <div class="col-sm-6 col-md-3">
            <h1>Stay Connected</h1>
            <!-- nothing in here yet -->
            </div>
            <div class="col-sm-12 col-md-3">
              <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                <?php dynamic_sidebar( 'footer-right' ); ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <p class="copyright">A WRDSB-ITS Solution</p>
            </div>
            <div class="col-sm-4">
              <p class="copyright">
                <?php wp_loginout(); ?>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="copyright text-right">&copy; STSWR 2015</p>
            </div>
          </div>
        </div>
      </div>

    <?php wp_footer(); ?>
    </body>
    </html>
