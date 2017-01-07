<?php
namespace EasyMutex; 
class SocketMutex implements iMutex
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
    static function keyToInt($key)
    {
	//this is just a random number, should be replaced with key founder
	return 7600;
    }
    static function setMutex($key)
    {
	$int_key=self::keyToInt($key);	
        
	$stream = @stream_socket_server('tcp://0.0.0.0:'.$int_key, $errno, $errmg, STREAM_SERVER_BIND) ;
	if (!$stream)
	    throw new MutexOccupiedException();
        self::$locks[$int_key]=$stream;	
        return true;

    }
    static function releaseMutex($key)
    {
	$int_key=self::keyToInt($key);	
        if (self::$locks[$int_key])
        {
    	    fclose(self::$locks[$int_key]);
    	    unset(self::$locks[$int_key]);
        }	
    }
}