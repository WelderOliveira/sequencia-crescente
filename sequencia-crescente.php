public function SequenciaCrescente($array)
{
    $resultOk = array();
    $resultNot = array();

    sort($array, SORT_NUMERIC);

    foreach ($array as $key => $val) {
        if (($array[$key + 1] - $val) == 1) {
            array_push($resultOk, $val);
        } else {
            array_push($resultNot, $val);
        }
    }
    if (count($resultNot)>1){
        return false;
    }else{
        return true;
    }
}