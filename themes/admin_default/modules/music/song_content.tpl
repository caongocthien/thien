<!-- BEGIN: main -->

<!-- BEGIN: is -->
{is}
<!-- END: is -->


<form method="post" action="{FROM_ACTION}">
												
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thread>
                    <tr colspan="2">
                        <em class="fa fa-file-text-o"></em>{LANG.song_add}
                    </tr>
            
            </thread>
			<tbody>
				<tr>
					<td><strong>{LANG.name_song}</strong><sup class="required">(*)</sup></td>
					<td><input class="form-control" type="text" name="song_name" value="" maxlength="250"/>
					<!-- BEGIN: error_song -->{error_song}<!-- END: error_song -->
					</td>
				</tr>
				<tr>
					<td><strong>{LANG.path}</strong></td>
					<td><input class="form-control" type="text" name="path" value="" maxlength="250"/></td>
				</tr>
					<tr>
					<td><strong>{LANG.singer_sub}</strong></td>
					<td><select class="form-control w200" name = "parentid" id ="parent id"></select></td>
				</tr>
			
				<tr>
					<td><strong>{LANG.cat_sub}</strong></td>
					<td><select class="form-control w200" name = "parentid" id ="parent id"></select></td>
				</tr>
				
			</tbody>
		</table>
	</div>
	<div class="text-center">
		<input class="btn btn-primary" name"submit1" type="submit" value="{LANG.save}"/>
	</div>
</form>
<!-- END: main -->