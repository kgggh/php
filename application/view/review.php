<div class="board_list auto-center">
   <h3>총 게시물 수 : <?php echo $listNum?></h3>
   <table width="100%">
      <colgroup>
        <col width="10%">
        <col width="60%">
        <col width="15%">
        <col width="15%">
      </colgroup>
      <thead>
        <tr>
           <th>번호</th>
           <th>제목</th>
           <th>작성자</th>
           <th>작성일</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list as $key => $data): ?>
        <tr>
           <td> </td>
           <td class="al_l"><a href="<?php echo ">param->get_page}/view/{$data->review_num}"?>"><?php echo $data->comment ?></a></td>
           <td> </td>
           <td> </td>
        </tr>
        <?php endforeach ?>
      </tbody>
   </table>
   <div class="btn_group"><a