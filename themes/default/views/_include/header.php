<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title><?php echo $this->_seoTitle?></title>
<meta name="generator" content="BageCMS CMS" />
<meta name="author" content="shuguang" />
<meta name="keywords" content="<?php echo $this->_seoKeywords?>">
<meta name="description" content="<?php echo $this->_seoDescription?>">
<!--Add by liuyang 2014-04-26-->
<link rel="stylesheet" type="text/css" href="<?php echo $this->_theme->baseUrl?>/css/style.css">
<link rel="shortcut icon" href="<?php echo $this->_theme->baseUrl?>/images/favicon.png" />
<!--Add by liuyang 2014-04-26-->
<?php Yii::app()->clientScript->registerCoreScript('jquery',CClientScript::POS_END); ?>
<script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/js/jquery.SuperSlide.2.1.js"></script>
</head>

<body>
<div id="header">
    <div class="inner">
        <div id="logo">奥驰科技<small>&nbsp;&nbsp;有限公司</small></div>
    </div>
</div>
<div id="head_nav">
    <div class="inner">
        <ul>
            <li class="nav_sep"></li>
            <li><a href="#">&nbsp;首页&nbsp;</a></li>
            <li class="nav_sep"></li>
            <li><a href="#">公司简介</a></li>
            <li class="nav_sep"></li>
            <?php foreach((array)$this->_catalog as $key=>$row):?>
            <?php if($row['parent_id'] == 0):?>
            <li><a href="<?php echo $this->createUrl('post/index',array('catalog'=>$row['catalog_name_alias'])) ?>"><?php echo $row['catalog_name']?> 
                <!--[if IE 7]><!--></a><!--<![endif]--> 
                <!--[if lte IE 6]><table><tr><td><![endif]--> 
                <ul>
                    <?php foreach((array)Catalog::lite($row['id']) as $key=>$val):?>
                    <li><a href="<?php echo $this->_navLink($val)?>"><?php echo $val['catalog_name']?></a></a></li>
                    <?php endforeach?>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]--> 
            </li>
            <li class="nav_sep"></li>
            <?php endif?>
            <?php endforeach?>   
        </ul>
    </div>
</div>

