<?php
extract(sectionSummaryAreaText($section));

$testimonial        = 'What can i say, this Company feedback trully speaks for it\'s self. The original concepts that were supplied were all very very good & professional. We needed a few alterations to be done on our chosen design and these were carried out very quickly and now we have the resulting logo which is stunning. Great artist and fantastic work will be using him again very very soon.';
$testimonial_image  = '/img/clients/client_6.jpg';
$bluebar_heading    = '';

if ($section === 'logodesign') :
    $bluebar_heading = 'Logo Design';
endif;

if ($section === 'webdesign') :
    $bluebar_heading = 'Web Design';
endif;

if ($section === 'stationery') :
    $bluebar_heading = 'Stationery Design';
endif;

if ($section === 'brochure') :
    $bluebar_heading = 'Brochure Design';
endif;

if ($section === 'illustration') :
    $bluebar_heading = 'Illustration Design';
endif;
?>

<div id="summaryarea">
    <ul id="sub_quicklinks">
        <li><a href="/pages/portfolio_<?php echo $section; ?>"><?php echo $portfolio_text; ?></a></li>
        <li>|</li>
        <li><a href="/pages/prices_packages_<?php echo $section; ?>">Packages</a></li>
        <li>|</li>
        <li><a href="/pages/how_it_works">Process</a></li>
        <li>|</li>
        <li><a href="/users/login/page:order_now">Order Now</a></li>
    </ul>

    <h1 class="mainheading">
        Custom Crea8ive Design Package - <span>Starts Here Now!</span>
    </h1>

    <div id="summaryarea_inner_full">
        Nothing defines your company more than its logo. A logo design is the
        one asset that has appreciable value and is a source of additional
        capital when a business is sold. There is no other item in your company,
        not even the employees, which can create a reaction just by someone
        seeing it. Developed and used properly, your custom logo has the ability
        to keep your business top-of-mind. See below for design package options.
    </div>

    <div id="tablist">
        <ul class="tabs">
            <li class="<?php printActiveSectionClass($section, 'logodesign'); ?>"><a href="/pages/prices_packages_logodesign"><span>Logo Design Prices</span></a></li>
            <li class="<?php printActiveSectionClass($section, 'webdesign'); ?>"><a href="/pages/prices_packages_webdesign"><span>Web Design Prices</span></a></li>
            <li class="<?php printActiveSectionClass($section, 'stationery'); ?>"><a href="/pages/prices_packages_stationery"><span>Stationery Prices</span></a></li>
            <li class="<?php printActiveSectionClass($section, 'brochure'); ?>"><a href="/pages/prices_packages_brochure"><span>Brochure Prices</span></a></li>
            <li class="<?php printActiveSectionClass($section, 'illustration'); ?>"><a href="/pages/prices_packages_illustration"><span>Illustration Price</span></a></li>
        </ul>
    </div>
</div>

<div class="blueBar"><h2><?php echo $bluebar_heading; ?> - Special Combination Packages</h2></div>

<div id="main_body">
    <div id="main_body_container">
        <?php component('packages', compact('section')); ?>

        <?php component('what_to_do', array('section' => $section)); ?>

        <div class="two_columns good_contents" id="bottomBlock">
            <div class="column">

                <div class="round_box round_box_nopadding">
                    <div class="round_box_top"><h2 class="big">Included With Every Package</h2></div>
                    <div class="round_box_body">
                        <div class="round_box_body_content">
                            <ul class="arrows-black">
                                <li>1st Drafts of Your Custom Logo Delivered in 1-3 Days</li>
                                <li class="evenlist">Permanent, Lifetime Archiving</li>
                                <li>Fast Support Response </li>
                                <li class="evenlist">Every Project Has a Complete Design Team</li>
                                <li>What We Create is Yours – You Own All Rights</li>
                                <li class="evenlist">Receive Hi-Res Fies (300 dpi in all formats)</li>
                                <li>Files Delivered as .psd, .gif, .jpg,.eps, .tiff and vector formats</li>
                            </ul>
                        </div>
                    </div>
                    <div class="round_box_bottom"></div>
                </div>

            </div>
            <div class="column last-child">
                <?php element('testimonial', array(
                    'text' => isset($testimonial) ? $testimonial : "Crea8ive Design came through for me in a big way. I had tried other logo houses in the past and always felt something was missing. Not this time. They worked with me and continued to make sure I was completely satisfied. They created a custom logo that is perfect.",
                    'image' => isset($testimonial_image) ? $testimonial_image : '/img/clients/client_1.jpg',
                    'name' => 'Our Clients'
                )); ?>
            </div>
        </div>

        <?php component('gurrante'); ?>
    </div><!-- end of body container -->
</div><!-- end of body -->

