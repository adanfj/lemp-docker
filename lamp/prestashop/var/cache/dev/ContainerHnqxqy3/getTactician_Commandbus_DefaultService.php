<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'tactician.commandbus.default' shared service.

return $this->services['tactician.commandbus.default'] = new \League\Tactician\CommandBus([0 => ($this->services['prestashop.core.command_bus.middleware.command_register_middleware'] ?? $this->load('getPrestashop_Core_CommandBus_Middleware_CommandRegisterMiddlewareService.php')), 1 => new \League\Tactician\Handler\CommandHandlerMiddleware(($this->privates['tactician.handler.command_name_extractor.class_name'] ?? ($this->privates['tactician.handler.command_name_extractor.class_name'] = new \League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor())), ($this->privates['tactician.commandbus.default.handler.locator'] ?? $this->load('getTactician_Commandbus_Default_Handler_LocatorService.php')), new \League\Tactician\Handler\MethodNameInflector\HandleInflector())]);
