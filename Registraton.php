<?php
/**
 * Created by PhpStorm.
 * User: Toufiqul Islam Saju
 * Date: 2/24/2019
 * Time: 11:47 PM
 */
class Registraton
{
    public function Detalis(){
        $a=$_POST['aname'];
        $b=$_POST['aadd'];
        $c=$_POST['aadds'];
        $d=$_POST['amobile'];
        $e=$_POST['aemail'];
        $f=$_POST['apass'];

        if (empty($a)or empty($b)or empty($c)or empty($d)or empty($e)or empty($f)){
            echo "You must have to fil up these information";
        }
        else{
            echo "Applicant name is:".$a;
            echo "<br>";
            echo "Applicant permanent address is:".$b;
            echo "<br>";
            echo "Applicant birth date is:".$c;
            echo "<br>";
            echo "Applicant mobile number is:".$d;
            echo "<br>";
            echo "Applicant email is:".$e;
            echo "<br>";
            echo "Applicant password is:".$f;





        }
}
}
    $saju=new Registraton();
    $saju->Detalis();