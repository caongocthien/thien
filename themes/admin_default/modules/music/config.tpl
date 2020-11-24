<!-- BEGIN: main -->
<form action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}&mod_name={MOD_NAME}" method="post">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thread>
                    <tr colspan="2">
                        <em class="fa fa-file-text-o"></em>{LANG.config}
                    </tr>
            
            </thread>
			<tfoot>
				<tr>
					<td colspan="2"><input name="submit" type="submit" value="{LANG.save_cf}" class="btn btn-primary" /></td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td><strong>{LANG.song_add}</strong></td>
					<td><input class="form-control" type="text" name="song_add" value=""/></td>
				</tr>
			</tbody>
		</table>
	</div>
</form>
<div class="alert alert-info">{LANG.adminscomm_note}</div>
<!-- END: main -->