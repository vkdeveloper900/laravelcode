<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body >
    <div class="container-fluid ">
    <h1 class="text-center">Add user</h1>
    <form action="adduser" method="post">
        @csrf
        <div class="input-group-text m-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="input-group-text m-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="input-group-text m-3">
                    <label for="city">city</label>
                    <input type="text" name="city" id="city" class="form-control">
                </div>      
        <button type="submit" class="btn btn-primary m-3">Submit</button>
    </form>
</div>

</body>
<!-- Bootstrap script  -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>

</html>