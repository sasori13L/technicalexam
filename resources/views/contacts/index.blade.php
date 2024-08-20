@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-warning d-flex justify-content-between align-items-center">
                        <span class="text-black">{{ __('Contacts List') }}</span>
                        <div class="d-inline-flex justify-content-between align-items-center">
                            <a href="{{ route('contacts.create') }}" class="btn btn-success btn-sm w-50">Add Contact</a>
                            <input type="text" id="search" class="form-control ms-2" placeholder="Search...">
                        </div>
                    </div>

                    <div class="card-body" id="contacts-table">
                        @include('contacts._list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            function fetch_record(query = '') {
                $.ajax({
                    url: "{{ route('contacts.fetch') }}",
                    method: 'GET',
                    data: {search: query},
                    success: function (data) {
                        $('#contacts-table').html(data);
                    }
                });
            }

            $('#search').on('keyup', function () {
                var query = $(this).val();
                fetch_record(query);
            });
        });
    </script>
@endpush
