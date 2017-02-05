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
        <form class="form-horizontal" action = "add.php" method = "post" name="form" onsubmit="return check_form();">
            <fieldset>
               <div class="header" class="row">
                   <div class="col-md-12" id="head-content">
                       <P class="text-center"><img src="{{asset('images/logo_full.png')}}" alt="logo"></p>
               </div>
                 <div id="legend">
                <h3 class="text-center" class="subhead">Result Entry</h3><br><br>
               <div id="admin_links" class="container">
             <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="col-md-offset-4 text-center w3-margin-bottom">
                    <form action="{{ url('results') }}" method="post">
                        <input type="submit" class="btn btn-danger btn-lg col-md-6" value="MARCHPAST">
                    </form>
                </div>
                <div class="text-center">
                    @foreach ($events as $event)
                        <form action="{{ url('results') }}" method="post" class="col-md-6">
                            {{ csrf_field() }}
                            <input type="hidden" name="event" value="{{ $event->id }}">
                            <input type="submit" value="{{ strtoupper($event->event) }} {{ strtoupper($event->gender) }}" class="{{ $event->gender == 'male' ? 'btn btn-primary btn-lg col-md-12' : 'btn btn-success btn-lg col-md-12' }}" style="margin-bottom: 15px;">
                        </form>
                    @endforeach
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
