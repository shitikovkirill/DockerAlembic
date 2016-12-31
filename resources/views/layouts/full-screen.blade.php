@extends('layouts.base')

<!-- BEGIN LOGIN SECTION -->
@section('base')
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('{{ asset(env('THEME')) }}/img/img16.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                @yield('content')
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
@endsection
<!-- END LOGIN SECTION -->