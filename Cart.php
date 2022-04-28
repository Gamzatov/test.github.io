<div class="col-md-5 right container-right">
                <div class="col-right">

                    <div class="row">
                        <div class="col-12 text-left">
                            <div data-initCtrl="CartDetailsController">
                                <p class="h2 clearfix">Cart <span class="pull-right"><span class="ssl-icon"></span><span class="small font-primary">SSL Secure</span></span></p>
                                <div class="row" id="displayBuySmall">
                                    <div class="col-12">
                                        <button class="app-btn app-btn-block bg-white pt-2 pt-md-4 pb-4 pb-md-5 pl-3 pl-md-4 pr-3 pr-md-4 mt-0 mt-md-4 buy-coins-form-link">
                                            <div class="row mt-4">
                                                <div class="col-12">
                                                    <h5><text class="font-regular">&#126;</text><text data-watch="viewModel.convertTo"></text> <text data-watch="viewModel.convertToCurrencyCode"></text> for</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="mb-0"><text data-watch="viewModel.convertFrom"></text> <text data-watch="viewModel.convertFromCurrencyCode"></text></h2>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>

                                <h3 style='margin-top: 30px;'>Summary</h3>
                                <div class="summary-list buy-coins-summary mb-4 mb-md-0">
                                    <div class="summary-list-item">
                                        <div class="row">
                                            <div class="col-7 col-lg-4 pr-0">
                                                <span class="summary-title">Exchange rate:</span>
                                            </div>
                                            <div class="col-5">
                                                <span data-watch="viewModel.exchangeRate"></span> <span data-watch="viewModel.convertFromCurrencyCode"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list-item">
                                        <div class="row">
                                            <div class="col-7 col-lg-4 pr-0">
                                                <span class="summary-title">Processing fee:</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="summary-list-item blockChain-fee hide">
                                        <div class="row">
                                            <div class="col-7 col-lg-4 pr-0">
                                                <span class="summary-title">Blockchain fee:</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="summary-list-item">
                                        <div class="row">
                                            <div class="col-7 col-lg-4 pr-0">
                                                <span class="summary-title">Total spend:</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="summary-list-item">
                                        <div class="row">
                                            <div class="col-7 col-lg-4 pr-0">
                                                <span class="summary-title">Total receive:</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>