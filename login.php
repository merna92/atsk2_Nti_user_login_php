<?php
require_once 'includes/db.php';
include 'includes/header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $userPass = $_POST['password'];

    $query = "SELECT * FROM students WHERE student_email='$email'";
    
    $stmt = $pdo->query($query);
    
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($student && password_verify($userPass, $student['student_password'])) {
        $_SESSION['student_id'] = $student['student_id'];
        $_SESSION['student_email'] = $student['student_email'];
        $_SESSION['student_name'] = $student['student_name'];
        
        header('Location: profile.php');
        exit;
    } else {
        echo "<div class='alert alert-danger'>Invalid email or password.</div>";
    }
}
?>

<div class="row justify-content-center login-page">
    <div class="col-md-9">
        <div class="auth-card">
            <div class="row g-0">
                <div class="col-md-5">
                    <div class="side-img login-img"></div>
                </div>
                <div class="col-md-7">
                    <div class="form-box">
                        <h2 class="text-center auth-title">Login</h2>
                        <div class="badge-line"></div>
                        <p class="text-center auth-subtitle mb-4">Welcome back</p>

                        <form method="POST">
                            <input class="form-control mb-3" type="email" name="email" placeholder="write your email" autocomplete="off">
                            <input class="form-control mb-3" type="password" placeholder="write your password" name="password">
                            <button class="btn btn-main w-100" type="submit">Log in</button>
                        </form>

                        <div class="text-center mt-3">
                            <a href="register.php">Create new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
