<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
  
  <?php
  $sheetsUrl = "https://spreadsheets.google.com/feeds/cells/1qVJNBYS3pUy3KV-xSXuOlZUCRmmen3xpSYb1ya6gGL0/1/public/full?alt=json";
  $response = file_get_contents($sheetsUrl);
  $upcoming = json_decode($response, true); 
  
  echo $upcoming['feed']['entry'][0]['content']['$t'];
  echo $upcoming['feed']['entry'][1]['content']['$t'];
  echo $upcoming['feed']['entry'][2]['content']['$t'];
  ?>
  
</body>
</html>
