@extends('layout')

@section('og')

    <meta property="og:title" content="Goalies">
    <meta property="og:url" content="http://www.topnhlgoalies.com">

@endsection

@section('content')

    <div>
        <h2>Goalies</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
