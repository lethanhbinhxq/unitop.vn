<?php
// ===============================
// BÀI TẬP PHẦN 7
// ===============================

# Bài 1: Tạo mảng lưu các số lẻ từ 3 tới 150

/*
 * Khai báo $list_odd là mảng rỗng
 * Chạy for loop từ bắt đầu từ 3 đến 150, tạo bước nhảy là 2 để đảm bảo số lẻ
 * Thêm từng phần tử $i vào mảng $list_odd
 */
$list_odd = array();
for ($i = 3; $i <= 150; $i += 2) {
    $list_odd[] = $i;
}
echo "Bài tập 1: Tạo mảng lưu các số lẻ từ 3 tới 150";
echo "<pre>";
print_r($list_odd);
echo "</pre>";

# Bài 2: Tạo mảng đa chiều quản lý các bài viết trong website tin tức

/*
 * Mỗi bài viết tin tức gồm:
 * 1. id: số thứ tự bài viết
 * 2. title: tiêu đề
 * 3. post_thumb: hình ảnh bài viết, lưu trong folder assets/images
 * 4. author: tác giả bài viết
 * 5. date: Thời gian đăng bài
 * 6. description: Mô tả ngắn về bài viết
 * 7. detail: Chi tiết bài viết
 * 8. category: Danh mục bài viết
 */

