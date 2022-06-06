<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thai Board Games</title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <?php include 'stylesheet.php'; ?>
</head>

<body>


    <section id="content">
        <div class="bg-two">
            <div class="bg-navbar">
                <div class="row mx-0">
                    <div class="logo2 col-lg-3 col-sm-6">
                        <a href="index.php"><img src="assets/img/logo14.png"></a>
                    </div>

                    <div class="btn-right col-lg-9">
                        <div class="dropdown">
                            <button type="button" class="btn-user dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-user"></i>&nbsp; User
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php">Home</a></li>
                                <li><a class="dropdown-item" href="homeLevel.php">Playgame</a></li>
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="homeLevel.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cardForm mt-3 p-3">
                    <h4>จัดการข้อมูลส่วนตัว</h4>
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">ข้อมูลส่วนตัว</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu1">แก้ไขข้อมูลส่วนตัว</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu2">เปลี่ยนรหัสผ่าน</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2">ชื่อผู้ใช้:</label>
                                <input type="text" class="form-control" id="" placeholder="aaa" name="" readonly>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2">อีเมล์ผู้ใช้:</label>
                                <input type="email" class="form-control" id="" placeholder="abc@gmail.com" name="" readonly>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2">เลเวล :</label>
                                <input type="number" class="form-control" id="" placeholder="2" name="" readonly>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="mb-2">คะแนนสะสม :</label>
                                <input type="number" class="form-control" id="" placeholder="2,554" name="" readonly>
                            </div>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label class="mb-2">ชื่อผู้ใช้:</label>
                                    <input type="text" class="form-control" id="" placeholder="username" name="">
                                </div>
                                <label class="mb-2">รูปภาพ:</label>
                                <div class="col-sm-6 mb-3">
                                    <img src="assets/img/man.png" style="width: 30%;border:1px solid #000" class="mb-3">
                                    <input type="file">
                                </div>
                            </div>
                            <a href="" class="btn btn-change">บันทึกการเปลี่ยนแปลง</a>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                            <div class="col-lg-6 my-2">
                                <label>รหัสผ่านเดิม*</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 my-2">
                                <label>รหัสผ่านใหม่*</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 my-2">
                                <label>ยืนยันรหัสผ่านใหม่*</label>
                                <input type="text" class="form-control">
                            </div>
                            <br>
                            <a href="" class="btn btn-change">เปลี่ยนรหัสผ่าน</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <?php include 'footer2.php'; ?>
    <?php include 'javascript.php'; ?>


</body>

</html>