<?php defined('UFK') or die('Access denied');

/*=============Страницы=============*/
function pages(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM pages ORDER BY position");
    $query->execute();

    $pages = $query->fetchAll(PDO::FETCH_ASSOC);
    return $pages;
}

/*=============Получение списка IP=============*/
function ipadreses(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM `ipadreses` order by INET_ATON(`ip`)asc");
    $query->execute();

    $ipadreses = $query->fetchAll(PDO::FETCH_ASSOC);
    return $ipadreses;
}

/*=============Добавление страницы=============*/
function add_page(){
    global $dbh;

    $title = trim($_POST['title']);
    $link = trim($_POST['link']);
    $position = (int)$_POST['position'];
    $text = trim($_POST['text']);
    
    if(empty($title)){
        // если нет названия
        $_SESSION['add_page']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        $_SESSION['add_page']['link'] = $link;
        $_SESSION['add_page']['position'] = $position;
        $_SESSION['add_page']['text'] = $text;
        return false;
    }else{
        $title = clear_admin($title);
        $link = clear_admin($link);
        $position = clear_admin($position);
        $text = clear_admin($text);

        $q = "INSERT INTO pages (title, link, position, text)
                    VALUES ('$title', '$link', $position, '$text')";

        $query = $dbh->query($q);
        $query->execute();
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>Страница добавлена!</div>";
            return true;
        }else{
            $_SESSION['add_page']['res'] = "<div class='error'>Ошибка при добавлении страницы!</div>";
            return false;
        }
    }
}

/*=============Добавление IP адреса=============*/
function add_ip(){
    global $dbh;
    $ip = trim($_POST['ip']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    
    if(empty($ip) or empty($title) ){
        // если нет названия
        $_SESSION['add_ip']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        $_SESSION['add_ip']['ip'] = $ip;
        $_SESSION['add_ip']['title'] = $title;
        $_SESSION['add_ip']['description'] = $description;
        return false;
    }else{
        $ip = clear_admin($ip);
        $title = clear_admin($title);
        $description = clear_admin($description);
        
        $q = "INSERT INTO ipadreses (ip, title, description)
                    VALUES ('$ip', '$title', '$description')";
        $query = $dbh->query($q);
        $query->execute();
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>IP адрес добавлен!</div>";
            return true;
        }else{
            $_SESSION['add_ip']['res'] = "<div class='error'>Ошибка при добавлении IP!</div>";
            return false;
        }
    }
}

/* ===Редактирование IP=== */
function edit_ip($ip_id){
    global $dbh;
    $ip = trim($_POST['ip']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);;
    
    if(empty($ip) OR empty($title)){
        // если нет названия
        $_SESSION['edit_ip']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        return false;
    }else{
        $ip = clear_admin($ip);
        $title = clear_admin($title);
        $description = clear_admin($description);

        $q = "UPDATE ipadreses SET
                    ip = '$ip',
                    title = '$title',
                    description = '$description'
                        WHERE id = $ip_id";
        $query = $dbh->query($q);
        $query->execute();
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>IP адрес обновлен</div>";
            return true;
        }else{
            $_SESSION['edit_ip']['res'] = "<div class='error'>Ошибка при редактировании!</div>";
            return false;
        }
    }
}

/* ===Удаление IP адреса=== */
function del_ip($id){
    global $dbh;
    $q = "DELETE FROM ipadreses WHERE id = $id";
    $query = $dbh->query($q);
    $query->execute();
    
    if($dbh->rowCount() > 0){
        $_SESSION['answer'] = "<div class='success'>IP адрес удален</div>";
        return true;
    }else{
        $_SESSION['answer'] = "<div class='error'>Ошибка при удалении IP адреса!</div>";
        return false;
    }
}

/* ===Удаление страницы=== */
function del_page($page_id){
    global $dbh;
    $q = "DELETE FROM pages WHERE page_id = $page_id";
    $query = $dbh->query($q);
    $query->execute();
    
    if($dbh->rowCount() > 0){
        $_SESSION['answer'] = "<div class='success'>Страница удалена</div>";
        return true;
    }else{
        $_SESSION['answer'] = "<div class='error'>Ошибка при удалении страницы!</div>";
        return false;
    }
}

/* ===Отдельная IP=== */
function get_ip($ip_id){
    global $dbh;
    $q = "SELECT * FROM ipadreses WHERE id = $ip_id";
    $query = $dbh->query($q);
    $query->execute();

    $ip = $query->fetchAll(PDO::FETCH_ASSOC);
    
    return $ip;
}

/* ===Отдельная страница=== */
function get_page($page_id){
    global $dbh;
    $q = "SELECT * FROM pages WHERE page_id = $page_id";
    $query = $dbh->query($q);
    $query->execute();

    $page = $query->fetchAll(PDO::FETCH_ASSOC);
    
    return $page;
}

