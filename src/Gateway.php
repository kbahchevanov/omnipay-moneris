<?php

namespace Omnipay\Moneris;

use Omnipay\Common\AbstractGateway;


class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Moneris';
    }

    public function getDefaultParameters()
    {
        return array(
            'psStoreId' => '',
            'hppKey' => '',
            'testMode' => true,
        );
    }

    public function getPsStoreId()
    {
        return $this->getParameter('psStoreId');
    }

    public function setPsStoreId($value)
    {
        return $this->setParameter('psStoreId', $value);
    }

    public function getHppKey()
    {
        return $this->getParameter('hppKey');
    }

    public function setHppKey($value)
    {
        return $this->setParameter('hppKey', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Moneris\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Moneris\Message\CompletePurchaseRequest', $parameters);
    }

}
