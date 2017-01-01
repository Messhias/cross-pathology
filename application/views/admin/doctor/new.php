<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>New doctor</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Add new <small> doctor</small></h2>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">
              <br />
              <form id="frmNewDoctor" name='frmNewDoctor' method="post" action="<?=site_url('ajax/doctor/addDoctor'); ?>" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name: <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name='name' placeholder="NAME " required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="crm">CMR: <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type='text' name='crm' id='crm' class="form-control col-md-7 col-xs-12" placeholder="CMR">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" id='btnSubmitNewBranch' class="btn btn-success submit">Add</button>
                    <button type="reset" class="btn btn-primary">Clean</button>
                  </div>
                </div>

              </form>
            </div>
            <h3 id='information'></h3>
          </div>
        </div>
      </div>

  </div>
</div>
<!-- /page content -->