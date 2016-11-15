<?php

namespace Omnipay\Moneris\Message;

/**
 * Moneris Abstract Request
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{

    protected $liveEndpoint = 'https://www3.moneris.com/HPPDP/index.php';
    protected $testEndpoint = 'https://esqa.moneris.com/HPPDP/index.php';

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

    public function getEndpoint()
    {
        return $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint;
    }
}
