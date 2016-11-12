<?php
include 'inc/common.php';

require __DIR__.'/vendor/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1590199477955007', // Replace {app-id} with your app id
  'app_secret' => 'fdd8a09ffa4b0b8d1dd836b8786c28b5',
  'default_graph_version' => 'v2.2',
  ]);
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email,education,first_name,hometown,last_name,location', $_SESSION['fb_access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
// $request = new FacebookRequest(
//   $session,
//   'GET',
//   '/{user-id}/picture'
// );
// $response = $request->execute();
// $graphObject = $response->getGraphObject();
// /* handle the result */
$user = $response->getGraphUser();

// echo 'Name: ' . $user['name'];
// echo 'hometown'. $user['hometown'];
echo '<li class="list-group-item">name:'.$user['name'].'</a>';
echo '<li class="list-group-item">id:'.$user['id'].'</a>';
echo '<li class="list-group-item">email:'.$user['email'].'</a>';
echo '<li class="list-group-item">email:'.$user['email'].'</a>';
?>