<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class CreateInboundShipmentPlanRequest extends Dto
{
    protected static array $attributeMap = [
        'shipFromAddress' => 'ShipFromAddress',
        'labelPrepPreference' => 'LabelPrepPreference',
        'inboundShipmentPlanRequestItems' => 'InboundShipmentPlanRequestItems',
        'shipToCountryCode' => 'ShipToCountryCode',
        'shipToCountrySubdivisionCode' => 'ShipToCountrySubdivisionCode',
    ];

    protected static array $complexArrayTypes = ['inboundShipmentPlanRequestItems' => InboundShipmentPlanRequestItem::class];

    /**
     * @param  Address  $shipFromAddress  Specific details to identify a place.
     * @param  string  $labelPrepPreference  The preference for label preparation for an inbound shipment.
     * @param  InboundShipmentPlanRequestItem[]  $inboundShipmentPlanRequestItems  List of inbound shipment plan requests
     * @param  ?string  $shipToCountryCode  The two-character country code for the country where the inbound shipment is to be sent.
     *
     * Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     *
     *  Values:
     *
     *  ShipToCountryCode values for North America:
     *  * CA – Canada
     *  * MX - Mexico
     *  * US - United States
     *
     * ShipToCountryCode values for MCI sellers in Europe:
     *  * DE – Germany
     *  * ES – Spain
     *  * FR – France
     *  * GB – United Kingdom
     *  * IT – Italy
     *
     * Default: The country code for the seller's home marketplace.
     * @param  ?string  $shipToCountrySubdivisionCode  The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, "IN-MH". In full ISO 3166-2 format.
     *
     * Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     */
    public function __construct(
        public Address $shipFromAddress,
        public string $labelPrepPreference,
        public array $inboundShipmentPlanRequestItems,
        public ?string $shipToCountryCode = null,
        public ?string $shipToCountrySubdivisionCode = null,
    ) {}
}
