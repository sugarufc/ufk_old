<?php

defined('UFK') or die('Access denied');

/* ===���������� �������=== */
function print_arr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
/* ===���������� �������=== */

/* ===���������� �������� ������=== */
function clear($var){
    $var = PDO::quote(strip_tags($var));
    return $var;
}
/* ===���������� �������� ������=== */

/* ===��������=== */
function redirect($http = false){
    if($http) $redirect = $http;
        else    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: $redirect");
    exit;
}
/* ===��������=== */

/* ===����� ������������=== */
function logout(){
    unset($_SESSION['auth']);
}
/* ===����� ������������=== */

/* ===���������� � �������=== */
function addtocart($goods_id, $qty = 1){
    if(isset($_SESSION['cart'][$goods_id])){
        // ���� � ������� cart ��� ���� ����������� �����
        $_SESSION['cart'][$goods_id]['qty'] += $qty;
        return $_SESSION['cart'];
    }else{
        // ���� ����� �������� � ������� �������
        $_SESSION['cart'][$goods_id]['qty'] = $qty;
        return $_SESSION['cart'];
    }
}
/* ===���������� � �������=== */

/* ===�������� �� �������=== */
function delete_from_cart($id){
    if($_SESSION['cart']){
        if(array_key_exists($id, $_SESSION['cart'])){
            $_SESSION['total_quantity'] -= $_SESSION['cart'][$id]['qty'];
            $_SESSION['total_sum'] -= $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
            unset($_SESSION['cart'][$id]);
        }
    }
}
/* ===�������� �� �������=== */

/* ===���-�� ������ � ������� + ������ �� ����� ��������������� ID ������=== */
function total_quantity(){
    $_SESSION['total_quantity'] = 0;
    foreach($_SESSION['cart'] as $key => $value){
        if(isset($value['price'])){
            // ���� �������� ���� ������ �� �� - ��������� ���-��
            $_SESSION['total_quantity'] += $value['qty'];
        }else{
            // ����� - ������� ����� ID �� ������� (�������)
            unset($_SESSION['cart'][$key]);
        }
    }
}
/* ===���-�� ������ � ������� + ������ �� ����� ��������������� ID ������=== */

/* ===������������ ���������=== */
function pagination($page, $pages_count, $modrew = 1){
    if($modrew == 0){
        // ���� ������� ���������� �� �������� ��� ���
        if($_SERVER['QUERY_STRING']){ // ���� ���� ��������� � �������
            $uri = "?";
            foreach($_GET as $key => $value){
                // ��������� ������ ���������� ��� ������ ��������... ����� ���������� ���������� �������
               if($key != 'page') $uri .= "{$key}={$value}&amp;";
            }  
        }   
    }else{
        // ���� ������� ������� �� �������� � ���
        $uri = $_SERVER['REQUEST_URI'];
        $params = explode("/", $uri);;
        $uri = null;
        foreach($params as $param){
            if(!empty($param) AND !preg_match("#page=#", $param)){
                $uri .= "/$param";
            }
        }
        $uri .= "/";
    }
    
    
    // ������������ ������
    $back = ''; // ������ �����
    $forward = ''; // ������ ������
    $startpage = ''; // ������ � ������
    $endpage = ''; // ������ � �����
    $page2left = ''; // ������ �������� �����
    $page1left = ''; // ������ �������� �����
    $page2right = ''; // ������ �������� ������
    $page1right = ''; // ������ �������� ������
    
    if($page > 1){
        $back = "<a class='nav_link' href='{$uri}page=" .($page-1). "'>&lt;</a>";
    }
    if($page < $pages_count){
        $forward = "<a class='nav_link' href='{$uri}page=" .($page+1). "'>&gt;</a>";
    }
    if($page > 3){
        $startpage = "<a class='nav_link' href='{$uri}page=1'>&laquo;</a>";
    }
    if($page < ($pages_count - 2)){
        $endpage = "<a class='nav_link' href='{$uri}page={$pages_count}'>&raquo;</a>";
    }
    if($page - 2 > 0){
        $page2left = "<a class='nav_link' href='{$uri}page=" .($page-2). "'>" .($page-2). "</a>";
    }
    if($page - 1 > 0){
        $page1left = "<a class='nav_link' href='{$uri}page=" .($page-1). "'>" .($page-1). "</a>";
    }
    if($page + 2 <= $pages_count){
        $page2right = "<a class='nav_link' href='{$uri}page=" .($page+2). "'>" .($page+2). "</a>";
    }
    if($page + 1 <= $pages_count){
        $page1right = "<a class='nav_link' href='{$uri}page=" .($page+1). "'>" .($page+1). "</a>";
    }
    
    // ��������� ����� ���������
    echo '<div class="pagination">' .$startpage.$back.$page2left.$page1left.'<a class="nav_active">'.$page.'</a>'.$page1right.$page2right.$forward.$endpage. '</div>';
}
/* ===������������ ���������=== */


















