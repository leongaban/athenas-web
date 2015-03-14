<?php
/*
Template Name: Homepage
*/
global $post;

?>

<?php get_header(); ?>

    <div id="content_container">

                <!-- <div id="book-talk">
                    <h3><a href="http://cpakonline.com/" target="_blank">CPAK 2014 coming October 17th, 2014!</a></h3><br/>
                    <iframe width="560" height="315" src="//www.youtube.com/embed/Sjkt7Bfu0U0" frameborder="0" allowfullscreen></iframe>
                </div> -->

                <ul id="home_blocks">

                    <li> 
                        <a href="http://athenasweb.com/category/aspects/" title="Check out Weekly Aspects"><img class="blocks" src="<?php bloginfo("template_url"); ?>/images/block_aspects.jpg" alt="Weekly Aspects"/> 
                        <span class="block_title">Weekly Aspects</span></a>
                    </li>

                    <li>
                        <a href="http://athenasweb.com/category/daily-planets/" title="Check out Daily Planets"><img class="blocks" src="<?php bloginfo("template_url"); ?>/images/block_planets.jpg" alt="Daily Planets"/>
                        <span class="block_title">Daily Planets</span></a>
                    </li>

                    <li>
                        <a href="http://athenasweb.com/category/column/" title="Read the Column"><img class="blocks" src="<?php bloginfo("template_url"); ?>/images/block_column.jpg" alt="Column"/>
                        <span class="block_title">Column</span></a>
                    </li>

                    <li>
                        <a href="http://www.athenasweb.com/astro101.html" title="Learn some Astrology"><img class="blocks" src="<?php bloginfo("template_url"); ?>/images/block_astrology.jpg" alt="Astrology 101"/>
                        <span class="block_title">Astrology 101</span></a>
                    </li>

                    <li>
                        <a href="http://www.athenasweb.com/athena.html" title="Learn about Athena"><img class="blocks" src="<?php bloginfo("template_url"); ?>/images/block_athena.jpg" alt="Athena"/>
                        <span class="block_title">Athena</span></a>
                    </li>

                    <li>
                        <a href="http://www.athenasweb.com/hitsIII.html" title="Learn some Mythology"><img class="blocks" src="<?php bloginfo("template_url"); ?>/images/block_mythology.jpg" alt="World Mythology"/>
                        <span class="block_title">World Mythology</span></a>
                    </li>
                </ul>

                <div id="event_banner">
                
                    <section>
                        <h1>Has Astrology Always Interested You?</h1>
                        <h2>Want to know how it defines<br> and affects us all, and more?</h2>

                        <div id="mc_embed_signup">
                            <form action="http://athenasweb.us5.list-manage.com/subscribe/post?u=a4438c94a56a40f6cb8c85863&amp;id=bc095e8eb4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <ul>
                                    <li class="event-newsletter-cta">
                                        <label for="mce-EMAIL">To Learn More, Subscribe to the Moon Mail Newsletter:</label>
                                    </li>
                                    <li>
                                        <input type="email" value="" name="EMAIL" class="footer_subscribe_input required email" id="mce-EMAIL" tabindex="1">
                                    </li>
                                    <li>
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="submit-button" tabindex="2">
                                    </li>
                                </ul>
                            </form>
                        </div><!-- mc_embed_signup -->
                    </section>

                </div><!-- event_banner -->         


<?php get_footer(); ?>