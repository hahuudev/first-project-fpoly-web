<?php
class Model
{
    private  $connect;

    public function __construct()
    {
        $this->connect = $this->ConnectDb();
    }

    private function ConnectDb()
    {
        $connect = new PDO(
            'mysql:host=127.0.0.1; dbname=x-shop',
            'root',
            ''
        );
        return $connect;
    }

    public function query($sql, $isFetchAll = null)
    {

        $stm = $this->connect->prepare($sql);
        $stm->execute();
        if ($isFetchAll == "FETCH") {
            return $stm->fetch();
        }
        if ($isFetchAll == "FETCHAll") {
            return $stm->fetchAll();
        }
        return null;
    }
}
