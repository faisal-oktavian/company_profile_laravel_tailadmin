<?php
// Fix password hashing issue

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Use Laravel's hash function
$app = require 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\Hash;
use App\Models\User;

try {
    // Update superadmin password
    $user = User::where('email', 'superadmin@gmail.com')->first();
    if ($user) {
        $user->password = 'password'; // This will be auto-hashed by the mutator
        $user->save();
        echo "Password updated successfully for superadmin@gmail.com\n";
        echo "Hashed password: " . $user->password . "\n";
    } else {
        echo "User not found\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
