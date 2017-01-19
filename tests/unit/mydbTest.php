<?php
/**
 * User: guoxiaonan
 * DateTime: 16/12/11 下午6:58
 * description:
 */

namespace tests\unit;

use app\models\User;
use PDO;
use PHPUnit_Extensions_Database_TestCase;

/**
 * Class myTest
 * @package tests\unit
 * description:
 */
class mydbTest extends PHPUnit_Extensions_Database_TestCase
{
    public $pdo = null;
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->pdo = new PDO('sqlite::memory:');
        $query = '
            CREATE TABLE bmp_notify (
                  notify_id int(10) NOT NULL PRIMARY KEY,
                  task_id int(10) NOT NULL DEFAULT 0,
                  title varchar(128) NOT NULL DEFAULT 0,
                  content varchar(500) NOT NULL DEFAULT 0,
                  notify_type int(4) NOT NULL DEFAULT 1,
                  notify_status int(4) NOT NULL DEFAULT 0,
                  notify_user_id int(10) NOT NULL DEFAULT 0,
                  is_delete int(4) NOT NULL DEFAULT 0,
                  create_time int(10) NOT NULL DEFAULT 0,
                  update_time int(10) NOT NULL DEFAULT 0,
                  business_type int(4) NOT NULL DEFAULT 1
            )';



        $this->pdo->query($query);

    }

    public function getConnection()
    {

        return $this->createDefaultDBConnection($this->pdo, ':memory:');
    }

    public function getDataSet()
    {

        return $this->createXMLDataSet(dirname(__FILE__).'/_files/testDb.xml');
    }

    public function testGuestbook()
    {
        $query = 'SELECT * FROM bmp_notify WHERE notify_id = ?';

        $statement = $this->pdo->prepare($query);

        $statement->execute([1]);
        $bankAccountInfo = $statement->fetch(PDO::FETCH_ASSOC);
        codecept_debug($bankAccountInfo);
        $dataSet = $this->getConnection()->createDataSet(['bmp_notify']);
        codecept_debug($dataSet);
        // ...
    }
}