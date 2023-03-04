<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.command_handler.issue_partial_refund_handler' shared service.

return $this->services['prestashop.adapter.order.command_handler.issue_partial_refund_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\IssuePartialRefundHandler(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.order.refund.order_refund_calculator'] ?? ($this->services['prestashop.adapter.order.refund.order_refund_calculator'] = new \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundCalculator())), ($this->services['prestashop.adapter.order.refund.order_slip_creator'] ?? $this->load('getPrestashop_Adapter_Order_Refund_OrderSlipCreatorService.php')), ($this->services['prestashop.adapter.order.refund.voucher_generator'] ?? $this->load('getPrestashop_Adapter_Order_Refund_VoucherGeneratorService.php')), ($this->services['prestashop.adapter.order.refund.updater'] ?? ($this->services['prestashop.adapter.order.refund.updater'] = new \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundUpdater())), ($this->services['prestashop.adapter.context_state_manager'] ?? $this->load('getPrestashop_Adapter_ContextStateManagerService.php')));
