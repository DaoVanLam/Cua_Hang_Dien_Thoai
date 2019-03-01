
        
                    <?php
                    // Nếu người dùng submit form thì thực hiện
                    if (isset($_REQUEST['ok'])) 
                    {
                        // Gán hàm addslashes để chống sql injection
                        $check = addslashes($_GET['tukhoa']);
                        $search = addslashes($_GET['search']);
                        echo($check);
                        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                        if (empty($search)&&empty($check)) {
                            echo "Yeu cau nhap du lieu vao o trong";
                        } 
                        else if($search != ""&& $check == 1)
                        {
                            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                            $query = "select * from tbl_san_pham where ten_san_pham like '%$search%'";
            
                            // Kết nối sql
                            $ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
            
                            // Thực thi câu truy vấn
                            $sql = mysqli_query($ketnoi,$query);
            
                            // Đếm số đong trả về trong sql.
                            $num = mysqli_num_rows($sql);
            
                            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                            if ($num > 0 ) 
                            {
                                // Dùng $num để đếm số dòng trả về.
                                echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
            
                                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                                echo '<table border="1" cellspacing="0" cellpadding="10">';
                                while ($row = mysqli_fetch_assoc($sql)) {
                                    echo '<tr>';
                                        echo "<td>{$row['id']}</td>";
                                        echo "<td>{$row['ten_san_pham']}</td>";
                                        echo "<td>{$row['loai_san_pham_id']}</td>";
                                        echo "<td>{$row['gia_tien']}</td>";
                                        echo "<td>{$row['gia_khuyen_mai']}</td>";
                                        echo "<td>{$row['mo_ta']}</td>";
                                        echo "<td>{$row['so_luong']}</td>";
                                        echo "<td>{$row['anh_minh_hoa']}</td>";
                                    echo '</tr>';
                                }
                                echo '</table>';
                                
                            } 
                            else {
                                echo "Khong tim thay ket qua!";
                            }
                        }
                            else if($search != ""&& $check == 2)
                            {
                                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                                $query = "select * from tbl_tin_tuc where tieu_de like '%$search%'";
                                // Kết nối sql
                                $ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
                
                                // Thực thi câu truy vấn
                                $sql = mysqli_query($ketnoi,$query);
                
                                // Đếm số đong trả về trong sql.
                                $num = mysqli_num_rows($sql);
                
                                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                                if ($num > 0 ) 
                                {
                                    // Dùng $num để đếm số dòng trả về.
                                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
                
                                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        echo '<tr>';

                                            echo "<td>{$row['id']}</td>";
                                            echo "<td>{$row['loai_tin_tuc_id']}</td>";
                                            echo "<td>{$row['tieu_de']}</td>";
                                            echo "<td>{$row['mo_ta']}</td>";
                                            echo "<td>{$row['noi_dung']}</td>";
                                            echo "<td>{$row['anh_minh_hoa']}</td>";
                                        echo '</tr>';
                                    }
                                    echo '</table>';
                                } 
                                else {
                                    echo "Khong tim thay ket qua!";
                            }
                            
                            }
                        }
                
            ?>   