<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>profile</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
       <div class="row col-lg-7 border rounded mx-auto mt-4 p-2 shadow-lg" >
        <div class="col-md-4 text-center">
            <img src="./image/profile.jpg" class="img-fluid rounded"style="object-fit:cover;width:180px;height:180px;">
            <div>
                <a href="profile-edit.php">
                    <button class="mx-auto m-1 btn-sm btn btn-primary">Edit</button>
                </a>
            <button class="mx-auto m-1 btn-sm btn btn-warning text-white">Delete</button>
            <button class="mx-auto m-1 btn-sm btn btn-info text-white">Logout</button>
            </div>
        </div >
        <div class="col-md-8">
            <div class="h2 ">User Profile</div>
            <table class="table table-striped ">
                <tr><th colspan="2">User Details:</th></tr>
                <tr><th><i class="bi bi-envelope"></i> Email</th><td>email@email.com</td></tr>
                <tr><th><i class="bi bi-person-circle"></i> First name</th><td>Cyna</td></tr>
                <tr><th><i class="bi bi-person-square"></i> Last name</th><td>Painter</td></tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th><td>Female</td></tr>
                
            </table>
        </div>
       </div>
    </body>
</html>
