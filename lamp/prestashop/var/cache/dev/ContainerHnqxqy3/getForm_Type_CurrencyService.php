<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.currency' shared service.

return $this->services['form.type.currency'] = new \PrestaShopBundle\Form\Admin\Improve\International\Currencies\CurrencyType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.currency_name_by_iso_code'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyNameByIsoCodeService.php'))->getChoices(), ($this->services['prestashop.adapter.multistore_feature'] ?? $this->getPrestashop_Adapter_MultistoreFeatureService())->isUsed());
