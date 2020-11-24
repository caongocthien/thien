
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

$page_title = $lang_module['list_song'];
    $data = array() ;
    $sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_songs1";

    $result = $db->query($sql);
    while ($row= $result->fetch()){
        $data[] = $row;

    }

   
$contents='';
$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG',$lang_module);
$i=1;
foreach($data as $list){
    $xtpl->assign('DATA', $list);
    //$link_delete = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=del_song&amp;listid=' . $list['id'] . '&amp;checkss=' . md5($global_config['sitekey'] . session_id());
    //$xtpl -> assign('ROW',$link_delete);
    $xtpl->assign('link_edit', NV_BASE_ADMINURL. 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;'. NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&id=' . $list['id']);
    $xtpl->parse('main4.loop');
    // $i++
}
   

$xtpl->parse('main4');
$contents = $xtpl->text('main4');


include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
