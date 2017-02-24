<?php
/*session_start();
if($_SESSION["adminlogged"]!=true){
  header("Location:./index.html);
}*/
?>

<!doctype html>
<html>
<head>
    <title>Amrita sports 2017 registration</title>
    <!-- Latest compiled and minified CSS -->



    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


 <style>

  #admin_links{
  margin: 0 auto;
}

#admin_links a{
margin-bottom:10px;
}

#clear{
 margin:300px;
}
</style>

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
    @if (Session::has('success'))
        <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Success!</h4>
                    </div>
                    <div class="modal-body">
                        {{ Session::get('success') }}
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
            <fieldset>
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <P class="text-center"><img src="{{asset('images/logo_full.png')}}" alt="logo"></p>
               </div>
                 <div id="legend">
                <h3 class="text-center" class="subhead">Result Entry</h3><br><br>
                <div class="col-md-8 col-md-offset-2">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Male</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Female</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Group</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            @foreach ($events->where('gender', '=', 'male')->where('relay', '=', false) as $event)
                                <form action="{{ url('/results') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="event" value="{{ $event->id }}">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-primary btn-block w3-margin-top" value="{{ strtoupper($event->event) }}">
                                    </div>
                                </form>
                            @endforeach
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            @foreach ($events->where('gender', '=', 'female')->where('relay', '=', false) as $event)
                                <form action="{{ url('/results') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="event" value="{{ $event->id }}">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-success btn-block w3-margin-top" value="{{ strtoupper($event->event) }}">
                                    </div>
                                </form>
                            @endforeach
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                            @foreach ($events->where('relay', '=', true) as $event)
                                <form action="{{ url('/results/group') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="event" value="{{ $event->event }}">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-danger btn-block w3-margin-top" value="{{ strtoupper($event->event) }}">
                                    </div>
                                </form>
                            @endforeach
                            <form action="{{ url('/results/group') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="event" value="marchpast">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-danger btn-block w3-margin-top" value="MARCHPAST">
                                </div>
                            </form>
                        </div>
                      </div>

</div>
                </div>
            </div>
            </fieldset>
        </div>
</body>
</html>
