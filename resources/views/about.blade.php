<h1>About</h1>
{{URL::current()}}
<br>
{{URL::full()}}
<br>
{{ URL::previous() }}
<br>
{{ redirect()->getUrlGenerator()->previous() }}

{{-- <h2>{{$name}}</h2> --}}



<ul>
    <li><a href="/home">Home</a></li>
    <li><a href="/about">About</a></li>
    <br>
    <li><a href="{{ redirect()->getUrlGenerator()->previous() }}">back</a></li>
</ul>
<table>
<tr>
    <th>title</th>
    {{-- <td>{{$name}}</td> --}}
</tr>
</table>