<?php
include 'inc/common.php';
require __DIR__.'/vendor/autoload.php';

  $fb = new Facebook\Facebook([
  'app_id' => '1590199477955007', // Replace {app-id} with your app id
  'app_secret' => 'fdd8a09ffa4b0b8d1dd836b8786c28b5',
  'default_graph_version' => 'v2.2',
  ]);

  function checkUrlStatus(){
    refuseLogin();
    loggedIn();
  }

  function refuseLogin(){
    if( isset($_GET["error_code"])) {
      header("Location:/login.php");
      exit;
    }
  }

  function loggedIn(){
    if( isset($_GET["code"])) {
      $helper = $GLOBALS["fb"]->getRedirectLoginHelper();
      try {
        $accessToken = $helper->getAccessToken();
        var_dump($accessToken);

      } catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
  // header("location:/login.php");
        exit;
      }

      $_SESSION['fb_access_token'] = (string) $accessToken;
    } else makeUserLogIn();

  }
  function getFbStatus() {
    if(isLoggedIn()) {
      redirect();
    } else {
      makeUserLogIn();
    }
  }

  function isLoggedIn() {
    return !empty($_SESSION['fb_access_token']);
  }

  function redirect(){
    header('Location:/map.php');
  }

  function makeUserLogIn(){
    $helper = $fb->getRedirectLoginHelper();

    try {
      $accessToken = $helper->getAccessToken();

    } catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
  // header("location:/login.php");
      exit;
    }
  // if (empty(($accessToken)) {
  //   if ($helper->getError()) {
  //     header('HTTP/1.0 401 Unauthorized');
  //     echo "Error: " . $helper->getError() . "\n";
  //     echo "Error Code: " . $helper->getErrorCode() . "\n";
  //     echo "Error Reason: " . $helper->getErrorReason() . "\n";
  //     echo "Error Description: " . $helper->getErrorDescription() . "\n";
  //   } else {
  //     header('HTTP/1.0 400 Bad Request');
  //     echo 'Bad request';
  //   }
  //   exit;
  // }
  // $oAuth2Client = $fb->getOAuth2Client();
  // $_SESSION['fb_access_token'] = (string) $accessToken;
    
  }
checkUrlStatus();
getFbStatus();
// // Logged in
// echo '<h3>Access Token</h3>';
// var_dump($accessToken->getValue());

// // The OAuth 2.0 client handler helps us manage access tokens
// $oAuth2Client = $fb->getOAuth2Client();

// // Get the access token metadata from /debug_token
// $tokenMetadata = $oAuth2Client->debugToken($accessToken);
// echo '<h3>Metadata</h3>';
// var_dump($tokenMetadata);

// // Validation (these will throw FacebookSDKException's when they fail)
// $tokenMetadata->validateAppId(1590199477955007); // Replace {app-id} with your app id
// // If you know the user ID this access token belongs to, you can validate it here
// //$tokenMetadata->validateUserId('123');
// $tokenMetadata->validateExpiration();

// if (! $accessToken->isLongLived()) {
//   // Exchanges a short-lived access token for a long-lived one
//   try {
//     $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
//   } catch (Facebook\Exceptions\FacebookSDKException $e) {
//     echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
//     exit;
//   }

//   echo '<h3>Long-lived</h3>';
//   var_dump($accessToken->getValue());
// }


// header('Location:/map.php');
?>