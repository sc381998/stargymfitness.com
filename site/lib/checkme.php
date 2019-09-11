<?php

class CheckCaptcha {

    function showCaptcha($txtName = 'apexCaptcha', $placeholder = true, $class='') {

        $words = array(
            'zero',
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten'
        );
        $apx = mt_rand(0, 1);
        $dig1 = mt_rand(1, 10);
        $dig2 = mt_rand(0, 10);
        $apxtxt = '';

        switch ($apx) {
            case 0:

                $result = $dig1 + $dig2;
                $apxtxt = '+';
                break;
            case 1:

                if ($dig1 < $dig2) {
                    $dig1 = mt_rand($dig2, 10);
                }

                $result = $dig1 - $dig2;
                $apxtxt = '-';
                break;
        }

        $view = '';

        $isWord = mt_rand(0, 2);
        if ($isWord <= 0) {
            $view .= $words[$dig1];
        } else {
            $view .= $dig1;
        }

        $view .= " $apxtxt ";

        if ($isWord == 1) {
            $view .= $words[$dig2];
        } else {
            $view .= $dig2;
        }

        if ($placeholder) {
            $view .="=?";
//            $view = '<label class="form-label rd-input-label" for="' . $txtName . '">' . $view . '</label>';
            $view = '<input type="text" placeholder="' . $view . '" value="" name="' . $txtName . '" data-constraints="@Required" id="' . $txtName . '" '.$class.' autocomplete="off" required class="form-control form-control-has-validation form-control-last-child"  >';
        } else {
            $view .="=?";
            $view = '<input type="text" value="" name="' . $txtName . '" id="' . $txtName . '" size="3" maxlength="3" class="form-control" required /> ';
        }

        $_SESSION[$txtName . 'result'] = $result;

        return $view;
    }

    function validCaptcha($txtName = 'apexCaptcha') {
        if ($_POST[$txtName] != $_SESSION[$txtName . 'result']) {
            return false;
        } else {
            return true;
        }
    }

}

$chk = new CheckCaptcha();
?>