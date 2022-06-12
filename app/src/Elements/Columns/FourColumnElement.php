<?php

namespace App\Elements\Columns;

use App\Extensions\ColumnElementExtensions;
use DNADesign\Elemental\Extensions\ElementalAreasExtension;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;
use DNADesign\Elemental\Models\ElementalArea;

/**
 * Class FourColumnElement
 *
 * @package App\Element
 */
class FourColumnElement extends BaseElement
{

    private static string $table_name = "FourColumnElement";

    private static string $singular_name = "Four Column Block";

    private static string $plural_name = "Four Column Blocks";

    private static string $description = "Four Columns";

    private static string $icon = 'font-icon-columns';

    private static array $has_one = [
        'LeftColumn' => ElementalArea::class,
        'MiddleLeft' => ElementalArea::class,
        'MiddleRight' => ElementalArea::class,
        'RightColumn' => ElementalArea::class
    ];

    private static array $owns = [
        'LeftColumn',
        'MiddleLeft',
        'MiddleRight',
        'RightColumn'
    ];

    private static array $cascade_deletes = [
        'LeftColumn',
        'MiddleLeft',
        'MiddleRight',
        'RightColumn',
    ];

    private static array $cascade_duplicates = [
        'LeftColumn',
        'MiddleLeft',
        'MiddleRight',
        'RightColumn',
    ];

    private static array $extensions = [
        ElementalAreasExtension::class,
        ColumnElementExtensions::class,
    ];

    private static $inline_editable = false;

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();

        $fields->insertBefore('LeftColumn', LiteralField::create('RowStart', '<div class="row">'));

        $fields->insertBefore('LeftColumn', LiteralField::create('LeftStart', '<div class="col-md-3">Left'));
        $fields->insertAfter('LeftColumn', LiteralField::create('LeftEnd', '</div>'));

        $fields->insertBefore('MiddleLeft', LiteralField::create('MiddleLeftStart', '<div class="col-md-3">Middle Left'));
        $fields->insertAfter('MiddleLeft', LiteralField::create('MiddleLeftEnd', '</div>'));

        $fields->insertBefore('MiddleRight', LiteralField::create('MiddleRightStart', '<div class="col-md-3">Middle Rgiht'));
        $fields->insertAfter('MiddleRight', LiteralField::create('MiddleRightEnd', '</div>'));

        $fields->insertBefore('RightColumn', LiteralField::create('RightStart', '<div class="col-md-3">Right'));
        $fields->insertAfter('RightColumn', LiteralField::create('RightStart', '</div>'));

        $fields->insertAfter('RightColumn', LiteralField::create('RowEnd', '</div>'));

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return "Four Columns";
    }

    /**
     * @return bool
     * Needed for silverstripe archive fix. Unused though
     */
    public static function Breadcrumbs()
    {
        return true;
    }
}
