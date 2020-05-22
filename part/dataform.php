  <?php    
   $sql = "SELECT * FROM `control_nav` where id_nav='$id'";
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
        <li class="breadcrumb-item"><a href="./?menu=<?php echo $id ?>"><?php echo "$nav_name"; ?></a>
        </li>
        <li class="breadcrumb-item active">Editor</li>
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
          <i class="fa fa-pencil"></i> <?php echo "<b>Edit $nav_name</b>"; ?></div>
        <div class="card-body">

          <form method="POST" action="./action/add_data.php">

           <?php
              $sql = "SELECT COLUMN_NAME,DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='db_admincreator' and TABLE_NAME='$tabel_name'";
              $qry = $mysqli->query($sql);
              $i=0;$count=0;
              while($datar = $qry->fetch_array()){
              switch ($datar['DATA_TYPE']) {
              case 'int':
                $finput='input';
                $type='number';
                $finputend='';
                break;
              case 'float':
                $finput='input';
                $type='number';
                $finputend='';
                break;              
              case 'date':
                $finput='input';
                $type='date';
                $finputend='';
                break;
              case 'datetime':
                $finput='input';
                $type='date';
                $finputend='';
                break;
              case 'text':
                $finput='textarea';
                $type='';
                $finputend='</textarea>';
                break;
              case 'time':
                $finput='input';
                $type='time';
                $finputend='';
                break;
              case 'boolean':
                $finput='input';
                $type='checkbox';
                $finputend='';
                break;
              case 'tinyint':
                $finput='input';
                $type='checkbox';
                $finputend='';
                break;
              default:
                $finput='input';
                $type='text';
                $finputend='';
                break;
            }
              echo "
              <div class='form-group'>
              <label for='forminput$count'>".$datar[0]."</label>
              <$finput id='forminput$count' name='form_data[".$count."]' class='form-control' type='$type' >$finputend
              </div>
              ";
              $count++;
            } ?>
            <input type="text" hidden name="jumlah" value="<?php echo($count);?>">
            <input type="text" hidden name="tabel_name" value="<?php echo($tabel_name);?>">
            <input type="text" hidden name="idm" value="<?php echo($id);?>">
            <div align="right">
              <a class="btn btn-info" href="./?menu=<?php echo $id; ?>">Cancel</a>
              <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>

            </form>

        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
 
