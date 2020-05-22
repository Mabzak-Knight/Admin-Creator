
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Navigation</li>
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
          <i class="fa fa-table"></i> Existing Navigation</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="100px">Date</th>
                  <th>Name</th>
                  <th>Database</th>
                  <th width="50px">Count</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Database</th>
                  <th>Count</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php 
                $sql = "SELECT * FROM `control_nav`";
                $qry = $mysqli->query($sql);
                while($data = $qry->fetch_array()){
                extract($data);
                $date=mb_substr($date, 0,11);
                ?>
                <tr>
                  <td><?php echo "$date"; ?></td>
                  <td><?php echo "<i class='fa $icon'></i> $name_nav"; ?></td>
                  <td><?php echo "$name_tabel"; ?></td>
                  <td><?php echo "$count_tabel"; ?></td>
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
 
