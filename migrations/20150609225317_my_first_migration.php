<?php

use Phinx\Migration\AbstractMigration;

class MyFirstMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     */
    public function change()
    {
        // create the table
        $table = $this->table('click_counts');
        $table->addColumn('url', 'string')
              ->addColumn('clicks', 'integer')
              ->create();
    }

    
    /**
     * Migrate Up.
     */
    public function up()
    {
        
    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}