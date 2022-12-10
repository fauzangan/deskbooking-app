@extends('Layouts.main')
@section('container')
    @if ($detail != null)
        <h1 class="mt-4 mb-4">Edit Area</h1>
    @else
        <h1 class="mt-4 mb-4">Add Area</h1>
    @endif

    <div class="card">
        <form class="form" action="/area" method="POST" id="form-area" enctype="multipart/form-data">
            @csrf
            <div class="card-body mw-800px">
                @if ($detail != null)
                    <input type="hidden" id="intareaheaderid" name="intareaheaderid" />
                    <img id="imageResult" src="{{ asset('storage/'.$areaheaders[$detail-1]->txtfilename) }}" alt="gambar layout" class="img-fluid rounded shadow-sm d-block mb-3"
                            width="700" height="auto" />
                    <div class="card" style="width: 700px;">
                        <div class="card-header">
                            <div class="row">
                                <div class="col my-auto">
                                    <i class="fas fa-table me-1"></i>
                                    Desk
                                </div>
                                <div class="col col-md-auto">
                                    {{-- <button type="button" class="btn btn-success" id="popup"><span><i class="fa-solid fa-plus"></i></span> Create Desk</button> --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#createModal"><span><i class="fa-solid fa-plus"></i></span> Create
                                        Desk</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="table_marea">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Desk</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($areadetails as $areadetail)
                                        <tr>
                                            <td>{{ $areadetail->txtdeskname }}</td>
                                            <td>{{ $areadetail->txtstatus }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
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
                            <select class="select form-select form-select-solid" name="intlocationid" id="intlocationid">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->intlocationid }}">{{ $location->txtlocationname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtareaname">Area Name</label>
                        <div class="col-6">
                            <input class="form-control form-control-solid" type="text" name="txtareaname"
                                id="txtareaname" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtlocationname">Layout</label>
                        <div class="col-6">
                            <input type="file" class="form-control form-control-solid" id="layout" name="txtfilename"
                                accept="image/*" />
                        </div>
                    </div>

                    <div class="image-area mt-4">
                        <img id="imageResult" src="" alt="gambar layout" class="img-fluid rounded shadow-sm d-block"
                            width="700" height="auto" />
                    </div>



            </div>

            <div class="card-body mw-800px">
                <div class="row my-3">
                    <div class="col">
                        @if ($detail != null)
                            <button type="button" class="btn btn-primary px-6 me-1">Edit
                                Area</button>
                        @else
                            <button type="submit" class="btn btn-primary px-6 me-1">Add
                                Area</button>
                        @endif
                        <button type="button" class="btn btn-danger px-6" onclick="BackToIndex()">Back</button>
                    </div>
                </div>
            </div>
            @endif
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Desk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/area/detail" method="POST">
                        @csrf
                        <input type="hidden" id="intareaheaderid" name="intareaheaderid" value="{{ $detail }}" />
                        <div class="row mb-3">
                            <label for="txtareaname">Desk Name</label>
                            <div class="col-12">
                                <input class="form-control form-control-solid" type="text" name="txtdeskname"
                                    id="txtdeskname" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtareaname">Status</label>
                            <div class="col-12">
                                <select class="select form-select form-select-solid" name="txtstatus" id="txtstatus">
                                        <option value="available" selected> Available</option>
                                        <option value="unavailable"> Unavailable</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script src="{{ asset('Master/Area/marea_detail.js') }}" type="text/javascript"></script>
@endsection
