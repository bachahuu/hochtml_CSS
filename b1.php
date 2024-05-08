<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./b1.css/B1.css">
</head>
<body>
    <table width="100%" cellspacing="0px" >
        <tr >
            <td class="header" colspan="2">
            <img src="./logo.png" alt="" >
            </td>
        </tr>
        <tr>
            <td class="menu" colspan="2">
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href=""> Đăng Nhập</a></li>
                    <li><a href=""> Chức Năng</a></li>
                    <li><a href=""> Log out</a></li>
                    <li><a href=""> Liên Hệ</a></li>
                </ul>
            </td>
        </tr>
        <tr >
            <td class="menu_left" >
                <div class="section">
                <h1>information manager</h1>
               <h2>
                <ul>
                <li><a href="">Cập nhật loại sách</a></li>
                <li><a href="">Cập nhật tác giả</a></li>
                <li><a href="">Cập nhật nhà xuất bản </a></li>
                <li><a href="">cập nhật độc giả</a></li>
               </ul>
            </h2>
                </div>
            <div class="section">
            <h1>Quản lý nghiệp vụ</h1>
            <h2>
                <ul>
                <li><a href="">Cập nhật sách</a></li>
                <li><a href="">Làm thẻ thư viện</a></li>
                <li><a href="">Mượn sách </a></li>
                <li><a href="">Trả sách </a></li>
               </ul>
            </h2>
            </div>
            <h1 class="section">Báo cáo thống kê</h1>
            </td>
            <td class="conten">
                <ul>
                    <li class = "title">Title</li>
                    <li><div class="radio">
                    <input type="radio" name="rdmr" value="mn01">Mr
                    <input type="radio" name="rdmrs" value="mn02">Mrs
                    <input type="radio" name="rdmiss" value="mn03">Miss
                    </div><br> </li>
                    <li>First name: <span class="line1"><input type="text" name="txtfirstname"></span></li>
                    <li>Last name: <span class="line2"><input type="text"name="txtlastname" ></span> </li>
                    <li>Email: <span class="line3"><input type="text" name="txtemail"></span></li>
                    <li>Phone: <span class="line4"><input type="text" name="txtphone"></span></li>
                    <li>Password: <span class="line5"><input type="password" name="txtpassword"></span></li>
                    <li>Country: <span class="line6">
                    <select name="country" id="country">
                        <option value="vietnam">Việt Nam</option>
                        <option value="vietnam">American</option>
                        <option value="vietnam">France</option>
                        <option value="vietnam">Germany</option>
                    </select>
                    </span></li>
                    <li><input type="checkbox" name="ckbchoose">I agree to the terms and condition</li>
                    <li class="line7"><input type="submit" name="signup" value="Sign up">
                    <input style="margin-left:10px" type="submit" name="resetform" value="Reset form">
                </li>
                </ul>               
            </td>
        </tr>
        <tr>
            <td class="footer" colspan="2"></td>
        </tr>

    </table>
</body>
</html>