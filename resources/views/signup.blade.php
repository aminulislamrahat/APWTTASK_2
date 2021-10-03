<h1>signup page</h1>

@if(session('user'))
    <h3 style="color:rgb(34, 192, 34)">Data saved for {{ session('user') }} . Please enter another data or go to Login</h3>
@endif


<form action="save" method="POST">
    @csrf

    <table>
        <tr>
            <td><label for="name">Name : </label><br></td>
            <td><input  type="text" name="name" id="name"><br>
                <span style="color:red">
                @error('name')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="email">Email : </label><br></td>
            <td><input placeholder="example@gmail.com" type="text" name="email" id="email"><br>
                <span style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="password">Password : </label><br></td>
            <td><input type="password" name="password" id="password"><br>
                <span style="color:red">
                @error('password')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="signup_bt" value="signup" id="signup_bt"></td>
            <td><a href="login"> you already have any account? LOGIN </a></td>
        </tr>


    </table>

</form>
