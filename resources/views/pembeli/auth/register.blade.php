<form 
    method="POST" 
    action="{{route ('pembeli.register.submit')}}"
>
    @csrf
    <label>Nama :</label>
    <input name="nama_pembeli" type="text"></input>
    <label>Email :</label>
    <input name="email_pembeli" type="text"></input>
    <label>Password :</label>
    <input name="password_pembeli"type="password"></input>
    <input type="submit" value="Daftar"/>
</form>