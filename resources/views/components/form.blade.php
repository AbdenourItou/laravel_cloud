@props([
    'class' => 'needs-validation mb-3 container', // TODO: is this okay? i think this should be changed, remove mb-3
    'action' => '',
    'method' => '',
])

@php
    // #🍀IMPORTANT_NOTE_1: update and DELETE forms are special cases in laravel forms
    // they require a hidden @method('PUT/DELETE')
    // 🍀 ask chatGPT: give me all laravel route types and how to write forms for them 🔥
    $hidden_method = null;
    if ($method == 'PUT' || $method == 'DELETE' || $method == 'PATCH')
    {
        $hidden_method = $method;
        $method = 'POST';
    }
@endphp


<form class="{{$class}}" novalidate action="{{$action}}" method="{{$method}}" {{$attributes}}>
    @if(!is_null($hidden_method))
        @method($hidden_method) {{-- #🍀IMPORTANT_NOTE_1 --}}
    @endif
    @csrf {{-- don't forget ths to protect against cross-site request forgeries (CSRF) !
        https://laravel.com/docs/10.x/csrf --}}
    {{$slot}}
</form>
