<?php
namespace EasyMutex; 
class DirectoryMutex implements MutexInterface
{
    private static $locks=[];
    static function checkMutex($key)
    {
	try {
	    self::setMutex($key);
	    self::releaseMutex($key);
	}
	catch (Exception\MutexOccupiedException $e)
	{
	    return true;
	}
	return false;
    }
    static function waitForMutex($key)
    {
	throw new Exception\MutexUnsupportedException();

    }
    static function setMutex($key)
    {
        if (!mkdir(sys_get_temp_dir().$key.'.lock', 0700))
        {
            throw new Exception\MutexOccupiedException();
        }

        return true;

    }
    static function releaseMutex($key)
    {
	rmdir(sys_get_temp_dir().$key.'.lock');
    }
}