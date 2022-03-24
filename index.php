<html>
<head>
<meta charset="UTF-8'>
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
      <div class="col-sm-10 col-xs-10 col-md-5 col-lg-5 m-5">
        <div style="background-image: linear-gradient(#66a3ff, #b3d1ff); padding:20px;">
            <h2 style="text-align: center; color: white;">Register</h2>
        <br>
        <form action="handleSignup.php"  method="post">
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputUser" class="col-sm-2 col-form-label">First Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="firstName" placeholder="firstName">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputUser" class="col-sm-2 col-form-label">Last Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="lastName" placeholder="lastName">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Sign Up" name="submit" class="btn btn-primary" style="width:100%"/>
              </div>
            </div>
        </form>
      </div>
      </div>

      <div class="col-sm-10 col-xs-10 col-md-5 col-lg-5 m-5">
        <div style="background-image: linear-gradient(#66a3ff, #b3d1ff);padding:20px;">
        <h2 style="text-align: center; color: white;">Sign In </h2>
        <br>

        <form action="handleSignin.php"  method="post" >
          <div class="form-group row" >
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <input type="submit" value="Sign In" name="submit" class="btn btn-primary" style="width:100%"/>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  
</body>
</html>