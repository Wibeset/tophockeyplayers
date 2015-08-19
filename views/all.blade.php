@extends('layout')

@section('og')

    <meta property="og:title" content="All skaters">
    <meta property="og:description" content="Top NHL players grouped by position (forwards, defenseman and goalies) and year.">
    <meta property="og:url" content="http://www.topnhlplayers.com">

@endsection

@section('content')

    <div>
        <h2>All skaters</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
