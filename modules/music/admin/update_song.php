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




 $song_id = $nv_Request->get_int('song_id','get',0);
// $sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_songs1 where id = " .$song_id;
// $list = executeResult($sql);
// if($list!= null && count($list)>0){
//     $std = $list[0];
//     $song_name= $std['song_name'];
//     $path = $std['path'];
//     $singer_id = $std['singer_id'];
//     $cat_id = $std['cat_id'];
// }else{
//     $song_id='';
// }


$data = array() ;
$sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_songs1";

$result = $db->query($sql);
while ($row= $result->fetch()){
    $data[] = $row;

}







// global $module_data, $db;
// $data['song_name'] = $nv_Request->get_string('song_name', 'post','');
// $data['path'] = $nv_Request->get_string('path', 'post','');
// $data['singer_id'] = $nv_Request->get_int('singer_id', 'post','');
// $data['cat_id'] = $nv_Request->get_int('cat_id', 'post','');

// $sth = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_songs1 SET song_name = :song_name, path = :path, singer_id = :singer_id, cat_id = :cat_id)');
// $sth->bindParam(':song_name', $data['song_name']);
// $sth->bindParam(':path', $data['path']);
// $sth->bindParam(':singer_id', $data['singer_id']);
// $sth->bindParam(':cat_id', $data['cat_id']);
// $sth->execute();



$contents='';
$xtpl = new XTemplate('update_song.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG',$lang_module);
$xtpl->assign('FROM_ACTION',  NV_BASE_ADMINURL. 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;'. NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op);



foreach($data as $list){
    $xtpl->assign('DATA', $list);
    $xtpl->parse('main');
    // $i++
}




$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';

