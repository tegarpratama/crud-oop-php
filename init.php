<?php
if(!session_id()) session_start();

require_once 'templates/header.php';
require_once 'templates/footer.php';

require_once 'class/Database.php';
require_once 'class/Employee.php';

require_once 'library/Validation.php';
require_once 'library/Flasher.php';
require_once 'library/Pagination.php';


