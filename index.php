<?php

//#26
//名前空間を使ってみよう
//バッティングしないようにね。
//先頭に書く。

namespace Dotinstall\Lib;


/*
変数:　データにつけるラベル
データ型: 
*/
$msg = "hello from the TOP!";
echo $msg;
var_dump($msg);

//#5
define("MY_EMAIL", "taguchi@dotinstall.com");
echo MY_EMAIL;
//MY_EMAIL = "hoge";

var_dump(__LINE__); //16
var_dump(__FILE__);
var_dump(__DIR__);

//数値型の演算
//

$x = 10 % 3;
$y = 30.2 / 4;
var_dump($x);
var_dump($y);

//単項演算子
$z = 5;
$z++; // 6
var_dump($z);
$z--; //5
var_dump($z);

//代入を伴う演算子 += *=
//pass

//#7
//文字列
$name = "taguchi";
$s1 = "hello ${name}!\nhello again!";
$s2 = 'hello {$name}!\nhello again!';
var_dump($s1);
var_dump($s2);

$s = "hello " . "world";
var_dump($s);

//#8
//条件分岐
//if, elseif, else
//比較演算子 ==(値の比較), === (値に加えて型も比較する), 
//論理演算子

//#9
//真偽値
/*
# falseになる場合
文字列: 空、 "0"
数値: 0, 0,0
論理値: false
配列: 要素の数が0
null
*/

$x = 5;
//if ($x) {
if ($x == true) {
  echo "great";
}

//#10
// switch 条件分岐

//#11
// while ループ
// do while

//#12
// for ループ
// break: ループを抜ける ループから1つだけ外に出ます。
// continue: それ以降の処理を実行せずに次のループに移る

//#13
// 配列

//#14
// foreach

//#15
// 関数

//#19
//クラス

// // User
// class User
// {
//   // property
//   public $name;

//   //constructor
//   public function __construct($name)
//   { //  なまえが決まっている
//     $this->name = $name;  //$this->nameでこのクラスのnameを指定できる
//   }

//   //method
//   /* final */
//   public function sayHi()
//   {
//     echo "hi, i am $this->name!";
//   }

//   public static function getMessage()
//   {
//     echo "hello from User class!";
//   }
// }

$Tom = new User("Tom");
$Bob = new User("Bob");

echo $Tom->name;
$Bob->sayHi();

//#20
//継承
class AdminUser extends User
{
  public function sayHello()
  {
    echo "hello from Admin!";
  }

  //オーバーライド/override
  //メソッド、プロパティを上書き
  public function sayHi()
  {
    echo "hi, i am [admin] $this->name!";
  }
}


//#21
//アクセス権
// - private: そのクラス内からアクセス可能
// - protected: そのクラス+親子クラス内からのみアクセス可能
// - public: どこからでもアクセス可能

//#22
//static
//インスタンス化しなくても使えるメソッドやプロパティ

//#23
//抽象クラス
//継承してもらうことを前提にしたクラス

abstract class BaseUser
{
  public $name;

  abstract public function sayHi();
}

class ExUser extends BaseUser
{
  public function sayHi()
  { }
}

//#24
//インターフェース/interface
//クラスでこのメソッドを必ず実装してくださいよって感じで使う
//実装漏れを防ぐ

interface sayHi
{
  public function sayHi();
}
interface sayHello
{
  public function sayHello();
}
class VUser implements sayHi, sayHello
{ //implements: 実装する
  public function sayHi()
  { }
  public function sayHello()
  { }
}

//#25
//外部ファイルを読み込む
//require, include

//#26
//名前空間を使ってみよう
//バッティングしないようにね。
//先頭に書く。

//#27
//例外処理

//#28
//HTMLのフォームからのデータを処理しよう

//#29
//Cookieを使ってみよう
//ブラウザにデータを保存する
//改ざんされる危険性がある

//#30
//セッションを使ってみよう
//Cookieと違いサーバ側にデータを保存する
//大きなデータを保存できる
