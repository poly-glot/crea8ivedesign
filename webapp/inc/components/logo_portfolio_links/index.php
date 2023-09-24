<?php
if (!function_exists('portfolioWithoutRecent')) :
    function portfolioWithoutRecent($portfolio)
    {
        if (!$portfolio['section'])
        {
            return false;
        }

        if($portfolio['section'] === 'web20')
        {
            return false;
        }

        return true;
    }
endif;

if (!function_exists('portfolioClassNameByIndex')) :
    function portfolioClassNameByIndex($index)
    {
        if ($index === 0) :
            return 'first-column';
        endif;

        if ($index === 1) :
            return 'middle-child';
        endif;

        if ($index === 2) :
            return 'last-child';
        endif;
    }
endif;

$portfolio_rows = array_chunk(array_filter(portfolio(), 'portfolioWithoutRecent'), 10);
?>

<div class="three_columns">
    <?php foreach ($portfolio_rows as $i => $portfolio) : ?>
    <div class="column <?php echo portfolioClassNameByIndex($i); ?>">

        <ul class="enhanceList">
            <?php foreach ($portfolio as $item) : ?>
                <li>
                    <h5>
                        <a href="<?php echo $item['href']; ?>">
                            <?php echo str_replace('Logos', '', $item['text']); ?>
                        </a>
                    </h5>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endforeach; ?>
</div>
