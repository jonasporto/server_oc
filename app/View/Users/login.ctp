<?php

echo $this->Session->flash('auth');
echo $this->Session->flash() ;
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('login');

?>

<a href="<?=$fb;?>"><img src="http://png-2.findicons.com/files/icons/2052/social_network/32/facebook.png" /></a>