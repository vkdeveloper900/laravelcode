<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
        @include('navbar')


    <h1 class="text-center">{{__('language.heading1')}}</h1>
    <hr>

    <div class="container mt-5">
        <h2 class="text-center">Update Student Data</h2>
        <hr>
    @foreach ($query as $row)

        <form action="/updatestudentquery/{{{ $row->id }}}" method="post">
            
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $row->name }}" required>
            </div>
            <div class="form-group">
                <label for="class">Select Your Class</label>
                <select class="form-select" name="class">
                    <option value="BCA" {{ $row->class == 'BCA' ? 'selected' : '' }}>BCA</option>
                    <option value="BA" {{ $row->class == 'BA' ? 'selected' : '' }}>BA</option>
                    <option value="BCOM" {{ $row->class == 'BCOM' ? 'selected' : '' }}>BCOM</option>
                    <option value="BSC" {{ $row->class == 'BSC' ? 'selected' : '' }}>BSC</option>
                    <option value="BSC-IT" {{ $row->class == 'BSC-IT' ? 'selected' : '' }}>BSC-IT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="part">Select Your Part</label>
                <select class="form-select" name="part">
                    <option value="A" {{ $row->part == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ $row->part == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ $row->part == 'C' ? 'selected' : '' }}>C</option>
                </select>
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
