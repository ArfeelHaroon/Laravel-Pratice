<form action="{{ route('employee.store') }}" method="POST">
    @csrf
    Name :<input type="text" placeholder="Enter name.." name="name"><br><br>
    Email :<input type="text" placeholder="Enter Email.." name="email"><br><br>
    <input type="submit" value="create">
</form>
