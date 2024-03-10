<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="https://assets.edlin.app/favicon/favicon.ico">

  <link rel="stylesheet" href="https://assets.edlin.app/bootstrap/v5.3/bootstrap.css">

  <script src="https://www.paypal.com/sdk/js?client-id={{config('paypal.client_id')}}&vault=true&intent=subscription"></script>


  <!-- Title -->
  <title>PayPal Subscription Laravel</title>
</head>
<body>
<div class="container text-center">
  <div class="row mt-3">
    <div class="col-12">
      <img src="https://assets.edlin.app/logo/codewithross/logo-symbol-dark.png" height='100'
           alt="Ross Edlin Logo"/>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12">
      <h1>PayPal Subscription Laravel</h1>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-12">
      <div class="links h5">
        <a class="text-decoration-none mx-3" href="https://edlin.xyz/website" target="_blank">Home</a>
        <a class="text-decoration-none mx-3" href="https://edlin.xyz/portfolio" target="_blank">Portfolio</a>
        <a class="text-decoration-none mx-3" href="https://edlin.xyz/contact" target="_blank">Contact</a>
        <a class="text-decoration-none mx-3" href="https://edlin.xyz/linkedin" target="_blank">LinkedIn</a>
        <a class="text-decoration-none mx-3" href="https://edlin.xyz/github/paypal-laravel" target="_blank">GitHub</a>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
          <p>Hey there, I'm a PayPal Subscription Page.</p>

          <p>Click the button below and you'll be taken to a <a
              href="https://developer.paypal.com/docs/checkout/"
              target="_blank">PayPal</a>
            checkout form where you can enter real credit / debit card details and send me money.</p>

          <p>My purpose is to demonstrate building a <a href="https://laravel.com/docs/10.x/"
                                                        target="_blank">Laravel</a> / <a
              href="https://developer.paypal.com/docs/api/subscriptions/v1/"
              target="_blank">PayPal Subscription</a> app in 5 minutes.</p>

          <p>You can see me building this app on <a href="https://edlin.xyz/youtube/paypal-laravel"
                                                    target="_blank">YouTube</a>
            and view the <a href="https://edlin.xyz/github/paypal-laravel"
                            target="_blank">source code</a>.</p>

          <p class="text-danger">
            WARNING!!!<br/>
            This is set to LIVE mode, so real money is used.<br/>
            No refunds, use at your own risk.
          </p>
        </div>
      </div>

      <div class="row mt-3" id="paypal-success" style="display: none;">
        <div class="col-12 col-lg-6 offset-lg-3">
          <div class="alert alert-success" role="alert">
            You have successfully sent me money! Thank you!
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 col-lg-6 offset-lg-3" id="paypal-button"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mt-3 mb-3">
      Made with love, by <a href="https://www.rossedlin.com/" target="_blank">Ross Edlin</a> from <a
        href="https://www.codewithross.com/" target="_blank">Code with Ross</a>.
    </div>
  </div>
</div>
</body>
<script>
  paypal.Buttons({
    style: {
      shape: 'rect',
      color: 'gold',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        /* Creates the subscription */
        plan_id: '{{config('paypal.plan_id')}}'
      });
    },
    onApprove: function(data, actions) {
      alert(data.subscriptionID); // You can add optional success message for the subscriber here
    }
  }).render('#paypal-button'); // Renders the PayPal button
</script>
</html>
