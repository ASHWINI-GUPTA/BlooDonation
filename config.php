<?php
 
//Database Information

/* DB Name
 * Enter the name of your database below.
 */
define('DB_NAME', 'Name Come Here');

/* DB Username
 * Enter the username of the user with access to the database below.
 */
define('DB_USER', '----');

/* DB Password
 * Enter the above user's password below.
 */
define('DB_PASS', '----');

//SALT Information

/* Site Key
 * Enter your site key below.
 */
define('SITE_KEY', 'tIVLEabZMrxm!%4ZHJWnXAjxbPt4mYGtyb!@$%&^%VQJsxGjOIdej#OT3EhCpxqC5Bu6KSOJM$$##VJV9jLF5uWiiFXm1G');

/* NONCE SALT
 * Enter your NONCE SALT below.
 */
define('NONCE_SALT', 'fxmAMC5TiY2_)(eh2DfbOOX4*&F73ldggm8KZP35N48t3OVbTaoOpaOlLydef#_+kvusgNgafnuujTPdazfzqpDy');

/* AUTH SALT
 * Enter your AUTH SALT below.
 */
define('AUTH_SALT', 'g)(*)Um9SXCqWWvSDm6&^&k3iwMqPghWzTgqMSiy)(&*&RaAoMdbyLNuRdvH(gwL0fA7Umlmy4ZvH04r2xjp7KH2ahNNc');


class locationdbconfig {
    // database hostname
    protected static $host = "";
    // database username
    protected static $username = "";
    // database password
    protected static $password = "";
    //database name
    protected static $dbname = "location";

    static $con;

    function __construct() {
        self::$con = self::connect();
    }

    // open connection
    protected static function connect() {
        try {
            $link = mysqli_connect(self::$host, self::$username, self::$password, self::$dbname);
            if(!$link) {
                throw new exception(mysqli_error($link));
            }
            return $link;
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }

    // close connection
    public static function close() {
        mysqli_close(self::$con);
    }

    public static function run($query) {
        try {
            if(empty($query) && !isset($query)) {
                throw new exception("Query string is not set.");
            }
            $result = mysqli_query(self::$con, $query);
            self::close();
            return $result;
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }

    }

}