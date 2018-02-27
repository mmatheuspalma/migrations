<?php


use Phinx\Migration\AbstractMigration;

class CreateUsersTestTable extends AbstractMigration {

    protected $table = 'userstest';

    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->keep();

        $table = $this->table($this->table);
        $table->addColumn('test', 'string')
              ->addColumn('test2', 'string')
              ->addColumn('test3', 'string')
              ->addColumn('test4', 'string')
              ->save();

        $this->checkData($this->keep) ? $this->insert($this->table, $this->keep) : false;
    }
    /**
     * Migrate Down.
     */
    public function down()

    
    {
        $this->dropTable($this->table);
    }

}
