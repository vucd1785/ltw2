
	<table>
		<tr>
			<td>Id</td>
			<td>Name</td>
		</tr>
		@foreach ($data2 as $item)
		<tr>

			{!! $item->student_id !!}
			{!! $item->student_name !!}
			<br>
			
		</tr>
		@endforeach
	</table>
