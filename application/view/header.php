<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $this->title?></title>
</head>
<body>
<header id="header">
    <div>
        <div id="logo">
            <h3><a href="<?php echo _URL?>">MVC MODEL HOMPAGE</a></h3>
        </div>
    </div>
    <nav id="gnb">
        <ul>
            <li><a href="<?php echo _URL?>review">게시판</a></li>
            <li><a href="<?php echo _URL?>schedule">일정관리</a></li>
            <li><a href="<?php echo _URL?>chat">채팅</a></li>
        </ul>
    </nav>
</header>
