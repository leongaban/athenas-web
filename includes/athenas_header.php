<div id="nav_bar">

    <?php
        $menu = array("home","about","blog","book","events","services");
        function echoListItem($item){
            global $page;
            $url = 'http://s433108212.onlinehome.us/';
            if($item != "home") $url .= $item;
            $selected = $item == $page ? 'selected' : '';
            echo '<li class="nav_btn '.$selected.'"><a href="'.$url.'">'.ucfirst($item).'</a></li>';
        }
    ?>

    <ul class="nav">
        <?php array_walk($menu, 'echoListItem'); ?>
        <li class="nav_btn <?php echo $page === "contact" ? "selected" : "" ?>"><a href="#dialog" name="modal">Contact</a></li>
        <li class="search"><input type="text" onfocus="if(this.value == 'Search') { this.value = ''; }" value="Search" /></li>
        <li class="search_btn"><a href="#" title="Lets find it!"><div class="search_go">Go</div></a></li>
    </ul>

</div><!-- nav_bar -->

<!-- Header Banner with Social Media -->
<div id="banner">

    <a href="http://s433108212.onlinehome.us/index.php" title="Athena's Web">
        <div class="logo">
            <h1>Athena's Web</h1>
            <h2>Carpe Noctem</h2>
            <img src="http://s433108212.onlinehome.us/img/athenas_web_logo_no_text.png" alt="Athena's Web Carpe Noctem"/>
        </div>
    </a>

    <div id="social_media">

        <ul id="social_icons">

            <li class="mail_chimp">
                <script type="text/javascript" language="JavaScript" src="http://athenasweb.us5.list-manage.com/subscriber-count?b=37&amp;u=d789790b-2a29-4119-8a43-0d71267eb0d7&amp;id=bc095e8eb4"></script>
            </li>
            <li class="social_li ico_newsletter">
                <a href="#" title="Subscribe to our Newsletter">
                    <p>Get Email Newsletter</p>
                    <img src="http://s433108212.onlinehome.us/img/ico_newsletter.png" alt="Newsletter"/>
                </a>
            </li>
            <li class="social_li ico_facebook">
                <a href="http://facebook.com/athenasweb" title="Like our Facebook Page">
                    <p>Our Facebook Page</p>
                    <img src="http://s433108212.onlinehome.us/img/ico_facebook.png" alt="Facebook"/>
                </a>
            </li>
            <li class="social_li ico_twitter">
                <a href="http://twitter.com/athenas_web" title="Follow on Twitter">
                    <p>Follow us on Twitter</p>
                    <img src="http://s433108212.onlinehome.us/img/ico_twitter.png" alt="Twitter"/>
                </a>
            </li>
            <!-- <li><p>RSS Feed</p><img src="img/icon_rss.png" alt="RSS"/></li> -->

        </ul><!-- social_icons -->

    </div><!-- social_media -->

</div><!-- banner -->