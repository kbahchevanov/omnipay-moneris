<?php

namespace Omnipay\Moneris\Message;

class AbstractResponse extends \Omnipay\Common\Message\AbstractResponse
{
    public function isSuccessful()
    {
        return true;
    }

    public function getMessage()
    {
        if (isset($this->data['error'])) {
            return $this->data['error']['message'];
        }
    }
}
