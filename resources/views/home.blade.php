<x-massage-banner msg="user login successfull"/>
<x-massage-banner msg="user signup successfull"/>
<h1>home page</h1>
{{URL::current()}}
<br>
{{URL::full()}}
<br>
{{ URL::previous() }}
<nav>
    <a href="/home">home</a>
    <a href="/about">about</a>
    <a href="/">welcome</a>
    <br>
    <li><a href="{{ redirect()->getUrlGenerator()->previous() }}">back</a></li>

</nav>

<p>using other method</p>
<nav>
    <a href="{{url::to('home')}}">home</a>
    <a href="{{url::to('about')}}">about</a>
    <a href="/">welcome</a>

    <a href="{{url::to('about',['anil'])}}">about</a>

</nav>



