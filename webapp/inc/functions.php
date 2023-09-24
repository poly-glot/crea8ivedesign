<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
define('__CURRENT_DIR__', getcwd());

class PageManager
{
    private $js = array(
            '/js/jquery-1.4.2.min.js'     => null,
            '/js/jquery.easing.1.3.js'    => null,
            '/js/jquery.tipTip.js'        => null,
            '/js/jquery.cycle.all.js'     => null,
            '/js/jquery.scroll.pack.js'   => null,
            '/js/jquery.scrollTo-min.js'  => null,
            '/js/jquery.metadata.js'      => null,
            '/js/jquery.validate.pack.js' => null,
            '/js/superfish.js'            => null,
            '/js/jquery.prettyPhoto.js'   => null,
            '/js/vtip.js'                 => null,
            '/js/common.js'               => null,
            '/js/homepage.js'             => null,
        );

    private $css = array();
    private $title = 'creative Logo design Services,Custom Logo Design,Business Logo';
    private $metaKeywords = 'logo design, logos, logo design service, logo designers, business logos, logo, logo designer, custom logos, logo design firm, logo design services, custom logo design, business logo';
    private $metaDescription = 'creative Team offers Affordable Custom Logo Design Services. Are you looking for affordable custom logo design services? Logo design Services , Business Logo, Custom Logo Design just $99. 100% satisfied Logo design Services by crea8ivedesign. Browse our business logos and design portfolio online.';

    private $validProperties
        = array(
            'title',
            'metaKeywords',
            'metaDescription'
        );

    function addAsset($path, $content = null, $type = 'js')
    {
        if ($type === 'js') {
            $this->js[$path] = $content;
        }

        if ($type === 'css') {
            $this->css[$path] = $content;
        }
    }

    function addCss($path, $content = null)
    {
        $this->addAsset($path, $content, 'css');
    }

    function jsExternal()
    {
        return array_filter($this->js, 'isEmpty');
    }

    function jsInline()
    {
        return array_filter($this->js, 'notEmpty');
    }

    function css()
    {
        return $this->css;
    }

    public function display()
    {
        $page = $this->currentPage();
        $file = __CURRENT_DIR__ . "/inc/pages/$page.php";

        if (file_exists($file)) {
            include $file;
        }
    }

    public function bodyClass()
    {
        $page = $this->currentPage();

        if (empty($page) || $page === 'home')
        {
            return 'indexpage';
        }

        if (strpos($page, 'portfolio_') !== FALSE)
        {
            return 'innerpage innerPortfolio page-' . $page;
        }

        if (strpos($page, 'prices_packages_') !== FALSE)
        {
            return 'innerpage innerBigSpacing page-' . $page;
        }

        return 'innerpage page-' . $page;
    }

    public function pageClass()
    {
        $page = $this->currentPage();

        if (strpos($page, 'case_studies_') !== FALSE)
        {
            return 'page_casestudy';
        }

        if (strpos($page, 'testimonials') !== FALSE)
        {
            return 'page_testimonials';
        }

        return 'page';
    }

    public function currentPage()
    {
        list($page) = sscanf($_SERVER['REQUEST_URI'], "/pages/%s");

        if ($page && strpos($page, '/') !== false) {
            $page = array_shift(explode('/', $page));
        }

        $page = $page ? $page : 'home';

        return $page;
    }

    public function subSection()
    {
        list($page) = sscanf($_SERVER['REQUEST_URI'], "/pages/%s");

        if ($page && strpos($page, '/') !== false) {
            $page = explode('/', $page);

            return $page[1];
        }

        return null;
    }

    public function __get($property)
    {
        if ($this->validProperty($property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if ($this->validProperty($property)) {
            $this->$property = $value;
        }

        return $this;
    }

    protected function validProperty($property)
    {
        return property_exists($this, $property)
            && in_array(
                $property, $this->validProperties
            );
    }
}

$pageManager = new PageManager();

function page()
{
    global $pageManager;

    return $pageManager;
}

function notEmpty($value)
{
    return !empty($value);
}

function isEmpty($value)
{
    return empty($value);
}

function component($component, $options = array())
{
    extract($options);

    include __CURRENT_DIR__ . "/inc/components/$component/index.php";
}

function element($element, $options = array())
{
    extract($options);

    include __CURRENT_DIR__ . "/inc/elements/$element.php";
}


function portfolio()
{
    return include __CURRENT_DIR__ . "/inc/config/portfolio.php";
}

function packages()
{
    return include __CURRENT_DIR__ . "/inc/config/packages.php";
}

function packagesBySection($id)
{
    foreach(packages() as $package)
    {
        if($package['id'] === $id)
        {
            return $package['packages'];
        }
    }

    return array();
}

function price($value)
{
    return "$" . $value;
}

function sectionSummaryAreaText($section)
{
    $title              = "";
    $subtitle           = "";
    $portfolio_text     = "";
    $portfolio_heading  = "";
    $num_portfolio      = 4;
    $portfolio_section  = str_replace('design', '', $section);

    if ($section === 'logodesign') :
        $title              = "Custom Logo Design";
        $subtitle           = "Nothing is More Important than a Perfect Logo";
        $portfolio_text     = "Logo Design Portfolio";
        $portfolio_heading  = "Recent Crea8ive Designs Logo Creations";
        $num_portfolio      = 5;
    endif;

    if ($section === 'webdesign') :
        $title              = "Web Design";
        $subtitle           = "Expand Your Business to the Online World";
        $portfolio_text     = "Web Design Portfolio";
        $portfolio_heading  = "Recent Crea8ive Designs Web Site Creations";
    endif;

    if ($section === 'stationery') :
        $title              = "Stationery Design";
        $subtitle           = "Create a Memorable Impression";
        $portfolio_text     = "Staionery Design Portfolio";
        $portfolio_heading  = "Recent Crea8ive Designs Stationery Creations";
    endif;

    if ($section === 'brochure') :
        $title              = "Custom Brochure Design";
        $subtitle           = "A Professional Presentation at an Affordable Price";
        $portfolio_text     = "Brochure Design Portfolio";
        $portfolio_heading  = "Recent Crea8ive Designs Brochure design Creations";
    endif;

    return compact('title', 'subtitle', 'portfolio_text', 'portfolio_heading', 'num_portfolio', 'portfolio_section');
}

function printActiveSectionClass($section, $expectedSection)
{
    if ($section && $section === $expectedSection)
    {
        echo 'active';
    }
}
