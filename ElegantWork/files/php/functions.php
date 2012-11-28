<?php
function js_redirect($url,$temps ='') {
    if($temps == ''):
        return '<script> location.href = "'.$url.''.'"; </script>';
    else: 
        return '<script> setTimeout("location= (\''.$url.'\');",'.($temps*1000).'); </script>';
    endif;
}
function activer($param, $url) {
    if($param == 'deconnection'):
        echo ' class="deconnection" ';
    endif;
    if($param == $url):

        echo ' class="active" ';
        
    endif;
    
}
function set_session($name,$sub = '',$value = '') {
    if($sub == ''):
        $_SESSION[$name] = $value;
    else:
        $_SESSION[$name][$sub] = $value;
    endif;
}
function mon_urlencode($url){
    
$url=(trim(stripslashes($url)));

//--caractères supprimés.
$url=str_replace(array(
    '…',
    '«',
    '«',
    '»',
    '»',
    '!',
    '?',
    '"',
    '/',
    '\\',
    ':',
    '#',
    '@',
    '§',
    '.',
    ',',
    '%',
    '<',
    '>',
    '+',
    '=',
    '¨',
    '*',
    '£',
    '`',
    '°'
    ),'',$url);



//--Ponctuation
$url=str_replace(array(' ',"'",'’','(',')','_','--'),'-',$url);

//--caractères remplacés.
$url=str_replace(array('à','â','ä','À','Á','Â','Ã','Ä'),'a',$url);
$url=str_replace(array('ë','È','É','Ê','Ë','ê','è','é'),'e',$url);
$url=str_replace(array('Ç','ç'),'c',$url);
$url=str_replace(array('ï','î','Ì','Í','Î','Ï'),'i',$url);
$url=str_replace(array('Ñ'),'n',$url);
$url=str_replace(array('û','ü','Ù','Ú','Ü','Û'),'u',$url);
$url=str_replace(array('Ÿ','Ý'),'y',$url);
$url=str_replace(array('ô','ö','Ò','Ó','Ô','Õ','Ö'),'o',$url);
$url=str_replace(array('Š','š'),'s',$url);

//--Signes
$url=str_replace('$','dollar',$url);
$url=str_replace('©','copyright',$url);
$url=str_replace('®','registred',$url);
$url=str_replace('œ','oe',$url);
$url=str_replace('æ','ae',$url);

$url=str_replace('&', 'et', $url);
$url=str_replace('€','euros',$url);



//-- Adaptation
$url = strtolower($url);
$url = trim($url);
$url=str_replace('--','-',$url);
$url=str_replace('--','-',$url);

return $url;
}
function mon_html_converter($url){
$url=strtolower(trim(stripslashes($url)));

//--caractères supprimés.
$url=str_replace(array(
    '…',
    '«',
    '«',
    '»',
    '»',
    '!',
    '?',
    '"',
    '/',
    '\\',
    ':',
    '#',
    '@',
    '§',
    '.',
    ',',
    '%',
    '<',
    '>',
    '+',
    '=',
    '¨',
    '*',
    '£',
    '`',
    '°'
    ),'',$url);



//--Ponctuation
$url=str_replace(array("'",'’','(',')','_','--'),'-',$url);

//--caractères remplacés.
$url=str_replace(array('à','â','ä','À','Á','Â','Ã','Ä'),'a',$url);
$url=str_replace(array('ë','È','É','Ê','Ë','ê','è','é'),'e',$url);
$url=str_replace(array('Ç','ç'),'c',$url);
$url=str_replace(array('ï','î','Ì','Í','Î','Ï'),'i',$url);
$url=str_replace(array('Ñ'),'n',$url);
$url=str_replace(array('û','ü','Ù','Ú','Ü','Û'),'u',$url);
$url=str_replace(array('Ÿ','Ý'),'y',$url);
$url=str_replace(array('ô','ö','Ò','Ó','Ô','Õ','Ö'),'o',$url);
$url=str_replace(array('Š','š'),'s',$url);

//--Signes
$url=str_replace('$','dollar',$url);
$url=str_replace('©','copyright',$url);
$url=str_replace('®','registred',$url);
$url=str_replace('œ','oe',$url);
$url=str_replace('æ','ae',$url);

$url=str_replace('&', 'et', $url);
$url=str_replace('€','euros',$url);


return $url;
}
function no_accents($url){
    
$url=(trim(stripslashes($url)));

//--caractères supprimés.
$url=str_replace(array(
    '…',
    '«',
    '«',
    '»',
    '»',
    '!',
    '?',
    '"',
    '/',
    '\\',
    ':',
    '#',
    '@',
    '§',
    '.',
    ',',
    '%',
    '<',
    '>',
    '+',
    '=',
    '¨',
    '*',
    '£',
    '`',
    '°'
    ),'',$url);


//--caractères remplacés.
$url=str_replace(array('à','â','ä','À','Á','Â','Ã','Ä'),'a',$url);
$url=str_replace(array('ë','È','É','Ê','Ë','ê','è','é'),'e',$url);
$url=str_replace(array('Ç','ç'),'c',$url);
$url=str_replace(array('ï','î','Ì','Í','Î','Ï'),'i',$url);
$url=str_replace(array('Ñ'),'n',$url);
$url=str_replace(array('û','ü','Ù','Ú','Ü','Û'),'u',$url);
$url=str_replace(array('Ÿ','Ý'),'y',$url);
$url=str_replace(array('ô','ö','Ò','Ó','Ô','Õ','Ö'),'o',$url);
$url=str_replace(array('Š','š'),'s',$url);

//--Signes
$url=str_replace('$','dollar',$url);
$url=str_replace('©','copyright',$url);
$url=str_replace('®','registred',$url);
$url=str_replace('œ','oe',$url);
$url=str_replace('æ','ae',$url);

$url=str_replace('&', 'et', $url);
$url=str_replace('€','euros',$url);



//-- Adaptation
$url = strtolower($url);
$url = trim($url);
$url=str_replace('--','-',$url);
$url=str_replace('--','-',$url);

return $url;
}




class menu {
    public static function page($nom, $link, $vertical = 1, $class = '',$name = '') {
        
        $code = '<li';
        $code .= (URL_VALUE == $link OR ($link == '' AND URL_VALUE == 'index') OR $name == mon_urlencode($nom)) ? ' class="active" ' : '';
        $code .= '><a href="'.URL.$link.'" class="'.$class.'" title="'.$nom.' | Maceió">'.$nom.'</a></li>';
        $code .= ($vertical == 1) ? '<li class="divider-vertical"></li>' : '';
        $code .= ($vertical == 2) ? '<li class="divider"></li>' : '';
        echo $code;
    }
      
}
