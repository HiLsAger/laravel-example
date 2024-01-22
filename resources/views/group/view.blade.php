@extends('layouts.app')

@section('content')
<div class="container-full ps-4 pe-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="group" class="card">
                <div class="card-header">{{ __('menu.group') }}</div>

                <div class="card-body">
                    <group-component/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
