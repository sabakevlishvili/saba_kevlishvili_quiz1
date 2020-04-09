<?php 




function validateRange($data, $min, $max){

    $check = false;

    if (strlen($data) >= $min && strlen($data) <= $max && !empty($data)) {
        $check = true;
    }

    return $check;

}


function isNumber($data){


    $check = false;


    if(is_numeric($data) && strlen($data) == 11){


        $check = true;

    }



    return $check;
}



if(isset($_POST["submitButton"])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $privateNumber = $_POST['privateNumber'];
    $adress = $_POST['adress'];
    $registrationDate = $_POST['registrationDate'];
    $mobileNumber = $_POST['mobileNumber'];
    $moreInfo = $_POST['moreInfo'];

    if(validateRange($name, 2, 20)){

        if(validateRange($surname, 3, 50)){

            if($dateOfBirth >= 1950){

                if(isNumber($privateNumber)){
                    
                    if(strlen($moreInfo <= 70)){


                            echo "<table border=1>";
                            echo "<tr>";
                            echo "<td>";
                            echo "სახელი: ";
                            echo "</td>";
                            echo "<td>";
                            echo $name;
                            echo "</td>";
                            echo "</tr>";

        
                            echo "<tr>";
                            echo "<td>";
                            echo "გვარი: ";
                            echo "</td>";
                            echo "<td>";
                            echo $surname;
                            echo "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>";
                            echo "დაბადების წელი: ";
                            echo "</td>";
                            echo "<td>";
                            echo $dateOfBirth;
                            echo "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>";
                            echo "პირადი ნომერი: ";
                            echo "</td>";
                            echo "<td>";
                            echo $privateNumber;
                            echo "</td>";
                            echo "</tr>";


                            
                            echo "<tr>";
                            echo "<td>";
                            echo "მისამართი: ";
                            echo "</td>";
                            echo "<td>";
                            echo $adress;
                            echo "</td>";
                            echo "</tr>";


                            
                            echo "<tr>";
                            echo "<td>";
                            echo "რეგისტრაციის თარიღი: ";
                            echo "</td>";
                            echo "<td>";
                            echo $registrationDate;
                            echo "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>";
                            echo "ტელეფონის ნომერი: ";
                            echo "</td>";
                            echo "<td>";
                            echo $mobileNumber;
                            echo "</td>";
                            echo "</tr>";


                            
                            echo "<tr>";
                            echo "<td>";
                            echo "მეტი ინფორმაცია: ";
                            echo "</td>";
                            echo "<td>";
                            echo $moreInfo;
                            echo "</td>";
                            echo "</tr>";


                            
                            
                            
                            
                            echo "</table>";
                    }else{
                       echo "მაქსიმუმ 70 სიმბოლო";
                    }
                }else{
                    echo "თერთმეტნიშნა კოდი, რომლის ყველა სიმბოლო ციფრია";
                }
            }else{
                echo "აირჩიეთ 1950 წლიდან ზემოთ, არჩევის ბლოკი ააგეთ PHP-ის საშუალებით";
            }
        
        }else{
echo "არ არის ცარიელი, მინიმუმ 3 და მაქსიმუმ 50 სიმბოლო";
        }
    }else{
        echo "არ არის ცარიელი, მინიმუმ 2 და მაქსიმუმ 20 სიმბოლო";
    }
}





?>