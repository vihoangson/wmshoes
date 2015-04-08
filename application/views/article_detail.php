<?php $this->load->view('_includes/header'); ?>
<?php 
$article=$article[0];
echo "<h3>".$article->title."</h3>";
echo $article->hometext;
echo $article->bodytext;
 ?>
<?php $this->load->view('_includes/footer'); ?>