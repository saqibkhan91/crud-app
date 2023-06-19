
<button>
<a href="register" type="button" class="btn-close">Register</a>

</button>

<h1>Member List</h1>
<table border="1">

<tr>
    <td>id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Password</td>
    <td>Buttons</td>
</tr>
@foreach($users as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['password']}}</td>
            <td>
                <a href="{{"delete/".$item['id']}}">Delete</a>
                <a href="{{"edit/".$item['id']}}">Edit</a>

            </td>

        </tr>

@endforeach

</table>
