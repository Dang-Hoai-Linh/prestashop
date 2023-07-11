<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order.customer_service_message' shared service.

$this->services['form.type.order.customer_service_message'] = $instance = new \PrestaShopBundle\Form\Admin\Sell\Order\OrderMessageType(($this->services['prestashop.core.form.choice_provider.customer_service_order_messages_name'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CustomerServiceOrderMessagesNameService.php')), ($this->services['prestashop.core.form.choice_provider.customer_service_order_messages'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CustomerServiceOrderMessagesService.php')));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
