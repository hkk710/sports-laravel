<!doctype html>
<head>
    <title>Print registers of {{ $event->event }}</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="form_wrap" id="reg_form">
        <div class="row">
            <div class="col-md-12" id="head-content">
                <a href="{{ url('/print') }}"><img src="/images/header.png"/></a>
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="text-center">Registartions of {{ strtoupper($event->event) }} {{ strtoupper($event->gender) }}</h1><hr>
            <div class="col-sm-12 w3-margin-top">
                <table class="table table-bordered advaith-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Chest No:</th>
                            <th>Btach</th>
                            <th>Roll No:</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registers->where('event_one', '=', $event->event) as $register)
                            <tr class="ad">
                                <td>{{ $register->name }}</td>
                                <td>{{ $register->chest_no }}</td>
                                <td>{{ $register->batch }}</td>
                                <td>{{ $register->roll_no }}</td>
                                <td>{{ $register->gender }}</td>
                            </tr>
                        @endforeach
                        @foreach ($registers->where('event_two', '=', $event->event) as $register)
                            <tr class="ad">
                                <td>{{ $register->name }}</td>
                                <td>{{ $register->chest_no }}</td>
                                <td>{{ $register->batch }}</td>
                                <td>{{ $register->roll_no }}</td>
                                <td>{{ $register->gender }}</td>
                            </tr>
                        @endforeach
                        @foreach ($registers->where('event_three', '=', $event->event) as $register)
                            <tr class="ad">
                                <td>{{ $register->name }}</td>
                                <td>{{ $register->chest_no }}</td>
                                <td>{{ $register->batch }}</td>
                                <td>{{ $register->roll_no }}</td>
                                <td>{{ $register->gender }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <button type="button" class="btn btn-success btn-block hidden-print" onclick="window.print()">Print</button>
                </div>
            </div>
        </div>
    </div>
</body>
