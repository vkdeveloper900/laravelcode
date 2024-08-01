<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid ">
    <h1 class="text-center">Add user</h1>
    <form action="/form" method="post">
      @csrf
      <div>
        <h3>chekbox</h3>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <br>
        <input type="checkbox" name="skill[]" value="java" id="java">
        <label for="java">java</label>
        <br>
        <input type="checkbox" name="skill[]" value="c" id="c">
        <label for="c">c</label>
      </div>
      <div>
        <h3>radio button</h3>
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">male</label>
        <br>
        <input type="radio" name="gender" value="female" id="female"  >
        <label for="female">female</label>
      </div>
      <div >
        <h3>dropdownn</h3>
        <label for="dropdownn">select</label>
        <select name= "dropdownn" id="">
          <option value="1" name="dropdownn">1</option>
          <option value="2" name="dropdownn">2</option>
          <option value="3" name="dropdownn">3</option>
        </select>

      </div> 
      <div class="mt-2">
        <label for="range1" class="form-label">range</label>
        <input type="range" id="range1" name="range" value="" class="form-range"  />
      </div>

        

        <button type="submit"  class="btn btn-primary">Submit</button>
        
    </form>
  </div>

</body>
<!-- Bootstrap script  -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
  integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
  </script>

</html>