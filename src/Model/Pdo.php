<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 19/10/17
 * Time: 10:22
 */

namespace MVC\Model;


class Pdo
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO(DSN, USERNAME, PASSWORD, [\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION]);
    }
}
