@extends('layout')

@section('og')

    <meta property="og:title" content="Top NHL players - All skaters">
    <meta property="og:description" content="Top 10 NHL players (forwards, defenseman and goalies) grouped by year.">
    <meta property="og:url" content="http://www.topnhlplayers.com">
    <meta property="og:image" content="http://www.topnhlplayers.com/assets/img/og/forwards.jpg">

@endsection

@section('content')

    <div>
        <h2>All skaters</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
