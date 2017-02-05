<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Test</title>
    </head>
    <body>
        <form action="store" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name"><br/>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"><br/>
            <label for="password">Password</label>
            <input type="password" name="password", id="password"><br/>
            <label for="mobile">Mobile</label>
            <input type="tel" name="mobile", id="mobile"><br/>
            <label for="address">Address</label> 
            <input type="text" name="address" id="address"><br/>
            <!--<input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <input type="submit" name="submit" id="Submit"><br/>
            
        </form>
    </body>
</html>
