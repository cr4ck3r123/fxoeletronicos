<?php
session_start();
require_once 'lib/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '{1041071169964912}', // Replace {app-id} with your app id
  'app_secret' => '{5572c7c0c53b6b47b861c2e862960cfb}',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email'];
//var_dump($helper);

try {
    if(isset($_SESSION['face_access_token'])){
          $accessToken = $helper->getAccessToken();
    }else{
          $accessToken = $helper->getAccessToken();
    }
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
      $url_login = 'http://localhost/shampoogelado/face.php';
      $loginUrl = $helper->getLoginUrl($url_login, $permissions);
  } else {
      $url_login = 'http://localhost/shampoogelado/face.php';
      $loginUrl = $helper->getLoginUrl($url_login, $permissions);
      
      if(isset($_SESSION['face_access_token'])){
          $fb->setDefaultAccessToken($_SESSION['face_access_token']);
      }else{
          $_SESSION['face_access_token'] = (string) $accessToken;
          $oAuth2Client = $fb->getOAuth2Client();
          $_SESSION['face_access_token'] = $oAuth2Client->getLongLivedAccessToken($_SESSION['face_access_token']);
          $fb->setDefaultAccessToken($_SESSION['face_access_token']);
          }
          
          try{
              $response = $fb->get('/me?fields=id,name, picture, email');
              $user = $response->getGraphUser();
              var_dump($user);
          } catch (Facebook\Exceptions\FacebookAuthenticationException $e) {
              echo 'Graph returned an error: '. $e->getMessage();
              exit;
          } catch (Facebook\Exceptions\FacebookAuthenticationException $e){
              echo 'Facebook SDK returned an error: '. $e->getMessage();
              exit;
          }
          
          
  }
  exit;
}