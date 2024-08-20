@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white">{{ __('Add Contact') }}</div>
                    <div class="card-body">
                        @include('contacts._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

