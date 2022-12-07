  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
  <body>
<?php
include 'html/db.php';

if(!isset($Usuario))
{
	header("location: Index.php");
}
              $unou = $mysqli->query("SELECT usuarios.nombre FROM usuarios WHERE IdUser=1;");
			  $uno = mysqli_fetch_array($unou);	  
              $dosu = $mysqli->query("SELECT usuarios.nombre FROM usuarios WHERE IdUser=2;");
			  $dos = mysqli_fetch_array($dosu);	  
              $tresu = $mysqli->query("SELECT usuarios.nombre FROM usuarios WHERE IdUser=3;");
			  $tres = mysqli_fetch_array($tresu);	

              $u = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-0 AND IdUserV=1;");
			  $fu = mysqli_fetch_array($u);	  
              $d = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-1 AND IdUserV=1;");
			  $fd = mysqli_fetch_array($d);	  
              $t = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-2 AND IdUserV=1;");
			  $ft = mysqli_fetch_array($t);	  
              $c = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-3 AND IdUserV=1;");
			  $fc = mysqli_fetch_array($c);	  
              $ci = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-4 AND IdUserV=1;");
			  $fci = mysqli_fetch_array($ci);	  
              $s = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-5 AND IdUserV=1;");
			  $fs = mysqli_fetch_array($s);	 
	  
              $ud = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-0 AND IdUserV=2;");
			  $fud = mysqli_fetch_array($ud);	  
              $dd = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-1 AND IdUserV=2;");
			  $fdd = mysqli_fetch_array($dd);	  
              $td = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-2 AND IdUserV=2;");
			  $ftd = mysqli_fetch_array($td);	  
              $cd = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-3 AND IdUserV=2;");
			  $fcd = mysqli_fetch_array($cd);	  
              $cid = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-4 AND IdUserV=2;");
			  $fcid = mysqli_fetch_array($cid);	  
              $sd = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-5 AND IdUserV=2;");
			  $fsd = mysqli_fetch_array($sd);	
	  
              $udt = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-0 AND IdUserV=3;");
			  $fudt = mysqli_fetch_array($udt);	  
              $ddt = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-1 AND IdUserV=3;");
			  $fddt = mysqli_fetch_array($ddt);	  
              $tdt = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-2 AND IdUserV=3;");
			  $ftdt = mysqli_fetch_array($tdt);	  
              $cdt = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-3 AND IdUserV=3;");
			  $fcdt = mysqli_fetch_array($cdt);	  
              $cidt = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-4 AND IdUserV=3;");
			  $fcidt = mysqli_fetch_array($cidt);	  
              $sdt = $mysqli->query("SELECT SUM(ValorTotal) as ValorTotal FROM ventas WHERE Fecha = CURRENT_DATE()-5 AND IdUserV=3;");
			  $fsdt = mysqli_fetch_array($sdt);	 

	  
              $cu = $mysqli->query("SELECT SUM(Cantidad) as Cantidad FROM ventas WHERE Fecha = CURRENT_DATE() AND IdUserV=1;");
			  $cut = mysqli_fetch_array($cu);	
	          $cad = $mysqli->query("SELECT SUM(Cantidad) as Cantidad FROM ventas WHERE Fecha = CURRENT_DATE() AND IdUserV=2;");
			  $cadt = mysqli_fetch_array($cad);
              $ct = $mysqli->query("SELECT SUM(Cantidad) as Cantidad FROM ventas WHERE Fecha = CURRENT_DATE() AND IdUserV=3;");
			  $ctt = mysqli_fetch_array($ct);
	  

?>    
<div class="container">
<h2>Ventas Ultimos 8 Dias En Saldo Total Vendido X Usuario</h2>
      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </body>
  
  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "-5 Dias",
          "-4 Dias",
          "Trasanteayer",
          "Anteayer",
          "Ayer",
          "Hoy",
        ],
        datasets: [
          {
            label: "<?php echo"$uno[nombre]"; ?>",
            data: [<?php echo"$fs[ValorTotal]"; ?>, <?php echo"$fci[ValorTotal]"; ?>, <?php echo"$fc[ValorTotal]"; ?>, <?php echo"$ft[ValorTotal]"; ?>, <?php echo"$fd[ValorTotal]"; ?>, <?php echo"$fu[ValorTotal]"; ?>],
            backgroundColor: "rgba(153,205,1,0.6)",
          },
          {
            label: "<?php echo"$dos[nombre]"; ?>",
            data: [<?php echo"$fsd[ValorTotal]"; ?>, <?php echo"$fcid[ValorTotal]"; ?>, <?php echo"$fcd[ValorTotal]"; ?>, <?php echo"$ftd[ValorTotal]"; ?>, <?php echo"$fdd[ValorTotal]"; ?>, <?php echo"$fud[ValorTotal]"; ?>],
            backgroundColor: "rgba(155,153,10,0.6)",
          },
          {
            label: "<?php echo"$tres[nombre]"; ?>",
            data: [<?php echo"$fsdt[ValorTotal]"; ?>, <?php echo"$fcidt[ValorTotal]"; ?>, <?php echo"$fcdt[ValorTotal]"; ?>, <?php echo"$ftdt[ValorTotal]"; ?>, <?php echo"$fddt[ValorTotal]"; ?>, <?php echo"$fudt[ValorTotal]"; ?>],
            backgroundColor: "rgba(13,252,8,0.6)",
          },
        ],
      },
    });
  </script>

  <script src="https://d3js.org/d3.v4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
  
  <style>

    h2 {
      text-align: center;
      font-family: "Verdana", sans-serif;
      font-size: 40px;
	  color: green;
    }
  </style>
  <body>
    <div class="col-xs-12 text-center">
      <h2><p><br></p>Ventas Hoy En Numero De Unidades Vendidas</h2>
    </div>
    <div id="donut-chart"></div>  
    <script>
      var chart = bb.generate({
        data: {
          columns: [
            ["<?php echo"$uno[nombre] $cut[Cantidad]"; ?>", <?php echo"$cut[Cantidad]"; ?>],
            ["<?php echo"$dos[nombre] $cadt[Cantidad]"; ?>", <?php echo"$cadt[Cantidad]"; ?>],
            ["<?php echo"$tres[nombre] $ctt[Cantidad]"; ?>", <?php echo"$ctt[Cantidad]"; ?>],
          ],
          type: "donut",
          onclick: function (d, i) {
            console.log("onclick", d, i);
          },
          onover: function (d, i) {
            console.log("onover", d, i);
          },
          onout: function (d, i) {
            console.log("onout", d, i);
          },
        },
        donut: {
          title: "Ventas",
        },
        bindto: "#donut-chart",
      });
    </script>
  </body>