/* ===Редактирование страницы=== */
function edit_page($page_id){
    global $dbh;
    $title = trim($_POST['title']);
    $link = trim($_POST['link']);
    $position = (int)$_POST['position'];
    $text = trim($_POST['text']);
    
    if(empty($title)){
        // если нет названия
        $_SESSION['edit_page']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        return false;
    }else{
        $title = clear_admin($title);
        $link = clear_admin($link);
        $position = clear_admin($position);
        $text = clear_admin($text);

        $q = "UPDATE pages SET
                    title = '$title',
                    link = '$link',
                    position = $position,
                    text = '$text'
                        WHERE page_id = $page_id";
        $query = $dbh->query($q);
        $query->execute();
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>Страница обновлена!</div>";
            return true;
        }else{
            $_SESSION['edit_page']['res'] = "<div class='error'>Ошибка при редактировании!</div>";
            return false;
        }
    }
}

/* ==== Отделы ==== */
function otdel(){
    global $dbh;
    $query = "SELECT * FROM otdel ORDER BY position";
    $query = $dbh->query($query);
    $query->execute();
    
    // массив отделов
    $otdel = $query->fetchAll(PDO::FETCH_ASSOC);
    return $otdel;    
}

/* ===Добавление отдела=== */
function add_otdel(){
    global $dbh;
    $otdel_name = trim($_POST['otdel_name']);
    $full_name = trim($_POST['full_name']);
    $position = (int)$_POST['position'];
    $alias = trim($_POST['alias']);
    
    if(empty($otdel_name) OR empty($full_name) OR empty($alias)){
        // если нет названия
        $_SESSION['add_otdel']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        $_SESSION['add_otdel']['otdel_name'] = $otdel_name;
        $_SESSION['add_otdel']['full_name'] = $full_name;
        $_SESSION['add_otdel']['position'] = $position;
        $_SESSION['add_otdel']['alias'] = $alias;
        return false;
    }else{
        $otdel_name = clear_admin($otdel_name);
        $full_name = clear_admin($full_name);
        $position = clear_admin($position);
        $alias = clear_admin($alias);
        
        $query = "INSERT INTO otdel (otdel_name, full_name, position, alias)
                    VALUES ('$otdel_name', '$full_name', $position, '$alias')";
        $query = $dbh->query($query);
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>Новый отдел добавлен!</div>";
            return true;
        }else{
            $_SESSION['add_otdel']['res'] = "<div class='error'>Ошибка при добавлении нового отдела!</div>";
            return false;
        }
    }
}

/* ===Удаление отдела=== */
function del_otdel($otdel_id){
    global $dbh;
    $query = "DELETE FROM otdel WHERE otdel_id = $otdel_id";
    $query = $dbh->query($query);
    $query->execute();
    
    if($dbh->rowCount() > 0){
        $_SESSION['answer'] = "<div class='success'>Отдел удален</div>";
        return true;
    }else{
        $_SESSION['answer'] = "<div class='error'>Ошибка при удалении отдела!</div>";
        return false;
    }
}

/* ===Отдельный отдел=== */
function get_otdel($otdel_id){
    global $dbh;
    $query = "SELECT * FROM otdel WHERE otdel_id = $otdel_id";
    $query = $dbh->query($query);
    $query->execute();
    
    $otdel = $query->fetch(PDO::FETCH_ASSOC);
    return $otdel;
}

/* ===Редактирование отдела=== */
function edit_otdel($otdel_id){
    global $dbh;
    $otdel_name = trim($_POST['otdel_name']);
    $full_name = trim($_POST['full_name']);
    $position = (int)$_POST['position'];
    $alias = trim($_POST['alias']);
    
    if(empty($otdel_name) OR empty($alias) OR empty($full_name)){
        // если нет названия
        $_SESSION['edit_otdel']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        return false;
    }else{
        $otdel_name = clear_admin($otdel_name);
        $full_name = clear_admin($full_name);
        $position = clear_admin($position);
        $alias = clear_admin($alias);
        
        $query = "UPDATE otdel SET
                    otdel_name = '$otdel_name',
                    full_name = '$full_name',
                    position = $position,
                    alias = '$alias'
                        WHERE otdel_id = $otdel_id";
        $query = $dbh->query($query);
        $query->execute();
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>Отдел обновлен!</div>";
            return true;
        }else{
            $_SESSION['edit_otdel']['res'] = "<div class='error'>Ошибка при редактировании!</div>";
            return false;
        }
    }
}

/* ==== ВТС ==== */
function vts($id){
    global $dbh;
    $query = "SELECT * FROM peoples WHERE otdel = '$id' ORDER BY positions";
    $query = $dbh->query($query);
    $query->execute();
    
    $vts = $query->fetchAll(PDO::FETCH_ASSOC);
    return $vts;
}

