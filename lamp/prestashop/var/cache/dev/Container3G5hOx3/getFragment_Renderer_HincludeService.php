<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.hinclude' shared service.

$this->privates['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('jSyPtzttK637YqYmNOqtk33UtWYFLWgmTbfpR5Cosh88HmUrcpmUWUyHEIR4rzfk'))), NULL);

$instance->setFragmentPath('/_fragment');

return $instance;
