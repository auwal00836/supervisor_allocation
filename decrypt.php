<?php

// // Store a string into the variable which
// // need to be Encrypted
// $simple_string_bvn = "22372358900";

// // Display the original string
// echo "Original String: " . $simple_string_bvn."\n\n";

// // Store the cipher method
//  $ciphering = "AES-128-CTR";

// // // Use OpenSSl Encryption method
// // $iv_length = openssl_cipher_iv_length($ciphering);
//  $options = 0;

// // Non-NULL Initialization Vector for encryption
// $encryption_iv = '1234567891011121';

// // Store the encryption key
// $encryption_key = "fnatechidcardkey";

// // Use openssl_encrypt() function to encrypt the data
// $encryption = openssl_encrypt($simple_string_bvn, $ciphering,
// 			$encryption_key, $options, $encryption_iv);

// // Display the encrypted string
// echo "\nEncrypted String: " . $encryption . "\n";

// Non-NULL Initialization Vector for decryption
// $decryption_iv = '1234567891011121';

// // Store the decryption key
// $decryption_key = "";

// // Use openssl_decrypt() function to decrypt the data
// $decryption=openssl_decrypt ('6FMcsaD3WTorsase6Fyldr5o6u/6dyx+qm05Qb8hWaWiq6aPAvaYAi44
// ', $ciphering,
// 		$decryption_key, $options, $decryption_iv);

// // Display the decrypted string
// echo "\nDecrypted String: " . $decryption;

// $string = 'NkZNY3NhRDNXVG9yc2FzZTZGeWxkcjVvNnUvNmR5eCtxbTA1UWI4aFdhV2lxNmFQQXZhWUFpNDQ=';

// //echo base64_encode('6FMcsaD3WTorsase6Fyldr5o6u/6dyx+qm05Qb8hWaWiq6aPAvaYAi44');


// //$hash = bin2hex(base64_decode('6FMcsaD3WTorsase6Fyldr5o6u/6dyx+qm05Qb8hWaWiq6aPAvaYAi44'));

// //eval('NkZNY3NhRDNXVG9yc2FzZTZGeWxkcjVvNnUvNmR5eCtxbTA1UWI4aFdhV2lxNmFQQXZhWUFpNDQ');

// print_r(json_decode('6FMcsaD3WTorsase6Fyldr5o6u/6dyx+qm05Qb8hWaWiq6aPAvaYAi44'));

// echo $hash;

   // eval(
   //  $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( 'qJB0rGtIn5UB1xG03efyCp' ), base64_decode( 'NkZNY3NhRDNXVG9yc2FzZTZGeWxkcjVvNnUvNmR5eCtxbTA1UWI4aFdhV2lxNmFQQXZhWUFpNDQ=' ), MCRYPT_MODE_CBC, md5( md5( 'qJB0rGtIn5UB1xG03efyCp' ) ) ), "\0")

   // )


echo base64_decode('CKm1yQEIl7bJAQiitskBCMG2yQEIqZ3KAQj00MoBCKCgywEI7/LLAQjN9ssBCLP4ywEIp/nLAQj6+csBGI6eywE=');


?>