/* ===Добавление сотрудника=== */
function add_people(){
    global $dbh;
    $post = trim($_POST['post']);
    $name = trim($_POST['name']);
    $vtc = trim($_POST['vtc']);
    $gtc = trim($_POST['gtc']);
    $kab = trim($_POST['kab']);
    $otdel = trim($_POST['otdel']);
    
    if(empty($name) OR empty($otdel)){
        // если нет названия
        $_SESSION['add_people']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        $_SESSION['add_people']['name'] = $name;
        $_SESSION['add_people']['post'] = $post;
        $_SESSION['add_people']['vtc'] = $vtc;
        $_SESSION['add_people']['gtc'] = $gtc;
        $_SESSION['add_people']['kab'] = $kab;
        $_SESSION['add_people']['otdel'] = $otdel;
        return false;
    }else{
        $post = clear_admin($post);
        $name = clear_admin($name);
        $vtc = clear_admin($vtc);
        $gtc = clear_admin($gtc);
        $kab = clear_admin($kab);
        $otdel = clear_admin($otdel);
        
        $query = "INSERT INTO peoples (post, name, vtc, gtc, kab, otdel)
                    VALUES ('$post', '$name', '$vtc', '$gtc', '$kab', '$otdel')";
        $query = $dbh->query($query);
        $query->execute();
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>Сотрудник добавлен!</div>";
            return true;
        }else{
            $_SESSION['add_people']['res'] = "<div class='error'>Ошибка при добавлении сотрудника!</div>";
            return false;
        }
    }
}

/* ===Удаление сотрудника=== */
function del_people($id){
    global $dbh;
    $query = "DELETE FROM peoples WHERE id = $id";
    $query = $dbh->query($query);
    $query->execute();
    
    if($dbh->rowCount() > 0){
        $_SESSION['answer'] = "<div class='success'>Сотрудник удален</div>";
        return true;
    }else{
        $_SESSION['answer'] = "<div class='error'>Ошибка при удалении сотрудника!</div>";
        return false;
    }
}

/* ===Редактирование сотрудника=== */
function edit_people($user_id){
    global $dbh;
    $post = trim($_POST['post']);
    $name = trim($_POST['name']);
    $vtc = trim($_POST['vtc']);
    $gtc = trim($_POST['gtc']);
    $kab = trim($_POST['kab']);
    $otdel = trim($_POST['otdel']);
	$positions = trim($_POST['positions']);
    
    if(empty($name) OR empty($otdel)){
        // если нет названия
        $_SESSION['edit_people']['res'] = "<div class='error'>* Заполните обязательные поля</div>";
        return false;
    }else{
        $post = clear_admin($post);
        $name = clear_admin($name);
        $vtc = clear_admin($vtc);
        $gtc = clear_admin($gtc);
        $kab = clear_admin($kab);
        $otdel = clear_admin($otdel);
		$positions = clear_admin($positions);
                
        $query = "UPDATE peoples SET
                    post = '$post',
                    name = '$name',
                    vtc = '$vtc',
                    gtc = '$gtc',
                    kab = '$kab',
                    otdel = '$otdel',
					positions = '$positions'
                        WHERE id = $user_id";
        $query = $dbh->query($query);
        $query->execute();
        
        if($dbh->rowCount() > 0){
            $_SESSION['answer'] = "<div class='success'>Сотрудник обновлен!</div>";
            return true;
        }else{
            $_SESSION['edit_people']['res'] = "<div class='error'>Ошибка при редактировании!</div>";
            return false;
        }
    }
}

/* ===Отдельный сотрудник=== */
function get_people($user_id){
    global $dbh;
    $query = "SELECT * FROM peoples WHERE id = $user_id";
    $query = $dbh->query($query);
    $query->execute();

    $get_people = $query->fetch(PDO::FETCH_ASSOC);
    return $get_people;
}

/* ===Все сотрудники=== */ 
function all_users(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM peoples");
    $query->execute();

    $all_users = $query->fetchAll(PDO::FETCH_ASSOC);
    return $all_users;
}


/* === Поиск === */
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

/* ===Подсвечивание активного пункта меню=== */
function active_url($str = 'view=pages'){
    $uri = $_SERVER['QUERY_STRING']; // получаем параметры
    if(!$uri) $uri = "view=pages"; // параметр по умолчанию
    $uri = explode("&", $uri); // разбиваем строку по разделителю
    if(preg_match("#page=#", end($uri))) array_pop($uri); // если есть параметр пагинации (page) - удаляем его
    if(in_array($str, $uri)){
        // если в массиве параметров есть строка - это активный пункт меню
        return "class='nav-activ'";
    }
}
/* ===Подсвечивание активного пункта меню=== */

/* ===Фильтрация входящих данных из админки=== */
function clear_admin($var){
    global $dbh;
    $var = $dbh->quote($var);
    return $var;
}
/* ===Фильтрация входящих данных из админки=== */

?>