<?php
require_once "./Calculator.php";


if(isset($_POST['submit'])){
    if(is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {

        $calculator = new \App\Calculator;
        if($_POST['operation'] == 'add'){
            $total = $calculator->add($_POST['num1'], $_POST['num2']);
        }
        elseif($_POST['operation'] == 'minus'){
            $total = $calculator->minus($_POST['num1'], $_POST['num2']);
        }
        elseif($_POST['operation'] == 'devide'){
            $total = $calculator->devide($_POST['num1'], $_POST['num2']);
        }
        elseif($_POST['operation'] == 'multiply'){
            $total = $calculator->multiply($_POST['num1'], $_POST['num2']);
        }
        


        echo $total;
    }else{
        echo "No item found.";
    }
}