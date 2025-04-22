<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      :root {
        --primary-gradient: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
        --button-gradient: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
        --input-bg: linear-gradient(135deg, #ffffff, #f9f9f9);
        --text-dark: #333;
        --border-light: #ddd;
      }

      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: #fff;
        font-family: 'Open Sans', sans-serif;
        color: var(--text-dark);
      }

      .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-grow: 1;
        padding: 2rem;
      }

      .login-card {
        width: 100%;
        max-width: 450px;
        background: #fff;
        padding: 2.5rem;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--border-light);
      }

      .login-title {
        text-align: center;
        margin-bottom: 2rem;
        font-weight: 700;
        color: var(--text-dark);
      }

      .form-control {
        background: var(--input-bg);
        border: 1px solid var(--border-light);
        color: var(--text-dark);
        padding: 0.75rem 1rem;
        margin-bottom: 1.25rem;
        border-radius: 6px;
        transition: all 0.3s ease;
      }

      .form-control:focus {
        background-color: #fff;
        border-color: #66a6ff;
        box-shadow: 0 0 0 0.25rem rgba(102, 166, 255, 0.25);
      }

     
      .login-title:hover {
        opacity: 0.9;
        transform: scale(1.03);
      }

      .login-links {
        display: flex;
        justify-content: space-between;
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid var(--border-light);
      }

      .login-links a {
        color: #666;
        text-decoration: none;
        font-size: 0.9rem;
        padding: 0 0.5rem;
        transition: color 0.2s;
      }

      .login-links a:hover {
        color: #fda085;
      }

      footer {
        text-align: center;
        padding: 1.5rem;
        background-color: #f8f9fa;
        color: #888;
        margin-top: auto;
      }
    </style>
  </head>

  <body>
  <div class="login-container">
    <div class="login-card">
      <h2 class="login-title">Iniciar Sesión</h2>
      <form action="<?php echo site_url('login'); ?>" method="post">
        <?php $this->load->view($master_template); ?>
        <div class="login-links">
          <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</a>
          <?php if ($this->uri->segment(1) == "login"): ?>
            <a href="<?php echo site_url('forgot_password'); ?>">Forgot Password</a>
          <?php else: ?>
            <a href="<?php echo site_url('login'); ?>">Login</a>
          <?php endif; ?>
          <a href="<?php echo site_url('register'); ?>">Register Now</a>
        </div>
      </form>
    </div>
  </div>

  <footer>
    <p class="mb-0">© 2025 IAserverpro. Todos los derechos reservados.</p>
  </footer>

  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-white text-dark">
        <div class="modal-header border-secondary">
          <h5 class="modal-title">Contacto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Exclusive Unlock Pvt Ltd.</p>
          <p>Email: info@exclusiveunlock.co.uk</p>
        </div>
        <div class="modal-footer border-secondary">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
