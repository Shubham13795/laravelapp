<h1>Edit Data</h1>
<form action="{{url('/')}}/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}"><br><br>
    <input type="text" name="address" value="{{$data['address']}}"><br><br>
    <input type="text" name="salary" value="{{$data['salary']}}"><br><br>
    <input type="submit" value="Update">
</form>
