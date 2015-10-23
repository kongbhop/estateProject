<div>
	<h2>
		ข้อมูลลูกค้า
	</h2>
</div>
<a href="./exportData">export</a>
<a href="./logout">logout</a>


	<table style="width:100%">
		<tr>
			<td>id</td>
			<td>firstname</td>
			<td>lastname</td>
			<td>email</td>
			<td>mobile</td>
			<td>description</td>
		</tr>

		@foreach ($customers as $each_customer)
			<tr>
			    <td>{{ $each_customer['id'] }}</td>
			    <td>{{ $each_customer['firstname'] }}</td>
			    <td>{{ $each_customer['lastname'] }}</td>
			    <td>{{ $each_customer['email'] }}</td>
			    <td>{{ $each_customer['mobile'] }}</td>
			    <td>{{ $each_customer['description'] }}</td>
		  	</tr>
	  	@endforeach
	</table>
