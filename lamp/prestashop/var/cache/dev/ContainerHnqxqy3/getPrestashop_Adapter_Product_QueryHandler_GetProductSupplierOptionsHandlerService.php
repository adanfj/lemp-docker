<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.query_handler.get_product_supplier_options_handler' shared service.

return $this->services['prestashop.adapter.product.query_handler.get_product_supplier_options_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\QueryHandler\GetProductSupplierOptionsHandler(($this->services['prestashop.adapter.product.repository.product_supplier_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductSupplierRepositoryService.php')), ($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')));