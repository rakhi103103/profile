<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>profileedit</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
       <div class="row col-lg-8 border rounded mx-auto mt-4 p-2 shadow-lg" >
        <div class="col-md-4 text-center">
            <img src="./image/pro.jpg" class="js-image img-fluid rounded"style="object-fit:cover;width:180px;height:180px;">
            <div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Click below to select an image</label>
                <input onchange="display_image(this.files[0])" class="form-control" type="file" id="formFile">
            </div>
            </div>
        </div >
        <div class="col-md-8">
            <div class="h2 ">Edit Profile</div>

            <form method="post">
                <table class="table table-striped ">
                    <tr><th colspan="2">User Details:</th></tr>
                    <tr><th><i class="bi bi-envelope"></i> Email</th>
                        <td>
                            <input type="text" class=" form-control" name="email" placeholder="Email">
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-person-circle"></i> First name</th>
                        <td>
                            <input type="text" class=" form-control" name="fname" placeholder="Firstname">
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-person-square"></i> Last name</th>
                        <td>
                            <input type="text" class=" form-control" name="lname" placeholder="Lastname">
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                        <td>
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="">--select gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        </td>
                    </tr>
                    
                </table>

                <div class="p-2">
                    <button class="btn btn-primary float-end">Save</button>
                    <a href="index.php">
                    <label class="btn btn-secondary">Back</label>
                    </a>
                </div>
            </form>
           
        </div>
       </div>
    </body>
</html>

<script>
function display_image(file)
{
    var img = document.querySelector(".js-image");
    img.src = URL.createObjectURL(file);
}
</script>
