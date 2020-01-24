<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;

    /**
     * Class PageController
     */
    class PageController extends ContentController
    {
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            Requirements::themedJavascript('dist/javascript/vendor/jquery.min');
            Requirements::themedJavascript('dist/javascript/vendor/bootstrap.min.js');
            Requirements::themedCSS('dist/css/layout');
            Requirements::themedCSS('dist/css/vendor/bootstrap.min');
            Requirements::themedCSS('dist/css/framework/typography');


            Requirements::css("https://use.fontawesome.com/releases/v5.8.2/css/all.css");
            Requirements::css("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap");
        }
    }
}
