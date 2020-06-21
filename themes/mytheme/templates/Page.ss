<!DOCTYPE html>
<html lang="$ContentLocale">
<!--<![endif]-->
<!--[if IE 6 ]><html lang="$ContentLocale" class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html lang="$ContentLocale" class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html lang="$ContentLocale" class="ie ie8"><![endif]-->

    <% include HeaderTag %>
    $SiteConfig.Alert
<body>
<header>
    <% require themedCSS('dist/css/layout') %>
    <% require themedCSS('dist/css/vendor/bootstrap.min') %>
    <% require themedCSS('dist/css/framework/typography') %>
    <% include Header %>
</header>
<div class="main">
    <div class="typography">
        $Layout
    </div>
</div>
<footer>
    <% include Footer %>
    <% require javascript('_resources/themes/mytheme/dist/javascript/vendor/jquery.min.js') %>
    <% require javascript('_resources/themes/mytheme/dist/javascript/vendor/bootstrap.min.js') %>
</footer>
</body>
</html>
