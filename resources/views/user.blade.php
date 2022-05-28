@extends('app')

@section('content')
    <div style="padding:1rem">
        <div class="row">
            <div class="col">
                @if($songs)
                    <table id="table" class="table" style="width: 100%;">
                        @foreach($songs as $song)
                            @if($loop->first)
                                <thead>
                                @foreach($song as $key => $value)
                                    <th>{{ $key }}</th>
                                @endforeach
                                </thead>
                            @endif
                            <tr>
                                @foreach($song as $key => $value)
                                    <td>{{ $value }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                @else
                    <div>
                        No songs found.
                    </div>
                    @if($user->id === auth()->user()->id)
                        <div class="field">
                            <form action="/upload" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="file is-boxed">
                                    <label class="file-label">
                                        <input class="file-input" type="file" class="file" name="file"
                                               accept=".db">
                                        <span class="file-cta">
                                                          <span class="file-label">
                                                            Click here to upload songdata.db
                                                          </span>
                                                    </span>
                                    </label>
                                </div>
                                @endif
                            </form>
                        </div>
                    @endif
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#table').DataTable(
                {
                    responsive: true,
                    pageLength: 100,
                    columnDefs: [
                        {responsivePriority: 5, targets: 0},
                        {responsivePriority: 5, targets: 1},
                        {responsivePriority: -1, targets: 2},
                        {responsivePriority: 0, targets: 3},
                        {responsivePriority: -1, targets: 4},
                        {responsivePriority: -1, targets: 5},
                        {responsivePriority: 0, targets: 6},
                        {responsivePriority: 4, targets: 7},
                        {responsivePriority: 2, targets: 8},
                        {responsivePriority: 2, targets: 9},
                        {responsivePriority: 3, targets: 10},
                        {responsivePriority: 3, targets: 11},
                        {responsivePriority: 3, targets: 12},
                        {responsivePriority: 4, targets: 13},
                        {responsivePriority: 4, targets: 14},
                        {responsivePriority: 4, targets: 15},
                        {responsivePriority: 4, targets: 16},
                        {responsivePriority: 0, targets: 17},
                        {responsivePriority: 0, targets: 18},
                        {responsivePriority: 0, targets: 19},
                        {responsivePriority: 0, targets: 20},
                        {responsivePriority: 0, targets: 21},
                        {responsivePriority: 0, targets: 22},
                        {responsivePriority: 0, targets: 23},
                        {responsivePriority: 0, targets: 24},
                        {responsivePriority: 0, targets: 25},
                        {responsivePriority: 0, targets: 26},
                        {responsivePriority: 0, targets: 27},
                        {responsivePriority: 0, targets: 28}
                    ],
                }
            );

            $('.file').change(function () {
                console.log($(this).val());
                $(this).closest('form').submit();
            });
        });
    </script>
@endsection
