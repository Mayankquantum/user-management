// Final Version - Task 2 Completed (Database + PHP Sessions)
// Version 2 - Added proper comments and test output
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'autoload.php';

use App\Models\Admin;
use App\Models\RegularUser;
use App\Services\AuthService;

echo "<h2>OOP User Management System - Test</h2><br>";

$admin = new Admin("Alice", "alice@example.com", "admin123");
$user = new RegularUser("Bob", "bob@example.com", "user123");

$authService = new AuthService();

echo $authService->authenticate($admin, "alice@example.com", "admin123") . "<br>";
echo $authService->authenticate($user, "bob@example.com", "user123") . "<br><br>";

echo $admin->logout() . "<br>";
echo $user->logout();
?>
