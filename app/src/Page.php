<?php

namespace {

    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\TextareaField;

    class Page extends SiteTree
    {

        private static array $db = [
            'FullPageBanner' => 'Boolean',
            'BannerMessage' => 'Text',
        ];

        private static array $has_one = [
            'Banner' => Image::class,
        ];

        private static array $owns = [
            'Banner'
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $banner = UploadField::create('Banner');
            $banner->setFolderName('Banners');

            $fields->addFieldToTab('Root.Main', $banner, 'ElementalArea');
            $fields->addFieldToTab('Root.Main', CheckboxField::create('FullPageBanner', 'Full screen banner'), 'ElementalArea');
            $fields->addFieldToTab('Root.Main', TextareaField::create('BannerMessage'), 'ElementalArea');

            return $fields;
        }
    }
}
