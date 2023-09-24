<div class="two_columns" id="what_to_do">
    <div class="column">
        <?php if (isset($linkPackages)) : ?>
            <a href="/pages/prices_packages_<?php echo isset($section) ? $section : 'logodesign'; ?>" class="buttonDarkBlue">
                <span>See All of Our Packages Now</span>
            </a>
        <?php else: ?>
            <a href="/pages/portfolio_<?php echo isset($section) ? $section : 'logodesign'; ?>" class="buttonDarkBlue">
                <span>See Our Portfolio Now</span>
            </a>
        <?php endif; ?>
    </div>
    <div class="column" id="begin_here">
        <div id="begin_here_container">
            <a href="/users/login/page:order_now" class="buttonDarkBlue"><span>Begin Here – No Waiting!</span></a>

            <p class="red"><b>Satisfaction is 100% Guaranteed</b></p>
        </div>
    </div>
</div>
