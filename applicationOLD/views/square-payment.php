<?php
	$totalPayment=$this->session->userdata('amount');
?>
<html>
<head>
<title>Square Payment Gateway</title>
<meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link to the SqPaymentForm library -->
    <script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>

    <!-- link to the local SqPaymentForm initialization -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/square-payment/sqpaymentform.js"></script>

    <!-- link to the custom styles for SqPaymentForm -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/square-payment/sqpaymentform-basic.css">
    
   <script>
	 document.addEventListener("DOMContentLoaded", function(event) {
		if (SqPaymentForm.isSupportedBrowser()) {
		    paymentForm.build();
			paymentForm.recalculateSize();
		}
  	});
	</script>
	
</head>
<body>

<div id="form-container" style="margin-top: 250px;">
  <div id="sq-ccbox">
    <!--
      Be sure to replace the action attribute of the form with the path of
      the Transaction API charge endpoint URL you want to POST the nonce to
      (for example, "/process-card")
    -->
    <form id="paymentFrm" novalidate action="<?=base_url()?>square/payment-process" method="post">
      <fieldset>
        <span class="label">Card Number</span>
        <div id="sq-card-number"></div>

        <div class="third">
          <span class="label">Expiration</span>
          <div id="sq-expiration-date"></div>
        </div>

        <div class="third">
          <span class="label">CVV</span>
          <div id="sq-cvv"></div>
        </div>

        <div class="third">
          <span class="label">Postal</span>
          <div id="sq-postal-code"></div> 
        </div>
      </fieldset>

      <button id="sq-creditcard" class="button-credit-card" onclick="requestCardNonce(event)">Pay $<?=$totalPayment?></button>

      <div id="error"></div>

      <!--
        After a nonce is generated it will be assigned to this hidden input field.
      -->
	  <input type="hidden" id="amount" name="amount" value="<?=$totalPayment?>">
      <input type="hidden" id="card-nonce" name="nonce">
    </form>
  </div> <!-- end #sq-ccbox -->

</div> <!-- end #form-container -->
 
</body>
</html>