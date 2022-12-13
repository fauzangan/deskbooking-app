@extends('Layouts.main')
@section('container')


    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card shadow-sm">
                        <div class="card-body p-1">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-4 d-flex">
                                    <div
                                        class="card-body d-flex flex-column align-items-center justify-content-center text-center m-lg-5 p-2">
                                        <img src="/img/akun.png" alt="Admin" class="rounded-circle ml-5 p-1"
                                            width="100">
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex">
                                    <div class="card-body d-flex flex-column align-items-center text-center m-lg-5 p-0">
                                        <div class="p-3">
                                            <h1>Ilyasa Aliadjrun</h1>
                                            <h3 class="text-primary mb-2">User</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <h2 class="text-decoration-underline m-0" id="scheduled"
                                style="padding: 1.25rem 1.25rem 0px 1.25rem;">Schedule</h2>
                            <div class="table-responsive mt-4" id="table-home-page"
                                style="padding: 0 1.25rem 1.25rem 1.25rem;">
                                <table id="tabel_reservasi" class="table align-middle table-striped gy-5"
                                    style="font-size: 18px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Area</th>
                                            <th>Desk</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservations as $reservation)
                                            <tr>
                                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#modalReservation{{ $reservation->intreservationid }}" class="badge bg-info">Kontol</a></td>
                                                <td>{{ $reservation->dtreservation }}</td>
                                                <td>{{ $reservation->areadetail->header->location->txtlocationname }}</td>
                                                <td>{{ $reservation->areadetail->header->txtareaname }}</td>
                                                <td>{{ $reservation->areadetail->txtdeskname }}</td>
                                                <td>{{ $reservation->txtreservationstatus }}</td>
                                            </tr>
                                            <div id="modalReservation{{ $reservation->intreservationid }}" class="modal" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4 class="modal-body text-center m-0">{{ $reservation->areadetail->header->txtareaname }} {{ $reservation->areadetail->txtdeskname }}</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="/reservation/{{ $reservation->intreservationid }}" method="POST" class="d-inline">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="text" value="checkin" name="txtreservationstatus" hidden>
                                                                @if($reservation->txtreservationstatus == 'checkin')
                                                                <button class="btn btn-info" type="submit" disabled>Check In</button>
                                                                @else
                                                                <button class="btn btn-info" type="submit">Check In</button>
                                                                @endif
                                                            </form>
                                                            <form action="/reservation/{{ $reservation->intreservationid }}" method="POST" class="d-inline">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="text" value="checkout" name="txtreservationstatus" hidden>
                                                                @if($reservation->txtreservationstatus == 'reserved')
                                                                <button class="btn btn-success" type="submit" disabled>Check Out</button>
                                                                @else
                                                                <button class="btn btn-success" type="submit" >Check Out</button>
                                                                @endif
                                                            </form>
                                                            <form action="/reservation/{{ $reservation->intreservationid }}" method="POST" class="d-inline">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="text" value="cancel" name="txtreservationstatus" hidden>
                                                                <button class="btn btn-danger" type="submit">CANCEL</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>


                            <div class="row p-1">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="/reservation/create" class="btn btn-primary btn-lg">Booking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
        <script src="{{ asset('Transaction/reservation_index.js') }}"></script>
@endsection
