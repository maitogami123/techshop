<?php
if (!isLoggedIn() || !in_array('P_Create', $user->getPermissions()))
  redirect($routes->get('homepage')->getPath())
    ?>