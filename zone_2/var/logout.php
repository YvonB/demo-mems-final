<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

header('Location: ' . UserService::createLogoutURL('/zone_1'));
