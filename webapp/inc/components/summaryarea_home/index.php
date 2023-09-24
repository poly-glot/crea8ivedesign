<?php
if (!function_exists('filter_featured_portfolio')):
    function filter_featured_portfolio($item) {
        return !empty($item['featured']);
    }
endif;

?><div id="summaryarea">
    <h1 class="mainheading">A wish you a<span> “Merry Christmas and a Happy New year 2011!”</span></h1>
    <h2>Take a Look at Some of our Recent Logo Creations</h2>

    <div id="sliderwrapper">
        <div id="slider">
            <?php for($i = 1; $i <= 15; $i++) : ?>
                <div class="section">
                    <img src="/img/slides/logo<?php echo $i; ?>.jpg" alt="Logo <?php echo $i; ?>" class="slide_image" />
                </div>
            <?php endfor; ?>
        </div><!-- /slider -->
    </div>

    <div class="staisfaction_text">7, 500 Satisfied Customers</div>

    <!--Pager Starts -->
    <div class="pager_wrap">
        <div id="pager">
        </div>
    </div>
    <!--Pager Ends -->

    <ul id="industry_list">
        <?php foreach(array_filter(portfolio(), 'filter_featured_portfolio') as $portfolio): ?>
            <li>
                <a href="<?php echo $portfolio['href']; ?>">
                    <i><?php echo str_replace('Logos', '', $portfolio['text']); ?></i>
                </a>
            </li>
        <?php endforeach; ?>

        <li id="industry_selectbox">
            <form class="adminForm" id="ticketForm" method="post" action="/users/login/page:order_now" accept-charset="utf-8">
                <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>

                <select name="industry_list_select" id="industry_list_select">
                    <?php foreach(portfolio() as $portfolio): ?>
                        <option value="<?php echo $portfolio['href']; ?>"><?php echo $portfolio['text']; ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <button name="submit" type="submit" id="submitBtn" class="sprite"><span>Get Started Now</span></button>
            </form>
        </li>
    </ul>

    <div id="design99" class="sprite"><a href="#"><span>Start with just $99</span></a></div>
</div><!-- end of summaryarea -->
