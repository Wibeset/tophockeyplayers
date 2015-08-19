@extends('layout')

@section('og')

    <meta property="og:title" content="Defensemen">
    <meta property="og:url" content="http://www.topnhldefensemen.com">

@endsection

@section('content')

    <div>
        <h2>Defensemen</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
