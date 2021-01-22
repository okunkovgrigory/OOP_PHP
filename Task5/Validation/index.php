<?php

require_once 'header.php';

use Validation\classes\User;
use Validation\classes\UserFormValidator;
use Validation\classes\DataBase;

spl_autoload_register(function ($className) {

    $prefix = 'Validation\\classes';

    $base_dir = __DIR__ . '/classes/';

    $len = strlen($prefix);

    if (strncmp($prefix, $className, $len) !== 0) {
        return;
    }

    $relative_class = substr($className, $len);

    $file = $base_dir . str_replace('\\', DIRECTORY_SEPARATOR, $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

function exportDataFile($pathToFile)
{
    $db = [];
    $db_array = explode("\n", file_get_contents($pathToFile));
    $file_array = array_slice($db_array, 0, count($db_array) - 1);
    if (!empty($file_array)) {
        foreach ($file_array as $file) {
            $pieces = explode(';', $file);
            $db[] = array_combine(['name', 'age', 'email', 'id'], array_slice($pieces, 0, 4));
        }
    }
    return $db;
}

?>

    <h2>Контактные данные</h2>
    <form action="" method="post">
        <p>ФИО<br><input type="text" name="name"></p>
        <p>Возраст<br><input type="text" name="age"></p>
        <p>Почта<br><input type="text" name="email"></p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>

<?php

$success = false;
$db = new DataBase(exportDataFile(__DIR__ . '/db.txt'));
if (!empty($_POST)) {
    try {
        $success = (new UserFormValidator())->validate($_POST);
        if (!$success) {
            throw new Exception("<p>Неправильно заполнена форма!</p>");
        } else {
            $user = new User();
            $user->save($db, $_POST);
            echo "<p>Вы успешно авторизовались!</p>";
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        echo $error;
    }
}

print_r('<pre>');
print_r($db->getDb());
print_r('</pre>');
?>

<?php require_once 'footer.php' ?>