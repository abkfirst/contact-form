<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Form</title>
  <style>
    body { font-family: Arial, sans-serif; max-width: 680px; margin: 40px auto; padding: 0 16px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
    h1 { margin-top: 0; }
    label { display: block; margin: 12px 0 6px; }
    input, textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; }
    button { margin-top: 12px; padding: 10px 16px; border: 0; border-radius: 8px; cursor: pointer; }
    .btn { background: #0ea5e9; color: white; }
    .alert { padding: 12px 16px; border-radius: 8px; margin-bottom: 12px; }
    .success { background: #ecfdf5; border: 1px solid #10b981; }
    .error { background: #fef2f2; border: 1px solid #ef4444; }
    .hint { color: #555; font-size: 14px; }
    .footer { margin-top: 16px; font-size: 14px; }
    a { color: #0ea5e9; text-decoration: none; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Contact Us</h1>

    <?php if (isset($_GET['success'])): ?>
      <div class="alert success">Message sent successfully ✅</div>
    <?php elseif (isset($_GET['error'])): ?>
      <div class="alert error"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>

    <form action="process.php" method="POST" novalidate>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name" required />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="you@example.com" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" placeholder="Type your message..." required></textarea>

      <button class="btn" type="submit">Send</button>
    </form>

    <div class="footer">
      <p class="hint">Tip: After submitting, check your <strong>phpMyAdmin</strong> to see the saved message.</p>
    
    </div>
  </div>
</body>
</html>
