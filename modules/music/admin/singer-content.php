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


$page_title = $lang_module['singer_add'];

$error = array();
$is ='';

global $module_data, $db;

   

    $data['singer_name'] = $nv_Request->get_string('singer_name', 'post','');
    if(empty($data['singer_name']) || $singer_name = '' ){
        $error['singer_name'] = $lang_module['singer_error'];
    }
    if(empty($error)){
        
            $sql = "INSERT INTO ". NV_PREFIXLANG . "_" . $module_data . "_singers1(singer_name) VALUES (:singer_name)";
    
            $sth = $db->prepare($sql);          
            $sth->bindParam(':singer_name', $data['singer_name']);
            $sth->execute();
        

    }

$contents='';
$xtpl = new XTemplate('singer_content.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG',$lang_module);
$xtpl->assign('FROM_ACTION',  NV_BASE_ADMINURL. 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;'. NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op);
if(isset($error['singer_name']))
{
    $xtpl->assign('error_singer', $error['singer_name']);
    $xtpl->parse('main.error_singer');
}
if($is!=''){
    $xtpl->assign('is', $is);
    $xtpl->parse('main2.is');
}

$xtpl->parse('main2');
$contents = $xtpl->text('main2');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
