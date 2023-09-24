<?php
$sectionPackages = packagesBySection($section);
$rows = array_chunk($sectionPackages, 3);

$tooltips = __CURRENT_DIR__ . '/inc/components/packages/tooltips/' . $section . '.php';
if (file_exists($tooltips)) {
    //include_once $tooltips;
}

if (isset($firstThree)) :
    $rows = array($rows[0]);
endif;
?>

<!-- start of packages -->
<div id="why_us_pakcages">
    <form id="orderForm" class="adminForm" action="/orders/store">
        <input type="hidden" value="/pages/prices_packages_<?php echo $section; ?>" />

        <?php foreach($rows as $row) : ?>
            <ul class="three">
                <?php foreach ($row as $package) : ?>
                    <li class="homepage_package <?php echo $package['id']; ?>">
                        <?php element('package', compact('section', 'package')); ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="bigspace"></div>
        <?php endforeach; ?>
    </form>

</div>
<!-- end of packages-->
