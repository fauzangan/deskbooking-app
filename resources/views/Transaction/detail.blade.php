@extends('Layouts.main')
@section('container')
    <div class="card mt-5">
        <form class="form" id="form-reservasi" action="">
            <h2 class="fw-bold p-0 mt-4 mb-0 text-center">New reservation</h2>
            <div class="card m-5" id="view-1">
                <div class="card-header">
                    <h5 class="text-center fw-bold p-0 m-0">Select Location</h5>
                </div>
                <div class="card-body">
                    <div class="row p-4">
                        <div class="col-sm-3 text-start">
                            <label class="fs-5">Pilih Tanggal Reservasi :</label>
                        </div>
                        <div class="col-sm-4 text-end">
                            <div class="input-group">
                                <input type="date" id="jadwal-reservasi" class="form-control form-control-solid"
                                    value="" />
                            </div>
                        </div>
                    </div>
                    <hr class="mt-2 mb-4" />
                    <div class="row justify-content-center gap-3 mx-auto">
                        @foreach($locations as $location)
                        <button class="btn btn-primary col-lg-3" type="button" onclick="showArea()">{{ $location->txtlocationname }}</button>
                        <div class="card m-5" id="view-2" style="display: none">
                            <div class="card-header">
                                <h5 class="text-center fw-bold p-0 m-0">Select Desk</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <input class="text-center fs-5" type="text" id="txtareaname" name="txtareaname" value="Office"
                                        readonly style="border: none">
                                </div>
                                <div class="text-center">
                                    <img id="imageResult" src="/img/penis1.png" alt="gambar layout" class="rounded mx-auto d-block" width="450px" />
                                </div>
                                <div class="m-auto my-5" style="width: 700px">
                                    <table id="tabel_reservation" class="table align-middle table-striped gy-5 ">
                                        <thead class="table-dark">
                                            <tr>
                                                <th class="text-center">Desk</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($locations as $loc)
                                                <td class="text-center">{{ $loc->area->areaDetail->txtdeskname }}</td>
                                                <td class="text-center"><span class="badge bg-primary">{{ $loc->area->areaDetail->txtstatus }}</span></td>
                                                <td class="text-center"><input type="radio" name="intareadetailid" id="intareadetailid"></button></td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </form>
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
    <script src="{{ asset('Transaction/reservation_detail.js') }}"></script>
@endsection
