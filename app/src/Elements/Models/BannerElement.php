<?php

namespace App\Elements\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;

/**
 * Class BannerElement
 *
 * @package App\Elements
 */
class BannerElement extends BaseElement
{

    private static string $table_name = "BannerElement";

    private static string $singular_name = "Banner Element";

    private static string $plural_name = "Banner Elements";

    private static string $icon = 'font-icon-block-banner';

    private static string $description = "Banner";

    private static array $db = [
        'Height' => "Enum('300,350,400,450,500')",
        'ImageLength' => "Enum('full,container')",
        'Parallax' => 'Boolean',
    ];

    private static array $has_one = [
        'Banner' => Image::class
    ];

    private static array $owns = [
        'Banner'
    ];

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', UploadField::create('Banner'));
        $fields->dataFieldByName('ImageLength')
            ->setTitle('Image Length')
            ->setDescription('Full will go edge to edge of the screen, whereas container will leave padding on either side of the image.');
        $fields->dataFieldByName('Parallax')->setTitle('Parallax Scroll');

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
