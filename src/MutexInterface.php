<?php
namespace EasyMutex;
interface iMutex
{
    static function setMutex($key);
    static function releaseMutex($key);
    static function checkMutex($key);
    static function waitForMutex($key);
}
