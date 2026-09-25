CREATE DATABASE IF NOT EXISTS pos_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE pos_db;

CREATE TABLE IF NOT EXISTS customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20),
  created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  full_name VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Ana Cruz', 'ana.cruz@example.com', '09171234567', '2026-09-01 09:00:00'),
('Ben Santos', 'ben.santos@example.com', '09181234567', '2026-09-02 10:15:00'),
('Carla Reyes', 'carla.reyes@example.com', '09191234567', '2026-09-03 11:30:00'),
('Daniel Lim', 'daniel.lim@example.com', '09201234567', '2026-09-04 13:00:00'),
('Ella Ramos', 'ella.ramos@example.com', '09211234567', '2026-09-05 14:45:00');

INSERT INTO users (username, full_name, created_at) VALUES
('admin01', 'Marco Dela Cruz', '2026-09-01 08:00:00'),
('cashier01', 'Nina Garcia', '2026-09-02 08:00:00'),
('cashier02', 'Paolo Torres', '2026-09-03 08:00:00'),
('staff01', 'Rina Mendoza', '2026-09-04 08:00:00'),
('staff02', 'Leo Navarro', '2026-09-05 08:00:00');
