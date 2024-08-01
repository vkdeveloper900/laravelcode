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

    <div class="container ">

        <h1 class="text-center">{{ __('language.heading1') }}</h1>

        <hr>

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
    </div>


    {{-- {{ print_r($user) }} --}}
    <h2 class="text-center">Users <br> {{ __('language.datamessage') }}</h2>
    <div class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a href="users" class="btn btn-outline-success">Show All Data</a>
            <form action="searchuser" method="get" class="d-flex" role="search">
                <input type="text" name="search" placeholder="Search User Name" aria-label="Search".
                    class="form-control me-2" required>

                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <form action="deleteMultipleUsers" method="post">
                <button type="submit" class="btn btn-outline-danger">Delete Selected</button>
        </div>
    </div>
    @csrf
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" id="select-all"></th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">email_verified_at</th>
                <th scope="col">Password</th>
                <th scope="col">remember_token</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $row)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $row->id }}"></td>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->email_verified_at }}</td>
                    <td>{{ $row->password }}</td>
                    <td>{{ $row->remember_token }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->updated_at }}</td>
                    <td>
                        <a href="{{ 'updateUser/' . $row->id }}" class="btn btn-primary">Edit</a>
                        <a href="{{ 'deleteUser/' . $row->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </form>

    </div>
    </div>

</body>
<script>
    document.getElementById('select-all').onclick = function() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
</script>
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
