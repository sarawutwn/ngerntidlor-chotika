<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">  
  <form id="contact" action="line-send.php" method="POST">
    <img src="image.jpg" alt="Avatar" class="center">
    <br>
        <h3 style="text-align: center">สนใจสมัครสินเชื่อ</h3>
    <li><h4 style="text-align: left">ไม่ต้องค้ำ ไม่ต้องโอน</h4></li>
      
      <li><h4>ดอกถูก วงเงินสูง</h4></li>
      <li><h5>โปะได้ ปลดหนี้เร็ว</h4></li>
    <fieldset>
      <input placeholder="คำนำหน้า และ ชื่อจริง" type="text" name="firstname"required>
    </fieldset>
    <fieldset>
      <input placeholder="นามสกุล" type="text" name="lastname" required>
    </fieldset>
    <fieldset>
      <input list="hosting-car" type="text" placeholder="ยี่ห้อรถ" name="hostcar">
        <datalist id="hosting-car">
          <option value="Toyota"></option>
          <option value="Honda"></option>
          <option value="Mazda"></option>
          <option value="Nissan"></option>
          <option value="Isuzu"></option>
          <option value="Tata"></option>
          <option value="Mitsubishi"></option>
          <option value="Suzuki"></option>
          <option value="Mercedes-Benz"></option>
          <option value="Volvo"></option>
          <option value="MG"></option>
          <option value="Ford"></option>
          <option value="Chevrolet"></option>
        </datalist>
    </fieldset>
    <fieldset>
      <input placeholder="ชื่อรุ่นของรถ " type="text" name="car" required>
    </fieldset>
    <fieldset>
      <input placeholder="ปีที่จดทะเบียน (ถ้ามี)" type="text" name="date" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="รายละเอียดการติดต่อกลับ (เบอร์โทรศัพท์และอื่นๆ)" type="text" name="detail" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" value="Send">Submit</button>
    </fieldset>
    <p class="copyright"> ติดต่อ ข้อมูลเพิ่มเติม <a href="https://www.facebook.com/shong.papatsorn/" target="_blank" title="Colorlib">Facebook</a></p>
  </form>
</div>
</body>
</html>