@extends('app')

@section('content')
    <div style="padding:1rem">
        <div class="row">
            <div class="col">
                @if($songs)
                    <x-upload-bms text="Click here update songdata.db" :user="$user" />
                    <x-bms-table :songs="$songs" :user="$user" />
                @else
                    <div>
                        No songs found.
                    </div>
                    <x-upload-bms text="Click here to upload songdata.db" :user="$user" />
                @endif
            </div>
        </div>
    </div>
@endsection
