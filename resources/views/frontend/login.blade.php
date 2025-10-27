<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login — Shriji Brothers</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet" />

  <style>
    /* === Scoped Styles (Parent: .shriji-login-page) === */
    .shriji-login-page {
      font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
      background: linear-gradient(180deg, #ffffff 0%, #f6f8fb 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      color: #222;
    }

    .shriji-login-page .sb-card {
      width: 100%;
      max-width: 980px;
      border: 0;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(16, 24, 40, 0.08);
      display: flex;
      flex-direction: row;
    }

    /* Left: Brand Panel */
    .shriji-login-page .sb-brand {
      flex: 1;
      background: linear-gradient(135deg, rgba(13, 110, 253, 0.95), rgba(3, 169, 244, 0.9));
      color: #fff;
      padding: 2.25rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
      min-height: 420px;
    }

    .shriji-login-page .sb-brand-logo {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .shriji-login-page .sb-brand-logo img {
      width: 46px;
      height: 46px;
      background: #fff;
      border-radius: 8px;
      padding: 6px;
    }

    .shriji-login-page .sb-brand-title {
      font-weight: 700;
      letter-spacing: 0.2px;
    }

    .shriji-login-page .sb-hero {
      position: absolute;
      right: -80px;
      bottom: -40px;
      width: 320px;
      height: 320px;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.14), rgba(255,255,255,0.05) 30%, transparent 40%);
      filter: blur(8px);
    }

    /* Right: Form Panel */
    .shriji-login-page .sb-form {
      flex: 1;
      background: #fff;
      padding: 2.25rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      min-height: 420px;
    }

    .shriji-login-page .sb-form-heading {
      font-size: 1.125rem;
      font-weight: 700;
    }

    .shriji-login-page .sb-form-sub {
      font-size: 0.95rem;
      color: #6c757d;
      margin-bottom: 1.25rem;
    }

    .shriji-login-page .sb-input {
      border-radius: 10px;
      padding: 0.85rem 0.95rem;
    }

    .shriji-login-page .sb-input:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.12rem rgba(13, 110, 253, 0.12);
    }

    .shriji-login-page .sb-btn-primary {
      border-radius: 10px;
      padding: 0.78rem 1rem;
      font-weight: 600;
    }

    .shriji-login-page .sb-text-link {
      color: #0d6efd;
      font-weight: 600;
      text-decoration: none;
    }

    .shriji-login-page .sb-divider {
      display: flex;
      align-items: center;
      gap: 0.8rem;
      margin: 1rem 0;
      color: #6c757d;
      font-size: 0.9rem;
    }

    .shriji-login-page .sb-divider hr {
      flex-grow: 1;
    }

    .shriji-login-page .sb-social-btn {
      border-radius: 10px;
      font-weight: 600;
    }

    /* Responsive */
    @media (max-width: 767.98px) {
      .shriji-login-page .sb-card {
        flex-direction: column;
        border-radius: 12px;
      }
      .shriji-login-page .sb-brand {
        min-height: 180px;
        padding: 1.5rem;
      }
      .shriji-login-page .sb-hero {
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="shriji-login-page">
    <div class="sb-card">
      <!-- Left: Brand Panel -->
      <div class="sb-brand">
        <div class="sb-brand-logo">
          <img src="https://via.placeholder.com/100x100?text=SB" alt="Shriji Brothers Logo" />
          <div>
            <div class="sb-brand-title h5 mb-0">Shriji Brothers</div>
            <div class="small">Quality • Trust • Tradition</div>
          </div>
        </div>
        <h2 class="h4 fw-bold">Welcome Back!</h2>
        <p>Sign in to manage orders and explore our collection.</p>
        <div class="sb-hero"></div>
      </div>

      <!-- Right: Form Panel -->
      <div class="sb-form">
        <div class="sb-form-heading">Sign in to your account</div>
        <div class="sb-form-sub">Login with your email & password</div>

        <div class="d-flex gap-2 mb-3">
          <button class="btn btn-outline-secondary w-100 sb-social-btn">Google</button>
          <button class="btn btn-outline-secondary w-100 sb-social-btn">Phone</button>
        </div>

        <div class="sb-divider">
          <hr><span>or</span><hr>
        </div>

        <form id="sbLoginForm" novalidate>
          <div class="mb-3">
            <label for="sbEmail" class="form-label">Email address</label>
            <input type="email" id="sbEmail" class="form-control sb-input" placeholder="you@domain.com" required />
          </div>

          <div class="mb-3">
            <label for="sbPassword" class="form-label">Password</label>
            <input type="password" id="sbPassword" class="form-control sb-input" placeholder="Enter password" required minlength="6" />
          </div>

          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sbRemember" />
              <label class="form-check-label" for="sbRemember">Remember me</label>
            </div>
            <a href="#" class="sb-text-link small">Forgot password?</a>
          </div>

          <button class="btn btn-primary w-100 sb-btn-primary" type="submit">Sign in</button>

          <div class="text-center mt-3 small">
            Don’t have an account? <a href="#" class="sb-text-link">Create one</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
