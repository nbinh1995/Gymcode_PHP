
<?php

class apps_libs_Config
{
    /** MySQL database username $username*/
    private const USERNAME = 'root';

    /** MySQL database password $password*/
    private const PASSWORD = 'administrato';

    /** MySQL hostname $host*/
    private const HOST = 'localhost';

    /** The name of the database $database*/
    private const DATABASE = 'db_library';

     /** connection database $conn*/
    protected static $conn = null;
    /**
     * DESC: to connect to the database
     * @return: new PDO
     */
    function __construct()
    {
        $this->connectDB();
    }
    public function connectDB()
    {
        if (self::$conn === null) {
            try {
                $dsn = 'mysql:host=' . self::HOST . ';dbname=' . self::DATABASE;
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    );
                self::$conn = new PDO($dsn, self::USERNAME, self::PASSWORD, $options);
                // self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
                die();
            }
        }
        return self::$conn;
    }
    /**
     * DESC: close connect database set $conn =null;
     * $conn = null
     */
    public function closeConnection(){
        self::$conn = null;
    }

    function getCon(){
        return self::$conn;
    }
    
    function __destruct()
    {
        $this->closeConnection();
    }
}
?>

