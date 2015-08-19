@extends('layout')

@section('og')

    <meta property="og:title" content="Top NHL players - Goalies">
    <meta property="og:description" content="Top 10 NHL goaloes grouped by year.">
    <meta property="og:url" content="http://www.topnhlplayers.com/goalies">
    <meta property="og:image" content="http://www.topnhlplayers.com/assets/img/og/goalies.jpg">

@endsection

@section('content')

    <div>
        <h2>Goalies</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
