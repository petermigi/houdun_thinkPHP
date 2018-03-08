<?php
return array(
	
	//开启分组
	'APP_GROUP_LIST' => 'Index,Admin',
	
	//默认分组
	'DEFAULT_GROUP' => 'Index',	

	//数据库配置
	'DB_HOST' => '127.0.0.1',
	'DB_USER' => 'root',
	'DB_PWD' => '123',
	'DB_NAME' => 'think',
	'DB_PREFIX' => 'hd_',

	//点语法默认解析
	'TMPL_VAR_IDENTIFY' => 'array',

	//减少模板文件路径层次设置
	'TMPL_FILE_DEPR' => '_',

	//默认过滤函数
	'DEFAULT_FILTER' => 'htmlspecialchars',

	//自定义SESSION 数据库存储
	'SESSION_TYPE' => 'Db',



);
?>