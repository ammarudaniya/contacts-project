<?php

class Contact

{
    public static function sayHello()
    {
        echo "Hello world from contacts class";
    }

    protected static function connectDb()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'crud';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if(!$conn)
        {
        return false;
        }

        return $conn;

    }
    public static function getFruits()
    {
        $conn = Self::connectDb();
        if($conn)
        {
            $sql = "SELECT * FROM fruits";
            $results = $conn->query($sql);
            
            $rows=[];

                while($row = $results->fetch_assoc())
                {
                    $rows[] = $row;
                }
                return $rows;

        }else{
            return "Cannot connect db";
             }

    }
}