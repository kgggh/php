
<div class ="container text-center" >
    <h2>회원가입</h2>
    <div class ="container">
        <form action="register" method="post">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">아이디</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="userId" placeholder="아이디">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">비밀번호</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="비밀번호">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">비밀번호화인</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="비밀번호확인">
            </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">구분</label>
            <div class="col-sm-2">   
                <select class="custom-select" id="classification" name ="classification" >
                    <option value="0">점주</option>
                    <option value="1">고객</option>
                </select>
            </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">이름</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="inputPassword" placeholder="이름">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">이메일</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="이메일">
            </div>
            </div>
            <?php if (isset($validation)): ?>
                <div class="col-12">
                    <div class ="alert alert-danger" role="alert">
                        <?= $validation-> listErrors() ?>
                    </div>
                </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-secondary btn-lg">회원가입</button>
        </form>
    <div>
<div>
</body>
</html>