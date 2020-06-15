<?php
require_once('ArrayList.php');
session_start();
if(isset($_SESSION['arrList'])){
    $arrList = $_SESSION['arrList'];
} else {
    $arrList = new ArrayList();
}
$result = null;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['menu']))
    {   $menu = $_POST['menu'];
        switch($menu){
            case'0':
                if($arrList->isEmpty()) $result='ArrayList is not Empty !!';
                else $result='ArrayList is Empty !!';
            break;
            case'1':
                $result='Size: '.$arrList->size();
            break;
            case'2':
                if(!empty($_POST['item']) || $_POST['item'] === '0')
                {$item = $_POST['item'];
                $arrList->addFirst($item);
                $result = $arrList->display();
                }else $result = 'data not empty !!';
           
            break;
            case'3':
                if(!empty($_POST['item']) || $_POST['item'] === '0')
                {$item = $_POST['item'];
                $arrList->addLast($item);
                $result = $arrList->display();
                }else $result = 'data not empty !!';   
            break;
            case'4':
                if(!empty($_POST['item']) || $_POST['item'] === '0')
                {$item = $_POST['item'];
                $arr = explode(',',$item);
                $arrList->addAll($arr);
                $result = $arrList->display();
                }
            break;
            case'5':
                if((!empty($_POST['index']) && 
                    !empty($_POST['item'] )) || 
                    $_POST['item'] === '0' || 
                    $_POST['index'] === '0')
                {$index = $_POST['index'];
                $item = $_POST['item'];
                if($arrList->addToIndex($item,$index))
                $result = $arrList->display();
                else $result ='index not true';
                }else $result = 'data not empty !!';
           
            break;
            case'6':
                if(!empty($_POST['index']) || $_POST['index'] === '0')
                {$index = $_POST['index'];
                if($arrList->removeByIndex($index))
                $result = $arrList->display();
                else $result = 'index not true';}
                else $result = 'data not empty !!';
            break;
            case'7':
                if(!empty($_POST['item']) || $_POST['item'] === '0')
                {$item = $_POST['item'];
                $result=$arrList->indexOf($item);}
                else $result = 'data not empty !!';
            break;
            case'8':
                $arrList->sort();
                $result = $arrList->display(); 
            break;
            case'9':
                $result = $arrList->display();    
            break;
            default:
            
    }
    $_SESSION['arrList']= $arrList;
    if($menu == '10'){
        $arrList->reset();
        unset($_SESSION['arrList']);    
    }
    
}
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            display: inline-flex;
            text-align: center;
            border: 2px solid black;
            padding: 1em;
        }
        form{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>Menu</legend>
    <select name="menu" id="js-menu">
        <option value="0">isEmpty</option>
        <option value="1">size</option>
        <option value="2">addFirst</option>
        <option value="3">addLast</option>
        <option value="4">addAll</option>
        <option value="5">addToIndex</option>
        <option value="6">removeByIndex</option>
        <option value="7">indexOf</option>
        <option value="8">sort</option>
        <option value="9">display</option>
        <option value="10">reset</option>
        <input type="button" id='js-btn-menu' value="OKE">
    </select>
    <div id="js-display"></div>
    </fieldset>
    </form>
        <?= $result?>
    <script>
        const Button = document.getElementById('js-btn-menu'),
              Menu = document.getElementById('js-menu'),
              Display = document.getElementById('js-display');
        function menu(){
            switch(Menu.value){
                case '0':
                Button.style.display='none';
                Display.innerHTML= '<input type="submit" value="Confirm">';
                break;
                case '1':
                Button.style.display='none';
                Display.innerHTML= '<input type="submit" value="Confirm">';
                break;
                case '2':
                Button.style.display='none';
                Display.innerHTML= '<br><input type="text" name="item" placeholder="item"><br><br><input type="submit" value="Confirm">';
                break;
                case '3':
                Button.style.display='none';
                Display.innerHTML= '<br><input type="text" name="item" placeholder="item"><br><br><input type="submit" value="Confirm">';
                break;
                case '4':
                Button.style.display='none';
                Display.innerHTML= '<br><input type="text" name="item" placeholder="item vd:a,b,c,d,..."><br><br><input type="submit" value="Confirm">';
                break;
                case '5':
                Button.style.display='none';
                Display.innerHTML= '<br><input type="text" name="item" placeholder="item"><br><br><input type="text" name="index" placeholder="index"><br><input type="submit" value="Confirm">';
                break;
                case '6':
                Button.style.display='none';
                Display.innerHTML= '<br><input type="text" name="index" placeholder="index"><br><input type="submit" value="Confirm">';
                break;
                case '7':
                Button.style.display='none';
                Display.innerHTML= '<br><input type="text" name="item" placeholder="item"><br><input type="submit" value="Confirm">';
                break;
                case '8':
                Button.style.display='none';
                Display.innerHTML= '<input type="submit" value="Confirm">';
                break;
                case '9':
                Button.style.display='none';
                Display.innerHTML= '<input type="submit" value="Confirm">';
                break;
                default:
                {Button.style.display='none';
                Display.innerHTML= '<input type="submit" value="Submit">';}
            }
        }
        Button.addEventListener('click',menu);
    </script>
</body>
</html>