<!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
 <style type="text/css">
	.wrapword{
		white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
		white-space: -webkit-pre-wrap; /*Chrome & Safari */ 
		white-space: -pre-wrap;      /* Opera 4-6 */
		white-space: -o-pre-wrap;    /* Opera 7 */
		white-space: pre-wrap;       /* css-3 */
		word-wrap: break-word;       /* Internet Explorer 5.5+ */
		word-break: break-all;
		white-space: normal;
	}

 </style>
				 
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
				<td class="wrapword">ref#</td>
				<td class="wrapword">firstname</td>
				<td class="wrapword">lastname</td>
				<td class="wrapword">email</td>
				<td class="wrapword">mobile</td>
				<td class="wrapword">description</td>
				<td class="wrapword">appointment</td>
			</tr>

			@foreach ($customers as $each_customer)
				<tr>
				    <td class="wrapword">{{ $each_customer['id'] }}</td>
				    <td class="wrapword">{{ $each_customer['firstname'] }}</td>
				    <td class="wrapword">{{ $each_customer['lastname'] }}</td>
				    <td class="wrapword">{{ $each_customer['email'] }}</td>
				    <td class="wrapword">{{ $each_customer['mobile'] }}</td>
				    <td class="wrapword">{{ $each_customer['description'] }}</td>
				    @if ($each_customer['appointment'])
				    	<td>{{ date_create($each_customer['appointment'])->format('d F Y - H:i')}}</td>
				    @else
				    	<td>-</td>
				    @endif
			  	</tr>
		  	@endforeach
		</table>
</div>