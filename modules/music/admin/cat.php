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


$page_title = $lang_module['cat_add'];

$error = array();
$is ='';
global $module_data, $db;

   

    $data['cat_name'] = $nv_Request->get_string('cat_name', 'post','');
    if(empty($data['cat_name']) || $cat_name = '' ){
        $error['cat_name'] = $lang_module['cat_error'];
    }
    if(empty($error)){
        
            $sql = "INSERT INTO ". NV_PREFIXLANG . "_" . $module_data . "_cat1(cat_name) VALUES (:cat_name)";
    
            $sth = $db->prepare($sql);          
            $sth->bindParam(':cat_name', $data['cat_name']);
            $sth->execute();
    }
 


    $data = array() ;
    $sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_cat1";

    $result = $db->query($sql);
    while ($row= $result->fetch()){
        $data[] = $row;

    }


    

// $contents='';
$xtpl = new XTemplate('cat.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG',$lang_module);
$xtpl->assign('FROM_ACTION',  NV_BASE_ADMINURL. 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;'. NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op);
//$i='';
if(isset($error['cat_name']))
{
    $xtpl->assign('error_cat', $error['cat_name']);
    $xtpl->parse('main.error_cat');
}
if($is!=''){
    $xtpl->assign('is', $is);
    $xtpl->parse('main3.is');
}

    foreach($data as $list){
        $xtpl->assign('DATA', $list);
        $xtpl->assign('link_edit', NV_BASE_ADMINURL. 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;'. NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&id=' . $list['id']);

        $xtpl->assign('link_delete', NV_BASE_ADMINURL. 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;'. NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '=del_song&id=' . $list['id']);

        $xtpl->parse('main3.loop');
        // $i++
    }

$xtpl->parse('main3');
$contents = $xtpl->text('main3');


include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';