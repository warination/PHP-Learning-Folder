<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Methods</title>
    <style>

    html,body{
        overflow-x: hidden;
    }
        body {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: green;
            font-size: 35px;
            color: white;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $text = "Alphanumeric";
        $checkString = is_string($text);
        echo $checkString . '<br>'; //1
        
        $text1 = "abcdefghij";
        $cutString = substr($text1, 3);
        echo $cutString . '<br>'; //defghij
        
        $cutString1 = substr($text1, -1);
        echo $cutString1 . '<br>'; //j
        
        $cutString2 = substr($text1, 3, 2);
        echo $cutString2 . '<br>'; //de
        
        $cutString3 = substr($text1, 1, -4);
        echo $cutString3 . '<br>';  //bcdef
        ?>
    </div>

    <div>
        <?php
        $text = "fransisco";
        $stringLength = strlen($text);  //return length of the string
        echo $stringLength . '<br>';   //9
        
        $stringPos = strpos($text, 's');  //return first position of the string
        echo $stringPos . '<br>';   //4
        
        $stringPos1 = strrpos($text, 's'); //return last position of the string
        echo $stringPos1 . '<br>';   //6
        
        $text1 = "hello          ";
        $stringLength1 = strlen($text1);
        echo $stringLength1 . '<br>';   //15 
        $trimString = trim($text1);    //trim the white sapce from the start and end of the string
        $stringLength2 = strlen($trimString);
        echo $stringLength2 . '<br>';   //5
        
        $text1 = "hello     brother     ";
        $stringLength1 = strlen($text1);
        echo $stringLength1 . '<br>';   //22
        $trimString = trim($text1);    //trim the white sapce from the start and end of the string
        $stringLength2 = strlen($trimString);
        echo $stringLength2 . '<br>';   //17
        

        $text2 = "We will win in next World Cup";
        $stringUppercase = strtoupper($text2);  //turn string to upper case
        echo $stringUppercase . '<br>';   //WE WILL WIN IN NEXT WORLD CUP
        
        $stringLowercase = strtolower($text2);  //turn string to lower case
        echo $stringLowercase . '<br>';   //we will win in next world cup
        
        $stringCapitalized = ucwords($text2); //capitalize each string
        echo $stringCapitalized . '<br>'; //We Will Win In Next World Cup
        

        ?>
    </div>

    <div>
        <?php
        $text = 'I want to be PHP developer';
        $replaceString = str_replace('want', 'wanna', $text);  //replace string 
        echo $replaceString . '<br>'; //I wanna to be PHP developer
        

        $array = array('love', 253, 'programming', true, null, 'summer', 14, 'winter', 0, '145');

        foreach ($array as $arr) {
            if (is_string($arr)) {
                echo "$arr is a String! <br>";  //love is a String!
                //programming is a String!
                //summer is a String!
                // winter is a String!
                //145 is a String!
            }
        }

        ?>
    </div>


    <div>
        <?php
        $para = 'AVM Pest Control Services is a premier provider of comprehensive pest management .';
        $compressed = gzcompress($para);
        echo $compressed.'<br>';

        $uncompressed = gzuncompress($compressed);
        echo $uncompressed.'<br>';


        ?>
    </div>
</body>

</html>