<?php
$stripeLive = env('STRIPE_LIVE');
//echo 'stripe:'.$stripeLive;exit;
if($stripeLive)
{
    $arr = [
        'sender_email' => 'vinmichael63@gmail.com',
        'sender_name' => 'Hsvbig',
        'stripe_key' => env('STRIPE_KEY'),
        'stripe_secret' => env('STRIPE_SECRET')
    ];
}
else
{
    $arr = [
        'sender_email' => 'vinmichael63@gmail.com',
        'sender_name' => 'Hsvbig',
        'stripe_key' => env('STRIPE_KEY_TEST'),
        'stripe_secret' => env('STRIPE_SECRET_TEST')
    ];
}
return $arr;