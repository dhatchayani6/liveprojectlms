<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />


    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">


</head>

<body>
    <?php include('topbar.php') ?>
    <div class="d-flex" style="position: relative;">

        <?php include('sidebar.php') ?>

        <!-- Main Content -->
        <div id="content-area" class="p-4 w-100">

            <div class="row g-4">

                <!-- Header -->
                <div class="col-12 ">
                    <div class="card border-2 rounded-4 p-4 shadow-sm hover-shadow">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class=" mb-0 fs-5">Document Verification
                                </h4>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bg-white border rounded-4 p-3 text-center shadow-sm mt-3">

                        <!-- Icon -->
                        <i class="bi bi-file-earmark-text text-secondary" style="font-size:2rem;"></i>

                        <!-- Heading -->
                        <h3 class="text-dark mt-3 mb-2">No Pending Documents</h3>

                        <!-- Sub Text -->
                        <p class="text-muted mb-4">All documents have been approved</p>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>





</body>

</html>