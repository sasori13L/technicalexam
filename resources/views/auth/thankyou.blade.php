@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="h2">{{ __('Thank you for registering') }}</div>

                        <div class="col-md-12 mt-4">
                            <a href="{{ route('contacts.index') }}" class="btn btn-primary mx-auto">
                                {{ __('Continue') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
