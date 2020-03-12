<?php
//**************************************************SETUP PAGE 00160542_Numan Ibn Mazid**********************************************

	//Include dB connection file
	include_once '../dbCon.php';
	//Create connection object without database name;
	$con = connect(FALSE);

	//SQL to drop database;
	$sqlToCreateDB = "DROP DATABASE IF EXISTS lindispark;";
	if ($con->query($sqlToCreateDB) === TRUE) {
		echo "Database droped successfully<br>";
	} else {
		echo "Error: " . $sqlToCreateDB . "<br>" . $con->error. "<br>";
	}

	//SQL to create database;
	$sqlToCreateDB = "CREATE DATABASE lindispark;";
	if ($con->query($sqlToCreateDB) === TRUE) {
		echo "Database created successfully<br>";
	} else {
		echo "Error: " . $sqlToCreateDB . "<br>" . $con->error. "<br>";
	}
	
	//Creating connection object with database name;
	$con = connect();
	
	
	
	//SQL to create table users
	$sql = "CREATE TABLE IF NOT EXISTS `users` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `user_type` int(11) NOT NULL DEFAULT '1' COMMENT '0- Admin, 1-Visitor',
	  `name` varchar(25) NOT NULL,
	  `l_name` varchar(25) NOT NULL,	  
	  `gender` varchar(3) NOT NULL,
	  `age` INT(3) NOT NULL,
	  `post_ad` varchar(30) NOT NULL,
	  `post_cd` INT(10) NOT NULL,
	  `more` varchar(70) NOT NULL,
	  `email` varchar(30) NOT NULL,	  
	  `password` varchar(15) NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;";

	if ($con->query($sql) === TRUE) {
		echo "users table created successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	$sql = "INSERT INTO `lindispark`.`users` 
	(`name`, `user_type`, `email`, `password`) 
	VALUES 
	('Admin', '0', 'admin@lindispark.com', '123');";

	if ($con->query($sql) === TRUE) {
		echo "user admin created successfully<br>
		email: admin@lindispark.com<br>password:123<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	
	$sql = "INSERT INTO `lindispark`.`users` 
	(user_type,name,l_name,gender,age,post_ad,post_cd,more,email,password) 
	VALUES 
	('1', 'Numan', 'Numan Ibn Mazid', 'M', '22', 'Dhaka', '1205', 'Hi, I am Numan Ibn Mazid', 'numanworkstation@gmail.com', '12345');";

	if ($con->query($sql) === TRUE) {
		echo "user Numan created successfully<br>
		email: numanworkstation@gmail.com<br>password:12345<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	$sql = "INSERT INTO `lindispark`.`users` 
	(user_type,name,l_name,gender,age,post_ad,post_cd,more,email,password) 
	VALUES 
	('1', 'Mazid', 'Abdul Mazid', 'M', '55', 'Manikganj', '1800', 'Hi, I am Abdul Mazid', 'mazid@gmail.com', '12345');";

	if ($con->query($sql) === TRUE) {
		echo "user Mazid created successfully<br>
		email: mazid@gmail.com<br>password:12345<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//************************************************************************************************
	
	//SQL to create table 'gelary'
	$sql = "CREATE TABLE IF NOT EXISTS `gelary` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `image` varchar(100) NOT NULL,
	  `description` varchar(60) NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;";

	if ($con->query($sql) === TRUE) {
		echo "gelary table created successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//SQL to insert values into 'galery' table
	$sql = "INSERT INTO `lindispark`.`gelary` 
	(`id`, `image`, `description`)
	VALUES 
	(4, 'baldeagle.jpg', 'The Bald Eagle'),
	(5, 'elephant.jpg', 'The Elephant'),
	(6, 'giantpandacub.jpg', 'The Giant Panda'),
	(7, 'cheetah.jpg', 'The Cheetah'),
	(8, 'leopard.jpg', 'The Leopard'),
	(9, 'scarletmacaw.jpg', 'The Scarlet Macaw'),
	(10, 'siberiantiger.jpg', 'The Siberian Tiger'),
	(11, 'egret.jpg', 'The Egret'),
	(12, 'seagull.jpg', 'The Seagull');";

	if ($con->query($sql) === TRUE) {
		echo "gelary table values inserted successfully<br>";
		
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//********************************************************************************************
	
	//SQL to create table 'orders'
	$sql = "CREATE TABLE IF NOT EXISTS `orders` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `order_total` int(30) NOT NULL,
	  `date_of_purchase` varchar(20) NOT NULL,
	  `customer_id` int(11) NOT NULL,
	PRIMARY KEY (`id`) 
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;";

	if ($con->query($sql) === TRUE) {
		echo "orders table created successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//SQL to insert values into 'orders' table
	$sql = "INSERT INTO `lindispark`.`orders` 
	(`id`, `order_total`, `date_of_purchase`, `customer_id`)
	VALUES 
	(4, 4300, '2017-07-31 12:41:02', 5),
	(5, 4700, '2017-07-31 12:41:47', 6);";

	if ($con->query($sql) === TRUE) {
		echo "orders table values inserted successfully<br>";
		
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//*****************************************************************************************
	
	//SQL to create table 'order_details'
	$sql = "CREATE TABLE IF NOT EXISTS `order_details` (
	 `id` int(11) NOT NULL AUTO_INCREMENT,
	 `order_id` int(11) NOT NULL,
	 `product_id` int(11) NOT NULL,
	 `unit_price` float NOT NULL,
	 `order_quantity` int(100) NOT NULL,
	 `subtotal` float NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;";

	if ($con->query($sql) === TRUE) {
		echo "order_details table created successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//SQL to insert values into 'orders' table
	$sql = "INSERT INTO `lindispark`.`order_details` 
	(`id`, `order_id`, `product_id`, `unit_price`, `order_quantity`, `subtotal`)
	VALUES 
	(4, 4, 4, 800, 1, 800),
	(5, 4, 8, 2500, 1, 2500),
	(6, 4, 9, 500, 2, 1000),
	(7, 5, 4, 800, 2, 1600),
	(8, 5, 5, 300, 2, 600),
	(9, 5, 6, 1500, 1, 1500),
	(10, 5, 9, 500, 2, 1000);";

	if ($con->query($sql) === TRUE) {
		echo "order_details table values inserted successfully<br>";
		
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//**************************************************************************************************
	
	//SQL to create table 'product'
	$sql = "CREATE TABLE IF NOT EXISTS `product` (
	 `id` int(11) NOT NULL AUTO_INCREMENT,
	 `name` varchar(25) NOT NULL,
	 `price` float NOT NULL,
	 `image` varchar(100) NOT NULL,
	 `description` varchar(60) NOT NULL,
	 `stock_quantity` int(100) NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;";

	if ($con->query($sql) === TRUE) {
		echo "product table created successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
	//SQL to insert values into 'orders' table
	$sql = "INSERT INTO `lindispark`.`product` 
	(`id`, `name`, `price`, `image`, `description`, `stock_quantity`)
	VALUES 
	(4, 'Adults', 800, 'adult.png', 'Regular ticket for Adults', 40),
	(5, 'Childrens', 300, 'childrens.png', 'Regular ticket for Children', 40),
	(6, 'Families', 1500, 'families.png', 'Regular ticket for Families', 40),
	(7, 'Old Age Pensioners (OAP)', 700, 'oap.png', 'Regular ticket for Old Age Pensioners (OAP)', 40),
	(8, 'VIP', 2500, 'vip.png', 'VIP visit includes Elephant feeding, Off-road Experience', 15),
	(9, 'Summer Special', 500, 'summer.png', 'Summer Special offer 30% off', 50);";

	if ($con->query($sql) === TRUE) {
		echo "product table values inserted successfully<br>";
		
	} else {
		echo "Error: " . $sql . "<br>" . $con->error. "<br>";
	}
	
//**************************END OF SETUP PAGE********************************	
?>
