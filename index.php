<?php
//youtube tutorial from John Morris @ https://www.youtube.com/watch?v=1ItudXGjLpM
//official information @ https://twitteroauth.com/
//need to create an app @ https://apps.twitter.com

// keys and tokens

$consumer_key = 'yourKeyHere';

$consumer_secret = 'yourSecretHere';

$access_token = 'yourTokenHere';

$access_token_secret = 'yourSecretTokenHere';

// Include library

require 'twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

// Connect to API

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$content = $connection->get("account/verify_credentials");

// create a tweet

$new_status = $connection->post("statuses/update", ["status"=>"This post was created using Twitter API built with PHP. #100DaysOfCode "]);

// get tweets

$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replier" => true]);

echo "<pre>";
print_r($statuses);



?>