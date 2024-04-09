<?php
// クラスを定義する
class Food {
        // プロパティを定義する
      private $name;
      private $price;
      

      public function show_price() {
        echo $this->price . '<br>';
      }

      // コントラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;   
      }

}

      //  インスタンス化する
      $potato = new Food('potato', 250);

      // インスタンス$userの書くプロパティの値を出力する
      print_r($potato);

      // 改行する
      echo '<br>';



class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        public function show_height() {
          echo $this->height . '<br>';
        }
    
        // コントラクタを定義する
        public function __construct(string $name, int $height, string $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;   
        }
  
}
      //  インスタンス化する
      $dog = new Animal('dog', 60, 5000);

      // インスタンス$userの書くプロパティの値を出力する
      print_r($dog);

       // 改行する
        echo '<br>';

      // プロパティにアクセスし、値を出力する
      $potato->show_price();
      $dog->show_height();

      ?>



