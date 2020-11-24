

	<tr>
					<td><strong>{LANG.cat_sub}</strong></td>
					<td><select class="form-control w200" name = "parentid" id ="parent id"></select></td>
				</tr>




<!-- BEGIN: main4 -->
	<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
	<thread>
		<tr>
			<td>{LANG.id}</td>
			<td>{LANG.name_song}</td>
			<td>{LANG.path}</td>
			<td>{LANG.singer_sub}</td>
			<td>{LANG.cat_sub}</td>
			<td>{LANG.add_time}</td>
			<td>{LANG.update_time}</td>
			<td>{LANG.action}</td>
		</tr>
		
	</thread>
	<tbody>

		<!-- BEGIN: loop -->
			<tr>
			<td>{DATA.id}</td>
			<td>{DATA.song_name}</td>
			<td>{DATA.path}</td>
			<td>{DATA.singer_id}</td>
			<td>{DATA.cat_id}</td>
			<td>{DATA.add_time}</td>
			<td>{DATA.update_time}</td>
			<td>  <a href="{link_edit}"> {LANG.edit}</a> - <a href="javascript:void(0);" onclick="nv_del_song({DATA.id})"> {LANG.delete}</a></td>
			</tr>
		<!-- END: loop -->
	</tbody>
	
</table>
</div>


<script type="text/javascript">
	var del_song_yes ='{LANG.yes}';
	var del_song_no ='{LANG.no}';
</script>

<!-- END: main4 -->