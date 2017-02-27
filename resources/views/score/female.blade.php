<!doctype html>
<head>
    <title>Individual Score of Male</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="form_wrap" id="reg_form">
        <div class="row">
            <div class="col-md-12" id="head-content">
                <a href="{{ url('/') }}"><img src="/images/header.png"/></a>
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="text-center">Individual Score of Male</h1><hr>
            <div class="col-sm-12 w3-margin-top">
                <table class="table table-bordered advaith-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Chest No:</th>
                            <th>Batch</th>
                            <th>Roll No:</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registers as $register)
                            <tr class="ad">
                                <td>{{ $register->name }}</td>
                                <td>{{ $register->chest_no }}</td>
                                <td>{{ $register->batch }}</td>
                                <td>{{ $register->roll_no }}</td>
                                <td>{{ $register->score }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
