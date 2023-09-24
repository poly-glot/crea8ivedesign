<div class="two_columns good_contents" id="bottomBlock">
    <div class="column">
        <?php element('offer'); ?>
    </div>
    <div class="column last-child">
        <?php element('testimonial', array(
            'text' => isset($testimonial) ? $testimonial : "Crea8ive Design came through for me in a big way. I had tried other logo houses in the past and always felt something was missing. Not this time. They worked with me and continued to make sure I was completely satisfied. They created a custom logo that is perfect.",
            'image' => isset($testimonial_image) ? $testimonial_image : '/img/clients/client_1.jpg',
            'name' => 'Our Clients'
        )); ?>
    </div>
</div>
