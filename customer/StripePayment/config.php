<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51OWykrSGddbVWDbU4da58LXS76qm4Wlll992QDK73q43B6ldY9zZdYd6826az7wfojbyP2fG1PnYKXacZwm0Xqjw00vrbctsSy",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51OWykrSGddbVWDbUjyNBXkTFeJbqLCAXubLkxdU3b1LCn2GCnjKubxCyOKWktj0Vy98hllxVUnWi5zVTwPL96UO500g1nOFWCN"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
