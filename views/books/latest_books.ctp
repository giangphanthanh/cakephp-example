<div class="container">
  <h2 class=""><?php echo ('New Ebooks'); ?></h2>
  <div class="row">
    <?php echo $this->Element('books', array('books', $books)) ?>
  </div>
  <br>
  <center>
    <?php echo $this->element('pagination'); ?>
  </center>
</div>