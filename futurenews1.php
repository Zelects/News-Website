<!DOCTYPE html>
<html>
<head>
  <title>HyperGadget X</title>
  <style>
    body {
      font-family: 'Roboto', Arial, sans-serif;
      background-color: lightblue;
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
    
    #image {
      text-align: center;
      margin-top: 20px;
    }
    
    #description {
      margin-top: 30px;
    }
    
    #description p {
      font-size: 18px;
      line-height: 1.5;
    }
    
    #description ul {
      list-style-type: none;
      padding-left: 20px;
      margin-top: 10px;
    }
    
    #description li {
      margin-bottom: 10px;
    }
    
    #description li:before {
      content: '\2022';
      color: #00b894;
      font-size: 20px;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }
    
    #buy-now {
      text-align: center;
      margin-top: 30px;
    }
    
    #buy-now h2 {
      color: #333;
      font-size: 24px;
      margin-top: 0;
    }
    
    #buy-now p {
      font-size: 18px;
      margin: 10px 0;
    }
    
    form {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    form input[type="text"],
    form input[type="email"],
    form input[type="tel"] {
      width: 300px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
      font-size: 16px;
    }
    
    form input[type="submit"] {
      background-color: #00b894;
      color: #fff;
      border: none;
      padding: 12px 30px;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    form input[type="submit"]:hover {
      background-color: #00967d;
    }
    
    #footer {
      text-align: center;
      margin-top: 50px;
      color: #777;
    }
    
    #footer p {
      font-size: 14px;
    }
    
    #features {
      margin-top: 50px;
    }
    
    #features h2 {
      color: #333;
      font-size: 24px;
      margin-top: 0;
      text-align: center;
    }
    
    .feature {
      display: flex;
      align-items: center;
      margin-top: 20px;
      padding: 20px;
      border-radius: 10px;
      background-color: lightblue;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
      width: 100px;
      height: 100px;
      background-color: skyblue;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 20px;
    }
    
    .feature-icon img {
      max-width: 60px;
      max-height: 60px;
    }
    
    .feature-text {
      flex-grow: 1;
    }
    
    .feature-title {
      font-size: 20px;
      margin-bottom: 5px;
      color: #333;
    }
    
    .feature-description {
      color: #777;
      font-size: 16px;
      line-height: 1.5;
    }
    #tech-link {
      position: fixed;
      bottom: 20px;
      right: 20px;
    }

    #tech-link a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #00b894;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    #tech-link a:hover {
      background-color: #00a28b;
    }
  </style>
</head>
<body>
  <div id="container">
    <h1>HyperGadget X - The Ultimate Futuristic Tech</h1>
    
    <div id="image">
      <img src="hyper.png" alt="HyperGadget X" width="400" height="300">
    </div>
    
    <div id="description">
      <p>Introducing HyperGadget X, the cutting-edge technological marvel that will revolutionize your life! This futuristic device combines state-of-the-art features with unparalleled performance.</p>
      <p>Key Features:</p>
      <ul>
        <li>Quantum Processing Unit for lightning-fast computations</li>
        <li>Holographic Display with 3D visualization capabilities</li>
        <li>Neural Interface for seamless interaction with your mind</li>
        <li>Advanced Biometric Security for unparalleled protection</li>
        <li>Wireless Charging with unlimited energy absorption</li>
      </ul>
      <p>Experience the future today with HyperGadget X!</p>
    </div>
    
    <div id="buy-now">
      <h2>Get Your HyperGadget X Now!</h2>
      <p>Price: $999.99</p>
      <form action="submitted.php" method="POST">
        <input type="hidden" name="product" value="HyperGadget X">
        <input type="hidden" name="price" value="999.99">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Your Phone Number" required>
        <input type="submit" value="Buy Now">
      </form>
    </div>
    
    <div id="features">
      <h2>Explore HyperGadget X Features</h2>
      
      <div class="feature">
        <div class="feature-icon">
          <img src="cpu.jpg" alt="Quantum Processing Unit">
        </div>
        <div class="feature-text">
          <div class="feature-title">Quantum Processing Unit</div>
          <div class="feature-description">Experience lightning-fast computations with our advanced Quantum Processing Unit.</div>
        </div>
      </div>
      
      <div class="feature">
        <div class="feature-icon">
          <img src="holo.jpg" alt="Holographic Display">
        </div>
        <div class="feature-text">
          <div class="feature-title">Holographic Display</div>
          <div class="feature-description">Enjoy immersive 3D visualizations on our state-of-the-art Holographic Display.</div>
        </div>
      </div>
      
      <div class="feature">
        <div class="feature-icon">
          <img src="neural.jpg" alt="Neural Interface">
        </div>
        <div class="feature-text">
          <div class="feature-title">Neural Interface</div>
          <div class="feature-description">Interact with HyperGadget X using our cutting-edge Neural Interface technology.</div>
        </div>
      </div>
      
      <div class="feature">
        <div class="feature-icon">
          <img src="sec.jpg" alt="Advanced Biometric Security">
        </div>
        <div class="feature-text">
          <div class="feature-title">Advanced Biometric Security</div>
          <div class="feature-description">Protect your data with our advanced Biometric Security features.</div>
        </div>
      </div>
      
      <div class="feature">
        <div class="feature-icon">
          <img src="charge.jpg" alt="Wireless Charging">
        </div>
        <div class="feature-text">
          <div class="feature-title">Wireless Charging</div>
          <div class="feature-description">Never worry about battery life with our convenient Wireless Charging technology.</div>
        </div>
      </div>
    </div>
    
    <div id="footer">
      <p>&copy; 2023 HyperGadget X. All rights reserved.</p>
    </div>
    <div id="tech-link">
    
      <a href="tech1.php">Home</a>
    </div>
  </div>
</body>
</html>