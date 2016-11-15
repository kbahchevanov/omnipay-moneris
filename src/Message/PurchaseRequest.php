<?php

namespace Omnipay\Moneris\Message;

/**
 * Moneris Purchase Request
 */
class PurchaseRequest extends AbstractRequest
{

    public function getData()
    {
        $data = array();
        $data['ps_store_id'] = $this->getPsStoreId();
        $data['hpp_key'] = $this->getHppKey();

        $data['charge_total'] = $this->getAmount();
        $data['order_id'] = $this->getTransactionId();

        if ($this->getCard()) {
            $data['email'] = $this->getCard()->getEmail();

            if(null !== ( $this->getCard()->getBillingCompany() ) ) 
                $data['bill_company_name'] = $this->getCard()->getBillingCompany();
            $data['bill_first_name'] = $this->getCard()->getFirstname();
            $data['bill_last_name'] = $this->getCard()->getLastname();
            $data['bill_address_one'] = $this->getCard()->getAddress1();
            $data['bill_city'] = $this->getCard()->getCity();
            $data['bill_postal_code'] = $this->getCard()->getPostcode();
            $data['bill_state_or_province'] = $this->getCard()->getState();
            $data['bill_country'] = $this->getCard()->getCountry();
            $data['bill_phone'] = $this->getCard()->getPhone();

            if(null !== ( $this->getCard()->getShippingCompany() ) )
                $data['ship_company_name'] = $this->getCard()->getShippingCompany();
            $data['ship_first_name'] = $this->getCard()->getShippingFirstname();
            $data['ship_last_name'] = $this->getCard()->getShippingLastname();
            $data['ship_address_one'] = $this->getCard()->getShippingAddress1();
            $data['ship_city'] = $this->getCard()->getShippingCity();
            $data['ship_postal_code'] = $this->getCard()->getShippingPostcode();
            $data['ship_state_or_province'] = $this->getCard()->getShippingState();
            $data['ship_country'] = $this->getCard()->getShippingCountry();
            $data['ship_phone'] = $this->getCard()->getShippingPhone();
        }

        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}