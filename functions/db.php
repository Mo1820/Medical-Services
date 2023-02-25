<?php

    $server_name="localhost";
    $user_name="root";
    $password="";
    $db_name="Medical_serv";

    $conn=mysqli_connect($server_name,$user_name,$password,$db_name);

    if(!$conn)
    {
        die("Error connection:".mysqli_connect_error());
    }

    function db_insert($sql)
    {
        global $conn;
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            return "ADDED SUCCEED DATA ";
        }
        return false;
    }
    function db_update($sql)
    {
        global $conn;
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            return "UPDATE SUCCEED DATA ";
        }
        return false;
    }

  
    function get_rows($table){
        global $conn;
        $sql="SELECT * FROM `$table`";
        $result=mysqli_query($conn,$sql);

        $rows=[];
        if(!$result)
        {
            echo mysqli_error($conn);
        }
        else
        {
            if(mysqli_num_rows($result) > 0)
            {
                while($row=mysqli_fetch_assoc($result)){
                    $rows[]=$row;
                }
            }
        }
        return $rows;

    }
    function get_rows_($table,$field){
        global $conn;
        $sql="SELECT * FROM `$table` Where `$field`= CURRENT_DATE()";
        $result=mysqli_query($conn,$sql);

        $rows=[];
        if(!$result)
        {
            echo mysqli_error($conn);
        }
        else
        {
            if(mysqli_num_rows($result) > 0)
            {
                while($row=mysqli_fetch_assoc($result)){
                    $rows[]=$row;
                }
            }
        }
        return $rows;

    }
    function get_row($table,$field,$value){
        global $conn;
        $sql="SELECT * FROM `$table` Where `$field`='$value'";
        $result=mysqli_query($conn,$sql);

        $rows=[];
        if(!$result)
        {
            echo mysqli_error($conn);
        }
        else
        {
            if(mysqli_num_rows($result) > 0)
            {
                $rows=mysqli_fetch_assoc($result);
                return $rows;
            }
        }
        return false;

    }
    function get_data($value){
        global $conn;
        $result=mysqli_query($conn,$value);

        $rows=[];
        if(!$result)
        {
            echo mysqli_error($conn);
        }
        else
        {
            if(mysqli_num_rows($result) > 0)
            {
                $rows=mysqli_fetch_assoc($result);
                return $rows;
            }
        }
        return false;

    }
    
    
    function delete_data($table ,$field ,$value)
    {
        global $conn;
        $sql="DELETE FROM `$table` WHERE `$field`='$value'";
        
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            return "DELETE SUCCEED";
        }
        return false;
    }
    function update_data($table,$field,$value){
        global $conn;
        $sql="UPDATE `$table` SET `$field`='$field' Where `id_city`='$value'";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            return "UPDATE SUCCEED";
        }
        return false;
    

    }
    ?>