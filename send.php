<?php
    
if(isset($_POST['phone'])){
    $url = "https://test.ortau.kz/";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $utm_source = $_POST['utm_source'];
    $utm_medium = $_POST['utm_medium'];
    $utm_campaign = $_POST['utm_campaign'];
    $utm_term = $_POST['utm_term'];
    $utm_content = $_POST['utm_content'];

    $form_data = [
        "url" => $url,
        "name" => $name,
        "phone" => $phone,
        "email" => $email,

        "lead_fields" => [
            '310831' => $utm_source,
            '310837' => $utm_medium,
            '310839' => $utm_campaign,
            '310843' => $utm_term,
            '310841' => $utm_content
            ]
        ];

    $str = http_build_query($form_data);
    $curl = curl_init();
    
    curl_setopt($curl, CURLOPT_URL, 'http://amoconnect.ru/amo-rams/api/slug/video');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $str);
    $result = curl_exec($curl);
    curl_close($curl);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank you!</h1>
</body>
</html>