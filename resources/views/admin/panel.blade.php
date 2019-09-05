@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @csrf
           <form action="/hamid" method="get">
            <input type="text" name="from">
            <input type="text" name="to">
            <button type="submit">search</button>
        </form>
           
        </div>
    </div>
</div>
@endsection
