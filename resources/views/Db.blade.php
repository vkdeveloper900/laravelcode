<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <h1>hello this is db view</h1>
    <table border="2">
        <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>password</th>
                <th>Remember_Token</th>
                <th>Created At</th>
                <th>Updated At</th>
        </tr>

        @foreach ($users as $user) 
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email_verified_at}}</td> 
                        <td>{{$user->password}}</td>
                        <td>{{$user->remember_token}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                    
       @endforeach
    </table>
</div>
