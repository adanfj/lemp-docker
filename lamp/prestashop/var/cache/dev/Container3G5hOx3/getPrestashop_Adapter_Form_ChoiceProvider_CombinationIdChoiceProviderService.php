<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.form.choice_provider.combination_id_choice_provider' shared service.

return $this->services['prestashop.adapter.form.choice_provider.combination_id_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CombinationIdChoiceProvider(($this->services['prestashop.adapter.product.combination.repository.combination_repository'] ?? $this->load('getPrestashop_Adapter_Product_Combination_Repository_CombinationRepositoryService.php')), ($this->services['prestashop.adapter.attribute.repository.attribute_repository'] ?? $this->load('getPrestashop_Adapter_Attribute_Repository_AttributeRepositoryService.php')), ($this->services['prestashop.core.product.combination.name_builder.combination_name_builder'] ?? $this->load('getPrestashop_Core_Product_Combination_NameBuilder_CombinationNameBuilderService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguage()->id);
