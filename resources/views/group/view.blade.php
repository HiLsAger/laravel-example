@extends('layouts.app')

@section('content')
<div class="container-full ps-4 pe-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('menu.group') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary me-2">{{ __('messages.get_group_link') }}</button>
                        <button class="btn btn-primary">{{ __('messages.create_group')}}</button>
                    </div>
                </div>

                <div>
            </div>
        </div>
    </div>
</div>
@endsection
