<!-- Header -->
<div
    class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
    <h5 class="mb-0 assignment-titles">
        <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>Viana Study
    </h5>
    <a href="../index.php">
        <button class="btn d-flex align-items-center logout-btn gap-2">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </button>
    </a>
</div>

<!-- User Profile -->
<div class="user-profile"
    style="background: linear-gradient(rgb(240, 246, 255), rgb(216, 232, 255)); border-bottom: 1px solid rgb(184, 208, 240); box-shadow: rgba(255, 255, 255, 0.6) 0px 1px 0px inset;">
    <img src="../images/image.png" alt="Dr. Emily Rodriguez" class="profile-pic">
    <div class="user-details ps-2">
        <div class="name"><?php echo $_SESSION['name']; ?></div>
        <div class="info">
            <span class="id">Student ID: <?php echo $_SESSION['regno']; ?></span> 
            <!-- &bull; -->
            <!-- <span class="dept">Computer Science</span> -->
        </div>
    </div>
</div>