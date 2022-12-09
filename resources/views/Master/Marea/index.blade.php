@extends('Layouts.main')
@section('container')
    <h1 class="mt-4 mb-4">Master Area</h1>
    <div class="row">
        <div class="container-fluid px-1 mt-1">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col my-auto">
                            <i class="fas fa-table me-1"></i>
                            Area
                        </div>
                        <div class="col col-md-auto">
                            <a href="/area/create" class="btn btn-success"><span><i class="fa-solid fa-plus"></i></span> Create Area</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabel-master-location">
                        <thead class="table-dark">
                            <tr>
                                <th></th>
                                <th>Site</th>
                                <th>Location</th>
                                <th>Area</th>
                                <th>Desk Available</th>
                                <th>Desk Unavailable</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mareaheaders as $mareaheader)
                                <tr>
                                    <td>{{ $mareaheader->intareaheaderid }}</td>
                                    <td>{{ $mareaheader->location->site->txtsitename }}</td>
                                    <td>{{ $mareaheader->location->txtlocationname }}</td>
                                    <td>{{ $mareaheader->txtareaname }}</td>
                                    <td>
                                        {{ $mareaheader->areaDetail->where('txtstatus', 'available')->count() }}
                                    </td>
                                    <td>
                                        {{ $mareaheader->areaDetail->where('txtstatus', 'unavailable')->count() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script>
        $('#tabel-master-location').DataTable({
            columnDefs: [
                {
                    targets: [0],
                    render: function(data, type, row){
                        return '<a href="' + '/area/create?id=' + data + '" class="btn btn-icon btn-primary btn-sm">' +
                            '<span>' + '<i class="fa-solid fa-arrow-right">' + '</i>' + '<span>' + '</a>';
                    }
                }
            ]
        });
    </script>
@endsection
