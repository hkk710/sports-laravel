<!doctype html>
<head>
    <title>Amrita sports 2017 registration</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="form_wrap" id="reg_form">
        <div class="row">
            <div class="col-md-12" id="head-content">
                <a href="{{ url('/result_view') }}"><img src="/images/header.png"/></a>
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="text-center">Department Scores</h1><hr>
            <div class="col-sm-6">
                <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
            </div>
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <thead>
                        <th>Department</th>
                        <th>Score</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($departments as $department) {
                                if ($department->id == 1) {
                                    echo "<tr><td>ME</td><td>" . $department->score . "</td></tr>";
                                }
                                if ($department->id == 2) {
                                    echo "<tr><td>ECE</td><td>" . $department->score . "</td></tr>";
                                }
                                if ($department->id == 3) {
                                    echo "<tr><td>EEE</td><td>" . $department->score . "</td></tr>";
                                }
                                if ($department->id == 4) {
                                    echo "<tr><td>CSE</td><td>" . $department->score . "</td></tr>";
                                }
                                if ($department->id == 5) {
                                    echo "<tr><td>CSA</td><td>" . $department->score . "</td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Department', 'Scores'],
                <?php
                    foreach ($departments as $department) {
                        if ($department->id == 1) {
                            echo "['ME'," . $department->score . "],";
                        }
                        if ($department->id == 2) {
                            echo "['ECE'," . $department->score . "],";
                        }
                        if ($department->id == 3) {
                            echo "['EEE'," . $department->score . "],";
                        }
                        if ($department->id == 4) {
                            echo "['CSE'," . $department->score . "],";
                        }
                        if ($department->id == 5) {
                            echo "['CSA'," . $department->score . "]";
                        }
                    }
                ?>
            ]);

            var options = {
                title: 'My Daily Activities',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</body>
