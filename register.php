<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
</head>
<style>
  html {
    background-color: #56baed;
  }

  body {
    height: 100vh;
  }


  /* STRUCTURE */

  .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    height: 100%;
  }

  h2 {
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    display: inline-block;
    margin: 40px 8px 10px 8px;
    border-bottom: 2px solid #5fbae9;
  }

  #icon {
    width: 40%;
  }

  #formContent {
    border-radius: 10px;
    background: #fff;
    padding: 30px;
    width: 25%;
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    text-align: center;
  }


  /* FORM TYPOGRAPHY*/

  .submit {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    font-size: 15px;
    box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
  }

  .submit:hover {
    background-color: #39ace7;
  }

  .myinput {
    background-color: #f6f6f6;
    border: 2px solid #f6f6f6;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border-radius: 5px 5px 5px 5px;
  }



  #menu ul li {

    display: initial;
    color: black;
    border: 3px solid steelblue;
    padding: 10px 25px;
    display: inline-block;
    text-decoration: none;

  }

  #menu ul li:hover {
    background-color: skyblue;
    transition: 0.5s;
    color: white;
  }
</style>

<body>

  <!-- Nav Bar Start -->
  <nav id="menu">
    <ul>
      <a href="dashboard.php">
        <li>Dashboard</li>
      </a>
      <a href="register.php">
        <li>Register</li>
      </a>
      <a href="datalist.php">
        <li>Datalist</li>
      </a>
    </ul>
    <hr>
  </nav>
  <!-- Nav Bar End -->

  <div class="wrapper">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2> REGISTER</h2>


      <!-- Icon -->
      <div class="fadeIn first">
        <img src="images/login.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form method="POST">
        <input type="text" name="firstname" class="myinput" placeholder="First Name">
        <input type="text" name="lastname" class="myinput" placeholder="Last Name">
        <input type="email" name="email" class="myinput" placeholder="Email">
        <input type="number" name="mobile" class="myinput" placeholder="Phone Number">
        <textarea type="text" name="address" class="myinput" rows="3" placeholder="Address"></textarea>
        <button type="submit" class="submit">REGISTER</button>
      </form>



    </div>
  </div>
</body>

</html>