<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <nav>
    <b class="brand">DREAM FARM</b>
    <div class="dropdown">
      <button class="dropbtn">Menu
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
      <a href="profile.php"><img src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png" alt="Profile Icon">Profile</a>
      <a href="mainindex.php">Home</a>
        <a href="maincontact.php">Contact Us</a>
        <a href="mainabout.php">About Us</a>
        <a href="index.php">Log Out</a>
      </div>
    </div>
  </nav>
  <body>
    <div class="wrapper">
    <div class="container">
      <h1>Contact Us</h1>
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        <input type="submit" value="Send">
      </form>
      <div class="contact-info">
        <p><strong>Phone:</strong> 123-456-7890</p>
        <p><strong>Email:</strong> contact@example.com</p>
        <p><strong>Address:</strong> Mapaniqui, Candaba, Pampanga</p>
      </div>
    </div>
    <p style="position: center; bottom: 0; width: 100%; text-align: center;">© All Right Reserved Dream Farm</p>
  </body>
 
