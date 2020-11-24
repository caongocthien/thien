
function nv_del_song(song_id) {
    $.post(script_name + 'index.php?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=del_song&amp=' + new Date().getTime(), 'song_id=' + song_id, function(res) {
        if(res='YES'){
            alert(del_song_yes);
        }
        else{
            alert(del_song_no);
        }
       
        window.location.href = script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=main';

    });
    return false;
}

    //$link_delete = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=del_song&amp;listid=' . $list['id'] . '&amp;checkss=' . md5($global_config['sitekey'] . session_id());
