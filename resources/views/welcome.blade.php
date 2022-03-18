@include ('layouts.header')

@if(Auth::user())
Hi
@else
Bye
@endif

@include ('layouts.footer')
