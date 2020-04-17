<?php

// Stripe library
require 'stripe/Stripe.php';

$params = array(
"testmode"   => "on",
"private_live_key" => "sk_live_UUCOI2p5f6ye9oqmIPKgohSW",
"public_live_key"  => "pk_live_NM71jfG5jXk2ChKV4PnBW6Uw",
"private_test_key" => "sk_test_hpudM7C5huwzSjz8Tp9R3Xjm",
"public_test_key"  => "pk_test_7vp1WEu0o1IOyLilC0WhkVXs"
);

if ($params['testmode'] == "on") {
Stripe::setApiKey($params['private_test_key']);
$pubkey = $params['public_test_key'];
} else {
Stripe::setApiKey($params['private_live_key']);
$pubkey = $params['public_live_key'];
}

if(isset($_POST['stripeToken']))
{
$name = $_POST['name'];
$donate=$_POST['donate'];
$amount_cents =($donate*100);  // Chargeble amount
$invoiceid = "1498996148";                      // Invoice ID
$description = "Invoice #" . $invoiceid . " - " . $invoiceid;

try {

$charge = Stripe_Charge::create(array(
 
 "amount" => $amount_cents,
 "currency" => "usd",
 "source" => $_POST['stripeToken'],
 "description" => $description)  
);

if ($charge->card->address_zip_check == "fail") {
throw new Exception("zip_check_invalid");
} else if ($charge->card->address_line1_check == "fail") {
throw new Exception("address_check_invalid");
} else if ($charge->card->cvc_check == "fail") {
throw new Exception("cvc_check_invalid");
}
// Payment has succeeded, no exceptions were thrown or otherwise caught

$result = "success";

} catch(Stripe_CardError $e) {

$error = $e->getMessage();
$result = "declined";

} catch (Stripe_InvalidRequestError $e) {
$result = "declined";  
} catch (Stripe_AuthenticationError $e) {
$result = "declined";
} catch (Stripe_ApiConnectionError $e) {
$result = "declined";
} catch (Stripe_Error $e) {
$result = "declined";
} catch (Exception $e) {

if ($e->getMessage() == "zip_check_invalid") {
$result = "declined";
} else if ($e->getMessage() == "address_check_invalid") {
$result = "declined";
} else if ($e->getMessage() == "cvc_check_invalid") {
$result = "declined";
} else {
$result = "declined";
}  
}

echo "<BR>Stripe Payment Status : ".$result;

echo "<BR>Stripe Response : Payment  ".$result;
echo "<br>";
echo "Transaction Id:".$charge['id'];
echo "<br>";
echo "Donator Name:".$name;
echo "<br>";
echo "Your Donation Amount:$".$charge['amount']/100;
echo "<br>";
echo "Thanks for Your donation";
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <base href="/coronaspeak/">
<meta charset="UTF-8">
<title>coronaspeak Virus Relif Fund | Help people affested by coronaspeak</title>
</head>
<?php include "siteheader.php" ?>
<body>

<link href="css/style.css" type="text/css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="We want to help for affected people in coronaspeak. So please join me  and donate for fund in coronaspeak affected people and children">
<meta name="keyword" content="Donate | coronaspeak Virus Relif Fund | Donate for coronaspeak virus affected people | Donate for coronaspeak virus affected Children">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- <h1 class="bt_title">Donate</h1> -->

<div class="container" style="margin-top: 5%;">
<form action="" method="POST" id="payment-form">
<span class="payment-errors"></span>
   
  <div id="form-container">

    <div id="card-front">
      <div id="shadow"></div>
      <div id="image-container">
        <span id="amount">Donate:</span>
        <input type="number" name="donate" placeholder="ex.$10">
        <span id="card-image">
       
          </span>
      </div>
      <!--- end card image container --->

      <label for="card-number">
          Card Number
        </label>
      <input type="text" id="card-number" placeholder="ex.1234 5678 9101 1112" length="16" data-stripe="number">
      <div id="cardholder-container">
        <label for="card-holder">Card Holder
        </label>
        <input type="text" id="card-holder" name="name" placeholder="e.g. John Doe" data-stripe="name" />
      </div>
      <!--- end card holder container --->
      <div id="exp-container">
        <label for="card-exp">
            Expiration
        </label>
        <input id="card-month" type="text" placeholder="MM" length="2" data-stripe="exp_month">
        <input id="card-year" type="text" placeholder="YY" length="2" data-stripe="exp_year" style="margin-top: -55px;">
      </div>
      <div id="cvc-container">
        <label for="card-cvc"> CVV</label>

        <input type="text" id="card-cvc" placeholder="XXX-X" min-length="3" max-length="4" data-stripe="cvc">
     
      </div>
         
      <!--- end CVC container --->
      <!--- end exp container --->
    </div>
   
  <!--- end card back --->
 

</div>
<center>
<div class="row">
        <div class="col-xs-12">
            <button class="btn btn-danger" style="margin-top:50px;">Donate</button>
        </div>
    </div>

</center>

</form>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- TO DO : Place below JS code in js file and include that JS file -->
<script type="text/javascript">
Stripe.setPublishableKey('<?php echo $params['public_test_key']; ?>');
 
$(function() {
 var $form = $('#payment-form');
 $form.submit(function(event) {
// Disable the submit button to prevent repeated clicks:
$form.find('.submit').prop('disabled', true);

// Request a token from Stripe:
Stripe.card.createToken($form, stripeResponseHandler);

// Prevent the form from being submitted:
return false;
 });
});

function stripeResponseHandler(status, response) {
 // Grab the form:
 var $form = $('#payment-form');

 if (response.error) { // Problem!

// Show the errors on the form:
$form.find('.payment-errors').text(response.error.message);
$form.find('.submit').prop('disabled', false); // Re-enable submission

 } else { // Token was created!

// Get the token ID:
var token = response.id;

// Insert the token ID into the form so it gets submitted to the server:
$form.append($('<input type="hidden" name="stripeToken">').val(token));

// Submit the form:
$form.get(0).submit();
 }
};
</script>

<?php
include "footer.php"

?>
</body>
</html>

<style type="text/css">

#amount {
 font-size: 12px;
}

