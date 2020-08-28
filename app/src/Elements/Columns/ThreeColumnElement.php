<?php

namespace App\Elements\Columns;

use DNADesign\Elemental\Models\BaseElement;
use DNADesign\Elemental\Models\ElementalArea;
use DNADesign\Elemental\Extensions\ElementalAreasExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;

/**
 * Class ThreeColumnElement
 *
 * @package App\Elements
 */
class ThreeColumnElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "ThreeColumnElement";

    /**
     * @var string
     */
    private static $singular_name = "Three Column Element";

    /**
     * @var string
     */
    private static $plural_name = "Three Column Elements";

    /**
     * @var string
     */
    private static $icon = 'font-icon-columns';

    /**
     * @var string
     */
    private static $description = "Three Column";

    /**
     * @var array
     */
    private static $has_one = [
        'LeftColumn' => ElementalArea::class,
        'MiddleColumn' => ElementalArea::class,
        'RightColumn' => ElementalArea::class,
    ];

    /**
     * @var array
     */
    private static $owns = [
        'LeftColumn',
        'MiddleColumn',
        'RightColumn',
    ];

    /**
     * @var array
     */
    private static $extensions = [
        ElementalAreasExtension::class
    ];

    /**
     * @var bool
     */
    private static $inline_editable = false;

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();

        $fields->insertBefore('LeftColumn', LiteralField::create('RowStart', '<div class="row">'));

        $fields->insertBefore('LeftColumn', LiteralField::create('LeftStart', '<div class="col-md-4">Left'));
        $fields->insertAfter('LeftColumn', LiteralField::create('LeftEnd', '</div>'));

        $fields->insertBefore('MiddleColumn', LiteralField::create('MiddleStart', '<div class="col-md-4">Middle'));
        $fields->insertAfter('MiddleColumn', LiteralField::create('MiddleEnd', '</div>'));

        $fields->insertBefore('RightColumn', LiteralField::create('RightStart', '<div class="col-md-4">Right'));
        $fields->insertAfter('RightColumn', LiteralField::create('RightStart', '</div>'));

        $fields->insertAfter('RightColumn', LiteralField::create('RowEnd', '</div>'));

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return "Three Column";
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
