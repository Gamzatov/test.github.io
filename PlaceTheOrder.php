<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/style-min.css">

    <title>
        Place Your Cryptocurrency Order
    </title>

</head>

<body class="bg-washed-white register">




    <div class="container">
        <div class="top-buffer-4 top-login text-left d-flex align-items-center">
            <h1 class="mb-0 mr-3 mr-md-5">
                <a class="d-flex" href="https://NAME_OF.com">
                    LOGO
                </a>
            </h1>
            <span class="h4 mb-0 d-block font-medium small-ls top-login-text pr-5">Buy bitcoin with credit<br class="d-none d-sm-block" /> card or bank wire.</span>
        </div>
    </div>
    < class="container body-content bottom-buffer-2">


        <span class="hide" data-ctrl="NewOrderController" data-sp="shortPolling:NewOrderController"></span>
        <div class="small-col-layout express-buy" style="min-height:100px">
            <div class="row">
                <div class="col-md-7">
                    <div class="container-left ml-md-0 mr-md-0 ml-lg-4 p-2 p-md-0">
                        <div>
                            <div class="mt-2 mt-md-4 steps-wrapper" data-initCtrl="WizardStepsController">
                                <div class="steps-wrap">
                                    <ul class="steps newd">
                                        <li data-value="TradeDetails" class="done">
                                            <span>Order <br>Details</span>
                                        </li>
                                        <li data-value="PersonalInformation" class="done">
                                            <span>Personal <br>Details</span>
                                        </li>
                                        <li data-value="DocumentVerification" class="done">
                                            <span>Document <br>Verification</span>
                                        </li>
                                        <li data-value="PaymentDetails" class="active">
                                            <span>Place <br>the Order</span>
                                        </li>
                                        <li data-value="StatusCheck" class="">
                                            <span>Status <br>Check</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <div class="clearfix mt-4">
                                        <p class="h3 float-left">Pay using Credit or Debit Card</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="notification-box__v2">
                                                <img src="./assets/img/attention.png" alt="warning triangle" />
                                                <p>We will only accept cards in your name, please do not use someone else’s card. Your order will be declined.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <form method="post">


                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <label class="custom control-label mt-2" for="CCNumber">Card Number</label>
                                                <div class="input-group custom cc-icon">
                                                    <input tabindex="1" autofocus asp-prompt="CCNumber" class="form-control custom cc-mask" type="text" pattern="[0-9]*" inputmode="numeric" data-val="true" data-val-ccluhn="Card number is not correct." data-val-regex="Invalid credit card number. Only Visa, Mastercard, Maestro and Visa Electron are supported." data-val-regex-pattern="(^(4026|4508|4844|4913|4917)[0-9]{12}|(417500[0-9]{10})$)|(^4[0-9]{12}(?:[0-9]{3})?$)|(^(5[1-5][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}$)|(^(5018|5020|5038|6304|6759|6761|6762|6763)[0-9]{8,15}$)" data-val-required="The Card Number field is required." id="CCNumber" name="CCNumber" placeholder="1234 1234 1234 1234" value="" />
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-for="CCNumber" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-4 col-lg-3 pr-sm-1">
                                                <label class="custom control-label mt-2">Expiration</label>
                                                <div class="row">
                                                    <div class="col-12 col-sm-10 pr-3 pr-sm-2">
                                                        <div class="input-group custom flex-nowrap align-items-center">
                                                            <input id="expiration-date" class="form-control custom" type="text" pattern="[0-9]*" tabindex="2" inputmode="numeric" maxlength="7" asp-prompt="ExpirationDate" data-val="true" data-val-expirationdate="Card expired." data-val-required="The Expiration Date field is required." name="ExpirationDate" placeholder="MM / YY" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="d-sm-none field-validation-valid" data-valmsg-for="ExpirationDate" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="col-sm-3 col-lg-2 pl-sm-2">
                                                <label class="custom control-label mt-2 d-block" for="CVV">CVV/CVC</label>
                                                <div class="input-group custom">
                                                    <input type="text" class="form-control custom cvv-field" tabindex="3" pattern="[0-9]*" inputmode="numeric" data-val="true" data-val-regex="Please enter valid numeric value (min 3 and max 4 digits)." data-val-regex-pattern="^[0-9]{3,4}$" data-val-required="The Security Code field is required." id="CVV" name="CVV" placeholder="CVV" value="" />
                                                </div>
                                                <span class="d-sm-none field-validation-valid" data-valmsg-for="CVV" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="col-sm-3 col-lg-3 pl-sm-0 pt-sm-3">
                                                <span data-initctip class="ctip mt-sm-4 ml-0 mb-3 mb-sm-0 d-inline-block" data-tip="<strong>Visa, MasterCard, or Discover:</strong> This 3-digit number is on the back of the card next to the signature panel.<br /><br /><strong>American Express:</strong>This 4-digit number is on the front of the card above the credit card number." data-tip-pos="above">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-3 pr-sm-1">
                                                <span class="d-none d-sm-block field-validation-valid" data-valmsg-for="ExpirationDate" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="col-sm-6 col-lg-4 pr-sm-1">
                                                <span class="d-none d-sm-block field-validation-valid" data-valmsg-for="CVV" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>


                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <div class="p pt-4 pb-4">
                                                    Your credit card will be charged by <b>NAME_OF.com <br class="d-none d-md-block" /> +44 800 088 5705</b>.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">


                                                <div class="notification-box__v2 notification-box__redesign">
                                                    <p class="small">
                                                        NAME_OF is only an exchange only and not affiliated with any 3rd party
                                                        trading or wallet platforms. Once we have delivered your cryptocurrency
                                                        to the wallet of your choice the transaction cannot be traced, reversed,
                                                        altered, or refunded. A guest account will be created for you. For any
                                                        questions please contact our customer support

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <section>
                                                    <div data-initCheckbox class="agree-text">
                                                        <div class="terms-checkbox">
                                                            <input tabindex="5" class="terms-input" type="checkbox" required data-msg-required="Accept our terms and conditions" data-val="true" id="Terms" name="Terms" value="true" aria-required="true" />
                                                            <label for="Terms" class="terms-label"></label>
                                                            <p class="terms-text">
                                                                I agree to NAME_OF.com <a href="h" target="_blank" rel="noreferrer">Terms & Conditions</a>, <a href="" target="_blank" rel="noreferrer">Privacy Policy</a>, <a href="" target="_blank" rel="noreferrer">Refund & Cancelation Policy</a>.
                                                            </p>
                                                        </div>
                                                        <span class="field-validation-valid" data-valmsg-for="Terms" data-valmsg-replace="true"></span>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>

                                        <div class="row d-none d-md-block">
                                            <div class="col-12">
                                                <div class="btn-wrap mt-3 mb-3">
                                                    <button type="submit" class="app-btn app-btn-primary app-btn-lg" tabindex="10">BUY BITCOINS</button>
                                                    <a class="app-btn app-btn-secondary app-btn-lg ml-3" href="/">CANCEL</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?
                include './cart.php'
                ?>



            </div>
        </div>
        




        <?
        include './footer.php'
        ?>


        <script src='./js/bundle.js'></script>




</body>

</html>