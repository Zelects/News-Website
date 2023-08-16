<!DOCTYPE html>
<html>
<head>
  <title>Checkout - HyperGadget X</title>
  <style>
    body {
      font-family: 'Roboto', Arial, sans-serif;
      background-color: #f3f3f3;
      margin: 0;
      padding: 0;
    }
    
    #container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }
    
    h1 {
      color: #333;
      text-align: center;
      margin-top: 0;
      font-size: 36px;
    }
    
    #confirmation {
      text-align: center;
      margin-top: 50px;
    }
    
    #confirmation h2 {
      color: #00b894;
      font-size: 24px;
      margin-top: 0;
    }
    
    #receipt {
      margin-top: 50px;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    #receipt h3 {
      color: #333;
      font-size: 24px;
      margin-top: 0;
    }
    
    #receipt p {
      font-size: 16px;
      margin-bottom: 10px;
    }
    
    #receipt .collaboration {
      color: #777;
      font-size: 14px;
      margin-top: 20px;
    }
    
    #footer {
      text-align: center;
      margin-top: 50px;
      color: #777;
    }
    
    #footer p {
      font-size: 14px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #00b894;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #00a28b;
    }
  </style>
</head>
<body>
  <div id="container">
    <h1>Checkout - HyperGadget X</h1>
    
    <div id="confirmation">
      <h2>Thank you for your purchase!</h2>
      <p>We have received your order for HyperGadget X.</p>
    </div>
    
    <div id="receipt">
      <h3>Order Receipt</h3>
      <p><strong>Product:</strong> HyperGadget X</p>
      <p><strong>Price:</strong> $999.99</p>
      <p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
      <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
      <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
      
      <p class="collaboration">Thank you for choosing HyperGadget X! We are excited to collaborate with Tech Future to bring you the ultimate futuristic tech experience.</p>
    </div>
    
    <div id="footer">
      <p>&copy; 2023 HyperGadget X. All rights reserved.</p>
    </div>
    <a href="tech1.php" class="btn">Explore More Tech</a>
  </div>
</body>
</html>