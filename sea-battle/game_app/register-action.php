<?
require_once 'lib.php';
//1 obtain form data
$username = $_POST['username'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

//2 check password confirmation
if ($password != $password_confirm){
    header("Location: /create-account.php?message=". urlencode("password & confirmation do not match"));
}else{
// 3. Validate username
if (strlen($username) < 3) {
    header("Location: /create-account.php?message=" . urlencode("username must be at least 3 simbols"));
} else {
    // 4. Check username availability
    $existing_users = load_users();
    foreach ($existing_users as $user) {
        if ($user['username'] === $username) {
            header("Location: /create-account.php?message=" . urlencode("username already exists"));
            return; 
        }
    }

    // 5. Save user data 
    $existing_users[] = [
        "username" => $username,
        "password" => $password
    ];
    save_users($existing_users);
    header("Location: /login.php?message=" . urlencode("account created successfully! Please login."));
}
}
?>