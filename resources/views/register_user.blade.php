<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Zameen Dekho</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #80deea);
            font-family: 'Arial', sans-serif;
        }

        .login-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .login-card h4 {
            font-size: 1.8rem;
            color: #00796b;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-label {
            color: #333;
        }

        .btn-dark {
            background-color: #00796b;
            border-color: #00796b;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-dark:hover {
            background-color: #004d40;
            border-color: #004d40;
            transform: translateY(-3px);
        }

        .error-message {
            background-color: #ffebee;
            color: #d32f2f;
            border: 1px solid #d32f2f;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .form-control {
            border-radius: 5px;
        }

        .card-body {
            max-height: 80vh;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card login-card w-75 w-md-50 w-lg-40 shadow-sm">
            <div class="card-body">
                <h4 class="text-center">Welcome New User</h4>

                <!-- Display the error message if it exists in the session -->
                @if (session('status'))
                    <div class="error-message text-center">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('register-user') }}" method="POST">
                    @csrf <!-- CSRF Token for security -->
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="contact_no" class="form-label">Contact No:</label>
                        <input type="text" name="contact_no" class="form-control" id="contact_no" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" id="submit_btn" class="btn btn-dark w-50">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>