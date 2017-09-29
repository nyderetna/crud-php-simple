<html>
<head>  
    <title>DANIEL</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/font-awesome.css">

</head>

<body>
            <div class="container">

                <div class="page-header" style="margin-top: 60px;">
                    <h1>LATIHAN <i class="fa fa-anchor" aria-hidden="true" style="color: black;"></i></h1>
                    <p class="lead">Berlatih kembali dari dasar.</p>
                </div>
                <!-- Navigation Bar -->
                
                <nav class="navbar navbar-inverse navbar-fixed-top">
                  <div class="container">
                    <div class="navbar-header">
                   
                      <div class="container-fluid">
                            <div class="navbar-header">
                            <a class="navbar-brand" href="#"><i class="fa fa-facebook-square" aria-hidden="true"> DanielPaulyR</i></a>
                            </div>
                            <ul class="nav navbar-nav">
                            <li><a href="/index.php">Home</a></li>
                            <li class="active"><a href="/views/chart.php">Chart</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                            </ul>
                      </div>
                      
                    </div>
             
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                                 <!-- Search Button -->  
                                <form class="navbar-form navbar-left">
                                    <div class = "input-group">
                                        <input type = "text" class =" form-control" placeholder="Search here..">
                                        <span class = "input-group-addon" style="cursor:pointer;"><i class="glyphicon glyphicon-search"></i></span>
                                    </div>
                                </form>
                                 <!-- ./Search Button -->
                          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div><!--/.navbar-collapse -->
                  </div>
                </nav>
                            <div class="col-md-12">
                                <canvas id="myChart" width="1500" height="400"></canvas>
                            </div>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

</body>
</html>