<!doctype html>
<head>
    <title>Amrita sports 2017 registration</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @if (count($errors) > 0)
        <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Errors</h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#myModal').modal('show');
        </script>
    @endif
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
                            <label for="department1">Position 1:</label>
                            <select class="form-control" name="department1" id="department1">
                                <option value="1">ME</option>
                                <option value="2">ECE</option>
                                <option value="3">EEE</option>
                                <option value="4">CSE</option>
                                <option value="5">CSA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="score1">Score</label>
                            <input type="text" class="form-control" id="score1" value="10" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-inline w3-margin-bottom">
                        <div class="form-group">
                            <label for="department2">Position 2:</label>
                            <select class="form-control" name="department2" id="department2">
                                <option value="1">ME</option>
                                <option value="2">ECE</option>
                                <option value="3">EEE</option>
                                <option value="4">CSE</option>
                                <option value="5">CSA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="score2">Score</label>
                            <input type="text" class="form-control" id="score2" value="6" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-inline w3-margin-bottom">
                        <div class="form-group">
                            <label for="department3">Position 3:</label>
                            <select class="form-control" name="department3" id="department3">
                                <option value="1">ME</option>
                                <option value="2">ECE</option>
                                <option value="3">EEE</option>
                                <option value="4">CSE</option>
                                <option value="5">CSA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="score3">Score</label>
                            <input type="text" class="form-control" id="score3" value="3" disabled="disabled">
                        </div>
                    </div>
                    <input type="submit" value="Enter" class="btn btn-success pull-right">
                </div>
            </fieldset>
        </form>
    </div>
</body>
