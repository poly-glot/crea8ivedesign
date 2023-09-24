<?php
extract(sectionSummaryAreaText($section));

if (!function_exists('sortPortfolio')) {
    function sortPortfolio($a, $b) {
        $a = (int) filter_var($a, FILTER_SANITIZE_NUMBER_INT);
        $b = (int) filter_var($b, FILTER_SANITIZE_NUMBER_INT);

        if ($a == $b) {
            return 0;
        }

        return ($a < $b) ? -1 : 1;
    }
}

$bluebar_heading    = '';
$sub_section        = '';

if ($section === 'logodesign') :
    $bluebar_heading = 'Logo Design';
    $sub_section     = page()->subSection();
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

$portfolio_images = array();
$portfolio_images = realpath(__CURRENT_DIR__ . '/img/portfolio/' . $section . '/thumb/');

if ($section === 'logodesign') {
    $sub_section = $sub_section ? $sub_section : 'recent';
    $portfolio_images = realpath(__CURRENT_DIR__ . '/img/portfolio/logo/thumb/' . $sub_section . '/');
}

if (strpos($portfolio_images, '.') !== false) {
    die('what are you doing?');
}

$portfolio_images = array_diff(scandir($portfolio_images), array('.', '..'));

$portfolio_images_with_url = array();

foreach($portfolio_images as $image) {
    if ($section === 'logodesign') {
        $portfolio_images_with_url[] = '/img/portfolio/logo/thumb/' . $sub_section . '/' . $image;
    } else {
        $portfolio_images_with_url[] = '/img/portfolio/' . $section . '/thumb/' . $image;
    }
}

$portfolio_images = $portfolio_images_with_url;

usort($portfolio_images, 'sortPortfolio');

$portfolio_images = array_chunk($portfolio_images, $section === 'logodesign' ? 8 : 6);

?>

