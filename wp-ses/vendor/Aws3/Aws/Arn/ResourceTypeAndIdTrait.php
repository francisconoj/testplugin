<?php

namespace DeliciousBrains\WP_Offload_SES\Aws3\Aws\Arn;

/**
 * @internal
 */
trait ResourceTypeAndIdTrait
{
    public function getResourceType()
    {
        return $this->data['resource_type'];
    }
    public function getResourceId()
    {
        return $this->data['resource_id'];
    }
    private static function parseResourceTypeAndId(array $data)
    {
        $resourceData = preg_split("/[\\/:]/", $data['resource'], 2);
        $data['resource_type'] = isset($resourceData[0]) ? $resourceData[0] : null;
        $data['resource_id'] = isset($resourceData[1]) ? $resourceData[1] : null;
        return $data;
    }
}
