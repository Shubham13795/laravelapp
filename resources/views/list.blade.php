<h1>Database CRUD Function Execution</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Address</td>
        <td>Salary</td>
        <td>Operations</td>
    </tr>


@foreach($Employees as $items)
    <tr>
        <td>{{$items['id']}}</td>
        <td>{{$items['name']}}</td>
        <td>{{$items['address']}}</td>
        <td>{{$items['salary']}}</td>
        <td><a href={{"delete/".$items['id']}}>Delete</a>
            <a href={{"edit/".$items['id']}}>Edit</a>
        </td>
    </tr>
@endforeach
</table>

