@extends('layout.main')
{{-- section used once with yield contnent --}}
@section('menue')
<li class=""><a href="">home</a></li>
@endsection

@push('submenue')
<li class=""><a href="">home2</a></li>
@endpush

@prepend('submenue')
<li class=""><a href="">home3</a></li>
@endprepend