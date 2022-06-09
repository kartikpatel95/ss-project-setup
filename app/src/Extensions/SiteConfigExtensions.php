<?php

namespace App\Extensions;

use App\Models\SocialMedia;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\ORM\DataExtension;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

/**
 * Class SiteConfig_Extensions
 *
 * @package App\Extensions
 */
class SiteConfigExtensions extends DataExtension
{

    private static array $has_one = [
        'Logo' => Image::class,
    ];

    private static array $has_many = [
        'SocialIcons' => SocialMedia::class,
    ];

    private static array $owns = [
        'Logo'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Main', $logo = UploadField::create('Logo'));
        $logo->setFolderName('SiteLogo');
        $logo->getValidator()->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png']);

        $fields->addFieldToTab('Root.Social', $this->getSocialGrid());

    }

    public function getSocialGrid(): GridField
    {
        $grid = GridField::create('SocialIcons', 'Social Media', $this->owner->SocialIcons(),
            GridFieldConfig_RecordEditor::create());

        $grid->getConfig()->addComponent(new GridFieldOrderableRows('SortOrder'));

        return $grid;
    }
}
