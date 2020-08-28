<?php

namespace App\Elements\Columns;

use DNADesign\Elemental\Extensions\ElementalAreasExtension;
use DNADesign\Elemental\Models\BaseElement;
use DNADesign\Elemental\Models\ElementalArea;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;

/**
 * Class TwoColumnElement
 *
 * @package App\Elements
 */
class TwoColumnElement extends BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "TwoColumnElement";

    /**
     * @var string
     */
    private static $singular_name = "Two Column Element";

    /**
     * @var string
     */
    private static $plural_name = "Two Column Elements";

    /**
     * @var string
     */
    private static $icon = 'font-icon-columns';

    /**
     * @var string
     */
    private static $description = "Two Column";

    /**
     * @var array
     */
    private static $has_one = [
        'LeftColumn' => ElementalArea::class,
        'RightColumn' => ElementalArea::class
    ];

    /**
     * @var array
     */
    private static $owns = [
        'LeftColumn',
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

        $fields->insertBefore('LeftColumn', LiteralField::create('LeftStart', '<div class="col-md-6">Left'));
        $fields->insertAfter('LeftColumn', LiteralField::create('LeftEnd', '</div>'));

        $fields->insertBefore('RightColumn', LiteralField::create('RightStart', '<div class="col-md-6">Right'));
        $fields->insertAfter('RightColumn', LiteralField::create('RightStart', '</div>'));

        $fields->insertAfter('RightColumn', LiteralField::create('RowEnd', '</div>'));

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return "Two Column";
    }

    /**
     * @return bool
     *
     * Needed for silverstripe archive fix. Unused though
     */
    public static function Breadcrumbs(): bool
    {
        return true;
    }
}
