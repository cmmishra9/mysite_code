<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <p>Please fill in this form and send us.</p>
    <form action="processform.php" method="post">
      <div>
       <label for="inputName">Name: </label>
       <input type="text" name="name" id="inputName" placeholder="Name">
      </div>
      <div>
       <label for="inputEmail">Email: </label>
       <input type="text" name="email" id="inputEmail" placeholder="Email">
      </div>
      <label for="inputSubject">Subject: </label>
       <input type="text" name="subject" id="inputSubject" placeholder="Subject">
      </div>
      <div>
      <label for="inputmsg">Message: </label>
       <textarea name="msg" id="inputmsg" cols="30" rows="10"></textarea>
      </div>
      <input type="submit" name="submit" value="Submit">
      <input type="reset" value="Reset">
    </form>
</body>
</html>