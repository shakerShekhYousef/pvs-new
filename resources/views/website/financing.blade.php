@extends('layouts.website.base')
@section('pageTitle', "FINANCING")
@section('custom-style')
    <style>
        .button-reset,
        .button-result {
            color: #fff;
            background-color: transparent;
            border: 2px solid #ededed;
            padding: 10px 30px;
        }

        .button-result:hover,
        .button-reset:hover {
            background: #3253a1;
            border-color: #3253a1;
        }


        .inner-text {
            line-height: 5px;
        }

        /*********** Baseline, reset styles ***********/
        /* input[type="text"] {
            width: 73%;
        } */

        input[type="range"] {
            -webkit-appearance: none;
            appearance: none;
            background: transparent;
            cursor: pointer;
            width: 100%;
        }

        /* Removes default focus */
        input[type="range"]:focus {
            outline: none;
        }

        /******** Chrome, Safari, Opera and Edge Chromium styles ********/
        /* slider track */
        input[type="range"]::-webkit-slider-runnable-track {
            background-color: #3253a1;
            border-radius: 5.5rem;
            height: 0.5rem;
        }

        /* slider thumb */
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            /* Override default look */
            appearance: none;
            margin-top: -8px;
            /* Centers thumb on the track */
            background-color: #635f5f;
            border-radius: 18.5rem;
            height: 1.5rem;
            width: 1rem;
        }

        input[type="range"]:focus::-webkit-slider-thumb {
            outline: 3px solid #635f5f;
            outline-offset: 0.125rem;
        }

        /*********** Firefox styles ***********/
        /* slider track */
        input[type="range"]::-moz-range-track {
            background-color: #8ab3c1;
            border-radius: 5.5rem;
            height: 0.5rem;
        }

        /* slider thumb */
        input[type="range"]::-moz-range-thumb {
            background-color: #635f5f;
            border: none;
            /*Removes extra border that FF applies*/
            border-radius: 18.5rem;
            height: 1.5rem;
            width: 1rem;
        }

        input[type="range"]:focus::-moz-range-thumb {
            outline: 3px solid #635f5f;
            outline-offset: 0.125rem;
        }

        .wrapper__title {
            text-transform: capitalize;
            margin: 0 0 40px;
        }

        .calculator__row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 0 30px;
        }

        .calculator__row:last-child {
            margin-bottom: 0;
        }

        .calculator__row label {
            text-transform: capitalize;
            font-weight: 700;
        }

        /* .calculator__bill {
            width: 50%;
        } */

        .first_batch {
            width: 60%;
        }

        .monthly_installment {
            width: 60%;
        }

        .calculator__info {
            text-transform: capitalize;
            margin: 0;
        }
    </style>
@endsection
@section('content')
    <!-- ========== Header ========== -->
    <header id="dsn_header" class="dsn-header-animation dsn-container section-padding v-dark-head">
        <div class="entry-header p-relative over-hidden">
            <div id="hero_image" class="p-absolute dsn-hero-parallax-img over-hidden" data-dsn-ajax="img"
                 data-overlay="1">
                <img src="{{asset('assets/front/img/financing.jpg')}}" class="cover-bg-img transform-3d" alt=""/>
            </div>

            <div id="hero_content" class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-end">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">
                            <div id="hero_title">
                                <h1 class="title" data-dsn-ajax="title">FINANCING</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
           data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
            <div class="text">SCROLL</div>
        </a>
    </header>
    <!-- ========== End Header ========== -->

    <div id="page_wrapper" class="wrapper">
        <!-- ========== Header ========== -->
        <header class="p-relative pt-header">
            <div class="hero-content text-center">
                <h1 class="title-head mt-20 text-upper">Speak To Us Today</h1>
                <p class="max-w750 mt-20">
                    <b>PVS</b> offer in partnership with major banking partners in the UAE finance options to suit your
                    needs.
                    Your monthly payment is calculated on the selling price of the car minus your deposit over a monthly
                    term between 24 and 60 months dependant on the age and mileage of your new vehicle. With many years
                    of experience in this field <b>PVS</b> understands the importance to offer products to its clients
                    that not
                    only allow them to purchase their dream car, but also have the flexibility to swop and change to fit
                    in line with their career and lifestyle. <b>PVS</b> will assist you all the way and manage the
                    transaction
                    from start to finish. It’s what we do!
                </p>
            </div>
        </header>
        <!-- ========== End Header ========== -->
        <!-- ========== About Section ========== -->
        <div class="about-section about-3 container d-grid grid-md-2 section-margin box-cal" data-dsn-gap="30px 60px">
            <div class="box-left">
                <div class="col-md-7 col-sm-12 calculator_container">
                    <h5 class="mb-20">Calculate your monthly installment for Auto Finance</h5>
                    <form class="calculator">
                        <div class="calculator__row row">
                            <div class="col-lg-4 col-md-5 text-end"><label for="bill">Enter car's price:</label>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <input type="number" id="bill" class="form-control calculator__bill" required
                                       width="100%"/></div>

                        </div>
                        <div class="calculator__row row">
                            <div class="col-lg-4 col-md-5 text-end">
                                <label for="first_batch">Deposit: <span class="first-batch"></span></label>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <input type="range" min="0" max="90" value="0" step="10" class="first_batch"
                                       id="first_batch" required/>
                            </div>
                        </div>
                        <div class="calculator__row row">
                            <div class="col-lg-4 col-md-5 text-end">
                                <label for="monthly_installment">Years: <span
                                        class="monthly-installment"></span></label>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <input type="range" min="0" max="5" value="0" step="1" class="monthly_installment"
                                       id="monthly_installment" required/>
                            </div>
                        </div>
                        <div class="calculator__row">
                            <button type="button" class="text-uppercase button-result">Submit</button>
                            <button type="button" class="button-reset text-uppercase">Reset</button>
                        </div>
                        <div class="calculator__row">
                            <h4 class="calculator__info">
                                <span class="calculator__result"></span>
                            </h4>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box-right" style="
    text-align: center;
