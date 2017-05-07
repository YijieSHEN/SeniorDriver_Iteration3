<div style="padding-top:100px; padding-left: 5%; padding-right: 5%">

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


<div class="container marketing">
      <div class="row">
        <div class="span4">
               <h4 class="text-center" style="background-color: #DCDCDC; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;">Postcode: <?php echo $postcode; ?></h4>
        </div>
        <div class="span4">
               <h4 class="text-center" style="background-color: #DCDCDC; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;">Total Crashes: <span class="totalresult"><?php echo $result_row; ?></span></h4>
        </div>
        <div class="span4">
               <h4 class="text-center" style="background-color: #DCDCDC; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;"> Year: <?php echo $period; ?></h4>
        </div>
      </div>
   </div>
<br/>

<div class="container marketing">
      <div class="row">
        <div class="span6">
               <p class="text-center" style="background-color: #DCDCDC; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;"><a class="btn btn-info" href="<?php echo base_url($details_link); ?>">Details &raquo;</a></p>
        </div>
        <div class="span6">
               <p class="text-center" style="background-color: #DCDCDC; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;"><a class="btn btn-danger" href="<?php echo base_url($map_link); ?>">Heatmap &raquo;</a></p>
        </div>
      </div>
   </div>
<br/>

<div class="container marketing" >
      <div class="row">
        <div class="span6" style="background-color: #F5F5F5; padding-top: 10px; padding-bottom: 10px; border-radius: 5px;">
          <div class="numberCircle count"><span class="count"><?php echo $query_one; ?></span></div>
          <h2 class="text-center"><?php echo $postcode; ?> vs Victoria</h2>
          <p class="text-center">More(+) / Less(-) than the average Victoria suburb</p>
        </div>
        <div class="span6" style="background-color: #F5F5F5; padding-top: 10px; padding-bottom: 10px; border-radius: 5px;">
          <div class="numberCircle text-center"><span class="count"><?php echo $query_two; ?></span></div>
          <h2 class="text-center">Last year vs This year</h2>
          <p class="text-center">Compares the crash data for last year with the current year.</p>
        </div>
      </div>
</div>
<br/>

<?php
     echo "<script type='text/javascript'>\n";
     echo "var query_four_label = []" . "\n";
     echo "var query_four_value = []" . "\n";
     foreach ($query_four as $value){
        echo "query_four_label.push(". json_encode($value->Speed_Zone). ")\n"; // access attributes
        echo "query_four_value.push(". json_encode($value->num_accidents). ")\n"; // access attributes
     }
     echo "</script>\n";
?>

<?php
     echo "<script type='text/javascript'>\n";
     echo "var query_five_label = []" . "\n";
     echo "var query_five_value = []" . "\n";
     foreach ($query_five as $value){
        echo "query_five_label.push(". json_encode($value->Day_Week_Desc). ")\n"; // access attributes
        echo "query_five_value.push(". json_encode($value->num_accidents). ")\n"; // access attributes
     }
     echo "</script>\n";
?>

<?php
     echo "<script type='text/javascript'>\n";
     echo "var query_six_label = []" . "\n";
     echo "var query_six_value = []" . "\n";
     foreach ($query_six as $value){
        echo "query_six_label.push(". json_encode($value->Road_Geometry). ")\n"; // access attributes
        echo "query_six_value.push(". json_encode($value->num_accidents). ")\n"; // access attributes
     }
     echo "</script>\n";
?>

<?php
     echo "<script type='text/javascript'>\n";
     echo "var query_three_label = []" . "\n";
     echo "var query_three_value = []" . "\n";
     foreach ($query_three as $value){
        echo "query_three_label.push(". json_encode($value->period). ")\n"; // access attributes
        echo "query_three_value.push(". json_encode($value->num_accidents). ")\n"; // access attributes
     }
     echo "</script>\n";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

<div class="container marketing">
      <div class="row">
        <div class="span6" style="background-color: #F5F5F5; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;">
          <canvas id="query_three"></canvas>
          <h2 class="text-center">Hourly Break Down</h2>
          <p class="text-center">Number of crashes happened in 24hrs</p>
        </div>
        <div class="span6" style="background-color: #F5F5F5; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;">
          <canvas id="query_four"></canvas>
          <h2 class="text-center">Speed Zone</h2>
          <p class="text-center">Number of crashes happened in different speed zones.</p>
        </div>
      </div>
   </div>

