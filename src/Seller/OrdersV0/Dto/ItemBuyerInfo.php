<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class ItemBuyerInfo extends Dto
{
    protected static array $attributeMap = [
        'buyerCustomizedInfo' => 'BuyerCustomizedInfo',
        'giftWrapPrice' => 'GiftWrapPrice',
        'giftWrapTax' => 'GiftWrapTax',
        'giftMessageText' => 'GiftMessageText',
        'giftWrapLevel' => 'GiftWrapLevel',
    ];

    /**
     * @param  ?BuyerCustomizedInfoDetail  $buyerCustomizedInfo  Buyer information for custom orders from the Amazon Custom program.
     * @param  ?Money  $giftWrapPrice  The monetary value of the order.
     * @param  ?Money  $giftWrapTax  The monetary value of the order.
     * @param  ?string  $giftMessageText  A gift message provided by the buyer.
     *
     * **Note**: This attribute is only available for MFN (fulfilled by seller) orders.
     * @param  ?string  $giftWrapLevel  The gift wrap level specified by the buyer.
     */
    public function __construct(
        public ?BuyerCustomizedInfoDetail $buyerCustomizedInfo = null,
        public ?Money $giftWrapPrice = null,
        public ?Money $giftWrapTax = null,
        public ?string $giftMessageText = null,
        public ?string $giftWrapLevel = null,
    ) {}
}
