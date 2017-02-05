<!doctype html>
<head>
    <title>Amrita sports 2017 registration</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="form_wrap" id="reg_form">
        <form action="{{ url('results/group/create') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="event" value="{{ $event->id }}">
            <fieldset>
             <!--header section-->
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                    <a href="{{ url('/results') }}"><img src="../images/header.png"/></a>
                   </div>
               </div>
                <!-- Result Entry
                 -->
                <div id="legend" class="w3-margin-bottom">
                    <h3 class="text-center" class="subhead">Result Entry: {{ strtoupper($event->event) }} {{ strtoupper($event->gender) }}</h3>
                </div>
                <div class="col-sm-8 col-sm-offset-2 text-center w3-margin-top">
                    <div class="form-inline w3-margin-bottom">
                        <div class="form-group">
                            <label for="chest1">Position 1:</label>
                            <input type="text" class="form-control" id="chest1" name="chest1" placeholder="enter chest number">
                        </div>
                        <div class="form-group">
                            <label for="time1">Time 1:</label>
                            <input type="text" class="form-control" id="time1" name="time1" placeholder="enter time">
                        </div>
                    </div>
                    <div class="form-inline w3-margin-bottom">
                        <div class="form-group">
                            <label for="chest2">Position 2:</label>
                            <input type="text" class="form-control" id="chest2" name="chest2" placeholder="enter chest number">
                        </div>
                        <div class="form-group">
                            <label for="time2">Time 2:</label>
                            <input type="text" class="form-control" id="time2" name="time2" placeholder="enter time">
                        </div>
                    </div>
                    <div class="form-inline w3-margin-bottom">
                        <div class="form-group">
                            <label for="chest3">Position 3:</label>
                            <input type="text" class="form-control" id="chest3" name="chest3" placeholder="enter chest number">
                        </div>
                        <div class="form-group">
                            <label for="time3">Time 3:</label>
                            <input type="text" class="form-control" id="time3" name="time3" placeholder="enter time">
                        </div>
                    </div>
                    <input type="submit" value="Enter" class="btn btn-success pull-right">
                </div>
            </fieldset>
        </form>
    </div>
</body>
