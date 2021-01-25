
    <h1>맛집리스트</h1>
<div id="board_area"> 
    <table class="table table-hover">
      <thead>
          <tr>
                <th scope="col" width="100">번호</th>
                <th scope="col" width="150">분류</th>
                <th scope="col" width="200">점포명</th>
                <th scope="col" width="300">주소</th>
                <th scope="col" width="200">가게번호</th>
                <th scope="col"width="300">태그</th>
            </tr>
        </thead>
      <tbody>
      <?php foreach ($store as $store_item): ?>
        <tr>
          <th scope="row"><?= esc($store_item['store_num']) ?></th>
          <td ><?= esc($store_item['m_classification']) ?></td>
          <td ><a href=""><?= esc($store_item['s_name']) ?></a></td>
          <td ><?= esc($store_item['address']) ?></td>
          <td ><?= esc($store_item['s_phone']) ?></td>
          <td ><?= esc($store_item['tag']) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div style="text-align:right;">
      <a href="/test/view/board/write.php">
        <button type="button" class="btn btn-secondary btn-lg">점포등록</button>
    </a>
    </div>
  </div>
</body>
</html>