<?php
$channelSecret = 'TOW4YNTmRkyAclv+CqHOQZWwTC9pYN+TeljKbAIYLL+rLp9szOKEc79EM78Ug1eiR988A4NB1gf5KLIqyqBCG4VdGpGjm23nnh1cX9TE9HwQgvw6tz75lrwQIiKaNuocPtQq2jFQBBr5+IVVXi/QpAdB04t89/1O/w1cDnyilFU='; // Channel secret string
$httpRequestBody = group; // Request body string
$hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
$signature = base64_encode($hash);
// Compare X-Line-Signature request header string and the signature

?>
