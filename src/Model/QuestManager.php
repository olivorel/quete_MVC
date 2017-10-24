<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 19/10/17
 * Time: 10:50
 */

namespace MVC\Model;


class QuestManager extends Pdo
{
    public function findAll()
    {
        $req = "SELECT * FROM quest";
        $statement = $this->pdo->query($req);

        return $statement->fetchAll(\PDO::FETCH_CLASS, Quest::class);
    }

}
