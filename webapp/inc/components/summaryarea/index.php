<?php extract(sectionSummaryAreaText($section)); ?>

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
        <?php echo $title; ?> - <span><?php echo $subtitle; ?></span>
    </h1>

    <div id="summaryarea_inner_full">

        <?php if ($section === 'logodesign') : ?>
            <p>If you are in business, you need a logo – there is no denying
                that. Your logo helps promote your company, so a custom <a href="/">designed logo</a> is an important component of your marketing
                package. Crea8ive Designs <a href="/pages/portfolio_logodesign">logo design portfolio</a> contains dozens of customer logos that
                we have designed for companies just like yours. Firms of all
                sizes and in every type of business have trusted Crea8ive Design
                artists with their logo creation.</p>
            <p>The logo design that you select should be an extension of your
                business personality and culture. It needs to convey your style.
                In this case, a picture truly is worth a thousand words – and
                more. Think about the logos you see every day. On signs and
                billboards. On envelopes and brochures. On storefronts and
                delivery trucks. With all these logos competing for attention,
                you need to design a perfect one.</p>


            <h4>Is a custom logo affordable for you?</h4>
            <p>With logo pricing starting at just $99, yes it is very
                affordable. Our <a href="/pages/prices_packages_logodesign">logo design pricing</a> is established to be within reach no
                matter what your budget. Crea8ive Design offers different
                package options based on your needs and your budget. You can
                select the one that is best for your business.</p>

            <h4>Why do you need a logo?</h4>
            <p>Designed properly, your custom logo is a miniature advertisement.
                It is an always-on, nonstop promotion for your company. Large
                multinational firms spend thousands of dollars and commit huge
                resources to developing their "look". While not all logos will
                be as recognizable as the McDonald's "M" or the Mercedes-Benz
                "peace sign", your business can have its own identity at a
                reasonable price.</p>
        <?php endif; ?>

        <?php if ($section === 'webdesign') : ?>
            <p>Crea8ive Designs <a href="/">web design</a> professionals treat every project as if it was
                their own. From a simple design consisting of a few pages to a
                complex site loaded with features, your creative team takes
                pride in delivering a beautiful web site that exceeds your
                expectations.</p>
            <p>Browse our <a href="/pages/portfolio_webdesign">web design portfolio</a> to see some of our recent projects. As
                you do, think about which features you need for your site and
                what styles you prefer. Knowing what you like and what you need
                will make it easier when you begin the order process. The web
                design portfolio shows you our capabilities but also helps steer
                your decision on how your web site should be designed.</p>

            <h4>Is a custom web site affordable for you?</h4>
            <p>Crea8ive Designs has a wide range of <a href="/pages/prices_packages_webdesign">web site packages</a> for any size budget. The web design
                pricing page has complete details on each package and allows you
                to compare them side-by-side. The packages range from the very
                simple 'online brochure' site to a comprehensive lead generation
                machine. We also offer the option to host your site if you do
                not currently have a provider.</p>

        <?php endif; ?>

        <?php if ($section === 'stationery') : ?>
            <p>In the electronic age, it is easy to overlook stationery when
                putting together your list of business needs. If you are like a
                typical company, you might not feel that stationery design is
                important. After all, a business card has all your contact
                information and you hand them out by the dozens. Why do you need
                custom stationery, right?</p>
            <p>For the same reason you have a custom logo, website and brochure,
                stationery adds another dimension to your overall image,
                promotion and marketing of your company. <a href="/pages/portfolio_stationery">Stationery design</a> gives you flexibility to send direct mail
                advertisements, thank you letters, follow ups and quotes. Every
                piece of correspondence should be on professionally designed
                letterhead.</p>


            <h4>Is custom stationery affordable for you?</h4>
            <p>View our <a href="/pages/prices_packages_stationery">stationery pricing</a> packages to see how affordably Crea8ive Designs
                is able to produce your stationery. Your complete custom
                stationery package starts at only $99. Crea8ive Designs handles
                it all for you, from design layout to delivering the printed
                materials at your door. We offer different package options based
                on your needs and your budget. All you need to do is select the
                one that is best for your business.</p>

        <?php endif; ?>

        <?php if ($section === 'brochure') : ?>
            <p>For most companies, custom <a href="/">brochure design</a> is not
                a luxury, it is a necessity. Developing your corporate brand
                conveys to your customers and prospects that your company offers
                a higher level of professionalism than your competitors. By
                having a consistent look and image across all of your printed
                materials, they know you pay close attention to details.</p>
            <p>Browse our <a href="/pages/portfolio_brochure">brochure design portfolio</a> and see for yourself the creativity and
                quality Crea8ive Designs offers for you. Displaying your
                corporate message on a professionally designed brochure allows
                you to keep telling your message long after the sales call is
                finished.</p>

            <h4>Is a brochure affordable for you?</h4>
            <p>Yes. Our brochure design pricing is affordable for any size
                business. With a variety of pricing options and <a href="/pages/prices_packages_brochure">brochure
                    packages</a>, you are sure to find one that fits within your
                budget. Let Crea8ive Design artists demonstrate their skill in
                any of our styles, including tri-fold, pamphlet, single- or
                double-sided, or a multi-page concept.</p>

            <h4>Why do you need a brochure?</h4>
            <p>While it is true some businesses might not have a need to hand
                out literature, but the vast majority do. It gives you the
                opportunity to more completely tell your story, what you offer,
                your value proposition, the value you bring and why they should
                select you. </p>
        <?php endif; ?>

        <h2 class="title-big"><?php echo $portfolio_heading; ?></h2>

        <div class="dotted_border">
            <div class="dotted_border_container">

                <ul class="inline_items">
                    <?php for($i = 1; $i <= $num_portfolio; $i++) : ?>
                    <li class="<?php echo $i === $num_portfolio ? 'last-child' : ''; ?>">
                        <?php if ($section === 'logodesign') : ?>
                            <a href="/img/logos/<?php echo $portfolio_section; ?>/<?php echo $section; ?>_logo<?php echo $i; ?>.jpg" rel="prettyPhoto[gallery]" title="<?php echo $title; ?> <?php echo $i; ?>">
                                <img src="/img/logos/<?php echo $portfolio_section; ?>/<?php echo $section; ?>_logo<?php echo $i; ?>.jpg" title="<?php echo $title; ?> <?php echo $i; ?>" alt="">
                            </a>
                        <?php else: ?>
                            <div class="doubleborder">
                                <div class="doubleborder-inner">
                                    <a href="/img/logos/<?php echo $portfolio_section; ?>/<?php echo $section; ?>_logo<?php echo $i; ?>.jpg" rel="prettyPhoto[gallery]" title="<?php echo $title; ?> <?php echo $i; ?>">
                                        <img src="/img/logos/<?php echo $portfolio_section; ?>/<?php echo $section; ?>_logo<?php echo $i; ?>.jpg" title="<?php echo $title; ?> <?php echo $i; ?>" alt="" width="210" height="150">
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                    <?php endfor; ?>
                </ul>


            </div>
        </div>

    </div>
</div>
