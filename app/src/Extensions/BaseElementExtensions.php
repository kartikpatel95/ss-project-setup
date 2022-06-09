<?php

namespace App\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\OptionsetField;
use SilverStripe\ORM\DataExtension;

class BaseElementExtensions extends DataExtension
{

    private static array $db = [
        'PaddingTop' => "Enum('0,1,2,3,4,5')",
        'PaddingBottom' => "Enum('0,1,2,3,4,5')",
    ];

    private static array $defaults = [
        'PaddingTop' => 2,
        'PaddingBottom' => 2,
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Layout', [
           OptionsetField::create('PaddingTop', 'Padding Top', $this->owner->dbObject('PaddingTop')->enumValues())
               ->addExtraClass('cms-option-set-values'),
           OptionsetField::create('PaddingBottom', 'Padding Top', $this->owner->dbObject('PaddingBottom')->enumValues())
                ->addExtraClass('cms-option-set-values'),
        ]);
    }
}