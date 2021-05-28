<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Address</td>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
    </tr>
    @endforeach
</table>