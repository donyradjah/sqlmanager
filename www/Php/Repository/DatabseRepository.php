<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 1/22/16
     * Time: 8:08 PM
     */

    namespace Php\Repository;

    use Connector\Pdo;

    class DatabseRepository
    {
        protected $pdo;

        public function __construct(Pdo $pdo)
        {
            $this->pdo = $pdo;
        }

        public function ListDatabase()
        {

        $list = $this->pdo->exec("SHOW DATABASES");

        return $list;

        }
    }