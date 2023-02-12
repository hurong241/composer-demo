<?php
/**
 * author：hurong
 * website:http://www.hu-rong.com
 */

namespace Huron241\ComposerDemo;

class Ip
{
    public function ip(): string
    {
        return '服务器ip:' . $_SERVER['HTTP_X_̲FORWARDER_FOR'];
    }
}