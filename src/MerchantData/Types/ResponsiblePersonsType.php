<?php

namespace DTS\eBaySDK\MerchantData\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 * @property \DTS\eBaySDK\MerchantData\Types\ResponsiblePersonType[] $ResponsiblePerson
 */
class ResponsiblePersonsType extends BaseType
{
    private static $propertyTypes = [
        'ResponsiblePerson' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ResponsiblePersonType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ResponsiblePerson'
        ],
    ];

    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
