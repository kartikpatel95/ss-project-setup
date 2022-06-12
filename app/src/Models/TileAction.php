<?php

namespace App\Models;

use App\Elements\Models\TileActionElement;
use gorriecoe\Link\Models\Link;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;

class TileAction extends Link {

    private static string $table_name = "TileAction";

    private static string $singular_name = "Tile Action";

    private static string $plural_name = "Tile Actions";

    private static array $has_one = [
        'TileActionElement' => TileActionElement::class,
        'Figure' => Image::class,
    ];

    private static array $owns = [
        'Figure',
    ];

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $figure = UploadField::create('Figure');
        $figure->setFolderName('Tile images');
        $fields->addFieldToTab('Root.Main', $figure);

        return $fields;
    }
}