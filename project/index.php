<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>detect water hyacinth</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">water hyacinth</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="about.html">about</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>ผักตบชวา</h2>
							<p>โปรแกรมตรวจจับประมาณผักตบชวา<br />
							
							<a>create by My team</a>.</p>
							<ul class="actions">
								<!--<li><a href="upload.html" class="button special">อัพโหลดรูปภาพ</a></li>-->
								<form action="index.php" method="post" enctype="multipart/form-data">
									Select image to upload:
									<input type="file" name="fileToUpload" id="fileToUpload">
										<input type="submit" value="Upload Image" name="submit">
									</form>


							</ul>
						</div>
						<a href="#one" class="more scrolly">ข้อมูลเพิ่มเติม</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>ผักตบชวา<br />
								แพร่พันธุ์ได้อย่างรวดเร็วจนกลายเป็นวัชพืชที่ร้ายแรงในแหล่งน้ำทั่วไป</h2>
								
							</header>
							
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>การสำรวจผักตบชวา<br/>
								</h2>
								<p>ใช้งบประมาณไปร่วมกว่า 762,631,268 ต่อปี (ในปี 2559)</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
								<h2>ต้องเสียเวลาและค่าใช้จ่ายมากขึ้น<br />
								</h2>
								<p>อธิบดีกรมชลประทานพร้อมด้วยหน่วยงานที่เกี่ยวข้องลงเรือสำรวจผักตบชวาตาม ลำน้ำเจ้าพระยา</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>แถมปัญหาอื่นๆตามมาอีกมากมาย<br />
								</h2>
								<p>น้ำท่วมขัง,ขัดขวางทางเดินเรือ,ปัญหาของสิ่งมีชีวิตในแหล่งน้ำ</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>จะดีกว่าไหม ถ้าเราช่วยกันตรวจสอบผักตบชวาด้วยกัน</h2>
								<p>เพื่อช่วยลดค่าใช้จ่ายที่เกินจำเป็นไปได้<br />
								มาร่วมกันตรวจสอบผักตบชวากันเถอะ</p>
							</header>
							
						</div>
					</section>

				<!-- CTA -->
					

				<!-- Footer -->
					<footer id="footer">
						
						<ul class="copyright">
							<li>&copy; ม.เกษตร ศรีราชา </li><li>Design: My team</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>