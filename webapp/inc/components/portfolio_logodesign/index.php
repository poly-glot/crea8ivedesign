<div class="two_columns">
    <div class="column first-column">
        <ul class="roundbox_list">
            <li class="round_list_heading">
                <h3>Industry Wise Portfolio:</h3>
            </li>
            <?php foreach (portfolio() as $item) :?>
                <li class="<?php printActiveSectionClass($sub_section, $item['section']); ?>">
                    <a href="<?php echo $item['href']; ?>">
                        <span><?php echo $item['text']; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="column column-right">
        <?php component('portfolio', compact('portfolio_images', 'section', 'sub_section')); ?>
    </div>
</div>
