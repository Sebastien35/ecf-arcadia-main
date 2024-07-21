CREATE DATABASE IF NOT EXISTS arcadia_db CHARACTER SET utf8 COLLATE utf8_general_ci;

USE arcadia_db;

CREATE TABLE IF NOT EXISTS habitat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL ,
    image JSON NOT NULL ,
    comment TEXT
);

CREATE TABLE IF NOT EXISTS animal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    race VARCHAR(150) NOT NULL,
    image JSON,
    habitat_id INT,
    FOREIGN KEY (habitat_id) REFERENCES habitat(id)
);

CREATE TABLE IF NOT EXISTS contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS service (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    image JSON
);

CREATE TABLE IF NOT EXISTS review (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    valid BOOLEAN DEFAULT FALSE,
    submitted_at DATETIME NOT NULL,
    rating INT NOT NULL
);

CREATE TABLE IF NOT EXISTS schedule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(30) NOT NULL,
    opening_time TIME NOT NULL,
    closing_time TIME NOT NULL,
    is_closed BOOLEAN NOT NULL
);

CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    roles JSON NOT NULL,
    reset_password_token VARCHAR(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS veterinary_report (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT,
    user_id INT,
    health_status TEXT,
    food VARCHAR(100),
    food_weight DECIMAL(5, 2),
    report_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    detail TEXT,
    FOREIGN KEY (animal_id) REFERENCES animal(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE IF NOT EXISTS animal_feeding (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT,
    user_id INT,
    feeding_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    food VARCHAR(100),
    quantity DECIMAL(5, 2),
    FOREIGN KEY (animal_id) REFERENCES animal(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);


