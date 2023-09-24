<?php
    $title = page()->currentPage();
    $title = explode('_', $title);
    $title = array_diff($title, array('case', 'studies'));

    $section = implode('_', $title);

    $title = array_map('ucfirst', $title);

    $portfolio_images = array();
    $portfolio_images = realpath(__CURRENT_DIR__ . '/img/case_study/' . $section . '/');

    if (strpos($portfolio_images, '.') !== false) {
        die('what are you doing?');
    }

    $portfolio_images = array_diff(scandir($portfolio_images), array('.', '..'));

    $portfolio_images_with_url = array();

    foreach($portfolio_images as $image) {
        $portfolio_images_with_url[] = '/img/case_study/' . $section . '/' . $image;
    }

    $portfolio_images = $portfolio_images_with_url;
?>
<div id="summaryarea_casestudy">
    <ul id="sub_quicklinks">
        <li><a href="/pages/case_studies">Case-studies</a></li>
        <li>|</li>
        <li><a href="/pages/case_studies_corporate_logo_design" class="orange"><?php echo implode(' ', $title); ?></a></li>
    </ul>

    <h1 class="mainheading_casestudy"><?php echo implode(' ', $title); ?> - <span>Case Study</span></h1>

    <div id="summaryarea_inner_full">
        <?php
            if (function_exists('theCaseStudyContent')) :
                theCaseStudyContent();
            endif;
        ?>
    </div>

</div>

<div class="blueBar"><h2>Recent Crea8ive Designs <?php echo implode(' ', array_diff($title, array('Design'))); ?> Creations</h2>
</div>

<div id="main_body">

    <div id="main_body_container">

        <ul class="inline_items">
            <?php foreach($portfolio_images as $index => $image) : ?>
            <li>
                <div class="doubleborder">
                    <div class="doubleborder-inner">
                        <a href="<?php echo $image; ?>" rel="prettyPhoto[gallery]" title="Case Study <?php echo implode(' ', $title); ?> <?php echo $index + 1; ?>>">
                            <img src="<?php echo $image; ?>" title="Case Study <?php echo implode(' ', $title); ?> <?php echo $index + 1; ?>" alt="" width="212" height="116">
                        </a>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>

        <h1 class="centerx"><a href="/pages/portfolio_logodesign">View Our Complete Logo Design Portfolio</a></h1>

        <div class="bigspace"></div>

    </div><!-- end of body container -->
</div>
