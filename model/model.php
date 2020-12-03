<?php defined('UFK') or die('Access denied');

/* ==== Получение списка страниц ==== */
function pages(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM pages WHERE work = '1' ORDER BY position");
    $query->execute();

    $pages = $query->fetchAll(PDO::FETCH_ASSOC);
    return $pages;
}
/* ==== Получение списка страниц ==== */

/* ==== Получение списка страниц ==== */
function ipadreses(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM `ipadreses` order by INET_ATON(`ip`)asc");
    $query->execute();

    $ipadreses = $query->fetchAll(PDO::FETCH_ASSOC);
    return $ipadreses;
}
/* ==== Получение списка страниц ==== */

/* ==== Отделы ==== */
function otdel(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM otdel ORDER BY position");
    $query->execute();

    $otdel = $query->fetchAll(PDO::FETCH_ASSOC);
    return $otdel;    
}
/* ==== Отделы ==== */

/* ==== ТОФК все отделы ==== */
function tofk(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM `tofk` ORDER BY `tofk_alias` ASC");
    $query->execute();

    $tofk = $query->fetchAll(PDO::FETCH_ASSOC);
    return $tofk;
}
/* ==== ТОФК все отделы ==== */

/* ==== ВТС ==== */
function vts($id){
    global $dbh;
    $query = $dbh->query("SELECT * FROM peoples WHERE otdel = '$id' ORDER BY positions");
    $query->execute();

    $vts = $query->fetchAll(PDO::FETCH_ASSOC);
    return $vts;
}

function otdel_name($id){
    global $dbh;
    $query = $dbh->query("SELECT * FROM otdel WHERE otdel_id = $id");
    $query->execute();

    $otdel_name = $query->fetch(PDO::FETCH_ASSOC);
    return $otdel_name;
}

function search($query)
{
    global $dbh;
    $query = trim($query); 
    $query = $dbh->quote($query);
    $query = htmlspecialchars($query);     
    $query = preg_replace("/[^А-Яа-я0-9]/u", "", $query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $number = 'Слишком короткий поисковый запрос';
        } else if (strlen($query) > 128) {
            $number = 'Слишком длинный поисковый запрос';
        } else { 
            $q = "SELECT *
                  FROM peoples INNER JOIN otdel
                  ON peoples.otdel = otdel.alias WHERE 
                     vtc LIKE '%$query%'
                  OR name LIKE '%$query%'
                  OR gtc LIKE '%$query%'";
            $query = $dbh->query($q);
            $query->execute();
            $number = $query->fetchAll(PDO::FETCH_ASSOC);
            return $number;

            if ($dbh->rowCount() > 0) {
                $number = array();
                $number = $query->fetchAll(PDO::FETCH_ASSOC);
                return $number;
            } else {
                $number = 'По вашему запросу <b>' . $query . '</b> ничего не найдено';
            }
        } 
    } else {
        $number = 'Пустой поисковой запрос, либо ничего не найдено';
    }
    return $number; 
} 


?>