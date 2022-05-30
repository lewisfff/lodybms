<table id="table" class="table is-striped" style="width: 100%;">
    <thead>
    <th>sha256</th>
    <th>charthash</th>
    <th>md5</th>
    <th>title</th>
    <th>artist</th>
    <th>genre</th>
    <th>backbmp</th>
    <th>banner</th>
    <th>content</th>
    <th>adddate</th>
    <th>date</th>
    <th>difficulty</th>
    <th>favorite</th>
    <th>feature</th>
    <th>folder</th>
    <th>judge</th>
    <th>length</th>
    <th>level</th>
    <th>maxbpm</th>
    <th>minbpm</th>
    <th>mode</th>
    <th>notes</th>
    <th>parent</th>
    <th>path</th>
    <th>preview</th>
    <th>stagefile</th>
    <th>subartist</th>
    <th>subtitle</th>
    <th>tag</th>
    </thead>
    <tbody></tbody>
</table>

<script>
    $(document).ready(function () {
        var table = $('.table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('user.data', ['user_slug' => $user->name]) }}",
            responsive: true,
            pageLength: 50,
            paging: true,
            columns: [
                {data: 'sha256', name: 'sha256', responsivePriority: 5},
                {data: 'charthash', name: 'charthash', responsivePriority: 5},
                {data: 'md5', name: 'md5', responsivePriority: 5},
                {data: 'title', name: 'title', responsivePriority: 0},
                {data: 'artist', name: 'artist', responsivePriority: 0},
                {data: 'genre', name: 'genre', responsivePriority: 0},
                {data: 'backbmp', name: 'backbmp', responsivePriority: 1},
                {data: 'banner', name: 'banner', responsivePriority: 1},
                {data: 'content', name: 'content', responsivePriority: 1},
                {data: 'adddate', name: 'adddate', responsivePriority: 1},
                {data: 'date', name: 'date', responsivePriority: 0},
                {data: 'difficulty', name: 'difficulty', responsivePriority: 0},
                {data: 'favorite', name: 'favorite', responsivePriority: 0},
                {data: 'feature', name: 'feature', responsivePriority: 1},
                {data: 'folder', name: 'folder', responsivePriority: 1},
                {data: 'judge', name: 'judge', responsivePriority: 1},
                {data: 'length', name: 'length', responsivePriority: 0},
                {data: 'level', name: 'level', responsivePriority: 0},
                {data: 'maxbpm', name: 'maxbpm', responsivePriority: 0},
                {data: 'minbpm', name: 'minbpm', responsivePriority: 0},
                {data: 'mode', name: 'mode', responsivePriority: 1},
                {data: 'notes', name: 'notes', responsivePriority: 0},
                {data: 'parent', name: 'parent'},
                {data: 'path', name: 'path', responsivePriority: 1},
                {data: 'preview', name: 'preview', responsivePriority: 1},
                {data: 'stagefile', name: 'stagefile', responsivePriority: 1},
                {data: 'subartist', name: 'subartist', responsivePriority: 1},
                {data: 'subtitle', name: 'subtitle', responsivePriority: 1},
                {data: 'tag', name: 'tag', responsivePriority: 1},
            ]
        });

        $('.file').change(function () {
            console.log($(this).val());
            $(this).closest('form').submit();
        });
    });
</script>
