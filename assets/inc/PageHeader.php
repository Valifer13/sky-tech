<?php 

function PageHeader($title, $crumb = 'default', $url = "#") 
{
    if ($crumb == 'default') {
        $crumb = $title;
    }
    return "
    <div id=\"smooth-wrapper\">
        <div id=\"smooth-content\">

        <section class=\"page-header\" data-background=\"assets/img/bg-img/page-header-bg.jpg\">
            <div class=\"overlay\"></div>
            <div class=\"shapes\">
                <div class=\"shape shape-1\"><img src=\"assets/img/shapes/page-header-shape-1.png\" alt=\"shape\"></div>
                <div class=\"shape shape-2\"><img src=\"assets/img/shapes/page-header-shape-2.png\" alt=\"shape\"></div>
                <div class=\"shape shape-3\"><img src=\"assets/img/shapes/page-header-shape-3.png\" alt=\"shape\"></div>
            </div>
            <div class=\"container\">
                <div class=\"page-header-content text-center\">
                    <h1 class=\"title\">{$title}</h1>
                    <h4 class=\"sub-title\"><a class=\"home\" href=\"../index.html\">Beranda </a><span></span><a class=\"inner-page\" href=\"{$url}.php\"> {$crumb}</a></h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->
    ";
}
?>