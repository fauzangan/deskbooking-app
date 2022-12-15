@extends('Layouts.main')
@section('container')
<div class="card m-5" id="view-2">
    <div class="card-header">
        <h5 class="text-center fw-bold p-0 m-0">Select Desk</h5>
    </div>
    <div class="card-body">
        <div class="row mb-5">
            <h1 class="text-center fw-bold">{{ $header->txtareaname }}</h1>
        </div>
        <div class="text-center">
            <img id="imageResult" src="{{ asset('storage/'.$header->txtfilename) }}" alt="gambar layout" class="rounded mx-auto d-block"
                width="450px" />
        </div>
    <form action="/reservation" method="POST">
        @csrf
        <div class="row justify-content-md-center mt-5">
            <div class="col-sm-3">
                <label class="fs-6 pt-1">Pilih Tanggal Reservasi :</label>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <input type="date" id="jadwal-reservasi" class="form-control form-control-solid" value="" name="dtreservation" />
                </div>
            </div>
        </div>
        <input type="text" name="txtinserted" value="{{ auth()->user()->username }}" hidden>
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
                    @foreach($details as $detail)
                    <tr>
                        <td class="text-center">{{ $detail->txtdeskname }}</td>
                        <td class="text-center"><span class="badge bg-primary">{{ $detail->txtstatus }}</span></td>
                        <td class="text-center"><input type="radio" name="intareadetailid" id="intareadetailid" value={{ $detail->intareadetailid }}></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-end">
                <button type="submit" class="btn btn-primary mt-3 text-center">Booking</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection