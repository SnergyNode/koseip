@if (session('status'))

    <div class="notification notice closeable">
        <p>{{ session('status') }}</p>
        <a class="close" href="#"></a>
    </div>
@endif

@if(session('message'))


    <div class="notification notice closeable">
        <p>{!! session('message') !!}</p>
        <a class="close" href="#"></a>
    </div>

@endif


@if(count($errors) > 0)
    <br>
    @foreach($errors->all() as $error)

        <div class="notification error closeable">
            <p>{{ $error }}</p>
            <a class="close" href="#"></a>
        </div>

    @endforeach

@endif
