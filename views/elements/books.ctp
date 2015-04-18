<?php foreach ($books as $book): ?>
  <div class="col-md-3">
    <strong>Title: <?php echo $book['Book']['title']; ?></strong><br>
    <?php echo $this->Html->image($book['Book']['image'], array('width' => '60px;', 'height' => "auto;")); ?><br>
    <strong>Price: </strong>$<?php echo $book['Book']['price']; ?><br>
    <i><?php echo $book['Book']['info']; ?></i>
    <?php echo $book['Book']['slug']; ?>
    <?php echo $book['Book']['pages']; ?>
    <?php echo $book['Book']['link_download']; ?><br>
    <?php echo $this->Html->link('View Details', "/books/view/".$book['Book']['id'], array('class'=>'btn btn-primary view-tail')) ?>
    <hr>
  </div>
<?php endforeach; ?>