<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'    =>    array('Home','Admin','Api'),
	'DEFAULT_MODULE'       =>    'Home',
		
		
	'DB_DEPLOY_TYPE'=> 1, // 设置分布式数据库支持
	'DB_TYPE'       => 'mysql', //分布式数据库类型必须相同
	'DB_HOST'       => '127.0.0.1',
	'DB_NAME'       => 'xingren', //如果相同可以不用定义多个
	'DB_USER'       => 'root',
	'DB_PWD'        => '',
	'DB_PORT'       => '3306',
	'DB_PREFIX'     => 'xrh_',
);