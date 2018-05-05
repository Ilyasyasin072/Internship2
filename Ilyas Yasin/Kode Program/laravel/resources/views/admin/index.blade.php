<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Hydroponics Asssitant</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS     -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- Animation library for notifications   -->

{{ HTML::style('assets/css/animate.min.css') }}
    <!--  Light Bootstrap Table core CSS    -->
{{ HTML::style('assets/css/light-bootstrap-dashboard.css') }}

    <!--  CSS for Demo Purpose, don't include it in your project     -->

{{ HTML::style('assets/css/demo.css') }}

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/pe-icon-7-stroke.css') }}

</head>
<body>

@include('includes.sidebar')
    @include('includes.navbar')
    
  <div id="content" class="pmd-content content-area dashboard">
   @yield('content')
</div>
    </div>
     @include('includes.footer')
</div>


</body>

    <!--   Core JS Files   -->
      {{ HTML::script('assets/js/jquery-1.10.2.js') }}
      {{ HTML::script('assets/js/bootstrap.min.js') }}

	<!--  Checkbox, Radio & Switch Plugins -->
  
      {{ HTML::script('assets/js/bootstrap-checkbox-radio-switch.js') }}

	<!--  Charts Plugin -->
	
  {{ HTML::script('assets/js/chartist.min.js') }}
    <!--  Notifications Plugin    -->
   
  {{ HTML::script('assets/js/bootstrap-notify.js') }}
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  {{ HTML::script('assets/js/bootstrap.min.js') }}
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	
  {{ HTML::script('assets/js/light-bootstrap-dashboard.js') }}
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	
  {{ HTML::script('assets/js/demo.js') }}
    {{ HTML::script('assets/js/Chart.min.js') }}
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Forecasting Regresi linier Method</b>-."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
