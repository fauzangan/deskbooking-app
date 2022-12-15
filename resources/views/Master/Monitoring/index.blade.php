@extends('Layouts.main')
@section('container')
    <h1 class="mt-4 mb-4">Monitoring</h1>
    <div class="row">
        <div class="container-fluid px-1 mt-1">
            
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col my-auto">
                            <i class="fas fa-table me-1"></i>
                            Monitoring
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabel-monitoring">
                        <thead class="table-dark">
                            <tr>
                                <th>Date</th>
                                <th>Site</th>
                                <th>Location</th>
                                <th>Area</th>
                                <th>Desk</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->dtreservation }}</td>
                                    <td>{{ $reservation->areadetail->header->location->site->txtsitename }}</td>
                                    <td>{{ $reservation->areadetail->header->location->txtlocationname }}</td>
                                    <td>{{ $reservation->areadetail->header->txtareaname }}</td>
                                    <td>{{ $reservation->areadetail->txtdeskname }}</td>
                                    <td>{{ $reservation->txtreservationstatus }}</td>
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
    <script src="{{ asset('Master/Monitoring/monitoring_index.js') }}" type="text/javascript"></script>
@endsection
