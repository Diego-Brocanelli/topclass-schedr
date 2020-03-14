<?php 

namespace TopClass\Libraries;
/**
 * Responsible for handling url data
 */
class Url
{
    /**
     * Responsible to return url info
     *
     * @return array
     */
    public function getUrl() : array
    {
        $url   = filter_input_array(INPUT_GET);
        $url ??= [];

        return $url;
    }
}
