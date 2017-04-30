<?php 

/*
    Refatore o código abaixo, fazendo as alterações que julgar necessário:

    class MyUserClass
    {
        public function getUserList()
        {
            $dbconn = new DatabaseConnection('localhost','user','password');
            $results = $dbconn->query('select name from user');

            sort($results);

            return $results;
        }
    }

    OBS: instanciar um objeto da classe MyUserClass resultará em um erro, uma vez
         que a classe DatabaseConnection não existe.
*/
class MyUserClass
{
    protected $dbconn;

    public function __construct() {
        $this->dbconn = new DatabaseConnection('localhost','user','password');
    }

    public function getUserList()
    {
        if (!is_null($this->dbconn))
            return $this->dbconn->query('SELECT name FROM user ORDER BY name');

        return null;
    }
}

?>