<?php
$role = $this->session->userdata('role');
$page_permission = array(
  0 => (in_array($role, array("Super Admin")) ? 1 : 0), //Update
);
?>
<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>commercial/customer_update_process/<?php echo $customer_list['id'] ?>" method="POST" class="forms-sample">
      <input type="hidden" name="customer_id" value="<?php echo $customer_list['customer_id'] ?>" required>
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h6 class="font-weight-bold">Update Customer</h6>
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Account No.</label>
                    <input type="text" class="form-control" name="account_no" placeholder="Account No." value="<?php echo $customer_list['account_no'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $customer_list['name'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>E-Mail</label>
                    <input type="email" class="form-control" name="email" placeholder="E-Mail" value="<?php echo $customer_list['email'] ?>" required readonly>
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $customer_list['city'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address" placeholder="Address" required><?php echo $customer_list['address'] ?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Country</label>
                    <select class="form-control select2" name="country" required>
                      <option value="">- Select One -</option>
                      <?php foreach ($country['data'] as $data) { ?>
                        <option value="<?= $data['location'] ?>" <?php echo ($data['location'] == $customer_list['country']) ? 'selected' : ''; ?>><?= $data['location'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Postcode</label>
                    <input type="text" class="form-control" name="postcode" placeholder="Postcode" value="<?php echo $customer_list['postcode'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Contact Person</label>
                    <input type="text" class="form-control" name="contact_person" placeholder="Contact Person" value="<?php echo $customer_list['contact_person'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" value="<?php echo $customer_list['phone_number'] ?>" required>
                  </div>
                </div>
              </div>

              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Payment Terms</label>
                    <select class="form-control" name="payment_terms" required>
                      <option value="">- Select One -</option>
                      <!-- <option value="Cash In Advance" <?= (@$customer_list['payment_terms'] == 'Cash In Advance') ? 'selected' : ''; ?>>Cash In Advance</option>
                      <option value="Cash In Delivery" <?= (@$customer_list['payment_terms'] == 'Cash In Delivery') ? 'selected' : ''; ?>>Cash In Delivery</option>
                      <option value="15 Days" <?= (@$customer_list['payment_terms'] == '15 Days') ? 'selected' : ''; ?>>15 Days</option>
                      <option value="30 Days" <?= (@$customer_list['payment_terms'] == '30 Days') ? 'selected' : ''; ?>>30 Days</option>
                      <option value="45 Days" <?= (@$customer_list['payment_terms'] == '45 Days') ? 'selected' : ''; ?>>45 Days</option>
                      <option value="60 Days" <?= (@$customer_list['payment_terms'] == '60 Days') ? 'selected' : ''; ?>>60 Days</option> -->
                      <?php foreach ($payment_terms_list as $key => $value) : ?>
                        <option value="<?php echo $value['name'] ?>"  <?= (@$customer_list['payment_terms'] == $value['name']) ? 'selected' : ''; ?>><?php echo $value['name'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Discount</label>
                    <input type="number" class="form-control" name="discount" value="<?php echo @$customer_list['discount']+0 ?>" step="0.01" placeholder="Discount" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tax Registration</label>
                    <input type="text" class="form-control" name="vat" value="<?php echo @$customer_list['vat'] ?>" placeholder="Tax Registration" required>
                  </div>
                </div>
              </div>

              <h6 class="font-weight-bold border-bottom">Accounting Contact</h6>
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="account_name" value="<?php echo @$customer_list['account_name'] ?>" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label>E-Mail</label>
                    <input type="email" class="form-control" name="account_email" value="<?php echo @$customer_list['account_email'] ?>" placeholder="E-Mail" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="account_phone_number" value="<?php echo @$customer_list['account_phone_number'] ?>" placeholder="Phone Number" required>
                  </div>
                </div>
              </div>
              
              <?php if($page_permission[0] == 1): ?>
              <div class="mt-2 row">
                <div class="col-12">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  $(".select2").select2({
    theme: "bootstrap4"
  });
</script>