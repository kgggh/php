<div class ="container text-center" >
    <h2>로그인</h2>
    <div class ="container">
      <form action="/" method="post">
      <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label" >아이디</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="userId" placeholder="id">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">패스워드</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
          </div>
        </div>
        <?php if (isset($validation)): ?>
                <div class="col-12">
                    <div class ="alert alert-danger" role="alert">
                        <?= $validation-> listErrors() ?>
                    </div>
                </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-secondary btn-lg">로그인</button>
          </div>
       </div>
      </form>
  <div>
<div>
</body>
</html>