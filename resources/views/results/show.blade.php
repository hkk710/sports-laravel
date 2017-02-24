<!doctype html>
<head>
    <title>Results of {{ $event->event }}</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <style media="screen">
        .advaith-table > tbody > tr.ad:first-child {
            background-color: gold;
        }
        .advaith-table > tbody > tr.ad {
            background-color: silver;
            color: #222;
        }
        .advaith-table > tbody > tr.ad:last-child {
            background-color: #B87333;
        }
    </style>
</head>
<body>
    <div class="form_wrap" id="reg_form">
        <div class="row">
            <div class="col-md-12" id="head-content">
                <a href="{{ url('/result_view') }}"><img src="/images/header.png"/></a>
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="text-center">Result for {{ strtoupper($event->event) }} {{ strtoupper($event->gender) }}</h1><hr>
            <div class="col-sm-12 w3-margin-top">
                <table class="table table-bordered advaith-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Chest No:</th>
                            <th>Time</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($results) == 0)
                            <tr>
                                <th class="text-center" colspan="4">No results</th>
                            </tr>
                        @endif
                        @foreach ($results as $result)
                            <tr class="ad">
                                <td>{{ $result->name }}</td>
                                <td>{{ $result->chest_no }}</td>
                                <td>{{ $result->time }}</td>
                                <td>{{ $result->position }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
