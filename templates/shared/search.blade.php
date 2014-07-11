@section('content')
    <div class="listing">
        <div class="nav-mobile hidden-desktop">
            <select class="select-button">
                <option data-url="{{ f('controller.redirectUrl') }}" selected>Search</option>
                @if(f('auth.allowed', f('controller.uri', '/null/create')))
                <option data-url="{{ f('controller.url', '/null/create') }}">Create</option>
                @endif
            </select>
        </div>
        <div class="list-user">
            <div class="wrapper">
                <ul class="listview">
                    <li class="list-group-container">
                        <ul class="list-group">
                            @if(count($entries))
                                @foreach($entries as $entry)
                                <li class="plain">
                                    <a href="{{ f('controller.url', '/'.$entry['$id']) }}">
                                        <?php $schema = $app->controller->schema(); ?>
                                        {{{ reset($schema)->format('plain', @$entry[key($schema)], $entry) ?: '<no identifier>' }}}
                                    </a>
                                </li>
                                @endforeach
                            @else
                                <li class="plain" style="text-align: center; border-bottom: 0">
                                    <a href="#">
                                        &lt;empty&gt;
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
