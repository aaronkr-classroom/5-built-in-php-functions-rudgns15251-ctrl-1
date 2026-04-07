<?php
$username = 'Ivy'; // 사칼라변수

$user_array1 = ['ivy',34,'Web programming'];
$user_array2 = [ //키 값 배열
  'name' => 'ivy',
  'age' => 34,
  'major' => 'Web programming',
];

class User {
  public $name;
  public $age;
  public $major;
  public function __construct($name,$age,$major) {
//정의할때 매개변수
$this ->name = $name;
$this ->age = $age;
$this ->major = $major;
  }
}
//호출할때 인수
$user_object = new User('Ive',34,'Web programming');
?>
  <p>Scalar: <?php var_dump($username); ?></p>
  <p>Array1:  <?php var_dump($user_array1); ?></p>
  <p>Array2:  <?php var_dump($user_array2); ?></p>
  <p>Object: <?php var_dump($user_object); ?></p>

