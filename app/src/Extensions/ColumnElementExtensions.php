<?php

namespace App\Extensions;

use App\Elements\Columns\FourColumnElement;
use App\Elements\Columns\OneColumnElement;
use App\Elements\Columns\ThreeColumnElement;
use App\Elements\Columns\TwoColumnElement;
use DNADesign\ElementalUserForms\Model\ElementForm;
use SilverStripe\ORM\DataExtension;

class ColumnElementExtensions extends DataExtension
{

    private static array $disallowed_elements = [
        OneColumnElement::class,
        TwoColumnElement::class,
        ThreeColumnElement::class,
        FourColumnElement::class,
        ElementForm::class,
    ];
}