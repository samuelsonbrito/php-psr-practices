<?php 

namespace Tambaqui\DB;

class MySql implements Db
{
    public function connect() :string
    {
        return 'conected mysql';
    }
}