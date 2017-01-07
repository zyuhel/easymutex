<?php
namespace EasyMutex; 
class SemaphoreMutex implements iMutex
{
    private static $locks=[];
    static function ftokFromKey($key)
    {
	if (!file_exists(sys_get_temp_dir().$key.'.lock'))
	{
	    $fh=fopen(sys_get_temp_dir().$key.'.lock','w+');
	    fclose($fh);
	}
        $ftok = ftok(sys_get_temp_dir().$key.'.lock', ' ');	
        
        return $ftok;
    }
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
	$ftok=self::ftokFromKey($key);
	$semaphore=sem_get($ftok,1);
	sem_acquire($semaphore);
	self::$locks[$key]=$semaphore;
	return true;	


    }
    static function setMutex($key)
    {
	$ftok=self::ftokFromKey($key);
	$semaphore=sem_get($ftok,1);
	if (sem_acquire($semaphore, 1) === false) {
	    throw new Exception\MutexOccupiedException();
	}
	self::$locks[$key]=$semaphore;

        return true;

    }
    static function releaseMutex($key)
    {
	if (self::$locks[$key])
	{
	    sem_release(self::$locks[$key]);
	}


    }
}