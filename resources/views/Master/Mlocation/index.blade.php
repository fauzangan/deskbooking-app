@extends('Layouts.main')
@section('container')
    <h1 class="mt-4 mb-4">Master Location</h1>
    <div class="row">
        <div class="container-fluid px-1 mt-1">
            <a href="/location/detail" class="btn btn-success mb-3"><span><i class="fa-solid fa-plus"></i></span> Create</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Location
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabel-master-location">
                        <thead class="table-dark">
                            <tr>
                                <th></th>
                                <th>Site</th>
                                <th>Location</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                                <tr>
                                    <td>{{ $location->intLocationId }}</td>
                                    <td>{{ $location->site->txtSiteName }}</td>
                                    <td>{{ $location->txtLocationName }}</td>
                                    <td>{{ $location->bitActive }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script>
        $('#tabel-master-location').DataTable({
            columnDefs: [
                {
                    targets: [0],
                    render: function(data, type, row){
                        return '<a href="' + '/location/detail?id=' + data + '" class="btn btn-icon btn-primary btn-sm">' +
                            '<span>' + '<i class="fa-solid fa-arrow-right">' + '</i>' + '<span>' + '</a>';
                    }
                },
                {
                    targets: [3],
                    render: function(data, type, row){
                        return '<input type="checkbox" checked disabled/>'
                    }
                }
            ]
        });
    </script>
@endsection
