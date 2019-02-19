<?php 
class UserModelAddTest extends \Codeception\Test\Unit
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
    public function testUserModelAdd()
    {
        $user = new \models\UserModel();
        // первый ключ массива = 0, а в методе add в нулевому индексу добавляется единица
        $user->_users = array(
            // индекс = 0
            array(
                'id'        => '0',
                'firstName' => 'Ivan',
                'lastName'  => 'Petrov',
                'email'     => '1@mail.ru',
                'type'      => 'admin'
            ),
            // индекс = 1
            array(
                'id'        => '1',
                'firstName' => 'Тестюша',
                'lastName'  => 'Малинина',
                'email'     => '13@gmail.com',
                'type'      => 'guest'
            )
        );

        $firstName = 'Юзер2';
        $lastName  = 'Фамилия2';
        $email     = '2@mail.ru';
        $type      = 'admin';

        $user->add($firstName, $lastName, $email, $type);
    }
}