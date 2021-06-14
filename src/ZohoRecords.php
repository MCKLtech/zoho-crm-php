<?php

namespace Zoho;

use Http\Client\Exception;
use stdClass;
use Zoho\ZohoResource;

class ZohoRecords extends ZohoResource
{

    /**
     * Get Records
     *
     * @see    https://www.zoho.com/crm/developer/docs/api/v2/get-records.html
     * @param string $module e.g. accounts, leads, contacts, deals etc
     * @param array $options
     * @return stdClass
     */
    public function list(string $module, array $options = [])
    {
        return $this->client->get($module, $options);
    }

    /**
     * Gets a single Zoho Record based on the Zoho ID.
     *
     * @see    https://www.zoho.com/crm/developer/docs/api/v2/get-records.html
     * @param string $module
     * @param string $id
     * @return stdClass
     */
    public function get(string $module, $id)
    {
        return $this->client->get("$module/$id");
    }

    /**
     * Insert a Zoho Record
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/insert-records.html
     * @param string $module e.g. accounts, leads, contacts, deals etc
     * @param array $options
     * @return stdClass
     */
    public function create(string $module, array $options)
    {
        return $this->client->post($module, $options);
    }

    /**
     * Delete a Record in Zoho
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/delete-records.html
     * @param string $module
     * @param string $id
     * @return stdClass
     */
    public function delete(string $module, $id)
    {
        return $this->client->delete("$module/$id");
    }

    /**
     * Update a Record in Zoho
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/update-records.html
     * @param string $module
     * @param string $id
     * @param $options
     * @return stdClass
     */
    public function update(string $module, $id, $options)
    {
        return $this->client->put("$module/$id", $options);
    }

    /**
     * Upsert a Record in Zoho
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/upsert-records.html
     * @param string $id
     * @param $options
     * @return stdClass
     */
    public function upsert(string $module, $id, array $options)
    {
        return $this->client->post("$module/$id", $options);
    }


    /**
     * Search Records in Zoho
     * @see https://www.zoho.com/crm/developer/docs/api/v2/search-records.html
     *
     * @param $module
     * @param array $options
     * @return stdClass
     */
    public function search($module, array $options = []) {

        return $this->client->get("$module/search", $options);
    }

    /**
     *  Convert a lead into a contact or an account.
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/convert-lead.html
     * @param $leadId
     * @param array $options
     * @return stdClass
     */
    public function convert($leadId, array $options = []) {

        return $this->client->post("Leads/$leadId/actions/convert", $options);
    }




}
