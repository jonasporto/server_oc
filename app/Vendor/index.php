<?php
    require 'php-sdk/src/facebook.php';

    $facebook = new Facebook(array(
        'appId'  => '1477767125784966',
        //'secret' => 'f45183283e9f5ad2a3143cf7e3ad0661'
    ));

     $loginURL = $facebook->getLoginUrl(array(
         'scope' => array(
                            //'publish_stream',
                            'email',
                            'public_profile',
         //                   'manage_pages',
                            )
     ));

    //$user = $facebook->getUser();

    //if ($user) {
     /*   $post =  array(
            'message' => '...'
        );
        $facebook->api('/me/feed', 'POST', $post);
    */

      // $friends = $facebook->api('/me/friends');
       // var_dump($friends);
      // var_dump($user);
       // var_dump($facebook);
    //} else {
      //echo "<a href=\"".$loginURL."\">Logar no facebook</a>";
    //}

   //$test = $facebook->api("$user/likes/7354446700");

    var_dump($loginURL);
    
?>
