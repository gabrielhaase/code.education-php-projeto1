<?php
//----------------------------------------------------------------------------------------------------
//DATABASE CONNECTION
$hostname = '';
$database = '';
$username = '';
$password = '';

try {
    $pdoConnection = new \PDO( 'mysql:host='.$hostname.';charset=utf8;', $username ,$password );
} catch (\PDOException $e) {
    die("Error: ".$e->getCode() . ": " . $e->getMessage());
}
//----------------------------------------------------------------------------------------------------
//CREATE DATABASE
$databaseCreate = "CREATE DATABASE IF NOT EXISTS `".$database."`";
$databaseCreate_stmt = $pdoConnection->prepare($databaseCreate);
$databaseCreate_stmt->execute();
//----------------------------------------------------------------------------------------------------
//SET DATABASE TO USE
$databaseUse = "USE `".$database."`";
$databaseUse_stmt = $pdoConnection->prepare($databaseUse);
$databaseUse_stmt->execute();
//----------------------------------------------------------------------------------------------------
//DROP TABLE IF EXISTS
$dropTable = "DROP TABLE IF EXISTS `content`";
$dropTable_stmt = $pdoConnection->prepare($dropTable);
$dropTable_stmt->execute();
//----------------------------------------------------------------------------------------------------
//CREATE TABLE
$createTable = "
	CREATE TABLE `content` (
		`id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
		`path` varchar(80) NOT NULL,
		`title` varchar(80) NOT NULL,
		`content` blob NOT NULL,
		`imagePath` varchar(150) NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
";
$createTable_stmt = $pdoConnection->prepare($createTable);
$createTable_stmt->execute();
//----------------------------------------------------------------------------------------------------
//INSERT DATA
$insertData = "INSERT INTO `content` VALUES (1,'home','Home','<p>Página principal. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum commodo leo, sit amet scelerisque nisi sodales ac. Suspendisse tristique egestas vehicula. Aliquam nec velit luctus est laoreet convallis eleifend nec elit. Maecenas non leo sed dui interdum laoreet a ultricies risus. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at urna non mi egestas vestibulum faucibus ac ante. Nunc hendrerit justo a justo facilisis, vel posuere erat volutpat. Pellentesque facilisis eget lorem a egestas.</p>\n<p>Sed sit amet aliquet nibh, ac laoreet erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent bibendum cursus erat, ac vestibulum nulla aliquam eu. Curabitur eget diam ultrices, tincidunt massa eget, laoreet dolor. Mauris sed interdum metus. Mauris dapibus arcu lectus, in commodo felis blandit quis. Proin at luctus mauris. Pellentesque semper sem ligula, ut dignissim est congue a. Curabitur at posuere dui. Sed quis venenatis lorem. Nam lobortis diam ut tellus aliquet faucibus. Cras justo ante, fringilla sit amet orci in, sollicitudin tempor ligula. Integer malesuada, lectus sit amet convallis bibendum, odio purus mollis tellus, vestibulum lacinia est nulla nec leo. Nunc faucibus in sem auctor vehicula. Proin elementum elit non pharetra cursus.</p>\n<p>Cras risus magna, accumsan a dignissim vitae, condimentum nec lectus. Maecenas tempus vulputate convallis. Quisque facilisis ultrices imperdiet. Duis congue augue id libero sagittis, a ultrices massa fringilla. Nam sed lorem purus. Praesent non tellus non magna accumsan dictum a ut urna. Curabitur imperdiet, est a malesuada malesuada, dui eros mollis nisl, id pretium felis dolor id sapien. Proin ac varius erat. Nullam malesuada, dui quis condimentum venenatis, nisi orci vulputate erat, ac gravida metus nunc at nunc. Quisque leo leo, gravida eu nibh a, vehicula convallis diam. Mauris vitae maximus nisi, in maximus elit. Proin id rutrum mi, at vehicula justo. Aenean ullamcorper eget dolor quis vulputate.</p>	\n\n','./library/images/computers.jpg'),(2,'empresa','Empresa','<p>Nossa empresa lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum commodo leo, sit amet scelerisque nisi sodales ac. Suspendisse tristique egestas vehicula. Aliquam nec velit luctus est laoreet convallis eleifend nec elit. Maecenas non leo sed dui interdum laoreet a ultricies risus. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at urna non mi egestas vestibulum faucibus ac ante. Nunc hendrerit justo a justo facilisis, vel posuere erat volutpat. Pellentesque facilisis eget lorem a egestas.</p>\n<p>Sed sit amet aliquet nibh, ac laoreet erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent bibendum cursus erat, ac vestibulum nulla aliquam eu. Curabitur eget diam ultrices, tincidunt massa eget, laoreet dolor. Mauris sed interdum metus. Mauris dapibus arcu lectus, in commodo felis blandit quis. Proin at luctus mauris. Pellentesque semper sem ligula, ut dignissim est congue a. Curabitur at posuere dui. Sed quis venenatis lorem. Nam lobortis diam ut tellus aliquet faucibus. Cras justo ante, fringilla sit amet orci in, sollicitudin tempor ligula. Integer malesuada, lectus sit amet convallis bibendum, odio purus mollis tellus, vestibulum lacinia est nulla nec leo. Nunc faucibus in sem auctor vehicula. Proin elementum elit non pharetra cursus.</p>\n<p>Cras risus magna, accumsan a dignissim vitae, condimentum nec lectus. Maecenas tempus vulputate convallis. Quisque facilisis ultrices imperdiet. Duis congue augue id libero sagittis, a ultrices massa fringilla. Nam sed lorem purus. Praesent non tellus non magna accumsan dictum a ut urna. Curabitur imperdiet, est a malesuada malesuada, dui eros mollis nisl, id pretium felis dolor id sapien. Proin ac varius erat. Nullam malesuada, dui quis condimentum venenatis, nisi orci vulputate erat, ac gravida metus nunc at nunc. Quisque leo leo, gravida eu nibh a, vehicula convallis diam. Mauris vitae maximus nisi, in maximus elit. Proin id rutrum mi, at vehicula justo. Aenean ullamcorper eget dolor quis vulputate.</p>	\n\n','./library/images/building.jpg'),(3,'produtos','Produtos','<p>Nossos produtos, lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum commodo leo, sit amet scelerisque nisi sodales ac. Suspendisse tristique egestas vehicula. Aliquam nec velit luctus est laoreet convallis eleifend nec elit. Maecenas non leo sed dui interdum laoreet a ultricies risus. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at urna non mi egestas vestibulum faucibus ac ante. Nunc hendrerit justo a justo facilisis, vel posuere erat volutpat. Pellentesque facilisis eget lorem a egestas.</p>\n<ul>\n	<li>Websites;</li>\n	<li>Hotsites;</li>\n	<li>Email marketing;</li>\n	<li>Aplicativos móveis;</li>\n	<li>Suspendisse tristique egestas vehicula;</li>\n	<li>Aliquam nec velit luctus est laoreet;</li>\n	<li>Convallis eleifend nec elit;</li>\n	<li>Maecenas non leo sed dui interdum;</li>\n	<li>Laoreet a ultricies risus;</li>\n	<li>Maecenas non leo sed dui interdum.</li>		\n</ul>\n','./library/images/products.jpg'),(4,'servicos','Serviços','<p>Nossos serviços, lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum commodo leo, sit amet scelerisque nisi sodales ac. Suspendisse tristique egestas vehicula. Aliquam nec velit luctus est laoreet convallis eleifend nec elit. Maecenas non leo sed dui interdum laoreet a ultricies risus. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at urna non mi egestas vestibulum faucibus ac ante. Nunc hendrerit justo a justo facilisis, vel posuere erat volutpat. Pellentesque facilisis eget lorem a egestas.</p>\n<ul>\n	<li>Consultoria;</li>\n	<li>Seleção;</li>\n	<li>Treinamento;</li>\n	<li>Convallis eleifend nec elit;</li>\n	<li>Maecenas non leo sed dui interdum;</li>\n	<li>Laoreet a ultricies risus;</li>\n	<li>Maecenas non leo sed dui interdum.</li>		\n</ul>\n','./library/images/services.jpg'),(5,'contato','Contato','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum commodo leo, sit amet scelerisque nisi sodales ac. Suspendisse tristique egestas vehicula. Aliquam nec velit luctus est laoreet convallis eleifend nec elit. Maecenas non leo sed dui interdum laoreet a ultricies risus. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at urna non mi egestas vestibulum faucibus ac ante. Nunc hendrerit justo a justo facilisis, vel posuere erat volutpat. Pellentesque facilisis eget lorem a egestas.</p>\n','./library/images/contact.jpg')";
$insertData_stmt = $pdoConnection->prepare($insertData);
$insertData_stmt->execute();
