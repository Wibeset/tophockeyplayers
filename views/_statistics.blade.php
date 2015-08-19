@foreach($statistics as $year => $ids)
<ul>
    <li>
        <h3><i class="fa fa-bar-chart"></i> Season {!! $year . ' - ' . ($year + 1) !!}</h3>
        <ul>
            @foreach($ids as $id => $statistic)
                @foreach($players as $player)
                    @if ($id == $player['id'])
                        <li>
                            <div data-id="{!! $id !!}">
                                <div>
                                    <img src="http://1.cdn.nhle.com/photos/mugs/{{ $id }}.jpg" alt="{!! $player['name'] !!}">
                                    <span>{!! $statistic . ($position == 'goalies' ? 'w' : 'pts') !!}</span>
                                </div>
                                <a href="http://www.nhl.com/ice/player.htm?id={!! $id !!}" target="_blank">
                                    <span>{!! $statistic . ($position == 'goalies' ? 'w' : 'pts') !!}</span>
                                    {!! $player['name'] !!}
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
