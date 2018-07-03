			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

        <div id="contact">
          <?php wp_nav_menu(array(
            'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
            'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
            'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
            'menu_class' => 'nav footer-nav cf',            // adding custom nav class
            'theme_location' => 'footer-links',             // where it's located in the theme
            'before' => '',                                 // before the menu
            'after' => '',                                  // after the menu
            'link_before' => '',                            // before each link
            'link_after' => '',                             // after each link
            'depth' => 0,                                   // limit the depth of the nav
            'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
          )); ?>
          <div class="info">
            <p>Thanks for visiting my website! I am currently looking to expand my technical skillset in order to tell the stories of others, whether it be individuals, businesses or corporations.<br><br> If you'd like to chat about development, websites, technology or puppies please feel free to get in touch.
              <br/>
              <br/>
              <a href="https://github.com/char1eschen" target="_blank"><i class="fab fa-github-square fa-4x" aria-hidden="true"></i></a>
              <a href="www.linkedin.com/in/charleschenh" target="_blank"><i class="fab fa-linkedin fa-4x" aria-hidden="true"></i></a>
              <a href="mailto:charles.chen.job@outlook.com" target="_top"><i class="fas fa-envelope-square fa-4x" aria-hidden="true"></i></a>
            </p>
          </div>
        </div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/app.js" charset="utf-8"></script>
	</body>

</html> <!-- end of site. what a ride! -->
