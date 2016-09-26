<div> '
1 => cach viet thong thuog :
<?php 
	foreach ($user as $key => $value) {
		echo $value->username;
	}
?>

<table>
	
	<tr>
		<th>user name</th>
		<th>password</th>
	</tr>
	<?php 
	foreach ($user as $key => $value) { 
	?>
		<tr>
			<td>{{$value->username}}</td>
			<td>{{$value->password}}</td>
		</tr>
	<?php }
	?>
</table>

</div>
 ===================== Cach laravel ===================



<table>
	
	<tr>
		<th>user name</th>
		<th>password</th>
	</tr>
	@foreach ($user as $value)
	<tr>
		<td>{{$value->username}}<a href="{{route('get_user', [$value->id])}}">Edit</a></td>
		<td>{{$value->password}}</td>
	</tr>
	@endforeach
</table>
	


