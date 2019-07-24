<?php
    //连接本地的 Redis 服务
    $redis = new Redis();
    $redis->connect('172.18.0.5', 6379);

    var_dump($redis->keys('*'));