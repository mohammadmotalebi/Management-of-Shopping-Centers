@if (mobileApp())
    <script src="{{ mix('js/app.js') }}"></script>
@endif

@unless(mobileApp())
    <script src="{{asset('js/all.js')}}"></script>
    @stack('scripts')
@endunless



