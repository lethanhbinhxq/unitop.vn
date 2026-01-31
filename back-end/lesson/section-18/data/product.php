<?php

# Danh mục

/*
 * id => id
 * Tên danh mục => cat_title
 */

$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => "Điện thoại"
    ),
    2 => array(
        'id' => 2,
        'cat_title' => "Laptop"
    )
);

# Dữ liệu sản phẩm

/*
 * id => "id
 * Tên sản phẩm => product_title
 * Giá => price
 * Mã sản phẩm => code
 * Mô tả => product_desc
 * Ảnh đại diện => product_thumb
 * Nội dung => product_content
 * Id danh mục => cat_id
 */

$list_product = array(
    1 => array(
        "id"=> 1,
        'product_title'=> "Điện thoại OPPO A3 8GB/128GB",
        'price'=> 4200000,
        'code'=> "UNI#1",
        'product_desc'=> "OPPO A3 8GB/128GB mang đến một trải nghiệm sử dụng mượt mà và an toàn. Thiết kế bền bỉ theo tiêu chuẩn quân sự và khả năng kháng nước IP54 cho phép thiết bị vượt qua mọi thử thách, từ những buổi dã ngoại đến những cơn mưa bất chợt.",
        'product_thumb'=> "https://cdn.tgdd.vn/Products/Images/42/328454/oppo-a3-black-thumb-1-600x600.jpg",
        'product_content'=> "<p style='text-align: justify;'>OPPO A3 mang đến thiết kế tinh tế với hai phiên bản màu trắng và đen, tạo cảm giác thanh lịch và hiện đại. Mặt lưng hạn chế bám vân tay, giúp giữ cho thiết bị luôn sạch sẽ. Thiết kế này vừa đẹp mắt, vừa mang lại cảm giác cầm nắm thoải mái cho người dùng.</p>",
        'cat_id'=> 1
    ),
    2 => array(
        "id"=> 2,
        'product_title'=> "iPhone 17 Pro Max 256GB",
        'price'=> 37990000,
        'code'=> "UNI#2",
        'product_desc'=> "iPhone 17 Pro là phiên bản mới nhất của Apple, mang đến nhiều nâng cấp tập trung vào hiệu năng, hệ thống camera và vật liệu thiết kế. Sản phẩm này giới thiệu những công nghệ mới nhằm cải thiện các tính năng cốt lõi và trải nghiệm sử dụng hàng ngày.",
        'product_thumb'=> "https://cdn.tgdd.vn/Products/Images/42/342679/iphone-17-pro-max-cam-thumb-600x600.jpg",
        'product_content'=> "<p style='text-align: justify;'>iPhone 17 Pro được thiết kế lại toàn diện từ trong ra ngoài với nhiều cải tiến về cấu hình và độ bền. Điểm nhấn của thiết kế mới là khung máy nguyên khối làm từ nhôm rèn nhiệt giúp tăng độ bền. iPhone 17 Pro sẽ có ba tùy chọn màu sắc: Bạc (Silver), Cam vũ trụ (Cosmic Orange) và Xanh đậm (Deep Blue).</p>",
        'cat_id'=> 1
    ),
    3 => array(
        "id"=> 3,
        'product_title'=> "Samsung Galaxy S25 5G 12GB/256GB",
        'price'=> 17990000,
        'code'=> "UNI#3",
        'product_desc'=> "Trong sự kiện Unpacked 2025, Samsung giới thiệu Samsung Galaxy S25 - một bước đột phá với thiết kế hiện đại, camera vượt trội và hiệu suất mạnh mẽ. Được trang bị chip Snapdragon 8 Elite For Galaxy tích hợp AI, máy mang đến khả năng tối ưu hóa hiệu năng vượt bậc, đáp ứng mọi nhu cầu của người dùng, đồng thời thể hiện đẳng cấp trong từng chi tiết.",
        'product_thumb'=> "https://cdn.tgdd.vn/Products/Images/42/333363/samsung-galaxy-s25-green-thumbai-600x600.jpg",
        'product_content'=> "<p style='text-align: justify;'>Galaxy S25 tiếp tục kế thừa những nét đặc trưng từ các thế hệ trước, nhưng có sự tinh chỉnh mang lại vẻ ngoài sang trọng và hiện đại hơn. Máy vẫn giữ kiểu dáng vuông vức, với các góc được bo nhẹ nhàng, tạo cảm giác mạnh mẽ nhưng không kém phần tinh tế.</p>",
        'cat_id'=> 1
    ),
    4 => array(
        "id"=> 4,
        'product_title'=> "Samsung Galaxy S25 5G 12GB/256GB",
        'price'=> 14590000,
        'code'=> "UNI#4",
        'product_desc'=> "Laptop HP 15 fc0655AU R5 7430U (C81NGPA) là lựa chọn lý tưởng cho học sinh, sinh viên, nhân viên văn phòng và cả những bạn yêu thích thiết kế đồ họa cơ bản, tìm kiếm một thiết bị đa năng với hiệu suất ổn định và thiết kế thanh lịch. Chiếc laptop này không chỉ đáp ứng tốt các tác vụ hàng ngày mà còn mang đến trải nghiệm làm việc và giải trí mượt mà, trở thành người bạn đồng hành đáng tin cậy trong mọi hoạt động.",
        'product_thumb'=> "https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/44/358079/hp-15-fc0655au-r5-7430u-c81ngpa-thumb-3-639015630581578905-600x600.jpg",
        'product_content'=> "<p>Về hiệu năng, HP 15 fc0655AU được trang bị bộ vi xử lý <strong>AMD Ryzen 5 - 7430U</strong> mạnh mẽ. Với <strong>6 nhân</strong> và <strong>12 luồng</strong>, cùng tốc độ CPU từ <strong>2.30 GHz</strong> và có thể đạt đến <strong>4.30 GHz</strong> khi tải nặng, chiếc laptop này dễ dàng xử lý các tác vụ từ cơ bản đến nâng cao. Từ việc duyệt web, soạn thảo văn bản, làm bài tập nhóm đến chạy các phần mềm thiết kế đồ họa 2D như Photoshop, Illustrator một cách trơn tru. Đi kèm với CPU là card đồ họa tích hợp <strong>AMD Radeon Graphics</strong>, cung cấp hiệu suất đồ họa đủ dùng cho các nhu cầu giải trí đa phương tiện, chỉnh sửa ảnh nhẹ nhàng hoặc chơi một số tựa game không đòi hỏi cấu hình quá cao.</p>",
        'cat_id'=> 2
    ),
    5 => array(
        "id"=> 5,
        'product_title'=> "Laptop MacBook Air 13 inch M4 16GB/256GB",
        'price'=> 23990000,
        'code'=> "UNI#5",
        'product_desc'=> "Không làm người dùng thất vọng, Apple đã cho ra mắt MacBook Air M4 16GB không chỉ là một chiếc laptop đồ họa siêu mỏng nhẹ mà còn mang đến hiệu suất mạnh mẽ với chip Apple M4 và RAM 16 GB, cùng màn hình Liquid Retina rực rỡ và thời lượng pin ấn tượng. Sản phẩm này là sự lựa chọn hoàn hảo cho mọi nhu cầu, phù hợp cho cả người dùng văn phòng, sinh viên, đặc biệt là nhà sáng tạo nội dung, thiết kế đồ hoạ.",
        'product_thumb'=> "https://cdn.tgdd.vn/Products/Images/44/335362/macbook-air-13-inch-m4-xanh-den-600x600.jpg",
        'product_content'=> "<p>Bộ vi xử lý <strong>Apple M4</strong> được sản xuất trên tiến trình tiên tiến của Apple, giúp tối ưu hiệu suất và tiết kiệm năng lượng vượt trội. Với <strong>10 nhân CPU</strong>, con chip này mang lại khả năng xử lý nhanh chóng và mượt mà cho mọi tác vụ, từ công việc văn phòng, lập trình, chỉnh sửa ảnh đến biên tập video.</p>",
        'cat_id'=> 2
    ),
    6 => array(
        "id"=> 6,
        'product_title'=> "Laptop Dell 15 DC15255 - DC5R5802W1",
        'price'=> 15690000,
        'code'=> "UNI#6",
        'product_desc'=> "Chiếc laptop Dell 15 DC15255 R5 7530U (DC5R5802W1) là một lựa chọn lý tưởng dành cho học sinh, sinh viên và nhân viên văn phòng, đặc biệt là những ai cần một thiết bị đa năng cho cả công việc và giải trí, thậm chí cả thiết kế đồ họa cơ bản. Với hiệu năng mạnh mẽ từ chip AMD Ryzen 5 và màn hình chất lượng cao, đây chắc chắn là người bạn đồng hành đáng tin cậy.",
        'product_thumb'=> "https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/44/342755/dell-15-dc15255-r5-7530u-dc5r5802w1-thumb-638920698565049808-600x600.jpg",
        'product_content'=> "<p>Trái tim của chiếc laptop này là bộ vi xử lý <strong>AMD Ryzen 5 - 7530U</strong> với <strong>6 nhân</strong> và <strong>12 luồng</strong>, đạt tốc độ cơ bản <strong>2.00 GHz</strong> và có thể tăng tốc lên đến <strong>4.50 GHz</strong> khi tải nặng. Nhờ vậy, máy dễ dàng xử lý mượt mà mọi tác vụ hàng ngày từ lướt web, học online, làm việc văn phòng với các ứng dụng như Word, Excel, PowerPoint, cho đến lập trình cơ bản mà không gặp phải tình trạng giật lag.</p>",
        'cat_id'=> 2
    ),
);