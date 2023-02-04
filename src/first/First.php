<?php
/**
 * author：hurong
 * website:http://www.hu-rong.com
 */

namespace Huron241\ComposerDemo\first;
class First
{
    public function test(): string
    {
        return __CLASS__ . '::' . __FUNCTION__;
    }
}