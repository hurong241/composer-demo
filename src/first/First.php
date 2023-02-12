<?php
/**
 * author：hurong
 * website:http://www.hu-rong.com
 */

namespace Hurong\ComposerDemo\first;
class First
{
    public function test(): string
    {
        return __DIR__ . '/' . __CLASS__ . '::' . __FUNCTION__;
    }
}