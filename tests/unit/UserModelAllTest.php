<?php 
class UserModelAllTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testUserModelAll()
    {
        $user = new \models\UserModel();
        $user->_users = array(
            array(
                'id'        => '1',
                'firstName' => 'Ivan',
                'lastName'  => 'Petrov',
                'email'     => '1@mail.ru',
                'type'      => 'admin'
            ),
            array(
                'id'        => '3',
                'firstName' => 'Тестюша',
                'lastName'  => 'Малинина',
                'email'     => '13@gmail.com',
                'type'      => 'guest'
            )
        );

        $user->all();
    }
}