#amount strong {
 font-size: 14px;
}

#card-back {
 bottom:330px;
 left:600px;
 
}

#card-btn {
 background-color: rgba(251, 251, 251, 0.8);
 color: #ffb242;
 position: absolute;
 bottom: -55px;
 right: 0;
 width: 150px;
 border-radius: 8px;
 height: 42px;
 font-size: 12px;
 font-family: lato, 'helvetica-light', 'sans-serif';
 text-transform: uppercase;
 letter-spacing: 1px;
 font-weight: 400;
 outline: none;
 border: none;
 cursor: pointer;
}

#card-btn:hover {
 background-color: rgba(251, 251, 251, 1);
}

#card-cvc {
 width: 60px;
 margin-bottom: 0;
}

#card-front,
#card-back {
 position: absolute;
 background-color: #498ee4;
 width: 450px;
 height: 320px;
 border-radius: 6px;
 padding: 20px 30px 0;
 box-sizing: border-box;
 font-size: 10px;
 letter-spacing: 1px;
 font-weight: 300;
 color: white;

}


#card-image {
 float: right;
 height: 100%;
}

#card-image i {
 font-size: 40px;
}

#card-month {
 width: 45% !important;
}

#card-number,
#card-holder {
 width: 100%;
}

#card-stripe {
 width: 100%;
 height: 55px;
 background-color: #3d5266;
 position: absolute;
 right: 0;
}

#card-success {
 color: #00b349;
}

#card-token {
 display: none;
}

#card-year {
 width: 45%;
 float: right;
}

#cardholder-container {
 width: 60%;
 display: inline-block;
}

#cvc-container {
 position:relative;
 width: 110px;
 bottom:20px;
 right:1px;
 box-sizing: border-box;

}

#cvc-container label {
 width: 100%;
 margin-left:265px;
 margin-top:20px;
}
#cvc-container input {

 margin-left:300px;
 margin-top:-20px;
}

#cvc-container p {
 font-size: 6px;
 text-transform: uppercase;
 opacity: 0.6;
 letter-spacing: .5px;
}

#form-container {
 margin: auto;
 width: 500px;
 height: 290px;
 position: relative;
}

#form-errors {
 color: #eb0000;
}

#form-errors,
#card-success {
 background-color: white;
 width: 500px;
 margin: 0 auto 10px;
 height: 50px;
 border-radius: 8px;
 padding: 0 20px;
 font-weight: 400;
 box-sizing: border-box;
 line-height: 46px;
 letter-spacing: .5px;
 text-transform: none;
}

#form-errors p,
#card-success p {
 margin: 0 5px;
 display: inline-block;
}

#exp-container {
 margin-left: 10px;
 width: 32%;
 display: inline-block;
 float: right;
}

.hidden {
 display: none;
}

#image-container {
 width: 100%;
 position: relative;
 height: 55px;
 margin-bottom: 5px;
 line-height: 55px;
}

#image-container img {
 position: absolute;
 right: 0;
 top: 0;
}

input {
 border: none;
 outline: none;
 background-color: #5a9def;
 height: 30px;
 line-height: 30px;
 padding: 0 10px;
 margin: 0 0 25px;
 color: white;
 font-size: 10px;
 box-sizing: border-box;
 border-radius: 4px;
 font-family: lato, 'helvetica-light', 'sans-serif';
 letter-spacing: .7px;
}

input::-webkit-input-placeholder {
 color: #fff;
 opacity: 0.7;
 font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
 font-weight: 300;
 letter-spacing: 1px;
 font-size: 10px;
}

input:-moz-placeholder {
 color: #fff;
 opacity: 0.7;
 font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
 font-weight: 300;
 letter-spacing: 1px;
 font-size: 10px;
}

input::-moz-placeholder {
 color: #fff;
 opacity: 0.7;
 font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
 font-weight: 300;
 letter-spacing: 1px;
 font-size: 10px;
}

input:-ms-input-placeholder {
 color: #fff;
 opacity: 0.7;
 font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
 font-weight: 300;
 letter-spacing: 1px;
 font-size: 10px;
}

input.invalid {
 border: solid 2px #eb0000;
 height: 34px;
}

label {
 display: block;
 margin: 0 auto 7px;
}

#shadow {
 position: absolute;
 right: 0;
 width: 284px;
 height: 214px;
 top: 36px;
 background-color: #000;
 z-index: -1;
 border-radius: 8px;
 box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
 -moz-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
 -webkit-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
}
</style>