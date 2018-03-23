
	<table>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Status</td>
		</tr>
		@foreach ($data as $item)
		<tr>
			{!! $item->menu_id !!}
			{!! $item->menu_name !!}
			{!! $item->menu_status !!}
			<br>
		</tr>
		@endforeach
	</table>
