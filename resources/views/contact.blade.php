@extends('layout')


@section('content')
    <h1 style="text-align: center">This is the contact page</h1>
    <p style="text-align: center">Please fill in your details here (Nothing will happens)</p>
    <center>
    <form>
        <th>Name:</th>
            <td><input type="text" name="name" placeholder="Enter your name"></td>
        <br><br>  
        <th>Email:</th>
            <td><input type="text" name="email" placeholder="Enter your email"></td>
        <br><br>
        <th>Contact Number</th>
            <td><input type="text" name="contact" placeholder="Enter your contact number"></td>        
        <br><br>
        <button onclick="alert('Nothing Happens')">Submit</button>
    </form>
    </center>

@endsection
