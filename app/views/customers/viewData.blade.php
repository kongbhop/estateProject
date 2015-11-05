<!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
				 
<div class="container">
	<div>
		<h2>
			ข้อมูลลูกค้า
		</h2>
	</div>
	<a class="waves-effect waves-light btn" href="./exportData">export</a>
	<a class="waves-effect waves-light btn" href="./logout">logout</a>


		<table style="width:100%" class="bordered">
			<tr>
				<td>ref#</td>
				<td>firstname</td>
				<td>lastname</td>
				<td>email</td>
				<td>mobile</td>
				<td>description</td>
				<td>appointment</td>
			</tr>

			@foreach ($customers as $each_customer)
				<tr>
				    <td>{{ $each_customer['id'] }}</td>
				    <td>{{ $each_customer['firstname'] }}</td>
				    <td>{{ $each_customer['lastname'] }}</td>
				    <td>{{ $each_customer['email'] }}</td>
				    <td>{{ $each_customer['mobile'] }}</td>
				    <td>{{ $each_customer['description'] }}</td>
				    @if ($each_customer['appointment'])
				    	<td>{{ date_create($each_customer['appointment'])->format('d F Y - H:i')}}</td>
				    @else
				    	<td>-</td>
				    @endif
			  	</tr>
		  	@endforeach
		</table>
</div>