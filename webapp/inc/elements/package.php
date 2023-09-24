<?php $package_id = $section . "_" . $package['id']; ?>
<div class="package_container">
    <?php if(isset($package['discount'])) : ?>
        <div class="start_with">
            <img src="/img/start_with_just_99_usd2.png" alt="Start with just 99 USD" class="pngfix" />
        </div>
    <?php endif; ?>

    <div class="package_head">
        <div class="package_head_container">
            <div class="inputx">
                <input type="radio" name="package_id" value="<?php echo $package_id; ?>" />
            </div>
            <h1><?php echo $package['name']; ?></h1>
            <h2 class="<?php echo $package['css_heading_colour']; ?>">
                <?php if(isset($package['discount'])) : ?>
                    <del>
                        <?php echo price($package['original_price']); ?>
                        Actual Price
                    </del>
                <?php else: ?>
                    now just start with
                    <?php echo price($package['price']); ?>
                <?php endif; ?>
            </h2>
        </div>
    </div>
    <div class="package_body">
        <div>
            <ul>
                <?php if (isset($package['custom_illustration'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_<?php echo $package['custom_illustration']; ?>_illustrations">
                        <h4>
                            <span class="<?php echo $package['css_highlight_colour']; ?>">
                               <?php echo $package['custom_illustration']; ?>
                            </span>
                                Custom Sketch design
                        </h4>
                        <p>illustration design with pencial skectch</p>
                    </li>
                <?php endif; ?>

                <?php if (isset($package['custom_brochure'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_<?php echo $package['custom_brochure']; ?>_brochure">
                        <h4>
                            <span class="<?php echo $package['css_highlight_colour']; ?>">
                               <?php echo $package['custom_brochure']; ?>
                            </span>
                            Page Custom design
                        </h4>
                        <p>Complete front page brochure design</p>
                    </li>
                <?php endif; ?>

                <?php if(isset($package['custom_business_cards'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_<?php echo $package['custom_business_cards']; ?>_stationery">
                        <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                           <?php echo $package['custom_business_cards']; ?>
                        </span>
                            BusinessCard design
                        </h4>
                        <p>two different concept for businesscard</p>
                    </li>
                <?php endif; ?>

                <?php if(isset($package['custom_stationery_design'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_<?php echo $package['custom_stationery_design']; ?>_stationery">
                        <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                           <?php echo $package['custom_stationery_design'] ? $package['custom_stationery_design'] : 'No'; ?>
                        </span>
                            Custom Stationery design
                        </h4>
                        <p>should be delivered print ready formats</p>
                    </li>
                <?php endif; ?>

                <?php if (isset($package['initial_concepts'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_<?php echo $package['initial_concepts']; ?>_concepts">
                        <?php if($package['initial_concepts'] > 1) : ?>
                            <span class="upto">Upto</span>
                        <?php endif; ?>

                        <h4>
                            <span class="<?php echo $package['css_highlight_colour']; ?>">
                                <?php echo $package['initial_concepts']; ?>
                            </span>
                            Initial Concepts
                        </h4>
                    </li>
                <?php endif; ?>

                <?php if (isset($package['team_members'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_<?php echo $package['team_members']; ?>_designers">
                        <span class="upto">Upto</span>
                        <h4>
                            <span class="<?php echo $package['css_highlight_colour']; ?>">
                                <?php echo $package['team_members']; ?>
                            </span>
                            Logo Designers Assigned
                        </h4>
                    </li>
                <?php endif; ?>

                <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_revision">
                    <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                            Unlimited
                        </span>
                        Revisions
                    </h4>
                    as per selected design
                </li>

                <?php if(isset($package['turn_around'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_turnaround">
                        <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                            <?php echo $package['turn_around']; ?>
                        </span>
                            Day Turnaround
                        </h4>
                        <p>will deliver concept within 48/72 hours</p>
                    </li>
                <?php endif; ?>

                <?php if(isset($package['website_design'])): ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_<?php echo $package['website_design']; ?>_webpage">
                        <h4>
                                <span class="<?php echo $package['css_highlight_colour']; ?>">
                                    <?php echo $package['website_design']; ?>
                                </span>
                            Pages Website Design
                        </h4>
                        <p>Design with CSS/HTML Coded</p>
                    </li>
                <?php else: ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_copyright">
                        <h4>
                            <span class="<?php echo $package['css_highlight_colour']; ?>">
                                100%
                            </span>
                            Copyright Delivered
                        </h4>
                        <p>you will get ownership for final design</p>
                    </li>
                <?php endif; ?>

                <?php if (isset($package['cms'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_cms">
                        <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                            CMS
                        </span>
                            and Web Form
                        </h4>
                        <p>Content Management System</p>
                    </li>
                <?php endif; ?>

                <?php if (isset($package['member_area'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_member">
                        <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                            Members
                        </span>
                            Area Login
                        </h4>
                        <p>User can create account and login</p>
                    </li>
                <?php endif; ?>

                <?php if (isset($package['php'])) : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_php">
                        <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                            PHP, SQL,
                        </span>
                            Integration
                        </h4>
                        <p>Custom Features and database</p>
                    </li>
                <?php endif; ?>

                <?php if($section === 'webdesign') : ?>
                    <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_xhtml">
                        <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                            100%
                        </span>
                            xHTML/CSS
                        </h4>
                        <p>you will get Web2.0 Valid Code</p>
                    </li>
                <?php endif; ?>

                <li class="vtip_disabled" rel="tooltip_<?php echo $section; ?>_format">
                    <h4>
                        <span class="<?php echo $package['css_highlight_colour']; ?>">
                            Delivered
                        </span>
                        in Several Formats
                    </h4>
                    <p>all High Resolation Formats</p>
                </li>
            </ul>
        </div>
    </div><!-- end of package body -->

    <div class="package_footer">
        <div>
            <a href="#" class="packageBtn">
                <img src="/img/<?php echo $package['id']; ?>_start.jpg" alt="Start here" width="255" height="32" />
            </a>
        </div>
    </div>
</div>
