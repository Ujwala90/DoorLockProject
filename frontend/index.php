<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.responsivevoice.org/responsivevoice.js"></script>
<script src="../middleware/enroll.js"></script>
<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="../images/dooes.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="../images/dooes.jpg" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Enroll Employee Details</p>
                            <form autocomplete="off" id="form">
                                <div class="form-group">
                                    <input type="text" id="ename" class="form-control"
                                        placeholder="Enter Employee Name">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="email"  id="eemail" class="form-control"
                                        placeholder="Enter Employee Email">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text"  id="emobile" class="form-control"
                                        placeholder="Enter Employee Mobile">
                                </div>
                                <input name="login" id="submit" class="btn btn-block login-btn mb-4 btn btn-success"
                                    type="button" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>