<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class AdditionalSellerInput extends Dto
{
    protected static array $attributeMap = [
        'dataType' => 'DataType',
        'valueAsString' => 'ValueAsString',
        'valueAsBoolean' => 'ValueAsBoolean',
        'valueAsInteger' => 'ValueAsInteger',
        'valueAsTimestamp' => 'ValueAsTimestamp',
        'valueAsAddress' => 'ValueAsAddress',
        'valueAsWeight' => 'ValueAsWeight',
        'valueAsDimension' => 'ValueAsDimension',
        'valueAsCurrency' => 'ValueAsCurrency',
    ];

    /**
     * @param  ?string  $dataType  The data type of the additional information.
     * @param  ?string  $valueAsString  The value when the data type is string.
     * @param  ?bool  $valueAsBoolean  The value when the data type is boolean.
     * @param  ?int  $valueAsInteger  The value when the data type is integer.
     * @param  ?\DateTimeInterface  $valueAsTimestamp  Date-time formatted timestamp.
     * @param  ?Address  $valueAsAddress  The postal address information.
     * @param  ?Weight  $valueAsWeight  The weight.
     * @param  ?Length  $valueAsDimension  The length.
     * @param  ?CurrencyAmount  $valueAsCurrency  Currency type and amount.
     */
    public function __construct(
        public ?string $dataType = null,
        public ?string $valueAsString = null,
        public ?bool $valueAsBoolean = null,
        public ?int $valueAsInteger = null,
        public ?\DateTimeInterface $valueAsTimestamp = null,
        public ?Address $valueAsAddress = null,
        public ?Weight $valueAsWeight = null,
        public ?Length $valueAsDimension = null,
        public ?CurrencyAmount $valueAsCurrency = null,
    ) {}
}
