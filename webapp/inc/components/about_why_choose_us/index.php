<div class="two_columns" id="about_us">
    <div class="column column-big">
        <?php element('top_ten_reasons'); ?>
    </div>

    <div class="column column-small">

        <?php if (isset($showBanners)) : ?>

            <?php element('offer'); ?>

            <br class="spacerx" />

            <?php element('offer_bundle'); ?>

        <?php else: ?>
            <h2 class="title">Our Inspiration is Your Satisfaction</h2>

            <div class="comments">
                <ul id="comment-list">

                    <li>
                        <div class="comment-avatar">
                            <div class="imagex">
                                <img src="/img/clients/peter_anderson.jpg" alt="Peter Anderson" />
                            </div>
                        </div>
                        <div class="comment-text">

                            <h3>"Wow that is good."</h3>
                            <p>"Crea8ive Designs impressed me from the minute I
                                landed on their website. Here are a few reasons: the
                                clean style of their site, the easy-to-follow step
                                by step instructions, the attention to detail and,
                                most of all, the extremely low prices for great
                                artwork. Wow that is good!"</p>
                            <div class="comment-author">
                                <div class="alignLeft">
                                    Director<br>
                                    Peter Anderson
                                </div>
                                <div class="alignLeft">
                                    <img src="/img/logos/concore_painting.jpg" alt="Concore Painting" />
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="last-child">
                        <div class="comment-avatar">
                            <div class="imagex">
                                <img src="/img/clients/david_lee.jpg" alt="David Lee" />
                            </div>
                        </div>
                        <div class="comment-text">

                            <h3>"Absolutely wonderful"</h3>
                            <p>"Thanks for making this experience wonderful –
                                absolutely wonderful. When a friend suggested I
                                check out your site to see if you could make my logo
                                and web site, I figured you'd be a run of the mill
                                online shop. What I didn't expect was to be treated
                                this well with service that was great. Thanks!"</p>
                            <div class="comment-author">
                                <div class="alignLeft">
                                    CEO<br>
                                    David Lee
                                </div>
                                <div class="alignLeft">
                                    <img src="/img/logos/fanatic_live.jpg" alt="Fanatic Live" />
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        <?php endif; ?>

    </div>
</div>
