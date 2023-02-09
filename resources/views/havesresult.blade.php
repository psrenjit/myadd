@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>Number</td>
                <td>S Name</td>
                <td>f name</td>
                <td>address</td>
                <td>alternative</td>
                <td>status</td>
            </tr>
        </thead>

        <tbody>
@foreach($rhs as $log)
<tr>
    <td>{{$log->tnumber}}</td>
    <td>{{$log->subscribername}}</td>
    <td>{{$log->fatherhusname}}</td>
    <td>{{$log->localaddress}}</td>
    <td>{{$log->alternative}}</td>
    <td>{{$log->status}}</td>
</tr>

@endforeach
</tbody>
</table>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
    $('.table').DataTable({
            "ordering": true,
            "lengthMenu": [10, 25, 50, 75, 100],
            "searching": true,
            "paging": true,
            "columnDefs": [{
                "targets": 0,
                "searchable": false,
                "visible": true
            }],
            dom: 'Bfrtip',

            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "order": [
                [2, "desc"]
            ]
        });
});
</script>
@stop
