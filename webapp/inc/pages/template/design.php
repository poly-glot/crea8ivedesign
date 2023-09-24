<?php
$testimonial        = '';
$testimonial_image  = '';

if ($section === 'logodesign') :
    $testimonial        = 'Crea8ive Design came through for me in a big way. I had tried other logo houses in the past and always felt something was missing. Not this time. They worked with me and continued to make sure I was completely satisfied. They created a custom logo that is perfect.';
    $testimonial_image  = '/img/clients/client_5.jpg';
endif;

if ($section === 'webdesign') :
    $testimonial        = 'Crea8ive Design created a fantastic logo and web site for me. Once I saw the quality of work, I had them design my letterhead and envelopes, too. Having a consistent look to our graphic art shows our prospects and customers that we care about quality and will deliver what we promise.';
    $testimonial_image  = '/img/clients/client_4.jpg';
endif;

if ($section === 'stationery') :
    $testimonial        = 'Crea8ive Design created a fantastic logo and web site for me. Once I saw the quality of work, I had them design my letterhead and envelopes, too. Having a consistent look to our graphic art shows our prospects and customers that we care about quality and will deliver what we promise.';
    $testimonial_image  = '/img/clients/client_3.jpg';
endif;

if ($section === 'brochure') :
    $testimonial        = 'I wasn\'t sure I needed a brochure, but as I started getting more and more requests, I looked at the issue again. Having one that matches my business card is very nice and I was able to include all the important information that my customers need. I am sorry I waited so long to have Crea8ive Design do one for me.';
    $testimonial_image  = '/img/clients/client_2.jpg';
endif;

component('summaryarea', compact('section'));
?>

<?php if ($section === 'logodesign') : ?>
<div class="blueBar"><h2>Browse our custom logo portfolio by Industry</h2></div>
<?php endif; ?>

<div id="main_body">
    <div id="main_body_container">
        <?php
            if ($section === 'logodesign') :
                component('logo_portfolio_links');
            endif;
        ?>

        <?php component('recommendation', compact('section')); ?>

        <?php component('what_to_do', array('linkPackages' => true)); ?>

        <?php component('special_offer', compact('testimonial', 'testimonial_image')); ?>

        <?php component('gurrante'); ?>
    </div><!-- end of body container -->
</div><!-- end of body -->