<br/>

<div class="container marketing">
      <div class="row">
        <div class="span6" style="background-color: #F5F5F5; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;">
          <canvas id="query_five"></canvas>
          <h2 class="text-center">Day of Week</h2>
          <p class="text-center">Proportion of crashes happened in each day of week</p>
        </div>
        <div class="span6" style="background-color: #F5F5F5; padding-top: 15px; padding-bottom: 15px; border-radius: 5px;">
          <canvas id="query_six"></canvas>
          <h2 class="text-center">Road Geometry</h2>
          <p class="text-center">Proportion of crashes happened in different types of intersections.</p>
        </div>
      </div>
   </div>
<br/>

<script type="text/javascript">
     //alert(php_variables.sheetID);
     var ctx = document.getElementById('query_four').getContext('2d');
     var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
               labels: query_four_label,
               datasets: [{
                    label: 'Number of Accidents: ',
                    data: query_four_value,
                    backgroundColor: [
                         "#2ecc71",
                         "#3498db",
                         "#95a5a6",
                         "#9b59b6",
                         "#f1c40f",
                         "#e74c3c",
                         "#34495e"
                    ]
               }]
          }
     });
</script>

<script type="text/javascript">
     //alert(php_variables.sheetID);
     var ctx = document.getElementById('query_five').getContext('2d');
     var myChart = new Chart(ctx, {
          type: 'polarArea',
          data: {
               labels: query_five_label,
               datasets: [{
                    label: 'Day Week Desc: ',
                    data: query_five_value,
                    backgroundColor: [
                         "#2ecc71",
                         "#3498db",
                         "#95a5a6",
                         "#9b59b6",
                         "#f1c40f",
                         "#e74c3c",
                         "#34495e"
                    ]
               }]
          }
     });
</script>

<script type="text/javascript">
     //alert(php_variables.sheetID);
     var ctx = document.getElementById('query_six').getContext('2d');
     var myChart = new Chart(ctx, {
          type: 'pie',
          data: {
               labels: query_six_label,
               datasets: [{
                    label: 'Number of Accidents: ',
                    data: query_six_value,
                    backgroundColor: [
                         "#2ecc71",
                         "#3498db",
                         "#95a5a6",
                         "#9b59b6",
                         "#f1c40f",
                         "#e74c3c",
                         "#34495e"
                    ]
               }]
          }
     });
</script>

<script type="text/javascript">
     //alert(php_variables.sheetID);
     var ctx = document.getElementById('query_three').getContext('2d');
     var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
               labels: query_three_label,
               datasets: [{
                    label: 'Number of Accidents: ',
                    data: query_three_value,
                    backgroundColor: [
                         "#2ecc71",
                         "#3498db",
                         "#95a5a6",
                         "#9b59b6",
                         "#f1c40f",
                         "#e74c3c",
                         "#34495e"
                    ]
               }]
          }
     });
</script>

<script type="text/javascript">
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1000,
        easing: 'swing',
        step: function (now) {

          console.log($(this).text().replace(/[^\d.-]/g, ''));
          if($(this).text().replace(/[^\d.-]/g, '') > 0){
                $(this).text('+'+Math.ceil(now)+'%');
          }
          else{
                $(this).text(Math.ceil(now)+'%');
          }
        }
    });
});
</script>

<script type="text/javascript">
$('.totalresult').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>

<!--<table border="1" class="table table-responsive">
          <tr>
               <td>
                    ACCIDENT_NO
               </td>
               <td>
                    lga_name
               </td>
               <td>
                    Age
               </td>
               <td>
                    Sex
               </td>
               <td>
                    Accident_Date
               </td>
               <td>
                    Day_Week_Desc
               </td>
          </tr>
          <?php foreach ($accident_list as $key) {?>
               <tr>
               <td>
                    <?php echo $key->ACCIDENT_NO; ?>
               </td>
               <td>
                    <?php echo $key->lga_name; ?>
               </td>
               <td>
                    <?php echo $key->Age; ?>
               </td>
               <td>
                    <?php echo $key->Sex; ?>
               </td>
               <td>
                    <?php echo $key->Accident_Date; ?>
               </td>
               <td>
                    <?php echo $key->Day_Week_Desc; ?>
               </td>
               </tr>
          <?php }?>
     </table>-->



</div>

