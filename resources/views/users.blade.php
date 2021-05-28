<!-- <x-header componentName="User's" /> -->
<h1>Save Data in Database</h1>
<!-- <h1>User Login</h1> -->
@if(session()->has('name'))
<h1>{{session('name')}} Data saved in Database successfuly</h1>
@endif
<form action="store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter Name"><br><br>
    <input type="text" name="address" placeholder="enter address"><br><br>
    <input type="text" name="salary" placeholder="enter salary"><br><br>
    <input type="submit" value="submit">
</form>


 