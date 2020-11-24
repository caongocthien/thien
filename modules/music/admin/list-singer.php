<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 24-06-2011 10:35
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}


$page_title = $lang_module['list_singer'];

    $data = array() ;
    $sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_singers1";

    $result = $db->query($sql);
    while ($row= $result->fetch()){
        $data[] = $row;

    }

   
$contents='';
$xtpl = new XTemplate('list_singer.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG',$lang_module);
// $i=1;
foreach($data as $list){
    $xtpl->assign('DATA', $list);
    $xtpl->parse('main5.loop');
    // $i++
}
   

$xtpl->parse('main5');
$contents = $xtpl->text('main5');
include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
