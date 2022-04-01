<form
    method="POST"
    action="{{route ('pembeli.register.submit')}}"
>
    @csrf
    <label>Nama :</label>
    <input name="nama_pembeli" type="text"></input>
    <label>Email :</label>
    <input name="email" type="text"></input>
    <label>Password :</label>
    <input name="password"type="password"></input>
    <label>Kelamin :</label>
    <input name="jk_pembeli"type="text"></input>
    <label>alamat :</label>
    <input name="alamat_pembeli"type="text"></input>
    <label>telepon :</label>
    <input name="tlp_pembeli"type="text"></input>
    <input type="submit" value="Daftar"/>
</form>


