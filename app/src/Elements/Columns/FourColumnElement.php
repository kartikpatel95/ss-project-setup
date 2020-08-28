<?php

namespace App\Elements\Columns;

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

    /**
     * @var string
     */
    private static $table_name = "FourColumnElement";

    /**
     * @var string
     */
    private static $singular_name = "Four Column Block";

    /**
     * @var string
     */
    private static $plural_name = "Four Column Blocks";

    /**
     * @var string
     */
    private static $description = "Four Columns";

    /**
     * @var string
     */
    private static $icon = 'font-icon-columns';

    /**
     * @var array
     */
    private static $has_one = [
        'LeftColumn' => ElementalArea::class,
        'MiddleLeft' => ElementalArea::class,
        'MiddleRight' => ElementalArea::class,
        'RightColumn' => ElementalArea::class
    ];

    /**
     * @var array
     */
    private static $owns = [
        'LeftColumn',
        'MiddleLeft',
        'MiddleRight',
        'RightColumn'
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
