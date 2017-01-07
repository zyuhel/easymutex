<?php
chdir('..');
require_once('src/iMutex.php');

require_once('src/Exception/MutexOccupiedException.php');
require_once('src/Exception/MutexUnsupportedException.php');
require_once('src/FlockMutex.php');
require_once('src/DirectoryMutex.php');
require_once('src/SocketMutex.php');
require_once('src/SemaphoreMutex.php');
EasyMutex\SocketMutex::setMutex('f1');
EasyMutex\SocketMutex::releaseMutex('f1');
echo 'fine';