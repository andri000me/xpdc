<!DOCTYPE html>
<html>

<head>
  <title></title>
  <style type="text/css">
    @page {
      margin: 0cm 0cm;
    }

    body {
      margin: 0px;
      font-size: 12px;
    }

    .text-center {
      text-align: center;
    }

    h3 {
      margin-top: 5px;
      margin-bottom: 2px;
    }
  </style>
</head>

<body>
  <?php
  $dec_value = explode(".", $shipment['declared_value']);
  $len = strlen(end($dec_value));
  for ($i = 1; $i <= $shipment['qty']; $i++) {
  ?>
    <table width="100%" border="1" cellspacing="0" cellpadding="6">
      <tbody>
        <tr>
          <td width="50%" class="text-center">
            <img src="<?php echo base_url(); ?>assets/img/logo.png"><br>
            <b>PT. XENA PRANADIPA DHIA CAKRA</b><br>When Delivered Is Just Not Enough<br>
            <small class="lv2">http://xpdcid.com</small>
          </td>
          <td width="50%">
            <h3>From:</h3>
            <small class="lv2">
              <b>Shipper Name :</b> <?php echo $shipment['shipper_name'] ?><br>
              <b>Address :</b> <?php echo $shipment['shipper_address'] ?><br>
              <b>City :</b> <?php echo $shipment['shipper_city'] ?><br>
              <b>Country :</b> <?php echo $shipment['shipper_country'] ?><br>
              <b>Postcode :</b> <?php echo $shipment['shipper_postcode'] ?><br>
              <b>Shipper PIC :</b> <?php echo $shipment['shipper_contact_person'] ?><br>
              <b>Phone Number :</b> <?php echo $shipment['shipper_phone_number'] ?><br>
            </small>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <h3>To:</h3>
            <small>
              <b>Receiver Name :</b> <?php echo $shipment['consignee_name'] ?><br>
              <b>Address :</b> <?php echo $shipment['consignee_address'] ?><br>
              <b>City :</b> <?php echo $shipment['consignee_city'] ?><br>
              <b>Country :</b> <?php echo $shipment['consignee_country'] ?><br>
              <b>Postcode :</b> <?php echo $shipment['consignee_postcode'] ?><br>
              <b>Receiver PIC :</b> <?php echo $shipment['consignee_contact_person'] ?><br>
              <b>Phone Number :</b> <?php echo $shipment['consignee_phone_number'] ?><br>
            </small>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <small>
              <b>Description of Goods :</b> <?php echo $shipment['description_of_goods'] ?><br>
              <b>Declared Value :</b> <?php echo number_format($shipment['declared_value'], $len) ?> <?php echo $shipment['currency'] ?><br>
              <b>Weight :</b> <?php echo $shipment['weight'] ?> Kg<br>
              <div style="text-align: right;"><b><?php echo $shipment['piece_type'] ?> :</b> <?php echo $i ?> of <?php echo $shipment['qty'] ?> </div>
            </small>
          </td>
        </tr>
        <tr>
          <td colspan="2" class="text-center">
            <img height="100px" src="<?php echo site_url(); ?>home/barcode_generator/<?php echo $shipment['tracking_no'] ?>"><br>
            <b style="margin-top: 5px;"><?php echo $shipment['tracking_no'] ?></b>
          </td>
        </tr>
      </tbody>
    </table>
  <?php } ?>
</body>

</html>