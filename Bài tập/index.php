<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1</title>
</head>
<body>
    <!-- BÀI 1 -->
    <h3>Bài 1:</h3>
    <?php
    $Diem = 10;
    $XepLoai;
    if ($Diem < 5) {
        $XepLoai = 'Học lực yếu'; 
    } else if ($Diem <= 6.5){
        $XepLoai = 'Học lực trung bình';
    } else if ($Diem <= 8){
        $XepLoai = 'Học lực khá';
    } else if ($Diem <= 10){
        $XepLoai = 'Học lực giỏi';
    } else {
        $XepLoai = 'Nhập điểm chưa đúng !';
    }
    ?>
    <table border=1>
        <thead>
            <tr>
                <th>Điểm trung bình</th>
                <th>Xếp loại
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $Diem?></p></td>
                <td><?php echo $XepLoai?></p></td>
            </tr>
        </tbody>
    </table>
    <!-- BÀI 2 -->
    <h3>Bài 2:</h3>
    <?php
    $TongTienLai = 0;
    $TienLaiHangThang = 10000 * 0.1;
    for ($i = 0; $i < 12; $i++) { 
        $TongTienLai += $TienLaiHangThang;
    }
    $TongTien = 10000 + $TongTienLai;
    ?>
    <table border=1>
        <thead>
            <tr>
                <th>Tiền gốc</th>
                <th>Lãi suất</th>
                <th>Thời gian gửi</th>
                <th>Tiền lãi hàng tháng</th>
                <th>Tổng số tiền lãi</th>
                <th>Tổng tiền Quỳnh có</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10000</td>
                <td>10%</td>
                <td>12 tháng</td>
                <td><?php echo $TienLaiHangThang?></td>
                <td><?php echo $TongTienLai?></p></td>
                <td><?php echo $TongTien?></p></td>
            </tr>
        </tbody>
    </table>
    <!-- BÀI 3 -->
    <h3>Bài 3:</h3>
    <?php
    $SoThangDiLamTrongNam = 12;
    $ThuongCuoiNam = 0;
    if ($SoThangDiLamTrongNam < 3) {
        $ThuongCuoiNam = 2000;
    } else if ($SoThangDiLamTrongNam <= 6){
        $ThuongCuoiNam = 6000;
    } else if ($SoThangDiLamTrongNam <=12){
        $ThuongCuoiNam = 12000;
    }
    $TongLuong = 100000 + $ThuongCuoiNam;
    ?>
    <table border = 1>
        <thead>
            <tr>
                <th>Họ tên</th>
                <th>Tuổi</th>
                <th>Mức lương</th>
                <th>Số tháng đi làm trong năm</th>
                <th>Thưởng</th>
                <th>Tổng lương</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Đào Duy Tùng</td>
                <td>20</td>
                <td>100000</td>
                <td>12 tháng</td>
                <td><?php echo $ThuongCuoiNam?></td>
                <td><?php echo $TongLuong?></td>
            </tr>
        </tbody>
    </table>
    <!-- Bài 4 -->
    <h3>Bài 4:</h3>
    <?php
    $DiemLab = 3;
    $DiemQuiz = 9;
    $DiemAssignment = 6;
    $DiemThi = 5;
    $DiemTrungBinh = (($DiemLab*0.3)+($DiemQuiz*0.1)+($DiemAssignment*0.2)+($DiemThi*0.4))/1;
    $KetQua;
    if ($DiemTrungBinh >= 5) {
        $KetQua = 'Đạt';
    } else{
        $KetQua = 'Không Đạt';
    }
    ?>
    <table border = 1>
        <thead>
            <tr>
                <th>Điểm lab</th>
                <th>Điểm quiz</th>
                <th>Điểm Assignment</th>
                <th>Điểm thi</th>
                <th>Điểm trung bình</th>
                <th>Kết quả</th>
           </tr>
        </thead>
        <tbody>
             <tr>
                <td><?php echo $DiemLab?></td>
                <td><?php echo $DiemQuiz?></td>
                <td><?php echo $DiemAssignment?></td>
                <td><?php echo $DiemThi?></td>
                <td><?php echo $DiemTrungBinh?></td>
                <td><?php echo $KetQua?></td>
             </tr>
         </tbody>
    </table>
</body>
</html>