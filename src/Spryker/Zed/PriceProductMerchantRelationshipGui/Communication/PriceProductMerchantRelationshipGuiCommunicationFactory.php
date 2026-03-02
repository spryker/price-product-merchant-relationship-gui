<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PriceProductMerchantRelationshipGui\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Spryker\Zed\PriceProductMerchantRelationshipGui\Communication\Form\DataProvider\MerchantRelationshipPriceDimensionFormDataProvider;
use Spryker\Zed\PriceProductMerchantRelationshipGui\Dependency\Facade\PriceProductMerchantRelationshipGuiToMerchantRelationshipFacadeInterface;
use Spryker\Zed\PriceProductMerchantRelationshipGui\PriceProductMerchantRelationshipGuiDependencyProvider;

/**
 * @method \Spryker\Zed\PriceProductMerchantRelationshipGui\PriceProductMerchantRelationshipGuiConfig getConfig()
 */
class PriceProductMerchantRelationshipGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function createMerchantPriceDimensionFormDataProvider(): MerchantRelationshipPriceDimensionFormDataProvider
    {
        return new MerchantRelationshipPriceDimensionFormDataProvider(
            $this->getMerchantRelationshipFacade(),
        );
    }

    public function getMerchantRelationshipFacade(): PriceProductMerchantRelationshipGuiToMerchantRelationshipFacadeInterface
    {
        return $this->getProvidedDependency(PriceProductMerchantRelationshipGuiDependencyProvider::FACADE_MERCHANT_RELATIONSHIP);
    }
}
