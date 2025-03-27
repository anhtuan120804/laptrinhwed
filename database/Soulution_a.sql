CREATE DATABASE QLNguoiDung

CREATE TABLE users (
    user_id INT IDENTITY(1,1) PRIMARY KEY,
    user_name VARCHAR(25) NOT NULL,
    user_email VARCHAR(55) NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    updated_at DATETIME,
    created_at DATETIME DEFAULT GETDATE()
);

CREATE TABLE products (
    product_id INT IDENTITY(1,1) PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price FLOAT NOT NULL,
    product_description TEXT NOT NULL,
    updated_at DATETIME,
    created_at DATETIME DEFAULT GETDATE()
);

CREATE TABLE orders (
    order_id INT IDENTITY(1,1) PRIMARY KEY,
    user_id INT NOT NULL,
    updated_at DATETIME,
    created_at DATETIME DEFAULT GETDATE(),
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE order_details (
    order_detail_id INT IDENTITY(1,1) PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    updated_at DATETIME,
    created_at DATETIME DEFAULT GETDATE(),
    FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE CASCADE
);

--1. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z)
SELECT * FROM users ORDER BY user_name ASC;

--2. Lấy ra 07 người dùng theo thứ tự tên theo Alphabet (A->Z)
SELECT * FROM users ORDER BY user_name ASC OFFSET 0 ROWS FETCH NEXT 7 ROWS ONLY;

--3. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z), trong đó tên người dùng có chữ a
SELECT * FROM users WHERE user_name LIKE '%a%' ORDER BY user_name ASC;

--4. Lấy ra danh sách người dùng trong đó tên người dùng bắt đầu bằng chữ m
SELECT * FROM users WHERE user_name LIKE 'm%';
 
--5. Lấy ra danh sách người dùng trong đó tên người dùng kết thúc bằng chữ i
SELECT * FROM users WHERE user_name LIKE '%i';

--6. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ: example@gmail.com)
SELECT * FROM users WHERE user_email LIKE '%@gmail.com';

--7. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ: example@gmail.com), tên người dùng bắt đầu bằng chữ m
SELECT * FROM users 
WHERE user_email LIKE '%@gmail.com' 
AND user_name LIKE 'm%';

--8. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ: example@gmail.com), tên người dùng có chữ i và tên người dùng có chiều dài lớn hơn 5
SELECT * FROM users 
WHERE user_email LIKE '%@gmail.com' 
AND user_name LIKE '%i%' 
AND LEN(user_name) > 5;

--9. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5 đến 9, email dùng dịch vụ Gmail, trong tên email có chữ I (trong tên, chứ không phải domain exampleitest@yahoo.com)
SELECT * FROM users 
WHERE user_name LIKE '%a%' 
AND LEN(user_name) BETWEEN 5 AND 9 
AND user_email LIKE '%@gmail.com' 
AND LEFT(user_email, CHARINDEX('@', user_email) - 1) LIKE '%i%';

--10. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5 đến 9 hoặc tên người dùng có chữ i, chiều dài nhỏ hơn 9 hoặc email dùng dịch vụ Gmail, trong tên email có chữ i
SELECT * FROM users 
WHERE (user_name LIKE '%a%' AND LEN(user_name) BETWEEN 5 AND 9) 
   OR (user_name LIKE '%i%' AND LEN(user_name) < 9) 
   OR (user_email LIKE '%@gmail.com' 
       AND LEFT(user_email, CHARINDEX('@', user_email) - 1) LIKE '%i%');
