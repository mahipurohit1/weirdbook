
<?php
$servername = "localhost";
$username = "root";
$password = '';
$db = 'weirdbook';
$conn = mysqli_connect($servername, $username, $password, $db);
if ($conn) {
  echo "";
} else {
  echo "not connected ";
};

function encryptor($action, $string)
{
  $secret_key = 'WYR783RVBW33IR3H89RYB387RYT87BV2Y3R89ERT38V7TR0FRA';
  $secret_iv = 'EW8F7YEW6T0CN0WFJKY3784YW29837RA';

  $output = false;
  $encrypt_method = "AES-256-CBC";
  // hash
  $key = hash('sha256', $secret_key);
  // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
  $iv = substr(hash('sha256', $secret_iv), 0, 16);

  //do the encyption given text/string/number
  if ($action == 'e') {
    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);
  } else if ($action == 'd') {
    //decrypt the given text/string/number
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
  }

  return $output;
}
?>