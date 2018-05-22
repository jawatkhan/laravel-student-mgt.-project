<style type="text/css">
    .academic-detail{
 		white-space: normal;
        width:450px;
      }
    .action{
        text-align: center;
        vertical-align: middle;
        width:60px;
      }
      #table-class-info{
      	width: 100%;
      }
      table tbody > tr >td {
      	text-align: center;
        vertical-align: middle;
      }
      table thead > tr >th {
      	text-align: center;
      }          	
   </style>

<table class="table-hover table-striped table-bordered table-condensed" id="table-class-info">
	<thead>
		<tr>
			<th>Program</th>
			<th>Level</th>
			<th>Shift</th>
			<th>Time</th>
			<th>Academic Details</th>
			<th id="hidden">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($classes as $key => $c)
           <tr>
           	<td>{{ $c->program }}</td>
           	<td>{{ $c->level }}</td>
           	<td>{{ $c->shift }}</td>
           	<td>{{ $c->time }}</td>
           	<td class="academic-detail">
           		<a href="#" data-id="{{ $c->class_id }}" id="class-edit">
           			Program: {{ $c->program }} / Level: {{ $c->level }} / Shift: {{ $c->shift }} / Time: {{ $c->time }} / Batch: {{ $c->betch }} / Group: {{ $c->group }} / StartDate: {{ date("d-M-y",strtotime($c->start_date)) }} / EndDate: {{ date("d-M-y",strtotime($c->end_date)) }}
           		</a>
           	</td>
           	<td style="vertical-align: middle;width: 50px;" id="hidden">
           		<button value="{{ $c->class_id }}" class="btn btn-danger btn-sm delete-class">Delete</button>
           	</td>
           </tr>
		@endforeach
	</tbody>
</table>