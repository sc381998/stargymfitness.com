<?php

# main class file for static site

class systemFunction {

    
    function showError($type, $message) {
        return '<div class="alert alert-' . $type . ' text-center" style="margin-top: 10px;margin-bottom: 10px;">' . $message . '</div>';
    }

    function cleanVar($variable, $type = 'string') {
        $cleanVar = trim($variable);


        return $cleanVar;
    }

    function getPageUrl($param, $defaultPage = 'index') {
        if (!empty($param)) {
            $param = $this->cleanVar($param);
        } else {
            $param = $defaultPage;
        }
        return $param;
    }

    public function excecuteonly($sql) {
        global $pdocon;
        $statement = $pdocon->prepare($sql);
        $statement->execute();
        $count = $statement->rowCount();
        return $count;
    }

    function validate($value, $type = 'string') {

        $r = false;

        $value = trim($value);

        if (strlen($value) > 0) {

            switch ($type) {

                case 'string' :
                    $r = is_string($value);
                    break;
                case 'number' :

                    $r = is_numeric($value);
                    break;
                case 'float' :

                    $r = is_float($value);
                    break;
                case 'email' :
                    $r = filter_var($value, FILTER_VALIDATE_EMAIL);
                    break;
                case 'url' :
                    $r = filter_var($value, FILTER_VALIDATE_URL);
                    break;
                case 'ip' :
                    $r = filter_var($value, FILTER_VALIDATE_IP);
                    break;
                case 'date' :
                    $r = strtotime($value);
                    break;
            }
        }

        return $r;
    }

}

?>
