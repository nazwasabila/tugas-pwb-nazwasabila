<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="welcome.php" method="post">
        <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <br>
    
        <label for="firstname">First name :</label><br>
        <br>
        <input type="text" id="firstname" name="firstname"><br>
        <br>
        <label for="lastname">Last name :</label><br>
        <br>
        <input type="text" id="lastname" name="lastname">
    
    <br>
    
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label> <br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
    
    <br>
    <br>
        <label for="nationality">Nationality</label>
        <br>
            <select id="nationality" name="nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="America">America</option>
                <option value="English">English</option>
            </select>
        
        <br>
        
            <p>Language Spoke</p>
            <input type="checkbox" id="language" name="language" value="Indonesia">
            <label for="language">Indonesia</label> <br>
            <input type="checkbox" id="language" name="language" value="English">
            <label for="language">English</label> <br>
            <input type="checkbox" id="language" name="language" value="Other">
            <label for="language">Other</label> <br>
       
        <br>
        <p>Bio</p>
        <textarea id="bio" name="bio" rows="10" cols="30">
        </textarea>    
        <br>
        <input type="submit" value="sign up">
    </form>
      </body>  
</html>