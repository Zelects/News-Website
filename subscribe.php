<!DOCTYPE html>
<html>
  <head>
    <title>Subscription</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-image: url(subscribe1.jpg);
        margin: 0;
        padding: 0;
        
      }

      h1 {
        text-align: center;
        color: #ffffff;
        padding: 20px 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        background-image: linear-gradient(to bottom right, #e6e6e6, #ffffff);
      }

      label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
      }

      input[type="text"],
      input[type="submit"],
      select {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        margin-bottom: 12px;
        box-sizing: border-box;
      }

      input[type="submit"] {
        background-color: #007bff;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      input[type="submit"]:hover {
        background-color: #0056b3;
      }

      .subscription-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .subscription-info {
        display: flex;
        align-items: center;
      }

      .subscription-info span {
        font-weight: bold;
        margin-right: 6px;
      }

      .discount-label {
        color: #ff6b6b;
      }

      .price-label {
        font-size: 18px;
        color: #4caf50;
      }
    </style>
  </head>
  <body>
    <h1>Subscription Page</h1>
    <form action="tech1.php" method="post">
      <label for="card_number">Credit Card Number:</label>
      <input type="text" id="card_number" name="card_number" required>

      <label for="expiry_date">Expiry Date:</label>
      <input type="text" id="expiry_date" name="expiry_date" required>

      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required>

      <label for="subscription_type">Subscription Type:</label>
      <select id="subscription_type" name="subscription_type" onchange="calculatePrice()">
        <option value="weekly">Weekly</option>
        <option value="monthly">Monthly</option>
        <option value="yearly">Yearly</option>
      </select>

      <div class="subscription-container">
        <div class="subscription-info">
          <span>Discount:</span>
          <span id="discount" class="discount-label">0%</span>
        </div>

        <div class="subscription-info">
          <span>Total Cost:</span>
          <span id="price" class="price-label">$0</span>
        </div>
      </div>

      <input type="submit" value="Subscribe">
    </form>

    <script>
      function calculatePrice() {
        var subscriptionType = document.getElementById("subscription_type").value;
        var discountElement = document.getElementById("discount");
        var priceElement = document.getElementById("price");
        var price = 0;
        var discount = 0;

        if (subscriptionType === "weekly") {
          price = 4;
          discount = 0;
        } else if (subscriptionType === "monthly") {
          price = 4 * 4;
          discount = 0.2;
        } else if (subscriptionType === "yearly") {
          price = 4 * 4 * 12;
          discount = 0.75;
        }

        var discountPercent = discount * 100;
        var totalDiscount = price * discount;
        var totalCost = price - totalDiscount;

        discountElement.innerText = discountPercent.toFixed(0) + "%";
        priceElement.innerText = "$" + totalCost.toFixed(2);
      }
    </script>
  </body>
</html>