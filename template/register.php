<!DOCTYPE html> 
<html>
<head> 

<meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<style>  [class *="card"] {
        margin-top: 20px;
        height: 500px;
        border-radius: 10px;
        background-color:grey;
        margin-bottom: 50px;
    }
    </style> 

</head>

<body>

 
<form class="form-signin" >

<h1 class="h3 mb-3 font-weight-normal"> Please Sign In</hi1>
<label for="inputEmail" class="sr-only"> Email Address</label>
<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
<label for="inputPassword" class="sr-only">Password</label>
<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
<div class="checkbox mb-3"></div>
<label>
    <input type="checkbox" value="remember-me">
    "Remember me "
</label>
</div> 
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<p class="mt-5 mb-3 text-muted"> 2017-2018</p>

</form>




<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>