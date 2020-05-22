
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Navigation</li>
      </ol>
      <!-- Icon Cards-->
      <div class="card">
        <div class="card-header">
          <i class="fa fa-pencil"></i> Create Navigation for Tables
        </div>
        <div class="card-body">
          <form method="POST" action="./action/add_tabel.php">
              <div class="form-row">
              <div class="form-group col-sm-8">
              <label>Navigation Name:</label>
                <input name="name_nav" type="text" class="form-control" placeholder="Navigation Name" required>
              </div>
              <div class="form-group col-12" for="icon">
                 <label>Icon:</label>
                 <div class="card p-3">

                  <div class="row mr-4">
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-users" type="radio" id="customRadio1" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1"><i class="fa fa-users"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-envelope-o" type="radio" id="customRadio2" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2"><i class="fa fa-envelope-o"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-tags" type="radio" id="customRadio3" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3"><i class="fa fa-tags"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-pencil-square-o" type="radio" id="customRadio4" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4"><i class="fa fa-pencil-square-o"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-file" type="radio" id="customRadio5" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio5"><i class="fa fa-file"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-database" type="radio" id="customRadio6" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio6"><i class="fa fa-database"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-bar-chart" type="radio" id="customRadio7" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio7"><i class="fa fa-bar-chart"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-table" type="radio" id="customRadio8" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio8"><i class="fa fa-table"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-newspaper-o" type="radio" id="customRadio9" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio9"><i class="fa fa-newspaper-o"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-shopping-cart" type="radio" id="customRadio10" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio10"><i class="fa fa-shopping-cart"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-folder" type="radio" id="customRadio11" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio11"><i class="fa fa-folder"></i></label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="custom-control custom-radio">
                        <input value="fa-th" type="radio" id="customRadio12" name="icon" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio12"><i class="fa fa-th"></i></label>
                      </div>
                    </div>
                  </div>

                 </div>
              </div>
              <div class="form-group col-sm-8">
              <label>Table Name:</label>
                <input name="name_tabel" type="text" class="form-control" placeholder="Table Name" required>
              </div>
              <div class="form-group col">
             <label>Number of Coloums:</label>
                <input name="count_tabel" type="number" class="form-control" placeholder="Number of Columns" required>
              </div>
            </div>
            <div align="right">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>

      </div>
 
