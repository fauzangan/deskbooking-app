@extends('Layouts.main')
@section('container')
    @if ($detail != null)
        <h1 class="mt-4 mb-4">Edit Location</h1>
    @else
        <h1 class="mt-4 mb-4">Add Location</h1>
    @endif

    <div class="card">
        <form class="form" enctype="multipart/form-data">
            @csrf
            <div class="card-body mw-800px">
                @if ($detail != null)
                    <input type="hidden" id="intareaheaderid" />
                @endif

                <div class="row mb-3">
                    <label for="intsiteid">Site Name</label>
                    <div class="col-6">
                        <select class="select form-select form-select-solid" id="intsiteid">

                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtlocationname">Location Name</label>
                    <div class="col-6">
                        <input class="form-control form-control-solid" type="text" name="" id="txtlocationname" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtlocationname">Area Name</label>
                    <div class="col-6">
                        <input class="form-control form-control-solid" type="text" name="" id="txtareaname" />
                    </div>
                </div>

                {{-- @if ($detail != null)
                    <div class="row mb-3">
                        <div>
                            <input type="checkbox" name="" id="bitactive" />
                        </div>
                    </div>
                @endif --}}

                <div class="row mb-3">
                    <label for="txtlocationname">Layout</label>
                    <div class="col-6">
                        <input type="file" class="form-control form-control-solid" id="layout" accept="image/*" />
                    </div>
                </div>

                <div class="image-area mt-4">
                    <img id="imageResult" src="" alt="gambar layout" class="img-fluid rounded shadow-sm mx-auto d-block" />
                </div>

                <div class="row mb-3">
                    <div class="col">
                        @if ($detail != null)
                            <button type="button" class="btn btn-primary px-6 me-1" onclick="UpdateLocation()">Edit
                                Area</button>
                        @else
                            <button type="button" class="btn btn-primary px-6 me-1" onclick="CreateLocation()">Add
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
    <script src="{{ asset('Master/Area/marea_detail.js') }}" type="text/javascript"></script>
@endsection
