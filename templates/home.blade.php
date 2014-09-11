@section('style')
<link rel="stylesheet" href="{{ Theme::base('vendor/blade-foundation/css/foundation.css') }}" />
@stop

@section('content')
<article class="row container">
    <div>
        <h2>Hello Friend!</h2>
        <p>
            You see me because you haven't overriden templates yet or default routes. May be
            this is your fist journey through the world of Bono. I wish you will enjoy
            and get comfy to the world of productive application development.
        </p>

        <p>
            You can override the route from <code>www/index.php</code> file.
            Or if you just want to override the template, you can override it from (or
            create new file at) <code>templates/home.blade.php</code>. If you want to change the layout,
            you may create a new file at <code>templates/layout.blade.php</code>
        </p>

        <p>
            Best regards,<br>
            Bono Team
        </p>
    </div>
</article>
@endsection

@section('tot')
<link rel="stylesheet" href="" tot>
@endsection
