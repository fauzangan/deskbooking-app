@extends('Layouts.main')
@section('container')
    @if ($detail != null)
        <h1 class="mt-4 mb-4">Edit Location</h1>
    @else
        <h1 class="mt-4 mb-4">Add Location</h1>
    @endif

    <div class="card">
        <form>
            @csrf
            <div class="card-body mw-800px">
                @if ($detail != null)
                    <input type="hidden" id="intlocationid" />
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

                @if ($detail != null)
                    <div class="row mb-3">
                        <div>
                            <input type="checkbox" name="" id="bitactive" />
                        </div>
                    </div>
                @endif

                <div class="row mb-3">
                    <div class="col">
                        @if ($detail != null)
                            <button type="button" class="btn btn-primary px-6 me-1" onclick="UpdateLocation()">Edit
                                Location</button>
                        @else
                            <button type="button" class="btn btn-primary px-6 me-1" onclick="CreateLocation()">Add
                                Location</button>
                        @endif
                        <button type="button" class="btn btn-danger px-6" onclick="BackToIndex()">Back</button>
                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('Master/Location/mlocation_detail.js') }}" type="text/javascript"></script>
    {{-- <script>
        $(document).ready(function() {
            const getAllData = () => {
                $.ajax({
                    url: "/site/getalldata",
                    type: "POST",
                    data: {
                        _token:'{{ csrf_token() }}'
                    },
                    dataType: "json",
                    success: function(res) {
                        console.log(res)
                        // if(res.sukses){
                        //     objData = res.data
                        //     console.log(objData)
                        //     MappingSiteToDropdown()
                        // }
                        // else{
                        //     console.log("Data Kosong")
                        // }
                    }
                })
            }
            getAllData()
        })
    </script> --}}
@endsection
