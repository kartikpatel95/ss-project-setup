<?php

namespace App\Elements\Models;

use App\Models\TileAction;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class TileActionElement extends BaseElement {

    private static string $table_name = "TileActionElement";

    private static string $singular_name = "Tile Action Element";

    private static string $plural_name = "Tile Actions Elements";

    private static string $icon = 'font-icon-thumbnails';

    private static string $description = "Tile actions";

    private static bool $inline_editable = false;

    private static array $has_many = [
        'TileActions' => TileAction::class,
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('TileActions');

        $gridFieldTile = GridField::create(
            'TileActions', 'Tile Actions', $this->TileActions(), GridFieldConfig_RecordEditor::create(),
        );

        $fields->addFieldToTab('Root.Main', $gridFieldTile);

        return $fields;
    }

    public function getType(): string
    {
        return "Tile Actions";
    }
}