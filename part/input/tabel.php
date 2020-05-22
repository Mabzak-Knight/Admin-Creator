
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Table</li>
      </ol>
      <!-- Icon Cards-->
      <div class="card">
        <div class="card-header">
          <i class="fa fa-pencil"></i> Create Table
        </div>
        <div class="card-body">
          <form method="POST" action="./action/add_database.php">
              <div class="form-row">
              <div class="form-group col-sm-12">
              <label>Table Name:</label>
                <input type="text" class="form-control" placeholder="Navigation Name" value="<?php echo($tbl); ?>" readonly>
              </div>
            </div>

            <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <tr>

              <td width="250px">
              <label>ColumnsName:</label>
              </td>

              <td width="200px">
                <label>DataType:</label>
              </td>

              <td width="150px">
              <label>Length/Values:</label>
              </td>

              <td width="200px">
                <label>Index:</label>
              </td>

               <td  width="250px">
                <label>AI:</label>
              </td>

            </tr>

              <?php
              $sql = "SELECT count_tabel FROM `control_nav` where name_tabel='$tbl'";
              $qry = $mysqli->query($sql);
              while($data = $qry->fetch_array()){
                $ct=$data['count_tabel'];
              }
              for ($i=0; $i < $ct; $i++) { 
              ?>
              <tr>

              <td width="250px">
                <input id="colum<?php echo $i; ?>" type="text" class="form-control" oninput="code('<?php echo $i; ?>')" placeholder="Columns Name" required>
              </td>

              <td width="200px">
                <select onchange="code('<?php echo $i; ?>')" id="type<?php echo $i; ?>" class="custom-select">
                  <option value="int" selected>INT</option>
                  <option value="varchar">VARCHAR</option>
                  <option value="text">TEXT</option>
                  <option value="date">DATE</option>
                  <option value="datetime">DATETIME</option>
                  <option value="3">TIME</option>
                  <option value="float">FLOAT</option>
                  <option value="3">BOOLEAN</option>
                  <option value="tinyint">TINYINT</option>
                </select>
              </td>

              <td width="150px">
                <input oninput="code('<?php echo $i; ?>')" id='countype<?php echo $i; ?>' type="number" class="form-control" value="11" placeholder="" required>
              </td>

              <td width="200px">
                <select oninput="cekindex('<?php echo $i; ?>')" onchange="code('<?php echo $i; ?>')" id="index<?php echo $i; ?>" class="custom-select">
                  <option selected>---</option>
                  <option value="primary">PRIMARY</option>
                </select>
              </td>

               <td>
                <div class="form-check">
                  <div class="custom-control custom-checkbox">
                  <input oninput="cekai('<?php echo $i; ?>')" onchange="code('<?php echo $i; ?>')" type="checkbox" class="custom-control-input" id="ai<?php echo $i; ?>">
                  <label class="custom-control-label" for="ai<?php echo $i; ?>">AUTO INCRENENT</label>
                </div>
                </div>
              </td>

            </tr>
            <?php } ?>

            </table>
            </div>

            <input type="text" hidden readonly name="count" value="<?php echo($ct); ?>">

            <script type="text/javascript">
              var begin='SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\nSET AUTOCOMMIT = 0;\nSTART TRANSACTION;\nSET time_zone = "+00:00";\n\n';
              var start="CREATE TABLE `<?php echo($nbase); ?>`.`<?php echo($tbl); ?>` (";
              var data= [<?php  for ($i=0; $i < ($ct-1); $i++) { echo '"",'; }?> ""];              
              var end="\n) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
              var indexs="";
              var ai="";
              var count=[<?php  for ($i=0; $i < ($ct-1); $i++) { echo '"(11)",'; }?> ""]; 

              function cekcount(x){
                switch (document.getElementById('type'+x).value){
                  case "int":
                    count[x]='('+document.getElementById('countype'+x).value+')';
                  break;
                  case "varchar":
                    count[x]='('+document.getElementById('countype'+x).value+')';
                  break;
                  case "tinyint":
                    count[x]='('+document.getElementById('countype'+x).value+')';
                  break;
                  default:
                     count[x]='';
                }
              }

              function cekindex(x){
              if (document.getElementById('index'+x).value=='primary'){

                  <?php for ($i=0; $i < ($ct-1); $i++){
                  echo "document.getElementById('index'+ $i).value='---';";
                 } ?>

              document.getElementById('index'+x).value='primary';
              indexs=", PRIMARY KEY (`"+document.getElementById('colum'+x).value+"`)";
              }
              else{
              indexs="";
              }
              }

              function cekai(x){    
              if (document.getElementById('ai'+x).checked==true){

                 <?php for ($i=0; $i < ($ct-1); $i++){
                 // echo "document.getElementById('ai'+ $i).checked=0;";
                 } ?>

              document.getElementById('ai'+x).checked=true;
              //ai="\n\nALTER TABLE `<?php echo($nbase); ?>`.`<?php echo($tbl); ?>`\nMODIFY `"+document.getElementById('colum'+x).value+"` "+document.getElementById('type'+x).value+count[x]+" NOT NULL AUTO_INCREMENT;";
              }
              else{
              ai="";
              }
              }

              function code(x) {
              cekcount(x);
              if (document.getElementById('ai'+x).checked==true){
                ai="AUTO_INCREMENT";
              }else{
              ai="";
              }
              data[x]="\n`"+document.getElementById('colum'+x).value+"` "+document.getElementById('type'+x).value+count[x]+' NOT NULL '+ai;              
              if (document.getElementById('index'+x).value=='primary'){
                indexs=", PRIMARY KEY (`"+document.getElementById('colum'+x).value+"`)";
              }
              cekout()
              }

              function cekout(){                
              document.getElementById("script").value=start+data+indexs+end;
              }
            </script>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <textarea name="sqlcode" id='script' style="width: 100%; height: 200px; background-color: #ddd;" readonly></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card p-3 mb-4">
             
            </div>
       
            <div align="right">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Preview Sql</button>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>

      </div>
 
