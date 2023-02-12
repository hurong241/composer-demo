<?php
/**
 * author：hurong
 * website:http://www.hu-rong.com
 */

namespace Hurong\ComposerDemo\JsonRpc;

use Hyperf\HttpServer\Contract\RequestInterface;

interface IpInterface
{
    public function ip(RequestInterface $request): string;
}