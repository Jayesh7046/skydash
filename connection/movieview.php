<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Movies</p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>name</th>
                    <th>discription</th>
                    <th>relis date</th>
                    <th>laguage</th>
                    <th>price per ticket</th>
                    <th>photo</th>
                    <th>category</th>
                  </tr>
                </thead>
                <?php
                foreach ($rows as $r) {
                ?>
                  <tbody>
                    <tr>
                      <td><?= $r['Name'] ?></td>
                      <td><?= $r['Discription'] ?></td>
                      <td><?= $r['Relese_Date'] ?></td>
                      <td><?= $r['Language'] ?></td>
                      <td><?= $r['Price_Per_T'] ?></td>
                      <td><?= $r['Photo'] ?></td>
                      <td><?= $r['Category'] ?></td>
                    </tr>
                  </tbody>
                <?php
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>