<!-- Breadcrumbs -->
<nav id="breadcrumbs" class="dark">
    <ul>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        @if(!empty(@$breadcrumbs))
            @foreach($breadcrumbs as $key=>$val)
                @if(!empty($val))
                    <li><a href="{{ $val }}">{{ $key }}</a></li>
                @else
                    <li>{{ $key }}</li>
                @endif
            @endforeach
        @endif

    </ul>
</nav>