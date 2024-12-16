<?php
$text = '안녕하세요';
?>
<?php include 'includes/header.php'; ?>

<p>
  <b>Character count using <code>strlen()</code>:</b>
  <?= strlen($text) ?><br>
  <b>Character count using <code>mb_strlen()</code>:</b>
  <?= mb_strlen($text) ?><br>
  <b>First match of 세요 <code>strpos()</code>:</b>
  <?= strpos($text, '세요') ?><br>
  <b>First match of 세요 <code>mb_strpos()</code>:</b>
  <?= mb_strpos($text, '세요') ?><br>
</p>

<?php include 'includes/footer.php'; ?>