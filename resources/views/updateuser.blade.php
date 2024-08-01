<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
        @include('navbar')


    <h1 class="text-center">{{ __('language.heading1') }}</h1>
    <hr>
    {{-- {{ print_r($query) }} --}}



    <div class="container ">
        <h2 class="text-center">Update User Data</h2>
        <hr>
    @foreach ($query as $row)

        <form action="/updateuserquery/{{{ $row->id }}}" method="post">
            @csrf
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $row->name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $row->email}}"
                    required>
            </div>
            {{-- <div class="form-group">
                <label for="email_verified_at">email_verified_at</label>
                <input type="datetime-local" class="form-control" id="email_verified_at" name="email_verified_at"
                    placeholder="email_verified_at" required>
            </div> --}}
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    value="{{ $row->password }}" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                    placeholder="Enter your confirmPassword" required>
            </div>
            <div class="form-group">
                <label for="remember_token">remember_token</label>
                <input type="remember_token" class="form-control" id="remember_token" name="remember_token"
                    value="{{ $row->remember_token }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update</button>

            @endforeach
  
        </form>


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
