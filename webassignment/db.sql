CREATE DATABASE IF NOT EXISTS foodrestaurant COLLATE utf8mb3_general_ci;

USE foodrestaurant; 

CREATE TABLE IF NOT EXISTS food(
  id int(11) AUTO_INCREMENT,
  food_name varchar(100),
  food_category varchar(40),
  food_description text,
  food_price Float(4,2),
  food_image_location varchar(100),
  food_code varchar(100),
  food_qty int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY(id)
);


CREATE TABLE IF NOT EXISTS cart (
  id int(11) NOT NULL,
  food_name varchar(100) NOT NULL,
  food_price varchar(50) NOT NULL,
  food_image_location varchar(100) NOT NULL,
  qty int(10) NOT NULL,
  total_price varchar(100) NOT NULL,
  food_code varchar(100),
  PRIMARY KEY(id)
);


CREATE TABLE  IF NOT EXISTS orders (
  id int(11) NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  phone varchar(20) NOT NULL,
  address varchar(255) NOT NULL,
  pmode varchar(50) NOT NULL,
  foods varchar(255) NOT NULL,
  amount_paid varchar(100) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS useraccount(
  userid INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  password VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  email VARCHAR(50),
  phone VARCHAR(20),
  type CHAR(10),
  subject TEXT
);
