
<!-- BEGIN: main3 -->

<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
	<thread>
		<tr>
			<td>{LANG.id}</td>
			<td>{LANG.cat_name}</td>
			<td>{LANG.add_time}</td>
			<td>{LANG.update_time}</td>			
			<td>{LANG.action}</td>
		</tr>
		
	</thread>
	<tbody>

		<!-- BEGIN: loop -->
			<tr>
			<td>{DATA.id}</td>
			<td>{DATA.cat_name}</td>
			<td>{DATA.add_time}</td>
			<td>{DATA.update_time}</td>
			<td> <a href="{link_edit}"> {LANG.edit}</a> - <a href="{link_delete}"> {LANG.delete}</a></td>
			</tr>
		<!-- END: loop -->
	</tbody>
	
</table>
</div>
<!-- BEGIN: is -->
{is}
<!-- END: is -->

<form method="post" action="{FROM_ACTION}">
												
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thread>
                    <tr colspan="2">
                        <em class="fa fa-file-text-o"></em>{LANG.cat_add}
                    </tr>
            
            </thread>
			<tbody>
				<tr>
					<td><strong>{LANG.cat_name}</strong><sup class="required">(*)</sup></td>
					<td><input class="form-control" type="text" name="cat_name" value="" maxlength="250"/>
					<!-- BEGIN: error_cat -->{error_cat}<!-- END: error_cat -->
					</td>
				</tr>	
			</tbody>
		</table>
	</div>
	<div class="text-center">
		<input class="btn btn-primary" name"submit3" type="submit" value="{LANG.save}"/>
	</div>
</form>
<!-- END: main3 -->