<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/simple_crud/App/Database/config.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/simple_crud/App/Model/user.php");

    class userController {
        public function insertName($name) {
            try {
                $config = new config();
                if($config->getStatus()) {
                    $model = new user();
                    $statement = $config->getConnection()->prepare($model->insertName());
                    $statement->execute(array($name));

                    if($statement->rowCount() > 0) {
                        return 200;
                    } else {
                        return 400;
                    }
                } else {
                    return 100;                }
            } catch (PDOException $e) {
                echo "Error Inserting data" . $e->getMessage();
            }
        }
    }
?>