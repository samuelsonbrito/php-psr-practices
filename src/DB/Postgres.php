<?php 

namespace Tambaqui\DB;

class Postgres implements Db
{
    public function connect() :string
    {
        return 'conected postgres';
    }
}