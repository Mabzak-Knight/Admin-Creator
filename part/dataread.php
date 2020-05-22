  <?php
   $sql = "SELECT * FROM `control_nav` where id_nav='$menu'";
   $qry = $mysqli->query($sql);
   while($datan = $qry->fetch_array()){    
   $nav_name=$datan['name_nav'];
   $tabel_name=$datan['name_tabel'];
   //$count=$datan['count_tabel'];
   $icon=$datan['icon'];
   }
  ?>

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo "$nav_name"; ?></li>
      </ol>
      <!-- Area Chart Example-->

      <div hidden>
         <canvas id="myAreaChart" hidden></canvas>
         <canvas id="myPieChart" hidden></canvas>
         <canvas id="myBarChart" hidden></canvas>
      </div>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa <?php echo $icon; ?>"></i> <?php echo "<b>$nav_name</b> <small>Use database <i>$tabel_name</i></small>"; ?></div>
        <div class="card-body">
          <div class="pt-0 pb-3" align="right">
               <a href="?menu=formdata&id=<?php echo $menu; ?>" class="btn btn-primary">+ New Data</a>
          </div>
          <div class="table-responsive pt-2 pb-2 pr-0 pl-0" style="border: 1px solid #ddd;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <?php
                  $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='db_admincreator' and TABLE_NAME='$tabel_name'";
                  $qry = $mysqli->query($sql);
                  $i=0;$count=0;
                  while($datar = $qry->fetch_array()){
                  echo "<th>".$datar[0]."</th>";
                  $count++;
                 } ?>
                 <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $sql = "SELECT * FROM `$tabel_name`";
                $qry = $mysqli->query($sql);
                while($data = $qry->fetch_array()){
                ?>
                <tr>
                  <?php
                  for ($i=0; $i < $count; $i++) {                      
                    echo "<td>".$data[$i]."</td>";
                   } 
                  ?>
                  <td></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
 
