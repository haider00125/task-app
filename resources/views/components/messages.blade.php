<div class="m-4">
    @if (Session::has('__info'))
        <x-alert type="info" :message="Session::get('__info')" />
    @endif

    @if (Session::has('__success'))
        <x-alert type="success" :message="Session::get('__success')" />
    @endif

    @if (Session::has('__error'))
        <x-alert type="danger" :message="Session::get('__error')" />
    @endif

    @if (Session::has('__warning'))
       <x-alert type="warning" :message="Session::get('__warning')" />
    @endif

    @if (isset($errors) && count($errors) > 0)
        @foreach ($errors->all() as $error)
           <x-alert type="danger" :message="$error" />
        @endforeach
    @endif
</div>
