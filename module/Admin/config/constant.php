<?php
$GLOBALS['HTTP_SITE_ADMIN_URL'] = 'http://' .$_SERVER['HTTP_HOST'].'/stage_accrabasket/admin/';
$GLOBALS['SITE_APP_URL'] = 'http://' .$_SERVER['HTTP_HOST'].'/stage_accrabasket/application/index';
$GLOBALS['SITE_COMPANY_URL'] = 'http://' .$_SERVER['HTTP_HOST'].'/stage_accrabasket/merchant/';
$GLOBALS['HTTP_SITE_MERCHANT_URL'] = 'http://' .$_SERVER['HTTP_HOST'].'/stage_accrabasket/merchant/';
$GLOBALS['PAGE_BEFORE_LOGIN'] = array('Admin\Controller\Index\login','Admin\Controller\Index\index');
$GLOBALS['SITE_PATH'] = $_SERVER['DOCUMENT_ROOT'];
define('NODE_API', 'http://172.104.239.54:3001/');
define('BASKET_API', 'http://172.104.239.54/frontend/basketapi/');
$GLOBALS['PRODUCTIMAGEPATH'] = $_SERVER['DOCUMENT_ROOT'].'stage_accrabasket/product_img';
$GLOBALS['ATTRIBUTEIMAGEPATH'] = $_SERVER['DOCUMENT_ROOT'].'stage_accrabasket/attribute_img';
define('APIKEY', 'secure#api$__');
