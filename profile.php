<?php
require_once 'includes/db.php';
include 'includes/header.php';

if (!isset($_SESSION['student_id'])) {
    header('Location: login.php');
    exit;
}
?>

<div class="row justify-content-center profile-page">
    <div class="col-md-8">
        <div class="profile-box">
            <div class="profile-photo garden-img"></div>
            <div class="profile-content">
                <h2 class="auth-title">Hello <?php echo $_SESSION['student_name'] ?></h2>
                <div class="badge-line mx-0"></div>

                <ul class="list-group mb-4">
                    <li class="list-group-item">ID: <?php echo $_SESSION['student_id'] ?></li>
                    <li class="list-group-item">Name: <?php echo $_SESSION['student_name'] ?></li>
                    <li class="list-group-item">Email: <?php echo $_SESSION['student_email'] ?></li>
                </ul>

                <form method="POST" action="logout.php">
                    <button class="btn btn-danger" type="Submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
