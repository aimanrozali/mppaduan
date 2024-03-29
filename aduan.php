<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


  <title>Majlis Perwakilan Pelajar USM</title>
</head>

<body>
  <!-- === NAVIGATION BAR === -->
  <?php include "nav.php"; ?>


  <!-- --- ADUAN SECTION--- -->
  <div class="aduan-container">
    <span class="big-circle"></span>
    <img src="images/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Aduan</h3>
        <p class="text">
        Kindly fill up your details and drop your concern(s) in the space provided. We will then proceed to raise your concern(s) and further try to solve the problem at hand. If immediate actions are needed, you can directly contact any of us through the email provided in the Directory or direct message us on Instagram @mppusm.official.
        </p>

        <div class="info">
          <div class="information">
            <img src="images/location.png" class="aduan-icon" alt="" />
            <p>Universiti Sains Malaysia, Penang</p>
          </div>
          <div class="information">
            <img src="images/email.png" class="aduan-icon" alt="" />
            <p>mpp@usm</p>
          </div>
          <div class="information">
            <img src="images/phone.png" class="aduan-icon" alt="" />
            <p>123-456-789</p>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="add_data.php">
          <h3 class="title">Student details</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" autocomplete="off" placeholder="Name" required />
          </div>
          <div class="input-container">
            <input type="text" name="matric" autocomplete="off" maxlength="6" class="input" placeholder="Matrics Number" required />
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" autocomplete="off" placeholder="Student Email" required />
          </div>

          <div class="school-input">
            <select name="school" required>
              <option value="" selected="selected">School</option>
              <option value="School of Computer Sciences">School of Computer Sciences</option>
              <option value="School of Communication">School of Communication</option>
              <option value="School of Education">School of Education</option>
              <option value="School of Physics">School of Physics</option>
            </select>
          </div>
          <div class="input-container">
            <input type="text" name="reporttitle" class="input" autocomplete="off" placeholder="Title" required />
          </div>
          <div class="input-container textarea">
            <textarea name="content" class="input" autocomplete="off" placeholder="Message" required></textarea>
          </div>
          <input type="submit" value="Send" class="btn" />
        </form>
      </div>
    </div>
  </div>




  <!-- === FOOTER === -->

  <?php include "footer.php"; ?>

</body>

</html>