<?php
function display_error($validation, $field)
{
    if ($validation->hasError($field)) {
        return $validation->getError($field);
    } else {
        return false;
    }
}

function login()
{
    if (session()->get('login') && !session()->getFlashdata('logout'))
        return true;
    else
        return false;
}

?>
