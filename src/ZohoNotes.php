<?php

namespace Zoho;

use Http\Client\Exception;
use stdClass;
use Zoho\ZohoResource;

class ZohoNotes extends ZohoResource
{

    /**
     * Get All Notes
     *
     * @see    https://www.zoho.com/crm/developer/docs/api/v2/get-notes.html
     * @param string $module e.g. accounts, leads, contacts, deals etc
     * @param array $options
     * @return stdClass
     */
    public function all(array $options = [])
    {
        return $this->client->get('Notes', $options);
    }

    /**
     * Get All Notes for a given Record
     *
     * @see    https://www.zoho.com/crm/developer/docs/api/v2/get-notes.html
     * @param string $module e.g. accounts, leads, contacts, deals etc
     * @param array $options
     * @return stdClass
     */
    public function list(string $module, $id, array $options = [])
    {
        return $this->client->get("$module/$id/Notes", $options);
    }

    /**
     * Gets a single Zoho Note Record based on the Zoho ID.
     *
     * @see  https://www.zoho.com/crm/developer/docs/api/v2/get-notes.html
     * @param string $module
     * @param string $id
     * @return stdClass
     */
    public function get($id)
    {
        return $this->client->get("Notes/$id");
    }

    /**
     * Insert a Zoho Note
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/create-notes.html
     * @param string $module e.g. accounts, leads, contacts, deals etc
     * @param array $options
     * @return stdClass
     */
    public function create(string $module, $id, array $options)
    {
        return $this->client->post("$module/$id/Notes", $options);
    }

    /**
     * Delete a Note Record in Zoho
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/delete-notes.html
     * @param string $module
     * @param string $id
     * @return stdClass
     */
    public function delete(string $module, $recordId, $noteId)
    {
        return $this->client->delete("$module/$recordId/Notes/$noteId");
    }

    /**
     * Update a Note in Zoho
     *
     * @see https://www.zoho.com/crm/developer/docs/api/v2/update-records.html
     * @param string $module
     * @param string $id
     * @param $options
     * @return stdClass
     */
    public function update(string $module, $id, $options)
    {
        return $this->client->put("$module/$id/Notes", $options);
    }


}
