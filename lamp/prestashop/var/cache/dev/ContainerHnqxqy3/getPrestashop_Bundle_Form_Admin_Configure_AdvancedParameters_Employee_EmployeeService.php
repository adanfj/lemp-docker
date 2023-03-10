<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.form.admin.configure.advanced_parameters.employee.employee' shared service.

$this->services['prestashop.bundle.form.admin.configure.advanced_parameters.employee.employee'] = $instance = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Employee\EmployeeType(($this->services['prestashop.core.form.choice_provider.all_languages'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_AllLanguagesService.php'))->getChoices(), ($this->services['prestashop.core.form.choice_provider.accessible_tab'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_AccessibleTabService.php'))->getChoices(), ($this->services['prestashop.core.form.choice_provider.profile'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_ProfileService.php'))->getChoices(), ($this->services['prestashop.adapter.multistore_feature'] ?? $this->getPrestashop_Adapter_MultistoreFeatureService())->isActive(), ($this->services['prestashop.adapter.employee.avatar_provider'] ?? $this->load('getPrestashop_Adapter_Employee_AvatarProviderService.php'))->getDefaultAvatarUrl(), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
