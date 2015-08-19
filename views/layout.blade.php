<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Top NHL Players grouped by position and year</title>
    <meta name="description" content="Top NHL Players grouped by position (forwards, defenseman and goalies) and year.">
    <meta name="author" content="Lygue">
    <meta name="keywords" content="hockey,players,top,nhl,lnh,crosby,price,ovechkin">
    <meta property="og:site_name" content="Top NHL Players">
    @yield('og')
    <meta property="og:description" content="Top NHL players grouped by position (forwards, defenseman and goalies) and year.">
    <meta property="article:author" content="https://www.facebook.com/Lygue">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="all" href="{!! $assets !!}css/styles.css?v={!! $version !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <header>
        <h1>Top NHL Players</h1>
        <p>A collection of top NHL players grouped by position and year. Designed &amp; developed by <a href="http://www.lygue.com" target="_blank" rel="author">Lygue</a>.</p>
        <ul>
            <li {!! $position == 'all' ? 'class="active"' : '' !!}>
                <a href="http://www.topnhlplayers.com/">All skaters</a>
            </li>
            <li {!! $position == 'forwards' ? 'class="active"' : '' !!}>
                <a href="http://www.topnhlplayers.com/forwards">Forwards</a>
            </li>
            <li {!! $position == 'defensemen' ? 'class="active"' : '' !!}>
                <a href="http://www.topnhldefensemen.com/">Defensemen</a>
            </li>
            <li {!! $position == 'goalies' ? 'class="active"' : '' !!}>
                <a href="http://www.topnhlgoalies.com/">Goalies</a>
            </li>
        </ul>
    </header>

    @yield('content')

    <footer>
        <p>&copy; Top NHL Players. Designed &amp; developed by <a href="http://www.lygue.com" target="_blank" rel="author">Lygue</a>. Statistics &amp; pictures from <a href="http://www.nhl.com" target="_blank">NHL.com</a>.</p>
        <p><a href="http://www.lygue.com" target="_blank" rel="author">Lygue</a> &mdash; Better organize your league. Manage, share, discuss and archive everything that's essential for your league.</p>
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
    <script type="text/javascript" src="{!! $assets !!}js/main.js?v={!! $version !!}"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-34049964-2', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>
