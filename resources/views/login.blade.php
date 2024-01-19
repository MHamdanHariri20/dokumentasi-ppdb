<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>
    <a href="/" style="position: absolute; margin-top: 10px; margin-left: 390px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
      </svg>
    </a>
    <div class="container" style="justify-content: center; margin-top: 40px;">
        <legend style="text-align: center;">Login</legend><br>
      <form action="POST" {{route('login.auth')}} class="card py-5 px-5 col-6" style="margin: auto;">
        @csrf
        <fieldset >
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">email</label>
            <input type="email" id="disabledTextInput" name="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Password</label>
            <input type="password" id="disabledTextInput" name="password" class="form-control" placeholder="Enter your password">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>
      <p style="text-align: center;">Do not Have account <a href="/register">Register</a></p>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
