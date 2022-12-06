@extends('Layouts.main')
@section('container')

@foreach($details as $detail)
    @if ($detail->id != null)
        
    @endif
    <h1 class="mt-4 mb-4">New Location</h1>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/Master/Location/mlocation_detail.js"></script>
@endsection