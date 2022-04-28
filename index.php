<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
          rel="stylesheet">
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
            <a class="d-flex" href="">
                LOGO
            </a>
        </h1>
        <span class="h4 mb-0 d-block font-medium small-ls top-login-text pr-5">Buy bitcoin with credit<br
                class="d-none d-sm-block"/> card or bank wire.</span>
    </div>
</div>
<div class="container body-content bottom-buffer-2">


    <span class="hide" ></span>
    <div class="small-col-layout express-buy" style="min-height:100px">
        <div class="row" data-initCtrl="TradeDetailsController">
            <div class="col-md-7">
                <div class="container-left ml-md-0 mr-md-0 ml-lg-4 p-2 p-md-0">
                    <div>
                        <div class="mt-2 mt-md-4 steps-wrapper" data-initCtrl="WizardStepsController">
                            <div class="steps-wrap">
                                <ul class="steps newd">
                                    <li data-value="TradeDetails" class="active">
                                        <span>Order <br>Details</span>
                                    </li>
                                    <li data-value="PersonalInformation" class="">
                                        <span>Personal <br>Details</span>
                                    </li>
                                    <li data-value="DocumentVerification" class="">
                                        <span>Document <br>Verification</span>
                                    </li>
                                    <li data-value="PaymentDetails" class="">
                                        <span>Place <br>the Order</span>
                                    </li>
                                    <li data-value="StatusCheck" class="">
                                        <span>Status <br>Check</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form  method="post" class="form-horizontal">
                            <input name="__RequestVerificationToken" type="hidden"
                                   value=""/>
                            <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                            <input type="hidden" data-val="true"
                                   data-val-required="The IsUserLoggedIn field is required." id="IsUserLoggedIn"
                                   name="IsUserLoggedIn" value="False"/>
                            <input type="hidden" id="AffiliateUrlId" name="AffiliateUrlId" value="1802"/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="clearfix mt-4">
                                        <p class="h3 float-left mb-0">Choose Payment Method</p>

                                    </div>
                                    <div class="payment-methods-wrap pt-4 pb-4">
                                        <div class="payment-methods-inner">
                                            <ul class="payment-methods">
                                                <template type="text/template"
                                                          class=""></template>
                                                <li class="payment-method "
                                                    data-foreach="viewModel.paymentTypeParentsList as paymentType">
                                                    <label class="custom-control custom-radio active">


                                                        <span class="custom-control-description">
                            <img src="./assets/img/cc-icon.svg"
                                 alt="paymentType-logo">
                            <div class="flex-column pl-2 d-flex">
                                <p class="h5 m-0">Credit Card</p>
                            </div>
                        </span>

                                                    </label>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="margin-bottom: 4px;">
                                <div class="col-md-6 mb-3 mb-md-0 pr-md-2" style="z-index:2">
                                    <label class="custom control-label" for="AmountSpend">Amount to Spend</label>
                                    <div class="input-group addon-wrap custom">
                                        <input value="" class="form-control custom" type="text" pattern="[0-9]*"
                                               name="Amount"/>
                                        <div class="input-group-addon custom">
                                            <div class="jub-select-wrap active">
                                                <span class="selected-val"><text
                                                            class="value-computed">EUR</text></span>
                                                <select class="form-control custom" id="changeCurrencyTypeSend"
                                                        name="PayCurrencyId">
                                                    <option value="1" data-currencycode="USD">USD</option>
                                                    <option selected="" value="2" data-currencycode="EUR">EUR</option>
                                                    <option value="3" data-currencycode="GBP">GBP</option>
                                                </select>
                                                <ul class="jub-select" style="display: none;"
                                                    id="label_changeCurrencyTypeSend">
                                                    <li data-value="1">USD</li>
                                                    <li class="active" data-value="2">EUR</li>
                                                    <li data-value="3">GBP</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-2" style="z-index:1; margin-bottom: 16px">
                                    <label class="custom control-label" for="CoinsReceive">Coins to Receive</label>
                                    <div class="input-group addon-wrap custom">
                                        <input id="CoinsReceive"
                                               class="form-control custom"
                                               type="text"
                                               pattern="[0-9]*"
                                               inputmode="numeric"
                                               name="CoinsReceive"
                                               data-rule-number="true"
                                               min="0"

                                               placeholder="Enter value"/>
                                        <div class="input-group-addon custom">
                                            <div class="jub-select-wrap active">
                                                <span class="selected-val"><text

                                                        class="value-computed">BTC</text></span>
                                                <select class="form-control custom" id="changeCoinTypeSend"
                                                        name="ReceiveCurrencyId">
                                                    <option selected="" value="101" data-currencycode="BTC">BTC</option>
                                                    <option value="105" data-currencycode="LTC">LTC</option>
                                                    <option value="102" data-currencycode="ETH">ETH</option>
                                                    <option value="110" data-currencycode="USDT">USDT</option>
                                                </select>
                                                <ul class="jub-select" style="display: none;"
                                                    id="label_changeCoinTypeSend">
                                                    <li class="active" data-value="101">BTC</li>
                                                    <li data-value="105">LTC</li>
                                                    <li data-value="102">ETH</li>
                                                    <li data-value="110">USDT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="field-validation-valid" data-valmsg-for="CoinsReceive"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0 pr-md-2">
                                    <label class="custom control-label" for="EmailAddress">Your Email</label>
                                    <div class="input-group custom">
                                        <input type="email" class="form-control custom" value=""
                                               placeholder="Valid email" id="Email" name="Email"/>
                                    </div>
                                    <span class="field-validation-valid" data-valmsg-for="Email"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="row mt-2 send-external">
                                <div class="col-12">
                                    <div class="input-group custom">
                                        <div class="custom-control custom-radio active mt-2">
                                            <input type="hidden"
                                                   id="shouldNotCreateAccount"
                                                   class="form-control custom"
                                                   name="ShouldCreateAccount"
                                                   value="false"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row " id="wallet-address">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="custom control-label"
                                                   for="walletAddress">
                                                Your
                                                wallet address

                                            </label>
                                            <div id="test" class="position-relative">
                                                <div class="input-group custom">
                                                    <input type="text" class="form-control custom" data-val="true"
                                                                                                                                                                          data-val-regex-pattern="^.&#x2B;$" id="WalletAddress"
                                                           name="WalletAddress" value=""/>
                                                </div>
                                                <div class="wrapper">

                                                    <div class="warning">
                                                        <img class="toggle-tooltip" src="./assets/img/attention.png"
                                                             alt="warning">
                                                        <p class="warning-tooltip toggle-tooltip">
                                                            There is exceptionally high volume to the destination
                                                            wallet you have entered. Please verify the wallet is
                                                            secure and reliable
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="field-validation-valid" data-valmsg-for="WalletAddress"
                                                  data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row " id="wallet-address-warning">
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
                                    <div class="input-group custom mt-4">
                                        RECAPTCHA
                                    </div>
                                </div>
                            </div>
                            <div class="row d-none d-md-block">
                                <div class="col-12">
                                    <div class="btn-wrap mt-3 mb-4 mb-md-5">
                                        <a href='./PersonalDetails.php'  class="app-btn app-btn-primary app-btn-lg">Continue
                                        </a>
                                        <a class="app-btn app-btn-secondary app-btn-lg ml-3" href="/">CANCEL</a>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
              <?
                        include './cart.php'
                        ?>

                </div>
                <div class="row d-md-none">
                    <div class="col-12">
                        <div class="btn-wrap mt-3 mb-4 mb-md-3">
                            <button tabindex="7" type="submit" class="app-btn app-btn-primary app-btn-lg">Continue
                            </button>
                            <a tabindex="8" class="app-btn app-btn-secondary app-btn-lg ml-3" href="/">CANCEL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?
include './footer.php'
?>
<script src='./js/bundle.js'></script>


</body>
</html>