<?php

namespace DTS\eBaySDK\MerchantData\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 * @property string $CityName
 * @property string $CompanyName
 * @property string $Country
 * @property string $Email
 * @property string $Phone
 * @property string $PostalCode
 * @property string $StateOrProvince
 * @property string $Street1
 * @property string $Street2
 * @property \DTS\eBaySDK\MerchantData\Types\ResponsiblePersonTypeType[] $Types
 */
class ResponsiblePersonType extends BaseType
{
    private static array $propertyTypes = [
        'CityName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CityName'
        ],
        'CompanyName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CompanyName'
        ],
        'Country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ],
        'Email' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ],
        'Phone' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Phone'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'StateOrProvince' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StateOrProvince'
        ],
        'Street1' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Street1'
        ],
        'Street2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Street2'
        ],
        'Types' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ResponsiblePersonTypeType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Types'
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
