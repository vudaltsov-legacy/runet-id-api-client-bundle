<?php

namespace RunetId\ApiClientBundle\Cache;

use Ruvents\HttpClient\Request\Request;
use Ruvents\HttpClient\Response\Response;

/**
 * Interface CacheInterface
 */
interface CacheInterface
{
    /**
     * @param Request  $request
     * @param Response $response
     */
    public function write(Request $request, Response $response);

    /**
     * @param Request $request
     * @return null|Response
     */
    public function read(Request $request);

    /**
     * @param Request $request
     * @return bool
     */
    public function isFresh(Request $request);
}
