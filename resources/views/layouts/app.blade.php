@inject('session_preferences', 'App\Http\Controllers\SessionPreferences')
<!DOCTYPE html>
<html>

<head>
    <title>Star Admin Pro Laravel Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ $csrf_token = csrf_token() }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ $csrf_token }}">

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- plugin css -->
    {!! Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
    {!! Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
    <!-- end plugin css -->

    @stack('plugin-styles')

    <!-- common css -->
    {!! Html::style('css/app.css') !!}
    <!-- end common css -->

    @stack('style')
</head>

<body
    class="{{ !$session_preferences->getPreference('sidebar_opened') ? 'sidebar-icon-only' : '' }}"
    data-base-url="{{route('painel.index')}}"
>

    <div class="container-scroller" id="app">
        @include('layouts.header')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>

    <!-- base js -->
    {!! Html::script('js/app.js') !!}
    {!! Html::script('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    {!! Html::script('assets/js/off-canvas.js') !!}
    {!! Html::script('assets/js/hoverable-collapse.js') !!}
    {!! Html::script('assets/js/misc.js') !!}
    {!! Html::script('assets/js/settings.js') !!}
    {!! Html::script('assets/js/todolist.js') !!}
    <!-- end common js -->

    @stack('custom-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener("toogle-sidebar", (e) => {
                // fetch("?key=sidebar_opened&value=false")

                    const url = "{{ route('admin.session-preferences.put') }}";
                    let data = {
                        key: 'sidebar_opened',
                        value: e.detail.sidebar_opened,
                        _token: "{{ $csrf_token }}"
                    }

                    let fetchData = {
                        method: 'POST',
                        body: JSON.stringify(data),
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        }
                    }

                    fetch(url, fetchData)
                        .then(request => request.json())
                        .then(request => console.log(request))
                        .catch(err => {})
            });
        });
    </script>
</body>

</html>
