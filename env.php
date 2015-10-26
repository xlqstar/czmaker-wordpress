<?php

/** WordPress数据库的名称 */
define('DB_NAME', getenv('OPENSHIFT_MYSQL_DB_NAME'));

/** MySQL数据库用户名 */
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));

/** MySQL数据库密码 */
define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));

/** MySQL主机 */
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));

echo(DB_NAME."<br/>".DB_USER."<br/>".DB_PASSWORD."<br/>".DB_HOST);