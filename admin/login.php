<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experience the best mobile IV therapy in the USA with IV Home Care. Boost your health with customized vitamin infusions delivered to your door. Book now!">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        .main {
            background: url('../assets/images/background3.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #fcard {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            opacity: 0.8;
        }
        #errorMessage {
            display: none;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('form').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting via the browser
                var email = $('#email').val();
                var password = $('#password').val();

                // Basic validation
                if (email === '' || password === '') {
                    $('#errorMessage').text('Both fields are required.').show();
                    return;
                }

                $.ajax({
                    type: 'POST',
                    url: 'query/loginscript.php',
                    data: { email: email, password: password },
                    success: function(response) {
                        if (response.trim() === 'success') {
                            window.location.href = 'dashboard.php';
                        } else {
                            $('#errorMessage').text(response).show();
                        }
                    },
                    error: function() {
                        $('#errorMessage').text('An error occurred. Please try again.').show();
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="main">
        <div class="col-lg-4 m-0 p-5 bg-black" id="fcard">
            <h4 class="text-center text-light">Admin Login</h4>
            <form method="POST" action="" class="mt-5">
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email address</label>
                    <input type="email" name="email" placeholder="Enter your Email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control" id="password">
                </div>
                <p class="text-danger" id="errorMessage"></p>
                <input type="submit" value="Login" class="btn btn-success p-2 px-5">
            </form>
        </div>
    </div>
</body>
</html>
