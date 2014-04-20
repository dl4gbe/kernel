<?php

/**
* Entry Point
*
* Entry Point
*
* LICENSE: Some license information
*
* @category   kernel
* @package    kernel
* @subpackage base
* @copyright  Copyright (c) 2014 Christoph Eisenmann (http://www.Kernel4ypou.com)
* @license    (http://www.Kernel4ypou.com/licence)   BSD License
* @version    $Id:$
* @link       http://www.Kernel4ypou.com/kernel/run_tests.php
* @since      File available since Release 1.0.0
*/

if(!defined('kernel_entry'))define('kernel_entry', true);


require_once('include/entry_point.php');
require_once('include/application/cls_application.php');

$app = new cls_application();

$app->run_tests();

?>
