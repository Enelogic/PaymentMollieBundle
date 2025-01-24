<?php

namespace Ruudk\Payment\MollieBundle\Plugin;

use JMS\Payment\CoreBundle\Model\FinancialTransactionInterface;
use JMS\Payment\CoreBundle\Model\PaymentInstructionInterface;
use JMS\Payment\CoreBundle\Plugin\ErrorBuilder;
use Ruudk\Payment\MollieBundle\Form\IdealType;

class IdealPlugin extends DefaultPlugin
{
    public function processes($name)
    {
        return $name === IdealType::class || $name === 'mollie_ideal';
    }

    public function checkPaymentInstruction(PaymentInstructionInterface $instruction)
    {
        $errorBuilder = new ErrorBuilder();

        if ($errorBuilder->hasErrors()) {
            throw $errorBuilder->getException();
        }
    }
}
