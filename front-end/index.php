<?php $us_states = array( 'AL'=>'ALABAMA', 'AK'=>'ALASKA', 'AS'=>'AMERICAN SAMOA', 'AZ'=>'ARIZONA', 'AR'=>'ARKANSAS', 'CA'=>'CALIFORNIA', 'CO'=>'COLORADO', 'CT'=>'CONNECTICUT', 'DE'=>'DELAWARE', 'DC'=>'DISTRICT OF COLUMBIA', 'FM'=>'FEDERATED STATES OF MICRONESIA', 'FL'=>'FLORIDA', 'GA'=>'GEORGIA', 'GU'=>'GUAM GU', 'HI'=>'HAWAII', 'ID'=>'IDAHO', 'IL'=>'ILLINOIS', 'IN'=>'INDIANA', 'IA'=>'IOWA', 'KS'=>'KANSAS', 'KY'=>'KENTUCKY', 'LA'=>'LOUISIANA', 'ME'=>'MAINE', 'MH'=>'MARSHALL ISLANDS', 'MD'=>'MARYLAND', 'MA'=>'MASSACHUSETTS', 'MI'=>'MICHIGAN', 'MN'=>'MINNESOTA', 'MS'=>'MISSISSIPPI', 'MO'=>'MISSOURI', 'MT'=>'MONTANA', 'NE'=>'NEBRASKA', 'NV'=>'NEVADA', 'NH'=>'NEW HAMPSHIRE', 'NJ'=>'NEW JERSEY', 'NM'=>'NEW MEXICO', 'NY'=>'NEW YORK', 'NC'=>'NORTH CAROLINA', 'ND'=>'NORTH DAKOTA', 'MP'=>'NORTHERN MARIANA ISLANDS', 'OH'=>'OHIO', 'OK'=>'OKLAHOMA', 'OR'=>'OREGON', 'PW'=>'PALAU', 'PA'=>'PENNSYLVANIA', 'PR'=>'PUERTO RICO', 'RI'=>'RHODE ISLAND', 'SC'=>'SOUTH CAROLINA', 'SD'=>'SOUTH DAKOTA', 'TN'=>'TENNESSEE', 'TX'=>'TEXAS', 'UT'=>'UTAH', 'VT'=>'VERMONT', 'VI'=>'VIRGIN ISLANDS', 'VA'=>'VIRGINIA', 'WA'=>'WASHINGTON', 'WV'=>'WEST VIRGINIA', 'WI'=>'WISCONSIN', 'WY'=>'WYOMING', 'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST', 'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)', 'AP'=>'ARMED FORCES PACIFIC' ); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="custom.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d9886c3daa.js" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <main>
        <form action="" method="post">
            <section class="checkout container">
                <h1>Checkout</h1>
                <div class="row">
                    <div class="col-md-6 col-lg-3 step step--login">
                        <h2>Create Login</h2>
                        <p>Teachers &amp; students share one login</p>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="step1_username" id="step1_username" placeholder="Username" class="form-control" />
                            </div>
                            <div class="col-12">
                                <input type="password" name="step1_password" id="step1_password" placeholder="Enter your password" class="form-control" />
                            </div>
                            <div class="col-12">
                                <input type="tel" name="step1_pin" id="step1_pin" placeholder="Create a 4-digit PIN" class="form-control" />
                                <label for="step1_pin">PIN is for access to the manage account page.</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 step step--customer">
                        <h2>Customer Information</h2>
                        <p>For the person/organization paying</p>
                        <div class="row">
                            <div class="col-lg-7">
                                <input type="text" name="step2_name" id="step2_name" placeholder="Your Name" class="form-control" />
                            </div>
                            <div class="col-lg-5">
                                <select name="step2_role" id="step2_role" class="form-select">
                                    <option value="librarian">Librarian</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="principal">Principal</option>
                                    <option value="vice_principal">Vice Principal</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="email" name="step2_email" id="step2_email" placeholder="Your Email" class="form-control" />
                            </div>
                            <div class="col-12">
                                <input type="text" name="step2_school_name" id="step2_school_name" placeholder="School Name" class="form-control" />
                            </div>
                            <div class="col-12">
                                <input type="text" name="step2_billing_address" id="step2_billing_address" placeholder="Billing Address" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="step2_city" id="step2_city" placeholder="City" class="form-control" />
                                <select name="step2_state" id="step2_state" class="form-select">
                                    <option value="">State</option>
                                    <?php
                                    foreach ($us_states as $abbr=>$state):
                                        echo '<option value="'.$abbr.'">'.$abbr.'</option>';
                                    endforeach; 
                                    ?>
                                </select>
                                <input type="tel" name="step2_zip" id="step2_zip" placeholder="ZIP" class="form-control" />
                            </div>
                            <div class="col-12">
                                <a href="#">Click here for international address.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 step step--payment">
                        <h2>Secure Payment</h2>
                        <p>Choose payment method below</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-check form-check--active">
                                    <input class="radio-custom" type="radio" name="step3_payment_type" id="step3_payment_type_card" checked>
                                    <label class="radio-custom-label" for="step3_payment_type_card">
                                        Credit/Debit Card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="radio-custom" type="radio" name="step3_payment_type" id="step3_payment_type_po">
                                    <label class="radio-custom-label" for="step3_payment_type_po">
                                        Purchase Order
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="tel" name="step3_card_number" id="step3_card_number" placeholder="Card Number" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="tel" name="step3_card_exp_month" id="step3_card_exp_month" placeholder="MM" class="form-control" />
                                <input type="tel" name="step3_card_exp_year" id="step3_card_exp_year" placeholder="YY" class="form-control" />
                                <input type="tel" name="step3_card_exp_cvc" id="step3_card_exp_cvc" placeholder="CVC" class="form-control" />
                            </div>
                            <div class="col-12">
                                <button type="submit">
                                    <i class="fa-solid fa-lock"></i>
                                    <span>Pay Now</span>
                                    <span class="button--arrow">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 step step--summary">
                        <div class="step-shader">
                            <h2>Order Summary</h2>
                            <h3>School Yearly Plan</h3>
                            <p>This is a yearly recurring subscription paid once a year at $795. Cancel any time with 1 click on the mannage account pagd. We send email reminders 30 days before each renewal.</p>
                            <select name="step4_plan" id="step4_plan" class="form-select">
                                <option value="annual_1">1 Year @ $795 per year</option>
                            </select>
                            <div class="checkout__total">
                                <span>Total</span>
                                <strong>$795</strong>
                            </div>
                        </div>
                        <div class="checkout__promotion">
                            <i class="fa-solid fa-bell bell"></i>
                            <div>
                                <p>January Promotion Applied</p>
                                9 Months Free Will Be<br />Auto-Added to Plan
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="custom.js"></script>
</body>
</html>