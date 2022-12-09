@extends('Layouts.main')
@section('container')
    @if ($detail != null)
        <h1 class="mt-4 mb-4">Edit Area</h1>
    @else
        <h1 class="mt-4 mb-4">Add Area</h1>
    @endif

    <div class="card">
        <form class="form" id="form-area" enctype="multipart/form-data">
            @csrf
            <div class="card-body mw-800px">
                @if ($detail != null)
                    <input type="hidden" id="intareaheaderid" />
                @endif

                <div class="row mb-3">
                    <label for="intlocationid">Site Name</label>
                    <div class="col-6">
                        <input class="form-control form-control-solid" type="text" name="" id="intlocationid"
                            value="{{ $sites[0]->txtsitename }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="intlocationid">Location Name</label>
                    <div class="col-6">
                        <select class="select form-select form-select-solid" id="intlocationid">
                            @foreach ($locations as $location)
                                <option value="{{ $location->intlocationid }}">{{ $location->txtlocationname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtlocationname">Area Name</label>
                    <div class="col-6">
                        <input class="form-control form-control-solid" type="text" name="" id="txtareaname" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtlocationname">Layout</label>
                    <div class="col-6">
                        <input type="file" class="form-control form-control-solid" id="layout" name="layout" accept="image/*" />
                    </div>
                </div>

                <div class="image-area mt-4">
                    <img id="imageResult" src="" alt="gambar layout" class="img-fluid rounded shadow-sm d-block"
                        width="700" height="auto" />
                </div>

                <div class="card mt-5" style="width: 700px;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col my-auto">
                                <i class="fas fa-table me-1"></i>
                                Desk
                            </div>
                            <div class="col col-md-auto">
                                <button type="button" class="btn btn-success" id="addRow"><span><i class="fa-solid fa-plus"></i></span> Create Desk</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="table_marea">
                            <thead class="table-dark">
                                <tr>
                                    <th></th>
                                    <th>Desk</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                    <td>Desk A1</td>
                                    <td>available</td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>
                </div>

            </div>

            <div class="card-body mw-800px">
                <div class="row my-3">
                    <div class="col">
                        @if ($detail != null)
                            <button type="button" class="btn btn-primary px-6 me-1" onclick="updateArea()">Edit
                                Area</button>
                        @else
                            <button type="button" class="btn btn-primary px-6 me-1" onclick="createArea()">Add
                                Area</button>
                        @endif
                        <button type="button" class="btn btn-danger px-6" onclick="BackToIndex()">Back</button>
                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script src="{{ asset('Master/Area/marea_detail.js') }}" type="text/javascript"></script>
@endsection
