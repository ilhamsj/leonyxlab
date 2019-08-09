@extends('layouts.master')

@section('content')
<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($collection as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable();
            
            $('#example tbody').on('click', 'tr', function () {
                var data = table.row( this ).data();
                alert( 'You clicked on '+data[0]+'\'s row' );
            } );
        } );
    </script>
@endpush

