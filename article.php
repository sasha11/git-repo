<?php
/**
 * @var			������ ��� ������� ���������� �������.
 * @copyright	"��-����������". ��� ����� ��������.
 * @author      �������� ������
 * @link		http://it-tehnologia.ru/
 * @version		01-01-2011
 * 
 * @name		Article file
 * @package		/article.php
 */
    require_once("/database.php");// database
    require_once("/models/article.php"); // functions

    $link = db_connect();
    $article = articles_get($link, $_GET['id']);
    
    require_once("/views/article.php");
?>