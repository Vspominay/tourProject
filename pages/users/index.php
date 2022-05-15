<?php
require('./models/APage.php');
require('./models/AdminUsers.php');
require('./models/User.php');

$adminStatistic = new AdminUsers('Admin Users', array(), '../pages/users/style.css', array(new User("test@test.ts", "testtest", "Dmitry", "Vspominay", "+38067874955", array()), new User("test@test.ts", "testtest", "Dmitry", "Vspominay", "+38067874955", array()), new User("test@test.ts", "testtest", "Dmitry", "Vspominay", "+38067874955", array()), new User("test@test.ts", "testtest", "Dmitry", "Vspominay", "+38067874955", array())));

$adminStatistic->generatePage();
