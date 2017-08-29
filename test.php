<?php

$redis = new Redis() ;
$redis->connect('127.0.0.1', 6379);
$redis->set('myname','rr') ;
echo $redis->get('myname') .'<br/>';
