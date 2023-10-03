<?php
# danh mục
// id => id
// tên danh mục => cat_title

$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Điện thoại'
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Máy tính'
    )
);

# dữ liệu sản phẩm
    // id
    // tên sản phẩm => product_title
    // giá => price
    // mã sp => code
    // mô tả => product_desc
    // ảnh đại điện => product_thumb
    // nội dung => product_content
    // id danh mục => cat_id

$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#1',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-041222-103237.jpg'></p>",
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#2',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/236780/iphone-13-mini-pink-1-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/236780/iphone-13-mini-6.jpg'></p>",
        'cat_id' => 1
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#3',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-tim-thumb-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-061222-050603.jpg'></p>",
        'cat_id' => 1
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#4',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/250262/iphone-13-pro-max-gold-1-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/250262/iphone-13-pro-max-512gb-5.jpg'></p>",
        'cat_id' => 1
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#1',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-041222-103237.jpg'></p>",
        'cat_id' => 1
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#2',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/236780/iphone-13-mini-pink-1-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/236780/iphone-13-mini-6.jpg'></p>",
        'cat_id' => 1
    ),
    7 => array(
        'id' => 7,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#3',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-tim-thumb-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-061222-050603.jpg'></p>",
        'cat_id' => 1
    ),
    8 => array(
        'id' => 8,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 28490000,
        'code' => 'IP#4',
        'product_desc' => 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/250262/iphone-13-pro-max-gold-1-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/250262/iphone-13-pro-max-512gb-5.jpg'></p>",
        'cat_id' => 1
    ),
    9 => array(
        'id' => 9,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#1',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/p/r/pro-m2.jpg',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/44/302149/macbook-pro-16-inch-m2-pro-1-1.jpg'></p>",
        'cat_id' => 2
    ),
    10 => array(
        'id' => 10,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#2',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/a/i/air_m2.png',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/macbook/Air/M1-2020/macbook-air-2020-m1-3.jpg'></p>",
        'cat_id' => 2
    ),
    11 => array(
        'id' => 11,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#1',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/m/a/macbook_pro_m22.png',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/macbook/macbook-pro-16-inch-m2-pro-2023-3.jpg'></p>",
        'cat_id' => 2
    ),
    12 => array(
        'id' => 12,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#1',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/m/a/macbook_16gb.png',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/macbook/macbook-pro-16-inch-2021-m1-max-1-min.jpg'></p>",
        'cat_id' => 2
    ),
    13 => array(
        'id' => 13,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#1',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/p/r/pro-m2.jpg',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/44/302149/macbook-pro-16-inch-m2-pro-1-1.jpg'></p>",
        'cat_id' => 2
    ),
    14 => array(
        'id' => 14,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#2',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/a/i/air_m2.png',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/macbook/Air/M1-2020/macbook-air-2020-m1-3.jpg'></p>",
        'cat_id' => 2
    ),
    15 => array(
        'id' => 15,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#1',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/m/a/macbook_pro_m22.png',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/macbook/macbook-pro-16-inch-m2-pro-2023-3.jpg'></p>",
        'cat_id' => 2
    ),
    16 => array(
        'id' => 16,
        'product_title' => 'Laptop MacBook Pro 16',
        'price' => 64990000,
        'code' => 'MK#1',
        'product_desc' => 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 ',
        'product_thumb' => 'https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/m/a/macbook_16gb.png',
        'product_content' => "<p>Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí. </p>
        <p><img src='https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/macbook/macbook-pro-16-inch-2021-m1-max-1-min.jpg'></p>",
        'cat_id' => 2
    ),

)  ;  
