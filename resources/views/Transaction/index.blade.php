@extends('Layouts.main')
@section('container')
    <div id="modalReservation" class="modal" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button id="btn-closePopup" tye="button" class="col-4 btn-close m-0" onclick="closePopup()"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-body text-center m-0">areaname deskname</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="checkIn">Check
                        IN</button>
                    <button type="button" class="btn btn-success" id="checkOut">Check
                        OUT</button>
                    <button type="button" class="btn btn-danger" id="cancelRes">Batalkan</button>
                </div>
            </div>
        </div>
    </div>

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
                                <table id="kt_datatable_home_1" class="table align-middle table-row-dashed gy-5"
                                    style="font-size: 18px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>City</th>
                                            <th>Location</th>
                                            <th>Desk</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon btn-lg"
                                                    onclick="openModal()">
                                                    <span>
                                                        <i class="fas fa-arrow-right fa-1x"></i>
                                                    </span>
                                                </button>
                                            </td>
                                            <td>Tembalang</td>
                                            <td>Bulusan</td>
                                            <td>Desk A-1</td>
                                            <td>Reserved</td>
                                        </tr>
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
    <script src="{{ asset('Transaction/reservation_index.js') }}"></script>
@endsection
