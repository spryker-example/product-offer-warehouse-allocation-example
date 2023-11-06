<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerExample\Zed\ProductOfferWarehouseAllocationExample\Persistence;

use Orm\Zed\ProductOfferStock\Persistence\SpyProductOfferStockQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;
use SprykerExample\Zed\ProductOfferWarehouseAllocationExample\ProductOfferWarehouseAllocationExampleDependencyProvider;

/**
 * @method \SprykerExample\Zed\ProductOfferWarehouseAllocationExample\Persistence\ProductOfferWarehouseAllocationExampleRepositoryInterface getRepository()
 * @method \SprykerExample\Zed\ProductOfferWarehouseAllocationExample\ProductOfferWarehouseAllocationExampleConfig getConfig()
 */
class ProductOfferWarehouseAllocationExamplePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\ProductOfferStock\Persistence\SpyProductOfferStockQuery
     */
    public function getProductOfferStockPropelQuery(): SpyProductOfferStockQuery
    {
        return $this->getProvidedDependency(ProductOfferWarehouseAllocationExampleDependencyProvider::PROPEL_QUERY_PRODUCT_OFFER_STOCK);
    }
}
