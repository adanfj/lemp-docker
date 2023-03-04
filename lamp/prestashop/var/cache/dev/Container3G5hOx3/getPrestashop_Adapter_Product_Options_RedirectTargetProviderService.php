<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.options.redirect_target_provider' shared service.

return $this->services['prestashop.adapter.product.options.redirect_target_provider'] = new \PrestaShop\PrestaShop\Adapter\Product\Options\RedirectTargetProvider(($this->services['prestashop.adapter.product.repository.product_preview_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductPreviewRepositoryService.php')), ($this->services['prestashop.adapter.category.repository.category_preview_repository'] ?? $this->load('getPrestashop_Adapter_Category_Repository_CategoryPreviewRepositoryService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()));
