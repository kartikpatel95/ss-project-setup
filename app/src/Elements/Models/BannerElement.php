<?php

namespace App\Elements\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

/**
 * Class BannerElement
 *
 * @package App\Elements
 */
class BannerElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "BannerElement";

    /**
     * @var string
     */
    private static $singular_name = "Banner Element";

    /**
     * @var string
     */
    private static $plural_name = "Banner Elements";

    /**
     * @var string
     */
    private static $icon = 'font-icon-block-banner';

    /**
     * @var string
     */
    private static $description = "Banner";

    /**
     * @var array
     */
    private static $db = [
        'Height' => "Enum('300,350,400,450,500')",
        'ImageLength' => "Enum('full,container')",
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'Banner' => Image::class
    ];

    /**
     * @var array
     */
    private static $owns = [
        'Banner'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('ContainerType');
        $fields->addFieldToTab('Root.Main', UploadField::create('Banner'));
        $fields->dataFieldByName('ImageLength')->setTitle('Image Length');

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return "Banner";
    }
}
