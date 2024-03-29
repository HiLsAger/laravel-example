@extends('layouts.app')

@section('content')
<div class="container-full ps-4 pe-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('messages.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('messages.logged') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
