<?php

namespace Zoho;

abstract class ZohoResource
{
    /**
     * @var ZohoClient
     */
    protected $client;

    /**
     * ZohoResource constructor.
     *
     * @param ZohoClient $client
     */
    public function __construct(ZohoClient $client)
    {
        $this->client = $client;
    }
}
