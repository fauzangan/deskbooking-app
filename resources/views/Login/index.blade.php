<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
rel="stylesheet"
/>
    <title>Login</title>
</head>
<body>

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <form action="/" method="POST">
                    @csrf
                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
          
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="username" name="username" class="form-control form-control-lg" autocomplete="off" />
                          <label class="form-label" for="username">Username</label>
                        </div>
          
                        <div class="form-outline form-white mb-4">
                          <input type="password" id="password" name="password" class="form-control form-control-lg" autocomplete="off" />
                          <label class="form-label" for="username">Password</label>
                        </div>
                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
</body>
</html>