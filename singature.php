$channelSecret = ...; // Channel secret string
$httpRequestBody = ...; // Request body string
$hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
$signature = base64_encode($hash);
// Compare X-Line-Signature request header string and the signature
