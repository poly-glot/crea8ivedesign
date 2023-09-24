<div id="packages_tooltips" style="display: none">
        <?php
            $pages = array(
                array('page' => 2, 'inner' => 1),
                array('page' => 5, 'inner' => 4),
                array('page' => 10, 'inner' => 9),
                array('page' => 20, 'inner' => 19),
                array('page' => 25, 'inner' => 24)
            )
        ?>
        <?php foreach($pages as $package_page) :?>
        <div class="tooltip_group">
            <div id="tooltip_webdesign_<?php echo $package_page['page']; ?>_page" class="tooltip_group">
                <h4><?php echo $package_page['page']; ?> Page Custom Designed</h4>
                <p>You are presented with 1 Homepage and <?php echo $package_page['inner']; ?> Inner Page - created just for you. You simply select the one that best fits your style and tastes</p>
            </div>
        </div>
        <?php endforeach; ?>

        <?php foreach(range(1, 3) as $team_number) :?>
            <div class="tooltip_group">
                <div id="tooltip_webdesign_<?php echo $team_number; ?>_designers" class="tooltip_group">
                    <h4><?php echo $team_number; ?> Web Designer Assigned</h4>
                    <p>We commit <?php echo $team_number; ?> designer to your project. Designer will create at least one custom webpage concepts as per your given details</p>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="tooltip_group">
            <div id="tooltip_webdesign_revision" class="tooltip_group">
                <h4>Unlimited Revisions</h4>
                <p>Just because you selected a webpage, doesn't mean it's perfect. Our designers work with you and take your suggestions until you are completely satisfied</p>
            </div>
        </div>

        <div class="tooltip_group">
            <div id="tooltip_webdesign_cms" class="tooltip_group">
                <h4>CMS and Web Form</h4>
                <p>We commit developers to create Content Management System so you can easily managed your website and will create Contact Us, Order Form per details</p>
            </div>
        </div>

        <div class="tooltip_group">
            <div id="tooltip_webdesign_turnaround" class="tooltip_group">
                <h4>1-3 Day Turnaround</h4>
                <p>Your custom webpages will be perfect and delivered quickly. We realize it is important to you, which is why your business is a priority to us</p>
            </div>
        </div>

        <div class="tooltip_group">
            <div id="tooltip_webdesign_memberadmin" class="tooltip_group">
                <h4>Member Area Login</h4>
                <p>We commit to create Login and Signup system at your website so client can create account to place order or access personal area, and client details you can review from administrator</p>
            </div>
        </div>

        <div class="tooltip_group">
            <div id="tooltip_webdesign_php" class="tooltip_group">
                <h4>PHP, SQL Integration</h4>
                <p>We commit to use latest Coding PHP and Sql Database Integration, as per your project requirements</p>
            </div>
        </div>

        <div class="tooltip_group">
            <div id="tooltip_webdesign_xhtml" class="tooltip_group">
                <h4>100% XHTML</h4>
                <p>Yes, we will Create XHTML coding for your approved webpage, its should be SEO optimized coded with latest Technology</p>
            </div>
        </div>

        <div class="tooltip_group">
            <div id="tooltip_webdesign_format" class="tooltip_group">
                <h4>Delivered in Several Formats</h4>
                <p>To be most effective, your webpage will be used in an online communication, so we deliver it in Design Files and Developed Pages with managed folder structure so you can easily upload your WebPages at your domain server</p>
            </div>
        </div>
</div>
