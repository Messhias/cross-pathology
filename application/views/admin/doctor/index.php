<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>All doctors </h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Doctors</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- <p class="text-muted font-13 m-b-30">
              DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
            </p> -->
            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>CMR</th>
                  <th>Active</th>
                </tr>
              </thead>


              <tbody>
                <?php if ($doctors['num_rows'] > 0): ?>
                  <?php foreach ($doctors['results'] as $key => $value): ?>
                    <tr>
                      <td><?=$value->cd_doctor ?></td>
                      <td><?=$value->nm_doctor ?></td>
                      <td><?=$value->cd_id_doctor ?></td>
                      <td id='ActiveStatus'><?php if ($value->ic_active): ?>
                        Yes
                      <?php else: ?>
                        No
                      <?php endif ?>
                      </td>
                    </tr>
                  <?php endforeach ?>
                <?php else: ?>
                  <tr>
                    <td colspan="5">
                      <center>
                        NENHUM RAMO CADASTRADO
                      </center>
                    </td>
                  </tr>
                <?php endif ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content