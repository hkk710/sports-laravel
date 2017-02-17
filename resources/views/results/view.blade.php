<!DOCTYPE html>
<html>
<head>
    <title>Amrita sports 2017 registration</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<body>
        <div class="form_wrap" id="reg_form">
        <form class="form-horizontal" action = "add.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <P class="text-center"><img src="{{asset('images/logo_full.png')}}" alt="logo"></p>
               </div>
                 <div id="legend">
                <h3 class="text-center" class="subhead">View Results</h3><br><br>
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
                                <div class="col-md-6">
                                    <a href="{{ route('result.ind', [$event->gender, $event->id]) }}" class="btn btn-primary btn-block w3-margin-top">{{ strtoupper($event->event) }}</a>
                                </div>
                            @endforeach
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            @foreach ($events->where('gender', '=', 'female')->where('relay', '=', false) as $event)
                                <div class="col-md-6">
                                    <a href="{{ route('result.ind', [$event->gender, $event->id]) }}" class="btn btn-success btn-block w3-margin-top">{{ strtoupper($event->event) }}</a>
                                </div>
                            @endforeach
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                            @foreach ($events->where('relay', '=', true) as $event)
                                <div class="col-md-6">
                                    <a href="{{ url('/result_view/group') }}" class="btn btn-danger btn-block w3-margin-top">{{ strtoupper($event->event) }}</a>
                                </div>
                            @endforeach
                            <div class="col-md-6">
                                <a href="{{ url('/result_view/group') }}" class="btn btn-danger btn-block w3-margin-top">MARCHPAST</a>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            </fieldset>
        </div>
</body>
</html>
