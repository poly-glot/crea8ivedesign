<?php component('summaryarea_home'); ?>

<div id="main_body">
    <div id="why_us">
        <div>
            <h2>A recognized logo can be the <span class="sky">DIFFERENCE</span> for your company. The team at Crea8ivedesign <span class="green">CUSTOM</span> makes your logo to be <span class="orange">MEMORABLE</span> and attention-grabbing.</h2>
            <h3>Choose from one of our most popular Custom Design Logo Packages:</h3>
        </div>
    </div>

    <div id="main_body_container">

        <?php component('packages', array('section' => 'logodesign', 'firstThree' => true)); ?>

        <p class="margin20">
            Can't decide which package is best for you? We recommend the
            <b><a href="/pages/prices_packages_logodesign/package_id:budget_package">Basic Package</a></b>
            – you choose your favorite from 6
            <b><a href="/pages/prices_packages_logodesign/package_id:budget_package">custom logo creations</a></b>
        </p>

        <?php component('what_to_do', array('linkPackages' => true)); ?>

        <hr>

        <?php component('services'); ?>

        <?php component('quality'); ?>

        <?php component('special_offer'); ?>

        <?php component('gurrante'); ?>
    </div><!-- end of body container -->
</div><!-- end of body -->
