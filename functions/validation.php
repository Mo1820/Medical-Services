<?php




function Is_empty($value){
    if(empty($value))
    {
        return false;
    }
    return true;
}

function valid_email($value){
    if(!filter_var($value,FILTER_VALIDATE_EMAIL))
    {
        return false;
    }
    return true;
}

function valid_length($value)
{
    if(strlen($value)<=2)
    {
        return false;
    }
    return true;
}





?>