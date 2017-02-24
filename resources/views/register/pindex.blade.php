<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Print Registration</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            @foreach ($events->where('gender', '=', 'male')->where('relay', '=', false) as $event)
                                <div class="col-md-6">
                                    <a href="{{ route('print.show', [$event->id]) }}" class="btn btn-primary btn-block w3-margin-top">{{ strtoupper($event->event) }}</a>
                                </div>
                            @endforeach
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            @foreach ($events->where('gender', '=', 'female')->where('relay', '=', false) as $event)
                                <div class="col-md-6">
                                    <a href="{{ route('print.show', [$event->id]) }}" class="btn btn-success btn-block w3-margin-top">{{ strtoupper($event->event) }}</a>
                                </div>
                            @endforeach
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            </fieldset>
        </div>
    </body>
</html>
