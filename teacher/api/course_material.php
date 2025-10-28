<?php
// course_material.php?launch_id=1&topic_id=3&co_id=1
require_once '../../includes/config.php'; // DB connection $conn

$launch_id = intval($_GET['launch_id'] ?? 0);
$topic_id  = intval($_GET['topic_id'] ?? 0);
$co_id     = intval($_GET['co_id'] ?? 0);

$pdf = null; $video = null;
if ($launch_id && $topic_id && $co_id) {
  $sql = "SELECT learning_type, url FROM modules WHERE launch_id=? AND topic_id=? AND co_id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "iii", $launch_id, $topic_id, $co_id);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  while ($row = mysqli_fetch_assoc($res)) {
    $lt = strtolower($row['learning_type']);
    $url = str_replace('\\','/',$row['url']);
    if ($lt === 'pdf' || $lt === 'document') $pdf = $url;
    if ($lt === 'video') $video = $url;
  }
  mysqli_stmt_close($stmt);
}

// Then in your HTML render:
?>
<!-- Notes -->
<?php if ($pdf): ?>
  <!-- show static pdf iframe -->
  <div class="border rounded p-3 mb-4 bg-light shadow-sm">
    <h6>📘 Static Notes</h6>
    <div class="ratio ratio-16x9 border rounded shadow-sm">
      <iframe src="<?= htmlspecialchars($pdf) ?>" width="100%" height="600" style="border:none;"></iframe>
    </div>
  </div>
<?php else: ?>
  <!-- show upload form -->
  <div class="border rounded p-3 bg-light shadow-sm">
    <h6>📂 Upload & Preview Your Notes</h6>
    <form action="api/upload_module.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="launch_id" value="<?= $launch_id ?>">
      <input type="hidden" name="topic_id" value="<?= $topic_id ?>">
      <input type="hidden" name="co_id" value="<?= $co_id ?>">
      <input type="hidden" name="learning_type" value="pdf">
      <input type="file" name="file" accept="application/pdf" required>
      <button type="submit">Upload PDF</button>
    </form>
  </div>
<?php endif; ?>

<!-- Video -->
<?php if ($video): ?>
  <div class="border rounded p-3 mb-4 bg-light shadow-sm">
    <h6>📺 Static Video</h6>
    <video controls>
      <source src="<?= htmlspecialchars($video) ?>" type="video/mp4" />
    </video>
  </div>
<?php else: ?>
  <div class="border rounded p-3 bg-light shadow-sm">
    <h6>🎥 Upload & Preview Your Video</h6>
    <form action="api/upload_module.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="launch_id" value="<?= $launch_id ?>">
      <input type="hidden" name="topic_id" value="<?= $topic_id ?>">
      <input type="hidden" name="co_id" value="<?= $co_id ?>">
      <input type="hidden" name="learning_type" value="video">
      <input type="file" name="file" accept="video/*" required>
      <button type="submit">Upload Video</button>
    </form>
  </div>
<?php endif; ?>
