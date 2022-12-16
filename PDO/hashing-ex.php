<?php

$password = '123456';

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;

$hash = '$2y$10$JMdk.l1t1HVyQ3RD7JhnmeYTCqxeqnEWr/6QqhJsYrWnKiKTSy0dy';
var_dump(password_verify($password, $hash));