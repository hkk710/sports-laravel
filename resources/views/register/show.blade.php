<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/filter.css">
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/filter.js"></script>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Batch</th>
            <th>Gender</th>
            <th>Roll no:</th>
            <th>Chest no:</th>
            <th>First Event</th>
            <th>Second Event</th>
            <th>Third Event</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registers as $register)
            <tr>
                <td>{{ $register->name }}</td>
                <td>{{ $register->batch }}</td>
                <td>{{ $register->gender }}</td>
                <td>{{ $register->roll_no }}</td>
                <td>{{ $register->chest_no }}</td>
                <td>{{ $register->event_one }}</td>
                <td>{{ $register->event_two }}</td>
                <td>{{ $register->event_three }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
    $('table').dataTable();
</script>
