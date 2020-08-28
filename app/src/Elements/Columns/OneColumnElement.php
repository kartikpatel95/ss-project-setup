<?php

namespace App\Elements\Columns;

use DNADesign\Elemental\Extensions\ElementalAreasExtension;
use DNADesign\Elemental\Models\BaseElement;
use DNADesign\Elemental\Models\ElementalArea;
use SilverStripe\Forms\LiteralField;

/**
 * Class OneColumnElement
 *
 * @package App\Elements\Columns
 */
class OneColumnElement extends BaseElement
{
    /**
     * @var string
     */
    private static $table_name = "OneColumnElement";

    /**
     * @var string
     */
    private static $singular_name = "One Column Element";

    /**
     * @var string
     */
    private static $plural_name = "One Column Elements";

    /**
     * @var string
     */
    private static $icon = 'font-icon-columns';

    /**
     * @var string
     */
    private static $description = "One Column";

    /**
     * @var array
     */
    private static $has_one = [
        'Column' => ElementalArea::class
    ];

    /**
     * @var string[]
     */
    private static $owns = [
        'Column',
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

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->insertBefore('Column', LiteralField::create('startRow', '<div class="row">'));
        $fields->insertBefore('Column', LiteralField::create('colStart', '<div class="col-sm-12">'));
        $fields->insertAfter('Column', LiteralField::create('colEnd', '</div>'));
        $fields->insertAfter('Column', LiteralField::create('endRow', '</div>'));

        return $fields;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'One Column';
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
