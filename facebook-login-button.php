
<?php
require __DIR__.'/vendor/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1590199477955007', // Replace {app-id} with your app id
  'app_secret' => 'fdd8a09ffa4b0b8d1dd836b8786c28b5',
  'default_graph_version' => 'v2.2',
  ]);
$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://liu1ee.myweb.cs.uwindsor.ca/fb-callback.php', $permissions);

echo '<a class="btn btn-lg btn-primary btn-block" href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>