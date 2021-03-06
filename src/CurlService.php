<?php

namespace Arnobirchler\Curl;

class CurlService {
    /**
     * @param $url string   The URL to which the request is to be sent
     * @return \ArnoBirchler\Curl\Builder
     */
    public function to($url)
    {
        $builder = new Builder();
        return $builder->to($url);
    }
}
