<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จ่าหน้าซองจดหมาย</title>
    <style>
        /* ตั้งค่าพื้นหลังและฟอนต์ */
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        
        /* การตั้งค่าซองจดหมาย */
        .envelope {
            width: 500px;
            height: 300px;
            padding: 20px;
            border: 2px solid #000;
            background-color: #fff;
            position: relative;
            font-size: 16px;
        }
        
        /* ส่วนของผู้ส่ง */
        .sender {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        /* ส่วนของผู้รับ */
        .recipient {
            position: absolute;
            bottom: 40px;
            right: 20px;
        }

        /* ชื่อหัวข้อของผู้ส่งและผู้รับ */
        .address-title {
            font-weight: bold;
            font-size: 18px;
            text-decoration: underline;
            margin-bottom: 10px;
        }

        /* ตำแหน่งข้อมูลผู้ส่งและผู้รับ */
        .info {
            font-size: 16px;
            margin-bottom: 5px;
        }

        /* วันที่ส่งจะอยู่ด้านล่างขวาของซองจดหมาย */
        .date {
            position: absolute;
            bottom: 10px;
            right: 20px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="envelope">
        <!-- ข้อมูลผู้ส่ง -->
        <div class="sender">
            <div class="address-title">ผู้ส่ง</div>
            <div class="info">ชื่อ: <?php echo $_GET['a1']; ?></div>
            <div class="info">บ้านเลขที่: <?php echo $_GET['c1']; ?></div>
            <div class="info">หมู่บ้าน: <?php echo $_GET['d1']; ?></div>
            <div class="info">ซอย: <?php echo $_GET['e1']; ?></div>
            <div class="info">ตำบล: <?php echo $_GET['f1']; ?></div>
            <div class="info">อำเภอ: <?php echo $_GET['g1']; ?></div>
            <div class="info">จังหวัด: <?php echo $_GET['h1']; ?></div>
            <div class="info">รหัสไปรษณีย์: <?php echo $_GET['i1']; ?></div>
        </div>

        <!-- ข้อมูลผู้รับ -->
        <div class="recipient">
            <div class="address-title">ผู้รับ</div>
            <div class="info">ชื่อ: <?php echo $_GET['a2']; ?></div>
            <div class="info">บ้านเลขที่: <?php echo $_GET['c2']; ?></div>
            <div class="info">หมู่บ้าน: <?php echo $_GET['d2']; ?></div>
            <div class="info">ซอย: <?php echo $_GET['e2']; ?></div>
            <div class="info">ตำบล: <?php echo $_GET['f2']; ?></div>
            <div class="info">อำเภอ: <?php echo $_GET['g2']; ?></div>
            <div class="info">จังหวัด: <?php echo $_GET['h2']; ?></div>
            <div class="info">รหัสไปรษณีย์: <?php echo $_GET['i2']; ?></div>
        </div>

        <!-- วันที่ส่ง -->
        <div class="date">วันที่ส่ง: <?php echo $_GET['j2']; ?></div>
    </div>

</body>
</html>
