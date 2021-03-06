<style type="text/css">
  a.nav-link.active {
    border-width: 4px;
    border-bottom: 4px solid #007bff;
  }

  a.nav-link {
    border-radius: 0px !important;
  }

  a.nav-link:not(.active):hover {
    transition: all 0.3s ease-in-out;
    border-bottom: 4px solid #007bff;
  }
</style>
<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>master_tracking/master_tracking_edit_process" method="POST" class="forms-sample">
      <input type="hidden" name="id" value="<?php echo @$shipment['id'] ?>">
      <input type="hidden" name="tracking_no" value="<?php echo @$shipment['tracking_no'] ?>">
      <input type="hidden" name="master_tracking" value="<?php echo $master_tracking ?>">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <hr class="mt-0">
              <p class="m-0 text-center">Master Tracking Number</p>
              <h1 class="font-weight-bold m-0 text-center"><?php echo @$shipment['master_tracking'] ?></h1>
              <hr class="mb-0">
            </div>
          </div>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              
              <br>
              <div class="row clearfix">
                <div class="col-md-6">
                  <h6 class="font-weight-bold">Main Agent</h6>
                  <div class="form-group">
                    <label>Agent Name</label>
                    <input type="text" class="form-control" name="main_agent_name" placeholder="Main Agent Name" value="<?= @$shipment['main_agent_name'] ?>">
                  </div>
                  <div class="form-group">
                    <label>MAWB / MBL</label>
                    <input type="text" class="form-control" name="main_agent_mawb_mbl" placeholder="MAWB / MBL" value="<?= @$shipment['main_agent_mawb_mbl'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Carrier</label>
                    <input type="text" class="form-control" name="main_agent_carrier" placeholder="Carrier" value="<?= @$shipment['main_agent_carrier'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Voyage/Flight No.</label>
                    <input type="text" class="form-control" name="main_agent_voyage_flight_no" placeholder="Voyage/Flight No." value="<?= @$shipment['main_agent_voyage_flight_no'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Voyage/Flight Date</label>
                    <input type="date" class="form-control" name="main_agent_voyage_flight_date" placeholder="Voyage/Flight Date" value="<?= @@$shipment['main_agent_voyage_flight_date'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Port of Loading</label>
                    <input type="text" class="form-control" name="main_agent_port_of_loading" placeholder="Port of Loading" value="<?= @$shipment['main_agent_port_of_loading'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Port of Discharge</label>
                    <input type="text" class="form-control" name="main_agent_port_of_discharge" placeholder="Port of Discharge" value="<?= @$shipment['main_agent_port_of_discharge'] ?>">
                  </div>
                  <!-- <div class="form-group">
                    <label>Cost</label>
                    <input type="number" class="form-control" name="main_agent_cost" placeholder="Cost" value="<?= @@$shipment['main_agent_cost'] ?>">
                  </div> -->
                </div>
                <div class="col-md-6">
                  <h6 class="font-weight-bold">Secondary Agent</h6>
                  <div class="form-group">
                    <label>Agent Name</label>
                    <input type="text" class="form-control" name="secondary_agent_name" placeholder="Secondary Agent Name" value="<?= @$shipment['secondary_agent_name'] ?>">
                  </div>
                  <div class="form-group">
                    <label>MAWB / MBL</label>
                    <input type="text" class="form-control" name="secondary_agent_mawb_mbl" placeholder="MAWB / MBL" value="<?= @$shipment['secondary_agent_mawb_mbl'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Carrier</label>
                    <input type="text" class="form-control" name="secondary_agent_carrier" placeholder="Carrier" value="<?= @$shipment['secondary_agent_carrier'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Voyage/Flight No.</label>
                    <input type="text" class="form-control" name="secondary_agent_voyage_flight_no" placeholder="Voyage/Flight No." value="<?= @$shipment['secondary_agent_voyage_flight_no'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Voyage/Flight Date</label>
                    <input type="date" class="form-control" name="secondary_agent_voyage_flight_date" placeholder="Voyage/Flight No." value="<?= @@$shipment['secondary_agent_voyage_flight_date'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Port of Loading</label>
                    <input type="text" class="form-control" name="secondary_agent_port_of_loading" placeholder="Port of Loading" value="<?= @$shipment['secondary_agent_port_of_loading'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Port of Discharge</label>
                    <input type="text" class="form-control" name="secondary_agent_port_of_discharge" placeholder="Port of Discharge" value="<?= @$shipment['secondary_agent_port_of_discharge'] ?>">
                  </div>
                  <!-- <div class="form-group">
                    <label>Cost</label>
                    <input type="number" class="form-control" name="secondary_agent_cost" placeholder="Cost" value="<?= @@$shipment['secondary_agent_cost'] ?>">
                  </div> -->
                </div>
              </div>
              <br>
              <h6 class="font-weight-bold border-bottom mb-3">Shipper Information Detail</h6>
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Container No</label>
                    <input type="text" class="form-control" name="container_no" placeholder="Container No." value="<?= @$shipment['container_no'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Seal No.</label>
                    <input type="text" class="form-control" name="seal_no" placeholder="Seal No." value="<?= @$shipment['seal_no'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>CIPL No.</label>
                    <input type="text" class="form-control" name="cipl_no" placeholder="CIPL No." value="<?= @$shipment['cipl_no'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Permit No.</label>
                    <input type="text" class="form-control" name="permit_no" placeholder="Permit No." value="<?= @$shipment['permit_no'] ?>">
                  </div>
                </div>
              </div>
              <div class="mt-2 row">
                <div class="text-left col-6">
                  <a href="<?php echo base_url() ?>master_tracking/master_tracking_list" class="btn btn-secondary">Back</a>
                </div>
                <div class="text-right col-6">
                  <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin?')">Submit</button>
                </div>
              </div>
                
                  
            </div>
          </div>
        </div>
      </div>
    </form>

  </div>
</div>
<script type="text/javascript">
  var input_invalid = 0;
  $("form").on("submit", function() {
    input_invalid = 0;
  });

  $("form input").on("invalid", function() {
    if (input_invalid < 1) {
      var element = $(this).closest('.tab-pane').attr('id');
      $('#' + element + '-tab').trigger('click');
      input_invalid = 1;
    }
  });

  $(".select2").select2({
    theme: "bootstrap4"
  });

  $('.next-tab').click(function() {
    $('.nav-tabs .active').parent().next('li').find('a').trigger('click');
  });

  $('.previous-tab').click(function() {
    $('.nav-tabs .active').parent().prev('li').find('a').trigger('click');
  });
</script>