<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css"href="/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
  crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</head>
<body>
  <?php
    $uri = service('uri');
  ?>
<!-- HEADER: MENU + HEROE SECTION -->
<header>
  <div class="menu">
    <ul>
      </li>
      <li class="menu-toggle">
        <button onclick="toggleMenu();">&#9776;</button>
      </li>
      <?php if(session()->get('isLoggedIn')): ?>
			<li class="menu-item hidden <?= ($uri -> getSegment(1) == 'store_list' ? 'active' : null) ?>"> <a href="store_list" >맛집리스트</a></li>
      <li class="menu-item hidden <?= ($uri -> getSegment(1) == 'store_add' ? 'active' : null) ?>"><a href="store_add" >맛집등록</a></li>
      <li class="menu-item hidden <?= ($uri -> getSegment(1) == 'profile' ? 'active' : null) ?>"><a href="profile" >정보수정</a></li>
      <li class="menu-item hidden "><a href="/logout">로그아웃</a></li>
      <?php else: ?>
			<li class="menu-item hidden <?= ($uri -> getSegment(1) == '' ? 'active' : null) ?>"><a href="/">로그인</a></li>
			<li class="menu-item hidden <?= ($uri -> getSegment(1) == 'register' ? 'active' : null) ?>"><a href="register" >회원가입</a></li>
      <?php endif; ?>
    </ul>
  </div>
</header>