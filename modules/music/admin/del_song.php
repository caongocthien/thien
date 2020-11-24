
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

$song_id = $nv_Request->get_int('song_id','get',0);


$id = (int)$song_id;

if($song_id==0){
    die ("NO");
}

$sql =  "DELETE FROM" . NV_PREFIXLANG . "_" . $module_data . "_songs1 WHERE id = :id";

$sth = $db->prepare($sql);
$sth->bindParam(':id', $song_id);
$sth->execute();




$ok = $db-> exec($sql);

if($ok){
    die ("YES");
}
else{
    die ("NO");
}



