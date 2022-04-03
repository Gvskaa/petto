<form>
    <label>Nama :</label>
    <input name="nama_admin" value= "{{$admin->nama_admin}}"type="text"></input>
    <label>Email :</label>
    <input name="email_admin" value= "{{$admin->email}}"type="text"></input>
    <a href="{{route('admin.logout')}}">Logout</a>
</form>
