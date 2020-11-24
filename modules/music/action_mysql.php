<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 2-10-2010 20:59
 */

if (! defined('NV_IS_FILE_MODULES')) {
    die('Stop!!!');
}

$sql_drop_module = array();


$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat1;";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_singer1;";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_songs1;";

$sql_create_module = $sql_drop_module;

$sql_create_module[]="CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat1 (
  id smallint(4) NOT NULL AUTO_INCREMENT,
  cat_name varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  add_time int(11) NOT NULL DEFAULT 0,
  update_time int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

$sql_create_module[]="CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_singers1 (
  id int(11) NOT NULL AUTO_INCREMENT,
  singer_name varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  add_time int(11) NOT NULL DEFAULT 0,
  update_time int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

$sql_create_module[]="CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_songs1 (
  id int(11) NOT NULL AUTO_INCREMENT,
  song_name varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  path varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  singer_id int(11) NOT NULL DEFAULT 0,
  cat_id smallint(4) NOT NULL DEFAULT 0,
  add_time int(11) NOT NULL DEFAULT 0,
  update_time int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";