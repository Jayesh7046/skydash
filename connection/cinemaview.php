<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">cinemas</p>
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
                      <td><?= $r['1'] ?></td>
                      <td><?= $r['2'] ?></td>
                      <td><?= $r['3'] ?></td>
                      <td><?= $r['4'] ?></td>
                      <td><?= $r['5'] ?></td>
                      <td><?= $r['6'] ?></td>
                      <td><?= $r['7'] ?></td>
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