<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hapsay OOP</title>

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
                    <label for="member">Member</label>
                    </div>
                    <div class="col12 fr">
                    <input type="radio" id="seller"
                     name="user" value="1">
                    <label for="seller">Seller</label>
                    </div>
                </fieldset>

                <div class="clear"></div>

                 <fieldset class="col33">
                    <ol>
                        <li>

	                      <?php //echo $errors[ 'firstname' ]; ?>
							<input placeholder="First Name"
								   id="firstname"
								   name="firstname"
								   type="text"
								   size="50"
								   value="<?php //echo $_POST[ 'name' ]; ?>" />
                        </li>
                        <li>

	                      <?php //echo $errors[ 'lastname' ]; ?>
							<input placeholder="Last Name"
								   id="lastname"
								   name="lastname"
								   type="text"
								   size="50"
								   value="<?php //echo $_POST[ 'last_name' ]; ?>" />
                        </li>
                    </ol>
                </fieldset>

                <fieldset class="col33">


                    <ol>

                        <li>

	                      	<?php //echo $errors[ 'email' ]; ?>

	                      	<img class="icon col16 fl" src="/images/icons/email-icon.png" alt="email-icon">

							<div class="email col56 fr">
								<input placeholder="john.doe@example.com"
									   id="email"
									   name="email"
									   type="email"
									   size="80"
									   value="<?php //echo $_POST[ 'email_address' ]; ?>" />
							</div>

							<div class="clear"></div>

                        </li>

                        <li>
                            <label>Password</label>
                          <?php //echo $errors[ 'password' ]; ?>
                            <input placeholder="Enter your password."
                               type="password"
                               name="password"
                               size="80" />
                            </li>
                        <li>

                            <label>Retype Password</label>
                          <?php //echo $errors[ 'password' ]; ?>
                            <input placeholder="Enter your password."
                               type="password"
                               name="password"
                               size="80" />
                        </li>
                    </ol>
                </fieldset>


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

        <?php

        //array of defined variables MY FAVORITE
        echo "<pre>";
        print_r(get_defined_vars());
        echo "</pre>";


         ?>

</main>


    </body>
</html>
