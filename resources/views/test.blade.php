<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
        @include('navbar')


    <div class="container">
        <div class="alert alert-primary" role="alert">
            A simple primary alert—check it out!
          </div>
          <div class="alert alert-secondary" role="alert">
            A simple secondary alert—check it out!
          </div>
          <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
          </div>
          <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
          </div>
          <div class="alert alert-warning" role="alert">
            A simple warning alert—check it out!
          </div>
          <div class="alert alert-info" role="alert">
            A simple info alert—check it out!
          </div>
          <div class="alert alert-light" role="alert">
            A simple light alert—check it out!
          </div>
          <div class="alert alert-dark" role="alert">
            A simple dark alert—check it out!
          </div>

    </div>
    <div class="container">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</html>

<h2>
  {{__('language.heading1' )}}
</h2>
<h4>
  {{__('language.subHeading')}}
</h4>
<a href="/about">{{__('language.about' )}}</a>
<br>
<a href="/about">{{__('language.home')}}</a>
<br>
<a href="/about">{{__('language.contactUs')}}</a