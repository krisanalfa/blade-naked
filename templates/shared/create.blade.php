@section('content')
    <?php use KrisanAlfa\Theme\BladeNaked\Helper\Form; ?>

    <div class="listing">
        <div class="nav-mobile hidden-desktop">
            <select class="select-button">
                <option data-url="{{ f('controller.redirectUrl') }}">Search</option>
                @if(f('auth.allowed', f('controller.uri', '/null/create')))
                    <option data-url="{{ f('controller.url', '/null/create') }}" selected>Create</option>
                @endif
            </select>
        </div>
        <div class="list-form">
            <form method="POST" enctype="multipart/form-data">
                {{ Form::create($app->controller->schema())->of(@$entry)->show() }}
                <div class="row button-form">
                    <div class="span-12">
                        <div class="row">
                            <ul class="flat">
                                <li>
                                    <input type="submit" value="Save">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
