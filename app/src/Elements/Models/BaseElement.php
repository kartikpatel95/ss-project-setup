<?php

namespace App\Elements\Models;

/**
 * Class BaseElement
 * Base element that is used to have common elements that all other element blocks will inherit
 *
 * @package App\Elements
 */
class BaseElement extends \DNADesign\Elemental\Models\BaseElement
{

    /**
     * @var string
     */
    private static $table_name = "Element_App";

    /**
     * @var string
     */
    private static $singular_name = "Base Element";

    /**
     * @var string
     */
    private static $plural_name = "Base Elements";

    /**
     * @var string
     */
    private static $description = "Common element with common features for all elements";

    /**
     * @var array
     */
    private static $db = [
        'ContainerType' => "Enum('container-fluid,container')"
    ];

    public function getCMSFields()
    {
        $fields =  parent::getCMSFields();

        $fields->dataFieldByName('ContainerType')
            ->setTitle('Container Type')
            ->setDescription('container-fluid is full width with small spacer from the end and container leaves spaces on either side');

        return $fields;
    }
}
