<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phpcrud';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style_2.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">

    	<div>
    		<h1>MHARZI Chaymae</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-book"></i>Read</a>
			<a href="create.php"><i class="fas fa-hammer"></i>Create</a>

    	</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,64L9.2,96C18.5,128,37,192,55,208C73.8,224,92,192,111,176C129.2,160,148,160,166,154.7C184.6,149,203,139,222,144C240,149,258,171,277,192C295.4,213,314,235,332,224C350.8,213,369,171,388,170.7C406.2,171,425,213,443,224C461.5,235,480,213,498,181.3C516.9,149,535,107,554,85.3C572.3,64,591,64,609,64C627.7,64,646,64,665,64C683.1,64,702,64,720,90.7C738.5,117,757,171,775,213.3C793.8,256,812,288,831,272C849.2,256,868,192,886,144C904.6,96,923,64,942,53.3C960,43,978,53,997,85.3C1015.4,117,1034,171,1052,202.7C1070.8,235,1089,245,1108,234.7C1126.2,224,1145,192,1163,181.3C1181.5,171,1200,181,1218,165.3C1236.9,149,1255,107,1274,112C1292.3,117,1311,171,1329,208C1347.7,245,1366,267,1385,277.3C1403.1,288,1422,288,1431,288L1440,288L1440,0L1430.8,0C1421.5,0,1403,0,1385,0C1366.2,0,1348,0,1329,0C1310.8,0,1292,0,1274,0C1255.4,0,1237,0,1218,0C1200,0,1182,0,1163,0C1144.6,0,1126,0,1108,0C1089.2,0,1071,0,1052,0C1033.8,0,1015,0,997,0C978.5,0,960,0,942,0C923.1,0,905,0,886,0C867.7,0,849,0,831,0C812.3,0,794,0,775,0C756.9,0,738,0,720,0C701.5,0,683,0,665,0C646.2,0,628,0,609,0C590.8,0,572,0,554,0C535.4,0,517,0,498,0C480,0,462,0,443,0C424.6,0,406,0,388,0C369.2,0,351,0,332,0C313.8,0,295,0,277,0C258.5,0,240,0,222,0C203.1,0,185,0,166,0C147.7,0,129,0,111,0C92.3,0,74,0,55,0C36.9,0,18,0,9,0L0,0Z"></path></svg>

    </nav>
EOT;
}

function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>