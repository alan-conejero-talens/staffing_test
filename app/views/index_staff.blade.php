<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
table.table tr th {
	text-align: center;
}
</style>
</head>
<body>
	<BR>
	@if(!isset($staff_data)) 
		There was no data for this week
	@else
		<table class='table table-striped table-bordered table-hover text-center'>
			<TR>
				<TH>Staff User</TH>
				<TH>Monday</TH>
				<TH>Tuesday</TH>
				<TH>Wednesday</TH>
				<TH>Thursday</TH>
				<TH>Friday</TH>
				<TH>Saturday</TH>
				<TH>Sunday</TH>
			</TR>

			@foreach ($staff_data as $k => $staff_user)
				<TR>
				<TH>{{$k}}</TH>
				@for($i = 0 ; $i < 7; $i++ )
					<TD>@if(isset($staff_user[$i])){{$staff_user[$i]}} @else - @endif</TD>
				@endfor
				</TR>
			@endforeach

			<TR>
			<TD></TD>
			@foreach($total_hours as $t)
				<TD>{{$t}}h</TD>
			@endforeach
			</TR>
		</table>
	@endif
</body>
</html>
