<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Event Registration</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body class="w3-light-green">
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
        <div class="container w3-margin-bottom">
            <div class="col-sm-10 col-sm-offset-1 w3-margin-top w3-padding-0" style="border: 1px solid #aaa; box-shadow: 0 0 30px 2px #ccc; background: #fff;">
                <div style="padding: 30px; border-bottom: 2px solid green; overflow: hidden;">
                    <div class="col-sm-6 col-sm-offset-3">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo_full.png') }}" alt="Athletics" width="100%"></a>
                    </div>
                    <div class="w3-margin-top col-md-12 text-center">
                        <h2>Registration Form</h2>
                    </div>
                </div>
                <div style="padding: 30px; overflow: hidden;" class="w3-light-grey w3-padding-bottom">
                    <div class="col-sm-8 col-sm-offset-2">
                        {!! Form::open(['class' => 'form-horizontal']) !!}
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="As in your ID card" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="batch" class="col-sm-3 control-label">Batch:</label>
                                <div class="col-sm-9">
                                    <select name="batch" id="batch" class="form-control">
                                        <option value="ME">ME</option>
                                        <option value="ECE">ECE</option>
                                        <option value="EEE">EEE</option>
                                        <option value="CSE">CSE</option>
                                        <option value="CSA">CSA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="roll_no" class="col-sm-3 control-label">Roll No:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="EG:AM.AR.U313BCA001" value="{{ old('roll_no') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label">Phone No:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="your personal" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="your personal" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-sm-3 control-label">Gender:</label>
                                <div class="col-sm-9" id="gender" style="vertical-align: middle">
                                    <input type="radio" id="male-select" name="gender" value="male">
                                    <label for="male-select">Male</label>
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="radio" id="female-select" name="gender" value="female">
                                    <label for="female-select">Female</label>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="male">
                                    <h2>Select events</h2><hr style="border-top: 1px solid #ccc;">
                                    <div class="row">
                                        <div class="col-md-4" id="event-block-1" style="display: block;">
                                            <label for="event_one"> Event 1
                                                <select class="form-control" id="event_dropdown" name="event_one">
                                                    <option value="none">None</option>
                                                    @foreach ($events->where('gender', '=', 'male') as $event)
                                                        <option value="{{ $event->id }}">{{ $event->event }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-md-4" id="event-block-2" style="display: block;">
                                            <label for="event_two"> Event 2
                                                <select class="form-control" id="event_dropdown" name="event_two">
                                                    <option value="none">None</option>
                                                    @foreach ($events->where('gender', '=', 'male') as $event)
                                                        <option value="{{ $event->id }}">{{ $event->event }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-md-4" id="event-block-3" style="display: block;">
                                            <label for="event_three"> Event 3
                                                <select class="form-control" id="event_dropdown" name="event_three">
                                                    <option value="none">None</option>
                                                    @foreach ($events->where('gender', '=', 'male') as $event)
                                                        <option value="{{ $event->id }}">{{ $event->event }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="female">
                                    <h2>Select events</h2><hr style="border-top: 1px solid #ccc;">
                                    <div class="row">
                                        <div class="col-md-4" id="event-block-1" style="display: block;">
                                            <label for="event_one"> Event 1
                                                <select class="form-control" id="event_dropdown" name="event_one">
                                                    <option value="none">None</option>
                                                    @foreach ($events->where('gender', '=', 'female') as $event)
                                                        <option value="{{ $event->id }}">{{ $event->event }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-md-4" id="event-block-2" style="display: block;">
                                            <label for="event_two"> Event 2
                                                <select class="form-control" id="event_dropdown" name="event_two">
                                                    <option value="none">None</option>
                                                    @foreach ($events->where('gender', '=', 'female') as $event)
                                                        <option value="{{ $event->id }}">{{ $event->event }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-md-4" id="event-block-3" style="display: block;">
                                            <label for="event_three"> Event 3
                                                <select class="form-control" id="event_dropdown" name="event_three">
                                                    <option value="none">None</option>
                                                    @foreach ($events->where('gender', '=', 'female') as $event)
                                                        <option value="{{ $event->id }}">{{ $event->event }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                {{ Form::submit('Register', ['class' => 'btn btn-default']) }}
                            </div>
                            <script type="text/javascript">
                                function close() {
                                    $('.tab-content > .tab-pane#male').hide();
                                    $('.tab-content > .tab-pane#female').hide();
                                }
                                $('input:radio').change(function(e) {
                                    var gender = e.target.value;
                                    if (gender == 'male') {
                                        close();
                                        $('.tab-content > .tab-pane#male').show('medium');
                                    }
                                    else {
                                        close();
                                        $('.tab-content > .tab-pane#female').show('medium');
                                    }
                                });
                            </script>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('form').submit(function(e) {
                if ($('#gender input#male-select').is(':checked')) {
                    $('#female').empty();
                }
            });
        </script>
    </body>
</html>
