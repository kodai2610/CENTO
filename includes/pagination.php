<?php if(paginate_links()) : ?>
<div class="bl_pagination">
  <?php
  $args = [
    'end_size' => 0,//リストの両端にいくつおくか
    'mid_size' => 1, //現在のページの横にいくつおくか
    'prev_next' => true, // > < を含むかどうか
    'prev_text' => '<',
    'next_text' => '>',
    'type' => 'list', 
  ];
  echo paginate_links($args);
  ?>
  <!-- <ul class="page-numbers">
    <li>
      <span class="page-numbers current">1</span>
    </li>
    <li>
      <span class="page-numbers">2</span>
    </li>
    <li>
      <span class="page-numbers">3</span>
    </li>
    <li>
      <span class="page-numbers">4</span>
    </li>
    <li>
      <span class="page-numbers">5</span>
    </li>
    <li>
      <span class="page-numbers">></span>
    </li>
  </ul> -->
</div>
<?php endif; ?>