$list_posts = array(
    // Post 1
    1 => array(
        "id" => 1,
        'title' => "Việt Nam hấp dẫn hơn với đầu tư dài hạn",
        "post_thumb" => "assets/images/post_1.jpg",
        "author" => "Nhóm Tác Giả",
        "date" => "20/01/2026 15:04",
        "description" => "Đây là chia sẻ của Đại sứ EU tại Việt Nam Julien Guerrier khi nhìn lại quan hệ giữa hai bên trong 5 năm qua.",
        "category"=> "Kinh doanh",
        "detail" => "Đây là chia sẻ của Đại sứ EU tại Việt Nam Julien Guerrier khi nhìn lại quan hệ giữa hai bên trong 5 năm qua.
Kết quả này cho thấy có đủ cơ sở để tin vào những gì có thể cùng nhau đạt được trong những năm tới.

Cải cách giúp tăng trưởng kiên cường
Đại sứ Liên minh châu Âu (EU) phân tích: 5 năm qua, Việt Nam đã chứng tỏ năng lực mạnh mẽ trong việc hiện đại hóa quản trị và duy trì quỹ đạo phát triển ấn tượng.

Thế giới đã chứng kiến Việt Nam không chỉ tăng trưởng nhanh mà còn có những cải cách giúp tăng trưởng kiên cường, đổi mới hơn và hấp dẫn hơn đối với đầu tư dài hạn.

Cấp tập chuẩn bị tìm nhà đầu tư làm đường vành đai 4 TP.HCM dài 160km theo hình thức BOT
Khánh Hòa kêu gọi đầu tư 231 dự án, kỳ vọng vào du lịch, bất động sản và năng lượng tái tạo
Bốn ông lớn ngân hàng cung ứng vốn dự án điện khí Quảng Trạch 2 có tổng mức đầu tư 52.490 tỉ đồng
Thứ nhất, việc tái cơ cấu các cơ quan chính phủ, sáp nhập các tỉnh và cắt giảm các cấp hành chính báo hiệu quyết tâm nâng cao hiệu quả và cung cấp dịch vụ công.

Đây là bước đi quan trọng, quản lý hợp lý có thể giảm sự phân tán, đẩy nhanh quá trình ra quyết định và cuối cùng là cung cấp một môi trường thuận lợi và dễ dự đoán hơn cho người dân cũng như doanh nghiệp.

Thứ hai, Việt Nam đã chủ động cập nhật khung pháp lý, đặc biệt trong các lĩnh vực sẽ định hình giai đoạn phát triển tiếp theo. Việc áp dụng các quy định mới trong lĩnh vực số và năng lượng là đặc biệt quan trọng.

Sự rõ ràng về chính sách và các quy tắc hướng có tầm nhìn xa trong các lĩnh vực này có thể tạo ra tác động to lớn. Những nỗ lực này sẽ tiếp tục củng cố sức hấp dẫn của Việt Nam đối với đầu tư trực tiếp nước ngoài, không chỉ bằng cách cải thiện môi trường kinh doanh, mà còn báo hiệu tham vọng dài hạn trong chuyển đổi xanh và chuyển đổi số.

Nhìn về phía trước, EU nhận thấy tiềm năng to lớn để tiếp tục tăng cường hợp tác trong chuyển đổi xanh và các lĩnh vực then chốt khác hỗ trợ phát triển bền vững. Chúng tôi cũng mong muốn tăng cường hợp tác trong nghiên cứu, khoa học và công nghệ, số hóa, kết nối và hợp tác bán dẫn.

Đại sứ EU tại Việt Nam JULIEN GUERRIER
Mối quan hệ hình mẫu
'Việt Nam đang đi đúng hướng', Đại sứ Julien Guerrier nhận định. Trong bối cảnh đó, quan hệ giữa EU và Việt Nam cũng đã phát triển đáng kể, được thắt chặt hơn ở cấp độ song phương, khu vực và toàn cầu, không chỉ về mặt kinh tế, mà còn ngày càng sâu sắc hơn trong hợp tác chính trị. Một động lực chính cho quỹ đạo tích cực này là Hiệp định thương mại tự do Việt Nam - EU (EVFTA).

Hiệp định có hiệu lực vào thời điểm quan trọng, chỉ vài tháng trước cú sốc dịch COVID-19, khi Việt Nam cần tự do hóa thương mại nhất. Trong bối cảnh tiêu dùng toàn cầu thu hẹp, EVFTA đã mang lại một bước đệm thực sự: xuất khẩu của Việt Nam ghi nhận mức tăng trưởng hai con số ngay cả khi xuất khẩu toàn cầu giảm mạnh.

'Chúng tôi cho rằng còn nhiều dư địa để đem lại kết quả tốt hơn nữa, đặc biệt là thông qua việc thực hiện đầy đủ và hiệu quả thỏa thuận. EVFTA cũng giúp thúc đẩy dòng vốn và công nghệ của EU vào Việt Nam, tăng lên hơn 30 tỉ euro từ mức 22 tỉ euro trước đó', đại sứ EU nói.

Trong bối cảnh bất định hiện nay, EVFTA là minh chứng cho cam kết chung về thương mại mở, dựa trên quy tắc và đã trở thành hình mẫu cho các hiệp định thương mại khác của EU.

Hiệp định này cũng đặt nền tảng vững chắc cho hợp tác sâu sắc hơn giữa EU và Việt Nam trong các lĩnh vực mới có lợi ích chung, phù hợp với tham vọng của Việt Nam về tăng trưởng, phát triển kỹ năng, nâng cấp công nghệ và mở rộng vai trò của các nhà đầu tư nước ngoài và châu Âu.",
    ),

    // Post 2
    2 => array(
        "id" => 2,
        'title' => "Tỉ phú bóng đá Anh sẽ thưởng 305 tỉ đồng cho U23 Trung Quốc nếu thắng U23 Việt Nam",
        "post_thumb" => "assets/images/post_2.jpg",
        "author" => "Huy Đăng",
        "date" => "20/01/2026 06:46",
        "description" => "Theo thông tin từ truyền thông Trung Quốc, đội bóng đá U23 của họ sẽ nhận khoản thưởng cực lớn, lên đến 81 triệu nhân dân tệ nếu giành vé vào chung kết Giải U23",
        "category"=> "Thể thao",
        "detail" => "Theo thông tin từ truyền thông Trung Quốc, đội bóng đá U23 của họ sẽ nhận khoản thưởng cực lớn, lên đến 81 triệu nhân dân tệ nếu giành vé vào chung kết Giải U23 châu Á 2026.
Thông tin này được đưa ra bởi nhiều trang báo Trung Quốc như Sina và 163. Và người hứa sẽ thưởng đậm cho U23 Trung Quốc là tỉ phú Guo Guangchang (Quách Quảng Xương). 

Ông Guo năm nay 58 tuổi, là người sáng lập tập đoàn tư nhân đa ngành Fosun. Với khối tài sản gần 3 tỉ USD, ông Guo là một nhân vật giàu sức ảnh hưởng ở Trung Quốc.

Ngoài ra, ông Guo còn nổi tiếng trong việc đầu tư bóng đá, khi Tập đoàn Fosun của ông chính thức mua lại CLB Wolverhampton của Anh vào năm 2016. 
Ở thời điểm đó, Wolverhampton đang chơi ở Giải hạng nhất Anh. Nhờ sự đầu tư mạnh mẽ của tập đoàn Trung Quốc, đội bóng này giành quyền thăng hạng Premier League vào năm 2018, và bám trụ suốt từ đó đến nay. 

Theo báo 163, ông Gou mới đây đã hứa sẽ thưởng 81 triệu nhân dân tệ - tương đương 11,6 triệu USD, hay 305 tỉ đồng cho U23 Trung Quốc, nếu họ vượt qua Việt Nam để vào chung kết Giải U23 châu Á 2026. 

Dù phía Fosun chưa đưa ra thông báo chính thức về việc này, truyền thông Trung Quốc cho biết tỉ phú Guo đã chốt phương án thưởng cho đội U23 Trung Quốc.

Đây được xem là mức thưởng cực cao trong làng bóng đá, gần tương đương với mức thưởng mà các liên đoàn bóng đá quốc gia treo cho chức vô địch các giải đấu lớn như Euro, World Cup...",
    ),

    // Post 3
    3 => array(
        "id" => 3,
        'title' => "Ông Kim Jong Un cách chức Phó thủ tướng ngay tại nhà máy vì thiếu trách nhiệm",
        "post_thumb" => "assets/images/post_3.jpg",
        "author" => "Hà Đào",
        "date" => "20/01/2026 07:05",
        "description" => "Nhà lãnh đạo Triều Tiên Kim Jong Un đã cách chức một quan chức cấp cao phụ trách chính sách kinh tế và công khai chỉ trích đội ngũ cán bộ điều hành mà ông cho là 'kém năng lực', trong chuyến thị sát dự án hiện đại hóa tổ hợp cơ khí trọng điểm.",
        "category"=> "Thời sự",
        "detail" => "Nhà lãnh đạo Triều Tiên Kim Jong Un đã cách chức một quan chức cấp cao phụ trách chính sách kinh tế và công khai chỉ trích đội ngũ cán bộ điều hành mà ông cho là 'kém năng lực', trong chuyến thị sát dự án hiện đại hóa tổ hợp cơ khí trọng điểm.
        Động thái công khai hiếm hoi này diễn ra trong bối cảnh Bình Nhưỡng chuẩn bị cho kỳ đại hội quan trọng của Đảng Lao động sắp tới.

Theo Hãng thông tấn trung ương KCNA ngày 20-1, nhà lãnh đạo Kim Jong Un đã cách chức Phó thủ tướng Yang Sung Ho ngay tại chỗ trong chuyến thăm Tổ hợp cơ khí Ryongsong, cơ sở chế tạo máy then chốt của Triều Tiên.

Quyết định được đưa ra sau khi dự án gặp nhiều khó khăn, chậm tiến độ và gây ra 'không ít tổn thất kinh tế', xuất phát từ những 'sự hỗn loạn không cần thiết do yếu tố con người'.

'Do sự thiếu trách nhiệm, thô lỗ và kém năng lực của các quan chức chỉ đạo kinh tế, dự án hiện đại hóa giai đoạn đầu của Tổ hợp cơ khí Ryongsong đã gặp nhiều trở ngại', ông Kim phát biểu.

KCNA dẫn lời nhà lãnh đạo Triều Tiên cho biết ông Yang bị cách chức vì 'không còn phù hợp để được giao những trọng trách lớn'.

'Đơn giản mà nói, đó giống như việc buộc một chiếc xe vào con dê - một sai lầm vô tình xảy ra trong quá trình bổ nhiệm cán bộ của chúng ta', ông Kim ví von. 'Rốt cuộc, con bò mới là loài kéo xe, chứ không phải con dê'.

Nhà lãnh đạo Triều Tiên cũng cảnh báo rằng đội ngũ hoạch định chính sách kinh tế hiện nay 'khó có thể đảm đương nhiệm vụ tái cơ cấu toàn bộ nền công nghiệp quốc gia và nâng cấp về mặt công nghệ'.

Ông nhấn mạnh việc từ bỏ những cách làm cũ - đặt kỳ vọng vào những người đã quá quen với tư tưởng thất bại, sự vô trách nhiệm và thái độ thụ động - sẽ trở thành 'điểm khởi đầu mới cho tinh thần tiên phong và phát triển trong tương lai'.

Dự án hiện đại hóa Tổ hợp máy móc Ryongsong là một phần trong chiến lược được ông Kim Jong Un thúc đẩy tại Đại hội Đảng lần thứ tám vào năm 2021, nhằm nâng cao năng lực ngành chế tạo máy - lĩnh vực được coi là nền tảng cho mục tiêu tự lực, tự cường của Triều Tiên.

Trong những tuần gần đây, nhà lãnh đạo này đã thực hiện hàng loạt chuyến thăm tới các nhà máy cũng như các cuộc thử nghiệm vũ khí, trước thềm Đại hội Đảng Lao động Triều Tiên lần thứ chín, dự kiến sẽ sớm được triệu tập nhằm đề ra các mục tiêu chính sách lớn.",
    ),

    // Post 4
    4 => array(
        "id" => 4,
        'title' => "Cú sốc từ 6 trang tâm thư của Brooklyn: Gia đình từng bắt tôi từ bỏ họ Beckham để đổi lấy tiền",
        "post_thumb" => "assets/images/post_4.jpg",
        "author" => "Thiên Phương",
        "date" => "20/01/2026 07:56",
        "description" => "Ở tuổi 26, Brooklyn Beckham vừa gây chấn động dư luận thế giới bằng những tuyên bố đanh thép, bóc trần mặt tối sau ánh hào quang của gia đình nổi tiếng nhất hành tinh.",
        "category"=> "Giải trí",
        "detail" => "Ở tuổi 26, Brooklyn Beckham vừa gây chấn động dư luận thế giới bằng những tuyên bố đanh thép, bóc trần mặt tối sau ánh hào quang của gia đình nổi tiếng nhất hành tinh.
Ngày 19-1-2026, mạng xã hội và truyền thông quốc tế rúng động khi Brooklyn Peltz Beckham đăng tải một tuyên bố dài tới 6 phần trên Instagram cá nhân.

Thay vì những hình ảnh nấu ăn hay khoe cuộc sống sang chảnh thường thấy, cậu cả nhà Beckham đã tung ra những 'quả bom' trực diện nhắm vào cha mẹ mình - David và Victoria Beckham.
Theo The Guardian và Variety, Brooklyn khẳng định: 'Tôi không muốn hòa giải với gia đình mình'.

Brooklyn cáo buộc cha mẹ đã kiểm soát truyền thông để xây dựng những câu chuyện sai lệch về gia đình và nỗ lực không ngừng nghỉ nhằm phá hoại mối quan hệ của anh với vợ, Nicola Peltz, từ trước khi đám cưới diễn ra.

Kinh khủng hơn, thông tin từ Daily Mail và Page Six, Brooklyn tiết lộ vào đêm trước lễ cưới (tháng 4-2022), gia đình đã cố ép anh ký vào một văn bản từ bỏ quyền sử dụng họ Beckham để đổi lấy một khoản tiền.

Brooklyn cũng mô tả mối quan hệ giữa các thành viên trong nhà là 'không chân thực' và mang tính 'biểu diễn' nhằm bảo vệ giá trị của 'Brand Beckham' (Thương hiệu nhà Beckham) hơn là tình cảm thực sự.

'Nỗi nhục nhã nhất đời' trong ngày cưới
Những chi tiết gây sốc nhất tập trung vào hành xử của Victoria Beckham trong ngày trọng đại của con trai. Theo The Sun và BuzzFeed, Brooklyn chia sẻ rằng mẹ anh đã 'chiếm đoạt' điệu nhảy đầu tiên vốn dành cho cô dâu Nicola.",
    ),

);
# Bài 3: Tạo mảng đa chiều quản lý các sản phẩm trong website bán hàng
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 7</title>
</head>
<body>
    <!-- Bài 4: Hiển thị danh sách bài viết lên giao diện -->
     <div id="news-wrapper">
        
     </div>

    <!-- Bài 5: Hiển thị danh sách sản phẩm lên giao diện -->
     <div id="product-wrapper">

     </div>
</body>
</html>