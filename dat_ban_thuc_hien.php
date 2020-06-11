<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

	// 2. Lấy ra lấy dữ liệu thu được từ FORM chuyển sang
	$ten_nguoi_dat = $_POST["txtTieuDe"];
	$So_dien_thoai = $_POST["txtSDT"];
	$So_nguoi_dat_ban = $_POST["txtSonguoi"];
	$Thoi_gian_dat_ban = $_POST["txtThoigian"];
	$Ghi_chu = $_POST["txtGhichu"];


	// 3. Viết câu lệnh SQL để thêm mới tin tức vào CSDL
	$sql = "
	INSERT INTO `tbl_dat_ban`(`id_dat_ban`, `ten_nguoi_dat`, `So_dien_thoai`, `So_nguoi_dat_ban`, `Thoi_gian_dat_ban`, `Ghi_chu`) VALUES 
	(NULL, '".$ten_nguoi_dat."','".$So_dien_thoai."','".$So_nguoi_dat_ban."','".$Thoi_gian_dat_ban."','".$Ghi_chu."')
	
	";
	// echo $sql; exit();

	// 4. Thực hiện truy vấn để thêm mới tức trên
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc thêm mới tin tức thành công & quay trở lại trang quản lý tin tức
		// Thông báo cho người dùng biết bài viết đã được thêm mới thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã đặt bàn thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './dat_ban.php'
			</script>
		";
;?>
