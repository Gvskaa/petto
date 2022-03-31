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
    <label>Kelamin :</label>
    <input name="jk_pembeli"type="JenisKelamin"></input>
    <label>alamat :</label>
    <input name="alamat_pembeli"type="Alamat"></input>
    <label>telepon :</label>
    <input name="tlp_pembeli"type="Telepon"></input>
    <input type="submit" value="Daftar"/>
</form>


