		
		<?php wp_footer(); ?>
		<footer>
                    Content Copyright &copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?> Don Cerow. All rights reserved.
                    <span>Reproduction is encouraged, but please quote your source. Thank you.</span>

                    <div class="footer_icons">
                        <ul>
                            <li class="ico_newsletter animate_icon">
                                <a href="http://eepurl.com/pMZbD" title="Subscribe to The Moon Mail Newsletter">
                                <img src="<?php bloginfo("template_url"); ?>/images/ico_newsletter.png" alt="The Moon Mail Newsletter"/></a>
                            </li>
                            <li class="ico_facebook animate_icon">
                                <a href="http://facebook.com/athenasweb" title="Like our Facebook Page">
                                <img src="<?php bloginfo("template_url"); ?>/images/ico_facebook.png" alt="Facebook"/></a>
                            </li>
                            <li class="ico_twitter animate_icon">
                                <a href="http://twitter.com/athenas_web" title="Follow on Twitter">
                                <img src="<?php bloginfo("template_url"); ?>/images/ico_twitter.png" alt="Twitter"/></a>
                            </li>
                            <li class="ico_contact animate_icon">
                                <a href="#dialog" name="modal" title="Contact Don">
                                <img src="<?php bloginfo("template_url"); ?>/images/ico_contact.png" alt="Contact Don"/></a>
                            </li>
                            <li class="ico_rss animate_icon">
                                <a href="<?php bloginfo('rss2_url'); ?>" title="Our RSS feed">
                                <img src="<?php bloginfo("template_url"); ?>/images/ico_rss.png" alt="Our RSS feed"/></a>
                            </li>
                            <li class="cc_logo">
                                <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US" title="Creative Commons">
                                <img src="<?php bloginfo("template_url"); ?>/images/creative_commons.png" alt="Creative Commons"/></a>
                            </li>
                            <li class="humans_logo">
                                <a href="http://athenasweb.com/humans.txt" title="We are humans!">
                                <img src="<?php bloginfo("template_url"); ?>/images/logo-humans.png" alt="Humanstxt.org"/></a>
                            </li>
                        </ul>
                    </div><!-- footer_icons -->
                </footer>

            </div><!-- #content_container -->
            
            <!-- End Body Content -->

        </div><!-- container -->
        </div><!-- space_stretch_bg -->
        </div><!-- wrapper_bg -->

        <!-- Google Analytics -->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-34952860-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        
        <!-- Contact Module -->
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/javascript/contact_module.js"></script>

        <!-- Crazy Egg -->
        <script type="text/javascript">
            setTimeout(function(){var a=document.createElement("script");
            var b=document.getElementsByTagName("script")[0];
            a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0006/1105.js?"+Math.floor(new Date().getTime()/3600000);
            a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
        </script>

        <!-- IE Hacks -->

            <!--[if IE 9]>
            <script>
                $("ul#home_blocks li .block_title").hover(function(){
                    $(this).fadeOut(150);
                    $(this).fadeIn(300);
                });
            </script>
            <![endif]-->

    </body>
    
</html>