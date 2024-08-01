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
    <ul>
        <li><h1>select your language</h1></li>
        <li><a href="/language/en">English</a></li>
        <li><a href="/language/hi">Hindi</a></li>
        <li><a href="/language/ch">Chinese</a></li>
     </ul>

        
    </ul>



    <h2 class="text-center">{{__('language.displaytitle')}}</h2>

    <div class="container ">

        <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{__('language.CardTitle')}}</h5>
                <p class="card-text">{{__('language.massage')}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>
            {{__('language.heading1')}}
        </h1>
          <h3>
            {{__('language.subHeading')}}
          </h3>
          <br>
          <a href="/about">{{__('language.about' )}}</a>
          <br>
          <a href="/about">{{__('language.home')}}</a>
          <br>
          <a href="/about">{{__('language.contactUs')}}</a>
            
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
