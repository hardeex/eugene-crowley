<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Login</h2>
                <form action="login-handler.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p class="mt-3">Don't have an account? <a href="signup.php">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>

    INSERT INTO users (email, password, is_admin) VALUES ('your-email@example.com', 'hashed_password', 1);
