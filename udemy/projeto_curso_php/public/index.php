<?php

require_once(dirname(__FILE__, 2) . '/src/Config/config.php');
require_once(dirname(__FILE__, 2) . '/src/Models/User.php');

$user = new User();
echo 'Fim !';