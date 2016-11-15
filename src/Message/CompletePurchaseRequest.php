<?php

namespace Omnipay\Moneris\Message;

/**
 * Moneris Complete Purchase Request
 */
class CompletePurchaseRequest extends PurchaseRequest
{
    public function getData()
    {
     	return $this->httpRequest->query->all();   
    }

    public function sendData($data)
    {
        $this->response = new CompletePurchaseResponse($this, $data);
        return $this->response;
    }
}