">
                <div class="content dsn-container  align-items-center">
                    <ul class="d-grid grid-sm-2 mt-30 dsn-list">
                        <li class="list-item grid-item d-flex align-items-center">

                            <div class="mb-5">
                                <div class="icon">
                                    <img src="{{asset('assets/front/img/calculator.png')}}"/>
                                </div>
                                <div class="inner-text">
                                    <p class="text-capitalize" style="font-weight: bold">From 2.85 %</p>
                                    <p style="font-size: smaller;">Interest Rate</p>
                                </div>
                            </div>

                        </li>
                        <li class="list-item grid-item d-flex align-items-center">
                            <div class="mb-5">
                                <div class="icon">
                                    <img src="{{asset('assets/front/img/time-left.png')}}"/>
                                </div>
                                <div class="inner-text">
                                    <p class="text-capitalize" style="font-weight: bold">Instant</p>
                                    <p style="font-size: smaller;">Pre-Qualification</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-item grid-item d-flex align-items-center">
                            <div class="mb-5">
                                <div class="icon">
                                    <img src="{{asset('assets/front/img/calendar.png')}}"/>
                                </div>
                                <div class="inner-text">
                                    <p class="text-capitalize" style="font-weight: bold">Upto 5 years</p>
                                    <p style="font-size: smaller;">Loan Tenure</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-item grid-item d-flex align-items-center">
                            <div class="mb-5">
                                <div class="icon">
                                    <img src="{{asset('assets/front/img/coin-stack.png')}}"/>
                                </div>
                                <div class="inner-text">
                                    <p class="text-capitalize" style="font-weight: bold">From 15,000 AED</p>
                                    <p style="font-size: smaller;">Salary</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ========== End About Section ========== -->
        <!-- ========== About According ========== -->
        <div class="about-section section-margin container d-grid grid-md-2" data-dsn-gap="30px 60px">
            <div class="box-left p-relative  pinned-scroll">
                <div class="pinned-element">
                    <h2 class="title-h2 body-font text-upper">
                        <b>Financing.</b>
                    </h2>
                </div>
            </div>
            <div class="box-right">
                <div class="dsn-accordion" role="tablist">
                    <div class="accordion__wrapper">
                        <div class="accordion__item  active">
                            <div class="accordion__question user-no-selection expanded d-flex align-items-center  ">
                                <span class="number background-theme h6">1</span>
                                <h2 class="sm-title-block tab-title heading-color" role="tab" data-tab="0">
                                    EMPLOYED</h2>
                            </div>
                            <div class="accordion__answer tab-description active " role="tabpanel" data-tab="0">
                                <ul class="m-0 list-unstyled">
                                    <li>Salary Certificate</li>
                                    <li>3 month bank statement (stamped)</li>
                                    <li>Passport & Visa copies</li>
                                    <li>Emirates ID copy</li>
                                </ul>
                            </div>
                        </div>


                        <div class="accordion__item  ">
                            <div class="accordion__question user-no-selection  d-flex align-items-center  ">
                                <span class="number background-theme h6">2</span>
                                <h2 class="sm-title-block tab-title heading-color" role="tab" data-tab="1">
                                    SELF EMPLOYED
                                </h2>
                            </div>
                            <div class="accordion__answer tab-description  " role="tabpanel" data-tab="1">
                                <ul class="m-0 list-unstyled">
                                    <li>Trade License</li>
                                    <li>MOA</li>
                                    <li>Passport copies of all partners</li>
                                    <li>Passport & Visa copies of applicant</li>
                                    <li>Emirates ID</li>
                                    <li>3 month personal bank statement</li>
                                    <li>3 month company bank statement</li>
                                </ul>
                            </div>
                        </div>


                        <div class="accordion__item  ">
                            <div class="accordion__question user-no-selection  d-flex align-items-center  ">
                                <span class="number background-theme h6">3</span>
                                <h2 class="sm-title-block tab-title heading-color" role="tab" data-tab="2">
                                    COMPANIES
                                </h2>
                            </div>
                            <div class="accordion__answer tab-description  " role="tabpanel" data-tab="2">
                                <ul class="m-0 list-unstyled">
                                    <li>Trade License</li>
                                    <li>MOA</li>
                                    <li>Passport copies of all partners</li>
                                    <li>3 month company bank statement</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End About According ========== -->

    </div>
    @section('custom-script')
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script>
            $(document).ready(function () {
                // VARIABLES
                // ----------------------------------------------------------

                var amount, percent, result, first_batch, monthly_installment;
                var calculator = $(".calculator");
                var calculatorBill = calculator.find(".calculator__bill");
                var calculatorfirst_batch = calculator.find(".first_batch");
                var calculatormonthly_installment = calculator.find(
                    ".monthly_installment"
                );
                var first_batchAmount = calculator.find(".first-batch");
                var monthly_installmentAmount = calculator.find(".monthly-installment");
                var button_result = calculator.find("button-result");
                // RANGE FUNCTION
                // ----------------------------------------------------------
                calculatorBill.on("change", function () {
                    $(this).val();
                    first_batchAmount.text(calculatorfirst_batch.val() + "%");
                    amount = calculatorBill.val() * 1;
                    percent = calculatorfirst_batch.val() * 1;
                    first_batch = amount - amount * (percent / 100);
                    monthly_installmentValue = calculatormonthly_installment.val() * 1;
                });
                calculatorfirst_batch.on("change", function () {
                    if (
                        calculatorBill.val() === "" ||
                        isNaN(calculatorBill.val() || calculatorBill.val() == 0)
                    ) {
                        alert("Enter car's price, please!");
                    } else {
                        first_batchAmount.text(calculatorfirst_batch.val() + "%");
                        amount = calculatorBill.val() * 1;
                        percent = calculatorfirst_batch.val() * 1;
                        first_batch = amount - amount * (percent / 100);
                    }
                });
                calculatormonthly_installment.on("change", function () {
                    if (
                        calculatorBill.val() === "" ||
                        isNaN(calculatorBill.val() || calculatorBill.val() == 0)
                    ) {
                        alert("Enter car's price, please!");
                    } else {
                        monthly_installmentAmount.text(
                            calculatormonthly_installment.val() + " Year"
                        );
                        monthly_installmentValue = calculatormonthly_installment.val() * 1;
                        //result = first_batch / (12 * monthly_installmentValue);
                        $(".button-reset").click(function () {
                            $(".calculator__result").text("");
                            calculatormonthly_installment.val(0);
                            monthly_installmentAmount.text("");
                            calculatorBill.val(0);
                            calculatorfirst_batch.val(0);
                            first_batchAmount.text("");
                            monthly_installmentValue = 0;
                            first_batch = 0;
                            percent = 0;
                            result = 0;
                        });
                    }
                });
            });
            $(".button-result").click(getResult);

            //Get result
            function getResult() {
                //get monthly_installment
                first_batch_value = $(".first_batch").val();
                //get car price
                car_price_value = $(".calculator__bill").val();
                //get year
                year = $(".monthly_installment").val();
                //calculate
                if (
                    car_price_value === "" ||
                    isNaN(car_price_value) ||
                    car_price_value == 0
                ) {
                    alert("Enter car's price, please!");
                } else if (year == 0) {
                    alert("Enter year, please!");
                } else if (first_batch_value == 0) {
                    alert("Enter deposit, please!");
                } else if (first_batch_value == 0 && year == 0) {
                    alert("Enter deposit and year, please!");
                } else {
                    first_batch_final = car_price_value - car_price_value * (first_batch_value / 100);
                    result = first_batch_final / (12 * year);
                    $(".calculator__result").text(
                        "Monthly Installment: " + result.toFixed(2)
                    );
                }
            }
        </script>
    @endsection
@endsection
