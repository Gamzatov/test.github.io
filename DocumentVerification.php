
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
            <a class="d-flex" href="./index.php">
               LOGO
            </a>
        </h1>
        <span class="h4 mb-0 d-block font-medium small-ls top-login-text pr-5">Buy bitcoin with credit<br class="d-none d-sm-block" /> card or bank wire.</span>
    </div>
</div>
<div class="container body-content bottom-buffer-2">


    <span class="hide" data-ctrl="NewOrderController" ></span>
    <div class="small-col-layout express-buy" style="min-height:100px">
        <div class="row" >
            <div class="col-md-7 overflowVisible">
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
                                    <li data-value="DocumentVerification" class="active">
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
                        </div><div class="row" data-initCtrl="UploadAreaController">
                        <form id="documentVerificationForm" action="/NewOrderPaymentDetails/Index" method="get">
                            <input type="hidden" data-val="true" data-val-required="The OrderRequestId field is required." id="OrderRequestId" name="OrderRequestId" value="1160206" />
                        </form>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <p class="h3 mt-4 mb-4">Upload and verify your account</p>
                                    <p class="h5 mt-3">Requirements</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="information-list-wrap newd mt-0 mb-0">
                                                <ul class="p small">
                                                    <li>Allowed formats: JPG, PNG, GIF, TIFF, PDF and BMP;</li>
                                                    <li>Documents should be up to date;</li>
                                                    <li>Provide coloured high-resolution images (at least 200 dpi);</li>
                                                    <li>Documents must be between 50KB and 8MB;</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="position: relative">
                                <div class="col-12">
                                    <div class="verification-container">
                                        <div class="row">
                                            <div class="col-md-6 pr-md-2">



                                                <div class="uploadId" data-initctrl="UploadIdController">

                                                    <input type="hidden" class="fileisUploaded" data-formrequired="uploadId" />

                                                    <!-- Drop and Upload area -->
                                                    <div class="uploadArea drop-area dropzone newd pb-0 pb-md-4 mb-0 ">
                                                        <i data-initctip
                                                           class="drop-tip fa fa-question text-center ctip"
                                                           data-tip-pos="below" data-tip="<p class='h4 mt-0 mb-2'>Your card</p>Passport, national ID card or Driver’s licence within it’s expiry date"></i>
                                                        <div class="browseFiles upload-id text-center">
                                                            <img src="./assets/img/droparea_id.png"  alt="" />

                                                            <h5 class="mt-2 mb-3 pt-1">Upload your Passport, <br /> ID or Driving License</h5>
                                                            <div class="btn-wrap text-center  mb-4 mb-md-0">
                                                                <button class="app-btn app-btn-primary">ADD FILES</button>
                                                            </div>

                                                        </div>
                                                    </div>



                                                    <!-- Preview docs -->
                                                    <div class="dropzone-previews documents-list">
                                                    </div>
                                                    <!-- Validation -->
                                                    <div class="mt-2 text-center">
                                                        <span class="field-validation-error"><span class="hide errorMessageUpload"></span></span>
                                                    </div>
                                                    <!-- Preview Area -->
                                                    <div class="preview-template" style="display: none;">
                                                        <div class="doc-list-item mt-2">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-2 bg-white left" style="padding: 0px">
                                                                        <div class="img-wrap text-center">
                                                                            <img class="preview" data-dz-thumbnail="" alt="" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-10 right">
                                                                        <p class="file-name small-text ellipsis"><span data-dz-name=""></span></p>
                                                                        <div class="loader hide">
                                                                            <div class="loader-bar"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span data-dz-remove class="fa fa-close upload-close-btn" aria-hidden="true"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                    </div>
                                            <div class="col-md-6 pl-md-2">



                                                <div class="uploadSelfie"  >


                                                    <input type="hidden" class="fileUploadHidden" name="SelfieWithCreditCardFileId" />
                                                    <input type="hidden" class="fileisUploaded" data-formrequired="uploadSelfie" />

                                                    <!-- Drop and Upload area -->
                                                    <div class="uploadArea drop-area dropzone newd pb-0 pb-md-4 mb-0 ">
                                                        <i data-initctip
                                                           class="drop-tip fa fa-question text-center ctip"
                                                           data-tip-pos="below"
                                                           data-tip="<p class='h4 mt-0 mb-2'>Selfie with your card</p>Please provide us a clear, high quality photo of you (selfie) holding the credit card used for the payment. The card’s first and last 4 digits must be visible, along with the name on card and the expiration date. You may cover the middle 8 digits."></i>
                                                        <div class="browseFiles text-center">
                                                            <img src="./assets/img/droparea_selfie-with-cc.png"
                                                                  alt="" />

                                                            <h5 class="mt-2 mb-3 pt-1">Upload a selfie with <br />your Credit Card</h5>
                                                            <div class="btn-wrap text-center mb-4 mb-md-0">
                                                                <button class="app-btn app-btn-primary">ADD FILES</button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>                                    </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div class="btn-wrap">
                                                <button class="app-btn app-btn-outline app-btn-sm" id="skipVerification" tabindex="8"><b>Skip</b>, I'll do it later</button>
                                            </div>
                                            <button class="hide app-btn app-btn-outline app-btn-sm" id="revertSkipVerification"><b>OK</b>, I'll upload the file now</button>
                                        </div>
                                    </div>
                                    <div class="block-verification-disabled hide" id="disableUpload"></div>
                                    <div class="block-verification hide" id="skipNotice">
                                        <div class="skip-verification-notice-content text-center pl-3 pr-3">
                                            <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:40px; margin-top: 40px"></i> <br />
                                            <h3 class="mt-sm-2 mt-md-4">Verification Notice</h3> <br />
                                            <p class="mb-sm-2 mb-md-4"> Skipping the verification process will result in longer <br class="d-none d-sm-block" /> processing time </p>
                                            <p class="mt-sm-2 mt-md-4"><a href="#" class="ok"><b>OK, I understand</b></a> <br /></p>
                                            <p class="mt-sm-1 mt-md-2"><a href="#" class="cancel">Cancel</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="btn-wrap mt-3 mb-4 mb-md-5 pt-4 d-none d-md-block">
                        <a href='./PlaceTheOrder.php' class="app-btn app-btn-primary app-btn-lg">Continue To Make a Payment</a>
                        <a class="app-btn app-btn-secondary app-btn-lg ml-3" href="/">CANCEL</a>
                    </div>
                </div>
            </div>
            <?
            include './cart.php'
            ?>
        </div>
        <div class="row d-md-none">
            <div class="col-12">
                <div class="container">
                    <div class="btn-wrap mt-3 mb-4 mb-md-3 border-t2 pt-4">
                        <button type="submit" class="app-btn app-btn-primary app-btn-lg">Continue</button>
                        <a class="app-btn app-btn-secondary app-btn-lg ml-3" href="/">CANCEL</a>
                    </div>
                </div>
            </div>
        </div></div>




</div>

<?
include './footer.php'
?>
<script src='./js/bundle.js'></script>

</body>
</html>