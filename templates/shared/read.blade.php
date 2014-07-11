@section('content')
    <?php use KrisanAlfa\Theme\BladeNaked\Helper\Form; ?>

    <div class="listing">
        <div class="nav-mobile hidden-desktop">
            <select class="select-button">
                <option data-url="{{ f('controller.redirectUrl') }}">Search</option>
                @if(f('auth.allowed', f('controller.uri', '/null/create')))
                <option data-url="{{ f('controller.url', '/null/create') }}">Create</option>
                @endif
                @if(f('auth.allowed', f('controller.uri', '/'.URL::parameter('id'))))
                <option data-url="{{ f('controller.url', '/'.URL::parameter('id')) }}" selected>Read</option>
                @endif
                @if(f('auth.allowed', f('controller.uri', '/'.URL::parameter('id').'/update')))
                <option data-url="{{ f('controller.url', '/'.URL::parameter('id').'/update') }}">Update</option>
                @endif
                @if(f('auth.allowed', f('controller.uri', '/'.URL::parameter('id').'/delete')))
                <option data-url="{{ f('controller.url', '/'.URL::parameter('id').'/delete') }}">Delete</option>
                @endif
            </select>
        </div>
        <div class="list-form">
            {{ Form::create($app->controller->schema())->of($entry)->show(array( 'format' => 'readonly' )) }}
        </div>
    </div>
@endsection
