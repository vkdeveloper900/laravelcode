<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
        @include('navbar')


    <h1 class="text-center">{{ __('language.heading1') }}</h1>
    <hr>
    <div class="container ">
        @if (session('massagesuccess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('massagesuccess') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('massageerror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('massageerror') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label
        ="Close"></button>
            </div>
        @endif
        <h2 class="text-center">Form</h2>
        <div class="container">
            <form action="uploaddb" method="post" enctype="multipart/form-data">
                @csrf

                <label for="file">image</label>
                <input type="file" name="file">

                <button type="submit">upload</button>

            </form>



        </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
