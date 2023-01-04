<?php

include_once("../head.php");
include_once("../../connection/connect.php");
$query = "SELECT * FROM `movies`";
$result = $connection->query($query);
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<body>

  <div class="container-scroller">
    <?php include_once("../navbar.php"); ?>
    <div class="container-fluid page-body-wrapper">
      <?php include_once("../sidebar.php"); ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal Two column</h4>
                  <form class="form-sample" action="../../connection/movieinsert.php" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Movie Name </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="moviename" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="category" required >
                              <option></option>
                              <option>Hollywood</option>
                              <option>Bollywood</option>
                              <option>Tollywood</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Discription</label>
                          <div class="col-sm-9">
                            <textarea name="discription" cols="50" rows="5" class="form-control" required ></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Photo</label>
                          <div class="col-sm-9">
                            <input type="file" accept="image/png, image/jpeg" class="form-control" name="photo" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Relese Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="relesedate" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Price Per Ticket</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="ppticket" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Language</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="language" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="center">
                      <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php include_once("../../connection/movieview.php"); ?>
        </div>
      </div>
    </div>
  </div>
  <?php include_once("../script.php"); ?>

</body>
</html>