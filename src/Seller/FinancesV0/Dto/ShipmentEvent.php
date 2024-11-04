<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ShipmentEvent extends Dto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'sellerOrderId' => 'SellerOrderId',
        'marketplaceName' => 'MarketplaceName',
        'storeName' => 'StoreName',
        'orderChargeList' => 'OrderChargeList',
        'orderChargeAdjustmentList' => 'OrderChargeAdjustmentList',
        'shipmentFeeList' => 'ShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'ShipmentFeeAdjustmentList',
        'orderFeeList' => 'OrderFeeList',
        'orderFeeAdjustmentList' => 'OrderFeeAdjustmentList',
        'directPaymentList' => 'DirectPaymentList',
        'postedDate' => 'PostedDate',
        'shipmentItemList' => 'ShipmentItemList',
        'shipmentItemAdjustmentList' => 'ShipmentItemAdjustmentList',
    ];

    protected static array $complexArrayTypes = [
        'orderChargeList' => ChargeComponent::class,
        'orderChargeAdjustmentList' => ChargeComponent::class,
        'shipmentFeeList' => FeeComponent::class,
        'shipmentFeeAdjustmentList' => FeeComponent::class,
        'orderFeeList' => FeeComponent::class,
        'orderFeeAdjustmentList' => FeeComponent::class,
        'directPaymentList' => DirectPayment::class,
        'shipmentItemList' => ShipmentItem::class,
        'shipmentItemAdjustmentList' => ShipmentItem::class,
    ];

    /**
     * @param  ?string  $amazonOrderId  An Amazon-defined identifier for an order.
     * @param  ?string  $sellerOrderId  A seller-defined identifier for an order.
     * @param  ?string  $marketplaceName  The name of the marketplace where the event occurred.
     * @param  ?string  $storeName  The name of the store where the event occurred.
     * @param  ChargeComponent[]|null  $orderChargeList  A list of charge information on the seller's account.
     * @param  ChargeComponent[]|null  $orderChargeAdjustmentList  A list of charge information on the seller's account.
     * @param  FeeComponent[]|null  $shipmentFeeList  A list of fee component information.
     * @param  FeeComponent[]|null  $shipmentFeeAdjustmentList  A list of fee component information.
     * @param  FeeComponent[]|null  $orderFeeList  A list of fee component information.
     * @param  FeeComponent[]|null  $orderFeeAdjustmentList  A list of fee component information.
     * @param  DirectPayment[]|null  $directPaymentList  A list of direct payment information.
     * @param  ?\DateTimeInterface  $postedDate  A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ShipmentItem[]|null  $shipmentItemList  A list of shipment items.
     * @param  ShipmentItem[]|null  $shipmentItemAdjustmentList  A list of shipment items.
     */
    public function __construct(
        public ?string $amazonOrderId = null,
        public ?string $sellerOrderId = null,
        public ?string $marketplaceName = null,
        public ?string $storeName = null,
        public ?array $orderChargeList = null,
        public ?array $orderChargeAdjustmentList = null,
        public ?array $shipmentFeeList = null,
        public ?array $shipmentFeeAdjustmentList = null,
        public ?array $orderFeeList = null,
        public ?array $orderFeeAdjustmentList = null,
        public ?array $directPaymentList = null,
        public ?\DateTimeInterface $postedDate = null,
        public ?array $shipmentItemList = null,
        public ?array $shipmentItemAdjustmentList = null,
    ) {}
}
