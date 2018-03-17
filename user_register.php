<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ลงทะเบียน</title>
</head>
<body>
    <h1>ลงทะเบียน</h1>
    <form action="register.php" method="POST">
        <label for="username">Username : </label>
        <input type="text" name="username" required autofocus>
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" required>
        <br>
        <label for="name">ชื่อ-สกุล : </label>
        <input type="text" name="name" required>
        <br>
        <label for="address">ที่อยู่ : </label>
        <textarea name="address" required></textarea>
        <br>
        <label for="district">ตำบล : </label>
        <input type="text" name="district" required>
        <br>
        <label for="amphur">อำเภอ : </label>
        <input type="text" name="amphur" required>
        <br>
        <label for="province">จังหวัด : </label>
        <input type="text" name="province" required>
        <br>
        <label for="post">รหัสไปรษณีย์ : </label>
        <input name="post" required>
        <br>
        <label for="phone">เบอร์โทรศัพท์ : </label>
        <input name="phone" required>
        <br>
        <label for="email">Email : </label>
        <input type="email" name="email" placeholder="example@email.com" required>
        <br><br>
        <input type="submit" value="ยืนยัน">
    </form>
    <br><br>
    <a href="index.php">กลับหน้าหลัก</a>
</body>
</html>