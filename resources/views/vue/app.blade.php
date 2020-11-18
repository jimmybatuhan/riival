@extends('layouts.app')
@section('vue-app')
<body>
    <div id="app">
        <app
            csrf-token="{{ csrf_token() }}"
        />
    </div>
</body>
@endsection