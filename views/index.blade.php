@extends('layout')

@section('content')

    <header>
        <h1>Top NHL Players</h1>
        <p>A collection of top NHL players grouped by position and year.</p>
        <ul>
            <li><a href="#all">All skaters</a></li>
            <li><a href="#forwards">Forwards</a></li>
            <li><a href="#defensemen">Defensemen</a></li>
            <li><a href="#goalies">Goalies</a></li>
        </ul>
    </header>

    <div id="all">
        <h2>All skaters</h2>
        @foreach($all as $year => $allIds)
        <ul>
            <li>
                <h3><i class="fa fa-bar-chart"></i> Season {{ $year . ' - ' . ($year + 1) }}</h3>
                <ul>
                    @foreach($allIds as $allId => $pts)
                        @foreach($players as $player)
                            @if ($allId == $player['id'])
                                <li>
                                    <div data-id="{{ $allId }}">
                                        <div>
                                            <img src="http://1.cdn.nhle.com/photos/mugs/{{ $allId }}.jpg" alt="{{ $player['name'] }}">
                                            <span>{{ $pts }} pts</span>
                                        </div>
                                        <a href="http://www.nhl.com/ice/player.htm?id={{ $allId }}" target="_blank">
                                            {{ $player['name'] }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </li>
        </ul>
        @endforeach
    </div>
    <div id="forwards">
        <h2>Forwards</h2>
        @foreach($forwards as $year => $forwardsIds)
        <ul>
            <li>
                <h3><i class="fa fa-bar-chart"></i> Season {{ $year . ' - ' . ($year + 1) }}</h3>
                <ul>
                    @foreach($forwardsIds as $forwardId => $pts)
                        @foreach($players as $player)
                            @if ($forwardId == $player['id'])
                                <li>
                                    <div data-id="{{ $forwardId }}">
                                        <div>
                                            <img src="http://1.cdn.nhle.com/photos/mugs/{{ $forwardId }}.jpg" alt="{{ $player['name'] }}">
                                            <span>{{ $pts }} pts</span>
                                        </div>
                                        <a href="http://www.nhl.com/ice/player.htm?id={{ $forwardId }}" target="_blank">
                                            {{ $player['name'] }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </li>
        </ul>
        @endforeach
    </div>
    <div id="defensemen">
        <h2>Defensemen</h2>
        @foreach($defensemen as $year => $defensemenIds)
        <ul>
            <li>
                <h3><i class="fa fa-bar-chart"></i> Season {{ $year . ' - ' . ($year + 1) }}</h3>
                <ul>
                    @foreach($defensemenIds as $defensemanId => $pts)
                        @foreach($players as $player)
                            @if ($defensemanId == $player['id'])
                                <li>
                                    <div data-id="{{ $defensemanId }}">
                                        <div>
                                            <img src="http://1.cdn.nhle.com/photos/mugs/{{ $defensemanId }}.jpg" alt="{{ $player['name'] }}">
                                            <span>{{ $pts }} pts</span>
                                        </div>
                                        <a href="http://www.nhl.com/ice/player.htm?id={{ $defensemanId }}" target="_blank">
                                            {{ $player['name'] }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </li>
        </ul>
        @endforeach
    </div>
    <div id="goalies">
        <h2>Goalies</h2>
        @foreach($goalies as $year => $goaliesIds)
        <ul>
            <li>
                <h3><i class="fa fa-bar-chart"></i> Season {{ $year . ' - ' . ($year + 1) }}</h3>
                <ul>
                    @foreach($goaliesIds as $goalieId => $wins)
                        @foreach($players as $player)
                            @if ($goalieId == $player['id'])
                                <li>
                                    <div data-id="{{ $goalieId }}">
                                        <div>
                                            <img src="http://1.cdn.nhle.com/photos/mugs/{{ $goalieId }}.jpg" alt="{{ $player['name'] }}">
                                            <span>{{ $wins }} w</span>
                                        </div>
                                        <a href="http://www.nhl.com/ice/player.htm?id={{ $goalieId }}" target="_blank">
                                            {{ $player['name'] }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </li>
        </ul>
        @endforeach
    </div>

    <footer>
        <p>&copy; Top NHL Players. Designed &amp; developed by <a href="http://www.lygue.com" target="_blank">Lygue</a>. Statistics &amp; pictures from <a href="http://www.nhl.com" target="_blank">NHL.com</a>.</p>
        <p><a href="http://www.lygue.com" target="_blank">Lygue</a> &mdash; Better organize your league. Manage, share, discuss and archive everything that's essential for your league.</p>
    </footer>

@endsection