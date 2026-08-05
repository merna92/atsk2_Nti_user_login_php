CREATE DATABASE student_accounts;

USE student_accounts;

CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    student_email VARCHAR(100) NOT NULL,
    student_password VARCHAR(255) NOT NULL
);

INSERT INTO students (student_name, student_email, student_password) VALUES
('Ahmed Mohamed', 'ahmed.mohamed@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.'),
('Mona Ali', 'mona.ali@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.'),
('Omar Hassan', 'omar.hassan@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.'),
('Sara Adel', 'sara.adel@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.'),
('Youssef Samir', 'youssef.samir@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.'),
('Nour Khaled', 'nour.khaled@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.'),
('Mostafa Gamal', 'mostafa.gamal@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.'),
('Farah Tarek', 'farah.tarek@gmail.com', '$2y$10$a0Ex0p.n32zvDmzZDxHKuejnrVOk7YeoK8IOlH0thqqdQHqf8OMx.');
