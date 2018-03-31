<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                  FORECASTING REGRESI LINIER SEDERHANA
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('forecasting')}}">
                        <i class="pe-7s-user"></i>
                        <p>Forecasting</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('forecasting/create')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Input Data</p>
                    </a>
                </li>
                 <li>
                    <a href="{{url('jenis_tanaman/create')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Input Data tanaman</p>
                    </a>
                </li>
                 <li>
                    <a href="{{url('jenis_ph/create')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Input Data pH tanaman</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>