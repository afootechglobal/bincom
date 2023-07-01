<?php include 'config.php';?>

<?php $action=$_GET['action'];?>


<?php if($action=='get_panel'){
      $page=$_POST['page'];
      require_once('page-content.php');
}
?>
<?php if($action=='pie'){
	$pie=$_POST['pie'];

if($pie==''){?>
      <div id="chartContainer1" style="width:100%; height:200px; margin:auto;"></div>
      
      <script type="text/javascript">
      var options = {
      title: {
      text: "" /*My Performance*/
      },
      data: [{
      type: "pie",
      startAngle: 45,
      showInLegend: "False",
      legendText: "{label}",
      indexLabel: "{label} ({y})",
      yValueFormatString:"#,##0.#"%"",
      dataPoints: [
    
      { label: "PDP", y: 0},
      { label: "APC", y: 0},
      { label: "LP", y: 0},
      { label: "ANPP", y: 0},
      { label: "ADC", y: 0},
      ]
      }]
      };
      $("#chartContainer1").CanvasJSChart(options);
      </script>

<?php }else{?>
      <div id="chartContainer1" style="width:100%; height:200px; margin:auto;"></div>
      
      <script type="text/javascript">
      var options = {
      title: {
      text: "" /*My Performance*/
      },
      data: [{
      type: "pie",
      startAngle: 45,
      showInLegend: "False",
      legendText: "{label}",
      indexLabel: "{label} ({y})",
      yValueFormatString:"#,##0.#"%"",
      dataPoints: [
      <?php echo $pie;?>
      /*{ label: "PDP", y: 120},
      { label: "APC", y: 45},
      { label: "LP", y: 57},
      { label: "ANPP", y: 62},
      { label: "ADC", y: 50},*/
      ]
      }]
      };
      $("#chartContainer1").CanvasJSChart(options);
      </script>

<?php } }?>











<?php if($action=='bar'){
	$bar=$_POST['bar'];

if ($bar==''){ ?>

      <div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>
            <script>
            $(document).ready(function() {


            var chart = new CanvasJS.Chart("chartContainer", {
                  theme: "light1", // "light2", "dark1", "dark2"
                  animationEnabled: false, // change to true		
                  title:{
                        text: "Result Matrix"
                  },
                  data: [
                  {
                        type: "column",
                        dataPoints: [
                             
                        { label: "PDP", y: 0},
                        { label: "APC", y: 0},
                        { label: "LP", y: 0},
                        { label: "ANPP", y: 0},
                        { label: "ADC", y: 0},
                        ]
                  }
                  ]
            });
            chart.render();


            })

            </script>
<?php } else{?>
            
      <div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>
            <script>
            $(document).ready(function() {


            var chart = new CanvasJS.Chart("chartContainer", {
                  theme: "light1", // "light2", "dark1", "dark2"
                  animationEnabled: false, // change to true		
                  title:{
                        text: "Result Matrix"
                  },
                  data: [
                  {
                        type: "column",
                        dataPoints: [
                        <?php echo $bar;?>
                              /*{ label: "apple",  y: 10  },
                              { label: "orange", y: 15  },
                              { label: "banana", y: 25  },
                              { label: "mango",  y: 30  },
                              { label: "grape",  y: 28  }*/
                        ]
                  }
                  ]
            });
            chart.render();


            })

            </script>



<?php }}?>