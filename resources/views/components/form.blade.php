@once

@push("js")
<script src="https://www.google.com/recaptcha/api.js?render={{setting('captcha_api_key')}}"></script>
<script src="{{asset('js/forms.js')}}"></script>
@endpush
@endonce

@props(['action', 'class'])

<form action="{{$action}}" method="post" class="form {{$class ?? ''}}" enctype="{{$enctype ?? ''}}">
    @csrf
    {!! $slot !!}
</form>
