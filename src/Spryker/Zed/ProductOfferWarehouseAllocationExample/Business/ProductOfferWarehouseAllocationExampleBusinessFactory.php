<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerExample\Zed\ProductOfferWarehouseAllocationExample\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use SprykerExample\Zed\ProductOfferWarehouseAllocationExample\Business\Allocator\WarehouseAllocator;
use SprykerExample\Zed\ProductOfferWarehouseAllocationExample\Business\Allocator\WarehouseAllocatorInterface;

/**
 * @method \SprykerExample\Zed\ProductOfferWarehouseAllocationExample\Persistence\ProductOfferWarehouseAllocationExampleRepositoryInterface getRepository()
 * @method \SprykerExample\Zed\ProductOfferWarehouseAllocationExample\ProductOfferWarehouseAllocationExampleConfig getConfig()
 */
class ProductOfferWarehouseAllocationExampleBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \SprykerExample\Zed\ProductOfferWarehouseAllocationExample\Business\Allocator\WarehouseAllocatorInterface
     */
    public function createWarehouseAllocator(): WarehouseAllocatorInterface
    {
        return new WarehouseAllocator($this->getRepository());
    }
}
