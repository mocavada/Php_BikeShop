<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Closet</title>

    <script src="js/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="/css/form.css" />

</head>
<body>
<main id="tabs">


        <section class="signup-container col33">
           <form id="signup"
                  action="<?php echo $_SERVER['REQUEST_URI']?>"
                  method="post">
                <input type="hidden" name="action" value="sign-up" />

                <fieldset class="users col33">
                   <legend class="col33">Sign Up</legend>
                   <div class="col12 fl">
                    <input type="radio" id="individual"
                     name="user" value="0" checked>
                    <label for="individual">Individual</label>
                    </div>
                    <div class="col12 fr">
                    <input type="radio" id="business"
                     name="user" value="1">
                    <label for="business">Business</label>
                    </div>
                </fieldset>

                <div class="clear"></div>

                 <fieldset class="col33">
                    <ol>
                        <li>

	                      <?php echo $errors[ 'firstname' ]; ?>
							<input placeholder="First Name"
								   id="firstname"
								   name="firstname"
								   type="text"
								   size="50"
								   value="<?php echo $_POST[ 'firstname' ]; ?>" />
                        </li>
                        <li>

	                      <?php echo $errors[ 'lastname' ]; ?>
							<input placeholder="Last Name"
								   id="lastname"
								   name="lastname"
								   type="text"
								   size="50"
								   value="<?php echo $_POST[ 'lastname' ]; ?>" />
                        </li>
                    </ol>
                </fieldset>

                <fieldset class="col33">


                    <ol>

                        <li>

	                      	<?php echo $errors[ 'email' ]; ?>

	                      	<img class="icon col16 fl" src="/images/icons/email-icon.png" alt="email-icon">

							<div class="email col56 fr">
								<input placeholder="john.doe@example.com"
									   id="email"
									   name="email"
									   type="email"
									   size="80"
									   value="<?php echo $_POST[ 'email' ]; ?>" />
							</div>

							<div class="clear"></div>

                        </li>

                        <li>
                            <label>Password</label>
                          <?php echo $errors[ 'password' ]; ?>
                            <input placeholder="Enter your password."
                               type="password"
                               name="password"
                               size="80" />
                            </li>
                        <li>

                            <label>Retype Password</label>
                          <?php echo $errors[ 'password' ]; ?>
                            <input placeholder="Enter your password."
                               type="password"
                               name="password"
                               size="80" />
                        </li>
                    </ol>
                </fieldset>

                <fieldset class="col33">
                    <legend>Delivery</legend>
                    <ol>
                        <li>
                            <label>Address</label>
                            <input placeholder="ex. 123 Anywhere Street, Unit 34"
                                   name="street-address"
                                   type="text"
                                   size="80" />
                        </li>
                        <li>
                            <label>City</label>
                            <input placeholder="ex. Toronto"
                                   name="city"
                                   type="text"
                                   size="80" />
                        </li>
                        <li>
                            <label>Province/State</label>
                            <!-- select: creates a drop-down menu -->
                            <select name="province">
                                <!-- optgroup: allows categorization
                                     of options, with labels. -->
                                <optgroup label="Provinces">
                                    <!-- option: individual options,
                                         values are submitted -->
                                    <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option selected value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="YT">Yukon</option>
                                </optgroup>

                            </select>
                        </li>
                        <li>
                        	<label>Postal Code</label>
                        <?php echo $errors[ 'postal_code' ]; ?>
                            <input placeholder="Postal Code ex. A1B2C3"
                               type="number"
                               name="postal_code"
                               size="6" />
						</li>
                        <li>
                        	<label>Contact Number</label>
                        <?php echo $errors[ 'phone_number' ]; ?>
                            <input placeholder="Contact Number ex. 6123456789"
                               type="number"
                               name="phone_number"
                               size="10" />
						</li>

<!--
                        <li>
                            <label class="long">Instructions</label>
                            <textarea
                                placeholder="Door buzzer code, side door, etc."
                                name="instructions"
                                rows="4"
                                cols="80"></textarea>
                        </li>
-->
                    </ol>
                </fieldset >

                <fieldset class="col33">
                    <ol>
                        <li>

                            <input type="submit"
                                   value="Submit" />

                        </li>
                    </ol>
                </fieldset>
            </form>
        </section>

</main>

    </body>
</html>
