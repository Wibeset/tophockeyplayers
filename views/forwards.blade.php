@extends('layout')

@section('og')

    <meta property="og:title" content="Forwards">
    <meta property="og:url" content="http://www.topnhlplayers.com/forwards">

@endsection

@section('content')

    <div>
        <h2>Forwards</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
