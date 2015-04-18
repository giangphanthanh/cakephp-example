<center>
  <?php echo $this->Form->create('Book'); ?>
    <?php echo $this->Form->input('keyword', array('class'=>'form-control','label'=>'', 'placeholder'=>'Enter key search')); ?>
  <?php echo $this->Form->end('Search', array('class'=>'btn btn-primary')); ?>
</center>
<div class="container">
  <!-- Hien thi ket qua tim kiem -->
  <?php if ($notfound == false && isset($results)): ?>
    <?php echo $this->element('books', array('books'=>  $results)); ?>
  <?php elseif ($notfound): ?>
    <p>Khong tim thay quyen sach nay.</p>
  <?php endif ?>
  <!-- end -->
</div>