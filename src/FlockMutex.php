<?php
namespace EasyMutex; 
class FlockMutex implements iMutex
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
        $fp = fopen(sys_get_temp_dir().$key.'.lock', 'a+');

        if(!flock($fp, LOCK_EX )) {
	    throw new Exception\MutexOccupiedException();
	}
        self::$locks[$key]=$fp;	
        return true;

    }
    static function setMutex($key)
    {
        $fp = fopen(sys_get_temp_dir().$key.'.lock', 'a+');

        if(!flock($fp, LOCK_EX | LOCK_NB)) {
	    throw new Exception\MutexOccupiedException();
	}
        self::$locks[$key]=$fp;	
        return true;

    }
    static function releaseMutex($key)
    {
        if (self::$locks[$key])
        {
    	    fclose(self::$locks[$key]);
    	    unset(self::$locks[$key]);
        }	
    }
}