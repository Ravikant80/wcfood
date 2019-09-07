@extends('frontend.template')
@push('styles')

@endpush

@section('content')

 <div class="container product-in-cart-list">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p class="alert alert-warning">You have cancelled your order. Maybe you want to <a href="{{ url('/cart') }}">checkout other items?</a></p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush