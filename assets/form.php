<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Milligram CSS Box-Shaped Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
  <style>
    .box-form {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .box {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
      padding: 30px;
      width: 600px;
    }
    .box h1 {
      text-align: center;
    }
    .box form {
      display: flex;
      flex-direction: column;
    }
    .box label {
      font-size: 1.1rem;
      margin-bottom: 5px;
    }
    .box input,
    .box textarea {
      background-color: #f7f7f7;
      border: none;
      border-radius: 3px;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
      margin-bottom: 10px;
      padding: 10px;
      resize: none;
    }
    .box button {
  background-color: #007bff;
  border: none;
  border-radius: 3px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
  color: #fff;
  cursor: pointer;
  font-size: 1rem;
  padding: 10px;
  transition: background-color .2s ease-in-out;
  width: 100%; /* add this to make the button full width */
  height: 50px;
}

.box button:hover {
  background-color: #0062cc;
}

  </style>
</head>
<body>
  <div class="box-form">
    <div class="box">
      <h1>Sign up for our newsletter</h1>

      <p>
        <?php if(isset($_GET['name']) && !empty($_GET['name'])) ?>
        First Name : <?php echo $_GET['name'] ?> </br>
        <?php if(isset($_GET['email']) && !empty($_GET['email'])) ?>
        Email : <?php echo $_GET['email'] ?> </br>
      </p>

      <form method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>
        <!-- <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Your message"></textarea> -->
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>
