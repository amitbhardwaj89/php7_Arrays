<?php
    /*
     * Array declaration
     * both $arr and $arr1 are declared as array variable
     */
    $arr = array();
    $arr1 = [];
    $arr2 = array(array('fname'=>'Amit','lname'=>'Bhardwaj','mobile'=>'9953436894','age'=>28),
                    array('lname'=>'Sarin'),
                    array('lname'=>'Sharma'));
    /*
     * array_change_key_case is used to change the case of key to upper or lower
     */
    $ret = array_change_key_case($arr2,CASE_UPPER);
    print_r($ret);
    /*
     * array_chunk
     */
    $ret_chunk = array_chunk($arr2,3,true);
    print_r($ret_chunk);
    print_r($arr2);
    /*
     * array_column is used to return an array constructed from column values of input array
     */
    $ret_col = array_column($arr2,'lname','xyz');
    print_r($ret_col);
    /*
     * array_combine is used to create an array by inputting two arrays one for keys and other for value
     */
    $key = ['fname','lname',8];
    $val = ['Amit','Bhardwaj',28];
    $ret_com = array_combine($key,$val);
    print_r($ret_com);
    /*
     * 1 dated 2 june 2017
     * array_fill is used to create array, its limitation is only same value element.
     */
    $ret_fil = array_fill(-2,5,1);
    print_r($ret_fil);
    $arr_flp = ['fname'=>'Amit','lname'=>'Bhardwaj'];
    /*
     * array_flip is used to flip between key and value
     */
    $ret_flip = array_flip($arr_flp);
    print_r($ret_flip);
    /*
     * array_keys is used to return array keys
     */
    $ret_key = array_keys($arr_flp,'Bhardwaj');
    print_r($ret_key);
    /*
     * array_map is needed in the case where array values are map/filter through a callback function
     */
    $func = function($n){
        return $n*$n*$n;
    };
/*function response($n){
    return $n*$n*$n;
}*/
$arr_num = [1,2,3,4,5];
    $ret_map = array_map($func,$arr_num);
print_r($ret_map);
/*
 * 3May 2017
 * array_merge_recursive function is used to merge two or more given arrays (it appends the second array to the first array)
 */
$array1 = ['fname'=>'Amit','lname'=>'Bhardwaj'];
$array2 = ['roll'=>'64','lname'=>'Bh'];
$ret_rmerge = array_merge_recursive($array1,$array2);
print_r($ret_rmerge);
$array3 = [1,2,3];
$array4 = [3,5,6];
$ret_merge = array_merge($array3,$array4);
print_r($ret_merge);
$arr_sort = [100,80,45,57,68,36];
/*
 * array_multisort function is used to sort array in ascending or descending order (first argument is array and second is the order.
 */
$i = array_multisort($arr_sort,SORT_ASC);
print_r($arr_sort);
/*
 * array_pad function is used to pad the given array with specified value (number of padded element is find by Size minus size of array)
 */
$arr_pad = array_pad($arr_sort,6,0);
print_r($arr_pad);