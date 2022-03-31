<form
    method="POST"
    action="{{route ('pembeli.halaman.login')}}"
>

    <label>Email :</label>
    <input name="email_pembeli" type="text"></input>
    <label>Password :</label>
    <input name="password_pembeli"type="password"></input>

    <input type="submit" value="login"/>
</form>


