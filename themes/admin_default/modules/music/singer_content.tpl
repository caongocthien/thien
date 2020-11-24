

<!-- BEGIN: main2 -->

<!-- BEGIN: is -->
{is}
<!-- END: is -->

<form method="post" action="{FROM_ACTION}">
												
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thread>
                    <tr colspan="2">
                        <em class="fa fa-file-text-o"></em>{LANG.singer_add}
                    </tr>
            
            </thread>
			<tbody>
				<tr>
					<td><strong>{LANG.singer_name}</strong><sup class="required">(*)</sup></td>
					<td><input class="form-control" type="text" name="singer_name" value="" maxlength="250"/>
					<!-- BEGIN: error_singer -->{error_singer}<!-- END: error_singer -->
					</td>
				</tr>	
			</tbody>
		</table>
	</div>
	<div class="text-center">
		<input class="btn btn-primary" name"submit2" type="submit" value="{LANG.save}"/>
	</div>
</form>
<!-- END: main2 -->


