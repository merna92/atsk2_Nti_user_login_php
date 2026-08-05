<?php
include 'includes/header.php';
require_once 'includes/db.php';

if (isset($_POST['student_name']) && isset($_POST['student_email']) && $_POST['student_password'] && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentName = $_POST['student_name'];
    $studentEmail = $_POST['student_email'];
    $studentPass = password_hash($_POST['student_password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO students (student_name, student_email, student_password) VALUES (:student_name, :student_email, :student_password)";
    $stmt  = $pdo->prepare($query);

    $stmt->execute([
        ':student_name'     => $studentName,
        ':student_email'    => $studentEmail,
        ':student_password' => $studentPass
    ]);

    if ($stmt) {
        echo "<div class='alert alert-success'>Student registered successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Something went wrong</div>";
    }
}
?>

<div class="row justify-content-center register-page">
    <div class="col-md-9">
        <div class="auth-card">
            <div class="row g-0">
                <div class="col-md-5">
                    <div class="side-img garden-img"></div>
                </div>
                <div class="col-md-7">
                    <div class="form-box">
                        <h2 class="text-center auth-title">Register</h2>
                        <div class="badge-line"></div>
                        <p class="text-center auth-subtitle mb-4">Create your student account</p>

                        <form method="POST">
                            <input class="form-control mb-3" type="text" placeholder="Write Student Name" name="student_name">
                            <input class="form-control mb-3" type="email" placeholder="Write Student Email" name="student_email">
                            <input class="form-control mb-3" type="password" placeholder="Write Student Password" name="student_password">
                            <button class="btn btn-main w-100" type="submit">Submit</button>
                        </form>

                        <div class="text-center mt-3">
                            <a href="login.php">Already have account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
