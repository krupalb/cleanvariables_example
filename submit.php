<?php
function cleanVariables($input, $is_html, $has_quotes, &$xc_param)
{
    if (is_array($input)) {
        foreach ($input as $key => $value) {
            $input[$key] = cleanVariables($value, $is_html, $has_quotes, $xc_param);
        }
    } else {
        $input = trim($input);

        if ($is_html) {
            $input = htmlspecialchars($input, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }

        if ($has_quotes) {
            $input = str_replace(array("'", '"'), '', $input);
        }
    }
  return $input;
}

$xc_param=false;

// Clean the input variables
$_POST = cleanVariables($_POST, true, true,$xc_param);

// Connect to the database
$host = $_ENV['MYSQL_HOST'];
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$dbname = $_ENV['MYSQL_DATABASE'];

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

if ($conn->ping()) {
    echo "Connection is active.";
    echo '<br>';
    echo $host;
    echo '<br>';
} else {
    echo "Connection is not active.";
}

// Prepare and execute the SQL statement

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("INSERT INTO cleanVariables_users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name,$email, $password);

$stmt->execute();
if ($stmt->error) {
    echo "Error: " . $stmt->error;
}
echo "Data saved to database.";

// Close the database connection
$stmt->close();
$conn->close();

