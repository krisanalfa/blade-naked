@section('content')
    <div class="listing">
        <div class="nav-mobile hidden-desktop">
            <select class="select-button">
                <option data-url="{{ f('controller.redirectUrl') }}">Search</option>
                @if(f('auth.allowed', f('controller.uri', '/null/create')))
                <option data-url="{{ f('controller.url', '/null/create') }}">Create</option>
                @endif
                @if(f('auth.allowed', f('controller.uri', '/'.URL::parameter('id'))))
                <option data-url="{{ f('controller.url', '/'.URL::parameter('id')) }}">Read</option>
                @endif
                @if(f('auth.allowed', f('controller.uri', '/'.URL::parameter('id').'/update')))
                <option data-url="{{ f('controller.url', '/'.URL::parameter('id').'/update') }}">Update</option>
                @endif
                @if(f('auth.allowed', f('controller.uri', '/'.URL::parameter('id').'/delete')))
                <option data-url="{{ f('controller.url', '/'.URL::parameter('id').'/delete') }}" selected>Delete</option>
                @endif
            </select>
        </div>
        <div class="list-form">
            @if($_POST)
                <div class="row button-form">
                    <div class="span-12">
                        <div class="row">
                            <ul class="flat">
                                <li>
                                    <a href="{{ f('controller.redirectUrl') }}" class="button">Back</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @else
                <?php $id = explode(',', URL::parameter('id')) ?>
                <form method="POST">
                    <p>Are you sure want to delete {{ @count($id).' entries' }}?</p>
                    <input type="hidden" name="confirm" value="1">
                    <div class="row button-form">
                        <div class="span-12">
                            <div class="row">
                                <ul class="flat">
                                    <li>
                                        <input type="submit" value="OK">
                                    </li>
                                    <li>
                                        <a href="{{ f('controller.redirectUrl') }}" class="button">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
@endsection
