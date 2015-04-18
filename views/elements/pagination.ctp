<p>
  <?php echo $this->Paginator->counter('Trang {:page}/{:pages}, hien thi {:current} quyen sach trong tong so {:count} quyen'); ?><br>
  <?php echo $this->Paginator->prev('Quay Lai'); ?>
  <?php echo $this->Paginator->numbers(array('separator'=>' - ')); ?>
  <?php echo $this->Paginator->next('Ke Tiep'); ?>
</p>