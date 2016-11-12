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
      header("Location:login.php");
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
    header('Location:map.php');
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

?>