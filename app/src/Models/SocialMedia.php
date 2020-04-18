<?php

namespace App\Models;

use gorriecoe\Link\Models\Link;
use SilverStripe\Forms\TextField;
use SilverStripe\SiteConfig\SiteConfig;

/**
 * Class SocialMedia
 *
 * @package App\Models
 */
class SocialMedia extends Link
{

    /**
     * @var string
     */
    private static $table_name = "SocialMedia";

    /**
     * @var string
     */
    private static $singular_name = "Social Media";

    /**
     * @var string
     */
    private static $plural_name = "Social Media";

    /**
     * @var string[]
     */
    private static $db = [
        'Icon' => 'Varchar',
        'SortOrder' => 'Int'
    ];

    /**
     * @var string[]
     */
    private static $has_one = [
        'SiteConfig' => SiteConfig::class,
    ];

    /**
     * @var string[]
     */
    private static $summary_fields = [
        'Icon',
        'Social',
    ];


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeFieldsFromTab('Root.Main', ['SiteConfigID', 'SortOrder', 'SocialID']);

        $fields->addFieldToTab('Root.Main', TextField::create('Icon')
            ->setDescription('Get your social icons from the following URL <a href="https://fontawesome.com/">Font Awesome</a>'),
            'OpenInNewWindow');


        return $fields;
    }
}
