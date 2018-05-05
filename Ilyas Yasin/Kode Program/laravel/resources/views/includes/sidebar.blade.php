<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="asset3/img/intro-bg.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/forecasting/create')}}" class="simple-text">
                  SIMPLE LINIAR REGRESSION FORECASTING
                </a>
            </div>

            <ul class="nav">
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
                        <p>Input Data Plant</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('charts')}}">
                        <i class="pe-7s-note2"></i>
                        <p>statistics</p>
                    </a>
                </li>
                <li>
                <a href="{{url('rumus')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Formula (Rumus)</p>
                    </a>
                </li>
                <li>
                    
                <a href="{{url('/')}}">
                        <i class="pe-7s-note2"></i>
                        <p onclick="myFunction()">Keluar</p>
                    </a>

                </li>
            </ul>
    	</div>
    </div>

<script>
function myFunction() {
    alert("Keluar dari Aplikasi");
}
</script>