<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login - Role & Permission</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f1f4f9;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-card {
      background: #fff;
      padding: 2rem 2.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 420px;
    }
    .login-card h3 {
      margin-bottom: 1.5rem;
      color: #343a40;
    }
    .form-control {
      border-radius: 0.5rem;
    }
    .btn-primary {
      border-radius: 0.5rem;
    }
    .admin-tag {
      font-size: 0.85rem;
      color: #6c757d;
      margin-top: 1rem;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h3 class="text-center">Admin Login</h3>
    <form method="POST" action="/admin/login">
      <!-- Email -->
      <div class="mb-3">
        <label for="adminEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="adminEmail" name="email" placeholder="admin@example.com" required>
      </div>
      
      <!-- Password -->
      <div class="mb-3">
        <label for="adminPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="adminPassword" name="password" placeholder="********" required>
      </div>
      
      <!-- Submit -->
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

      <p class="admin-tag text-center mt-3">Access for role & permission management</p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
