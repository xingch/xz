<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'    => array('Home','Admin','Api'),
	'DEFAULT_MODULE'       => 'Home',
		
	'URL_MODEL'            =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
		
		
	'DB_DEPLOY_TYPE'=> 1, // 设置分布式数据库支持
	'DB_TYPE'       => 'mysql', //分布式数据库类型必须相同
	'DB_HOST'       => '127.0.0.1',
	'DB_NAME'       => 'xingren', //如果相同可以不用定义多个
	'DB_USER'       => 'root',
	'DB_PWD'        => '',
	'DB_PORT'       => '3306',
	'DB_PREFIX'     => 'xrh_',
);