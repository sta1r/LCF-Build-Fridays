<?php

$headers = 'From: London College of Fashion <opendays@fashion.arts.ac.uk>' . "\r\n" .
  'Reply-To: opendays@fashion.arts.ac.uk' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

mail('amucklow@strangerpixel.com', 'Test Mail', 'Test Message', $headers);

?>