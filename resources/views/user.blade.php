@extends('app')

@section('content')
    <div style="padding:1rem">
        <div class="row">
            <div class="col">
                    <x-upload-bms text="Click here update songdata.db" :user="$user" />
                    <x-bms-table :user="$user" />
            </div>
        </div>
    </div>
@endsection
