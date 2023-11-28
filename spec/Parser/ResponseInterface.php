<?php

declare(strict_types = 1);

namespace spec\BitBag\SyliusAmazonPayPlugin\Parser;


interface ResponseInterface
{
    /* Returns the XML portion of the response */

    public function toXml();

    /* toJson  - converts XML into Json
     * @param $response [XML]
     */

    public function toJson();

    /* toArray  - converts XML into associative array
     * @param $this->_response [XML]
     */

    public function toArray();

    /* Get the status of the BillingAgreement */

    public function getBillingAgreementDetailsStatus($response);

    /* Get the status of the OrderReference */

    public function getOrderReferenceDetailsStatus($response);
}
