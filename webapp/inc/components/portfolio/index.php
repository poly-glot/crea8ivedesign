<?php
    $image_width = $section === 'logodesign' ? 302 : 426;
    $image_height = $section === 'logodesign' ? 176 : 366;
?>
<?php if ($section !== 'logodesign') : ?>
    <div class="pagex">
        <div class="alignLeft">
            <a href="#" id="prevLink2">
                <img src="/img/portfolio_prev.jpg" alt="Prev"/>
            </a>
        </div>
        <div class="alignLeft">
            <div id="pager2"></div>
        </div>
        <div class="alignLeft">
            <a href="#" id="nextLink2">
                <img src="/img/portfolio_next.jpg" alt="Next"/>
            </a>
        </div>
    </div>
<?php endif; ?>

<div class="clearfix"></div>

<div class="middlebox">
    <div class="middlebox-inner"><a href="#">Please click on image for View complete Layout</a></div>
</div>

<div class="bigspace"></div>

<div id="slider2">
    <?php foreach($portfolio_images as $row => $portfolio) : ?>
        <div class="slide slide_item<?php echo $row + 1; ?>">
            <ul class="inline_items inline_items_2">
                <?php foreach ($portfolio as $index => $item) : ?>
                    <li class="<?php echo ($index + 1) % 2 === 0 ? 'last-child' : ''; ?>">
                        <div class="doubleborder">
                            <div class="doubleborder-inner">
                                <a href="<?php echo $item; ?>" rel="prettyPhoto[gallery]" title="Portfolio <?php echo $bluebar_heading; ?> <?php echo $index + 1; ?>">
                                    <img src="<?php echo $item; ?>" title="Portfolio <?php echo $bluebar_heading; ?> <?php echo $index + 1; ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>>" alt=""/>
                                </a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>
