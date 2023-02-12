<?php
/**
 * author：hurong
 * website:http://www.hu-rong.com
 */

namespace Hurong\ComposerDemo;

class Ip
{
    public function ip(): string
    {
        return '服务器ip:' . $_SERVER['HTTP_X_̲FORWARDER_FOR'];
    }
}