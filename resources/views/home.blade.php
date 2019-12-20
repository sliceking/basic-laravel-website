@extends("layouts.app")

@section('content')
    <h1>home</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor veniam voluptates corrupti placeat eveniet eligendi ab, ratione possimus! Alias officia quidem explicabo expedita est a illum culpa numquam perspiciatis omnis!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended</p>
@endsection