<div id="summaryarea">
    <ul id="sub_quicklinks">
        <li><a href="/pages/how_it_works/sub:<?php echo $section; ?>"><?php echo $bluebar_heading; ?> Process</a></li>
        <li>|</li>
        <li><a href="/pages/portfolio_<?php echo $section; ?>"><?php echo $bluebar_heading; ?> Portfolio</a></li>
        <li>|</li>
        <li><a href="/pages/prices_packages_<?php echo $section; ?>"><?php echo $bluebar_heading; ?> Packages</a></li>
    </ul>

    <?php if ($section === 'logodesign') : ?>
        <h1 class="mainheading">
            Crea8ive design - <span>Recent Logo Design</span>
        </h1>

        <div>
            <p>Below you can see some examples of our recent work. These <a href="/">logo designs</a> were all created within the month by our team of
                artists. As you can see, all are great stuff that left our
                clients satisfied with our service. If you like particular <a href="/">logo design</a> and want "something like that", don’t hesitate to
                contact us to check is it possible, and get some ideas on the
                design we can create for you. Concept will be clarified and you
                will have your new <a href="/">logo design</a> in no time.</p>

            <p>If you want logo designed over particular topic, also contact us
                to check our prices and terms. As you can see below, the quality
                is guaranteed. Also guaranteed is the fast work, good
                communications with our clients and providing any additional
                information and advice that can help you clarify ideas you may
                have. And as you see with good idea and team work logos can be
                created that will catch the eye of your visitors, and make them
                remember your name to return to you when they need your
                services. And if this is achieved, you can be sure about the
                future of your online business.</p>
        </div>
    <?php endif; ?>

    <?php if ($section === 'webdesign') : ?>
        <h1 class="mainheading">
            Crea8ive design - <span>Web Design Portfolio</span>
        </h1>

        <div>
            <p>If you ask one hundred business owners why they have web site,
                you are likely to receive one hundred different answers. But you
                know what? None of the answers is wrong. You see, a <a href="/">custom web design</a> is the most custom item we do. There are
                seemingly endless reasons why a company has a web site designed
                for them – to establish credibility, to act as an online
                brochure, to serve as a technical support hub, to take orders,
                to find new customers or to service existing ones.</p>

            <p>The web is evolving at a speed that is not easy to comprehend or
                fathom and it is easy to think that your web design must always
                be on the cutting edge of the latest and greatest technology. If
                you need that, our web design portfolio has examples of ones
                like that. The <a href="/pages/prices_packages_webdesign">web design package</a> also has more traditional types of sites.
                Regardless of your needs, you will be assured of getting an
                affordable web site custom made for you that delivers exactly
                what you need.</p>
        </div>
    <?php endif; ?>

    <?php if ($section === 'stationery') : ?>
        <h1 class="mainheading">
            Crea8ive design - <span>Stationery Collection</span>
        </h1>

        <div>
            <p>The need for <a href="/">Stationery Design</a> is one of the most overlooked areas of a typical
                small business or service firm. The truth of the matter is that
                custom stationery is not an expensive luxury that is only
                reserved for large companies or ones with excess capital. Custom
                designed stationery serves a vital purpose and, it can be
                argued, is more important for the small business than it is for
                large corporations.</p>

            <p>By having a stationery design of your own, your company separates
                itself from other businesses. You instantly increase your
                profile and a loftier perception when your message is delivered
                on professional stationery. Image may not be everything, but it
                goes a long way toward establishing your credibility and gaining
                trust. View our <a href="/pages/prices_packages_stationery">Stationery Design Packages</a> and see if you agree. </p>
        </div>
    <?php endif; ?>

    <?php if ($section === 'brochure') : ?>
        <h1 class="mainheading">
            Crea8ive design - <span>Brochure Design Collection</span>
        </h1>

        <div>
            <p>How important is <a href="/">brochure design</a> on a piece of literature that advertises your
                business long after you have finished the sales call? How
                important is the brochure if you do not even get the opportunity
                to make the pitch? Your custom designed brochure is your silent
                sales advocate that fills many roles. It gives you the
                opportunity to remain with the customer for an unlimited length
                of time. It also provides a chance to more fully explain your
                company, your value proposition and explain why you should have
                a chance to earn the business.</p>

            <p>Our affordable <a href="/pages/prices_packages_brochure">Brochure
                    Design Packages</a> have plenty of options and allow you to
                select the one that is right for you. The custom brochure can be
                as simple as a single-sided sheet or as complex as a multi-page
                catalog. It all depends on what you want to say and how you want
                to say it. Consult with our Crea8ive Design team to get started
                today.</p>
        </div>
    <?php endif; ?>

    <?php if ($section === 'banner') : ?>
        <h1 class="mainheading">
            Crea8ive design - <span>Banner Design Collection</span>
        </h1>

        <div>
            <p>Done properly, a <a href="/">custom design banner</a> captures the attention and imagination of
                the viewer and tells them a story. Done poorly, your banner is
                not remembered and even ignored. Knowing how to layout an
                attention-grabbing banner design comes with experience. The
                artist needs to understand subtlety of color combinations, have
                knowledge of the target audience and in-depth comprehension of
                where the banner is going to be used.</p>

            <p>Browse through our banner design packages on the following pages.
                Each of them was designed specifically to achieve the goals
                established by the customer and communicated to our Design Team.
                Each finished banner – the layout, the colors, the copywriting
                and the entire look – was a team effort between Cra8ive Designs
                and the client. We can do the same for you.</p>
        </div>
    <?php endif; ?>

    <?php if ($section === 'illustration') : ?>
    <h1 class="mainheading">
        Crea8ive design - <span>Illustration Collection</span>
    </h1>

        <div>
            <p>Of all the various types of graphical art our professionals make,
                their favorite is <a href="/">Illustration Design</a>. The
                reason for this is that it is the discipline that gives the
                greatest latitude in design and has the fewest restrictions. The
                challenge for them is deciding on which fantastic Illustration
                Design they want to pursue. They have an empty canvas and a head
                full of ideas – there is no better of a combination for someone
                whose job it is to design a work of art that tells a story.</p>

            <p>Spend some time browsing our Design <a href="/pages/prices_packages_illustration">illustration Packages</a>
                and you will be impressed with the dynamic
                expressiveness present in the samples. As you look at them, you
                can almost feel the creative energy leaping from the
                illustration and the sheer pleasure of the customer as his
                vision is made real. Your illustration must tell a story and
                that is where your design team excels.</p>
        </div>
    <?php endif; ?>


</div>

<div class="singleround">
    <div class="singleround-top"></div>
    <div class="singleround-body">

        <div id="main_body">
            <div id="main_body_container">
                <ul id="portfolio_links">
                    <li class="<?php printActiveSectionClass($section, 'logodesign'); ?>"><a href="/pages/portfolio_logodesign"><span>Logo Portfolio</span></a></li>
                    <li class="<?php printActiveSectionClass($section, 'webdesign'); ?>"><a href="/pages/portfolio_webdesign"><span>Webdesign Portfolio</span></a></li>
                    <li class="<?php printActiveSectionClass($section, 'stationery'); ?>"><a href="/pages/portfolio_stationery"><span>Stationery Portfolio</span></a></li>
                    <li class="<?php printActiveSectionClass($section, 'brochure'); ?>"><a href="/pages/portfolio_brochure"><span>Brochure Portfolio</span></a></li>
                    <li class="<?php printActiveSectionClass($section, 'illustration'); ?>"><a href="/pages/portfolio_illustration"><span>Illustration Portfolio</span></a></li>
                </ul>

                <div class="bigspace"></div>

                <?php component($section === 'logodesign' ? 'portfolio_logodesign' : 'portfolio', compact('portfolio_images', 'section', 'sub_section')); ?>

                <div class="bigspace"></div>
                <!-- banners end here -->

                <?php component('what_to_do', array('linkPackages' => true, 'section' => $section)); ?>

                <?php component('gurrante'); ?>
            </div><!-- end of body container -->
        </div><!-- end of body -->

    </div>
</div>


