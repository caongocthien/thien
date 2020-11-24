<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 24-06-2011 10:35
 */
// if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
//     die('Stop!!!');
// }
if (!defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}

$page_title = $lang_module['song_add'];

$error = array();
$is ='';

global $module_data, $db;

    // $data = array();

    $data['song_name'] = $nv_Request->get_string('song_name', 'post','');
    $data['path'] = $nv_Request->get_string('path', 'post','');
    if(empty($data['song_name']) || $song_name = '' ){
        $error['song_name'] = $lang_module['song_error'];
    }
    if(empty($error)){
        
            $sql = "INSERT INTO ". NV_PREFIXLANG . "_" . $module_data . "_songs1(song_name, path) VALUES (:song_name, :path)";
    
            $sth = $db->prepare($sql);
            
            $sth->bindParam(':song_name', $data['song_name']);
            $sth->bindParam(':path', $data['path']);
            $sth->execute();
        
        
        

    }


$contents='';
$xtpl = new XTemplate('song_content.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG',$lang_module);
$xtpl->assign('FROM_ACTION',  NV_BASE_ADMINURL. 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;'. NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op);
if(isset($error['song_name']))
{
    $xtpl->assign('error_song', $error['song_name']);
    $xtpl->parse('main.error_song');
}
if($is!=''){
    $xtpl->assign('is', $is);
    $xtpl->parse('main.is');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');


include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
