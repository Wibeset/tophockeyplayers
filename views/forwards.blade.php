@extends('layout')

@section('og')

    <meta property="og:title" content="Top NHL players - Forwards">
    <meta property="og:description" content="Top 10 NHL forwards grouped by year.">
    <meta property="og:url" content="http://www.topnhlplayers.com/forwards">
    <meta property="og:image" content="http://www.topnhlplayers.com/assets/img/og/forwards.jpg">

@endsection

@section('content')

    <div>
        <h2>Forwards</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
