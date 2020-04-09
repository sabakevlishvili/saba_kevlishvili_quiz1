<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="action.php" method="post" style="display:flex; flex-direction: column;">
    <label>name: </label>
    <input type="text" name="name" >
    <label>surname: </label>
    <input type="text" name="surname" >

    <label>date Of Birth: </label>
    
    <select name="dateOfBirth" id="">
    <?php
    
    for ($i=1940; $i < 2020; $i++) { 
        # code...

        echo "<option value='". $i ."'>". $i ."</option>";
    }
    
    
    
    
    ?>

    
    </select>



    <label>private Number: </label>

    <input type="text" name="privateNumber" >
    <label>adress: </label>
    <input type="text" name="adress" >
    <label>registration Date: </label>
    <input type="date" name="registrationDate" >
    <label>mobile Number: </label>
    <input type="text" name="mobileNumber">
    <label>more Info: </label>
    <textarea type="text" name="moreInfo" > </textarea>

    <button type="submit" name="submitButton">submit</button>
    
    </form>



    
</body>
</html>