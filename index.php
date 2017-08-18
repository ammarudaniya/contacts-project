<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacts Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2 align='center'>CONTACTS MANAGER</h2>
        <hr>
    <?php
        
        include('Contact.php');

        Contact::sayHello();

        $fruits = Contact::getFruits();
        echo '<br>';
        echo json_encode($fruits);
    ?>
    <ul>
    <?php 
        foreach($fruits as $fruit){
    ?>
    <li><?= $fruit['name'] ?> (<?=$fruit['created']?>)</li>

     <?php } ?>
     </ul>
     <table cellpadding="10" border="1">
         <thead>
             <th>ID</th>
             <th>Name</th>
             <th>Created</th>
         </thead>
         <?php
             foreach($fruits as $fruit){
            
         ?>
         <tr>
             <td><?= $fruit['id'] ?></td>
             <td><?= $fruit['name'] ?></td>
             <td><?= $fruit['created'] ?></td>
         </tr>
             <?php } ?>
     </table>

        <form id="contacts" action="processform.php" method="post" align="center">
        
            <label>Name</label>
            <input type="text" name="name" value"" required>
            <br>
            <br>
            <label>Email</label>
            <input type="text" name="email" value"">
            <br>
            <br>
            <label>Phone</label>
            <input type="text" name="phone" value"">
            <br>
            <br>
            <label>Gender</label>
            <select name= "gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>