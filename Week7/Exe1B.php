use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function change()
    {
        // Create the table
        $table = $this->table('users');
        
        // Add columns
        $table->addColumn('username', 'string', ['limit' => 20])
              ->addColumn('email', 'string', ['limit' => 100])
              ->addColumn('password', 'string', ['limit' => 100])
              ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
              ->addIndex(['username', 'email'], ['unique' => true])
              ->create();
    }
}