<?php 
include 'C:\xampp\htdocs\bcc2023\Copiladores\LinguagensFormaisAutomatos-main\AnalisadorLexico\AnalisadorLexico.php';
include 'C:\xampp\htdocs\bcc2023\Copiladores\LinguagensFormaisAutomatos-main\AnalisadorLexico\SLR.php';

echo('<br><a href="MainAutomatoLfa01.html">Digite outra palavra</a>');
echo "bala";
$palavra = (isset($_POST['palavra'])?$_POST['palavra']:"");
$palavra = strtolower($palavra);
$dado;
$analisador = new AnalisadorLexico();
$tokens = $analisador->analisador($palavra);
//if($tokens != null){
$i = 0;
foreach($tokens as $token){
    $dado[$i] = $token->name;
    echo($token);
    //echo'<br>'.($dado);
    $i++;
}
$first = $tokens[0]->name;
print_r($dado[3]);
//$i++;
$dado[$i] = "$";

$SLR = new SLR();
$SLR = $SLR->parser($dado);
//}
?>