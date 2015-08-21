@extends('layout')

@section('og')

    <meta property="og:title" content="Top NHL players - Defensemen">
    <meta property="og:description" content="Top 10 NHL defensemen grouped by year.">
    <meta property="og:url" content="http://www.topnhlplayers.com/defensemen">
    <meta property="og:image" content="http://www.topnhlplayers.com/assets/img/og/defensemen.jpg">

@endsection

@section('share')

    <div class="fb-share-button" data-href="http://www.topnhlplayers.com/defensemen" data-layout="box_count"></div>

@endsection

@section('content')

    <div>
        <h2>Defensemen</h2>
        @include('_statistics', ['position' => $position, 'statistics' => $statistics])
    </div>

@endsection
