<?php 
class VendingMachine //設計図
{
    #プロパティ
    public $juice; //メンバ変数　（共通する属性）
    public $pressManufacturerName; //メンバ変数　ブランドネーム。

    #メソッド
    public function pressButton() { //メンバメソッド（操作）
        echo "cider". "\n"; //サイダーを出力

    } 
    
    public function __construct($pressManufacturerName) { //インストラクタ時に実行される関数。コンストラクタ。
        $this->pressManufacturerName  = $pressManufacturerName; //ブランドネーム。   
    }
}

$VendingMachine = new VendingMachine("サントリー"); //クラスからインスタンスという実際に使える「モノ」を作る。（動的）。インスタンス化
echo $vendingMachine->pressManufacturerName; //インスタンスの変数を呼び出す

$VendingMachine->juice = 20; //juiceの本数は20本。

print_r($VendingMachine); //インスタンスを見える化する。
echo "\n"; //出力する。

$VendingMachine-> pressButton(); #pressButtonの関数を実行する

?>