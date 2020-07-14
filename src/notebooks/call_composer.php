<?php

include __DIR__ . "/../vendor/autoload.php";

$client = new \zdk\ClientServices();
$api = $client->service("zevents");

// $postdata = '{"d":
//     [{
//         "identity": "132123",
//         "type": "profile",
//         "ts": 1594329776,
//         "profileData":{
//             "Name": "Tatiana Lizarralde",
//             "Email": "tl2947@columbia.edu",
//             "Gender": "F",
//             "Phone": "+573116803991",
//             "first name": "Tatiana",
//             "last name": "Lizarralde",
//             "date of birth": "1993-9-9",
//             "gender": "F",
//             "marital status": "unión libre",
//             "live with": "hijos",
//             "children": "1",
//             "dependents": "1",
//             "studies level": "técnico-tecnólogo",
//             "city": "bogotá",
//             "socioeconomic status": "3",
//             "transport": "moto",
//             "economical activity": "estudiante",
//             "employment": "analista",
//             "seniority": "administrativo",
//             "type of company": "educación",
//             "monthly income": "menos de 500.000",
//             "money destination": "gastos diarios personales",
//             "acquistiontype": "affiliates",
//             "registrationstartdate": "2020-5-5",
//             "amount approved": "300,000",
//             "number of applications": "2",
//             "number of disbursements": "1",
//             "number of payments on time": "1",
//             "number of payments late": "0",
//             "active credits": "1",
//             "number of debits": "0",
//             "number of referrals": "",
//             "zinobe_product_name": "lineru"
//         }}]}';
//$result = $api->create_profile($postdata);


// $postdata = '{
//     "d": [
//             {
//                 "identity": "1032498289",
//                 "type": "event",
//                 "ts": 1594329776,
//                 "evtName": "calculator",
//                 "evtData": {
//                     "zinobe_product_name":"lineru",
//                     "amount": 600000.00,
//                     "acquisition channel": "lineru",
//                     "paydays": 30
//                 }
//             }
//         ]
// }';
// $result = $api->create_event($postdata);


// $postdata = '{
//     "batch_size": "500",
//     "data": {
//       "event_name": "calculator",
//       "from": 20200601,
//       "to": 20200623
//     }
//   }';
// $result = $api->get_profile_cursor($postdata);
// status ok

// $postdata = '{
//     "cursor":"ZiZiNwMFCARmYmN4b2suO20BBA1jaWF%2FYGpheAUCTQViY2Z4ZG5lewEDBgYraGNmemsue04BBA1na2p6ZGJjN0JvAAFubmF4Y21ieAEGCUhmb2t%2FZGlmfAIDAgJvJmB6endjNwJMAAFuamNzZmlqek5AbgViY2Z4ZG5lewEDBgYra2dyY2lhfwUAAgdgaC55Znd%2Fek4ATQViY2J6b2thcwNMQWtmb2t%2FZGlmfAIDAgNmJmN%2Bbm5heAYHAQdkbWM3ZWt%2FZgNMAUhmb2t7ZmJjeAoBTUQIa2dyY2lhfwUAAgdgaC56YmNmeAEEBgRkaWV5K2hjZh8BTQQra2dyZ2tqegEIAEgnBWN%2Bbm5heAYHAQdkbWM3Zm9rfwEDBQNnaWF8ZiZgeh8dAEhnJmN%2BbmpjcwMDCQUrKg16YmNmeAEEBgRkaWV6K2tncgYDAgBgamF4YGsueQMdHAUrai56YmNiegoBAgxmJiIUZm9rfwEDBQNnaWF8ZiZjfgsEAgdjbWJ4ZG1jNwABHBlmJmI3Zm9rewMIAAdvay47CGtncgYDAgBgamF4YGguegcJBQdkbmV7ZGlleU4CABl6ay57K2tncgIBCQVkYmM3JwVjfgsEAgdjbWJ4ZG1hNwMFCABkaWZ8Z2lhfAFMAwV6d2M3ZyZjfgsAAAxmaWp6KyoNegcJBQdkbmV7ZGlleE4BBA1jaWF%2FYGpheAUDTQZmd396K2ouegcJAQVva2FzZiYiFAMFCABkaWZ8Z2lhfABMAAFubmF4Y21ieAEHA0hla39mZiZiNwMFCARmYmN4b2suO20BBA1jaWF%2FYGpheAUFTQViY2Z4ZG5lewEDBgEraGNmemsue04BBA1na2p6ZGJjN0JvAAFubmF4Y21ieAEHAEhmb2t%2FZGlmfAIDAgNmJmB6endjNwJMAAFuamNzZmlqek5AbgViY2Z4ZG5lewEDBgcra2dyY2lhfwUAAgdgaS55Znd%2Fek4ATQViY2J6b2thcwNMQWtmb2t%2FZGlmfAIDAgNlJmN%2Bbm5heAYHAQdkbWA3ZWt%2FZgNMAUhmb2t7ZmJjeAoBTUQIa2dyY2lhfwUAAgdgay56YmNmeAEEBgRkaWV6K2hjZh8BTQQra2dyZ2tqegEIAEgnBWN%2Bbm5heAYHAQdkbWE3Zm9rfwEDBQNnaWF8ZCZgeh8dAEhnJmN%2BbmpjcwMDCQUrKg16YmNmeAEEBgRkaWV7K2tncgYDAgBgamF4YGoueQMdHAUrai56YmNiegoBAgxmJiIUZm9rfwEDBQNnaWF8YyZjfgsEAgdjbWJ4ZG1mNwABHBlmJmI3Zm9rewMIAAdvay47CGtncgYDAgBgamF4YGguegcJBQdkbmV7ZGlleU4CABl6ay57K2tncgIBCQVkYmM3JwVjfgsEAgdjbWJ4ZG1nNwMFCABkaWZ8Z2lhfAdMAwV6d2M3ZyZjfgsAAAxmaWp6KyoNegcJBQdkbmV7ZGlleU4BBA1jaWF%2FYGpheAUCTQZmd38%3D"
// }';
// $result = $api->get_profile($postdata);

// $postdata = '{
//     "batch_size": "500",
//     "data": {
//       "event_name": "calculator",
//       "from": 20200601,
//       "to": 20200623
//     }
//   }';
// $result = $api->get_event_cursor($postdata);

// $postdata= '{"cursor":"ZyZjfgsAAAxmaWp6Kz8NegcJBQdkbmt9Zm1kek4BBA1jaWF%2FbmxjfAQBTQQrai57K2oue04CAEhnd397K2tncgIBCQVkYmM3MgVjfgsEAgdjY2R6YG9lNwMFCABkaWZyYWtlfgVMAUhnJmI3ZyZiNwABTQR6d2I3Zm9rewMIAAdvay4uCGtncgYDAgBubGN8YWguegcJBQdkbmt9Zm1keU4ATQQrai57K2oueQNMARl6ai56YmNiegoBAgxmJjcUZm9rfwEDBQ1ha2V9ZyZjfgsEAgdjY2R6YGxiNwJMAUhnJmI3ZyZgek4AHBlnJmN%2BbmpjcwMDCQUrPw16YmNmeAEECAJmbWR6K2tncgYDAgBubGN8YWsue04ATQQrai57K2hjNwIdHAQra2dyZ2tqegEIAEgyBWN%2Bbm5heAYJBwVgbGM3Zm9rfwEDBQ1ha2V9ZiZiNwJMAUhnJmI3ZWsuex8dAUhmb2t7ZmJjeAoBTVEIa2dyY2lhfwsGAANhai56YmNmeAEECAJmbWR7K2oue04ATQQrai55ZiZiZh8ATQViY2J6b2thcwNMVGtmb2t%2FZGlmcgQBBgJnJmN%2Bbm5heAYJBwVgbGI3ZyZiNwJMAUhnJmB6K2p%2FZgJMAAFuamNzZmlqek5VbgViY2Z4ZG5rfQMHBwUra2dyY2lhfwsGAANhay57K2oue04ATQQraGM3Z3d%2Fe04BBA1na2p6ZGJjN1dvAAFubmF4Y2NkegUGA0hmb2t%2FZGlmcgQBBgJlJmI3ZyZiNwJMAUhlay57endiNwMFCARmYmN4b2suLm0BBA1jaWF%2FbmxjfAQCTQViY2Z4ZG5rfQMHBwYrai57K2oue04ATQZmJmJmemouegcJAQVva2FzZiY3FAMFCABkaWZyYWtlfQNMAAFubmF4Y2NkegUGAEhnJmI3ZyZiNwJMAwUran9mZyZjfgsAAAxmaWp6Kz8NegcJBQdkbmt9Zm1kf04BBA1jaWF%2FbmxjfAQETQQrai57K2oue04CAEhnd397K2tncgIBCQVkYmM3MgVjfgsEAgdjY2R6YGxmNwMFCABkaWZyYWtlfQZMAUhnJmI3ZyZiNwABTQR6d2I3Zm9rewMIAAdvay4uCGtncgYDAgBubGN8YWguegcJBQdkbmt9Zm1keU4ATQQrai57K2oueQNMARl6ai56YmNiegoBAgxmJjcUZm9rfwEDBQ1ha2V9ZSZjfgsEAgdjY2R6YGxgNwJMAUhnJmI3ZyZgek4AHBlnJmN%2BbmpjcwMDCQUrPw16YmNmeAEECAJmbWR7K2tncgYDAgBubGN8YWoue04ATQQrai57K2hjNwIdHAQra2dyZ2tqegEIAEgyBWN%2Bbm5heAYJBwVgbGA3Zm9rfwEDBQ1ha2V9ZSZiNwJMAUhnJmI3ZWsuex8dAUhmb2t7ZmJjeAoBTVEIa2dyY2lhfwsGAANhai56YmNmeAEECAJmbWR7K2oue04ATQQrai55ZiZiZh8ATQViY2J6b2thcwNMVGtmb2t%2FZGlmcgQBBgJkJmN%2Bbm5heAYJBwVgbGE3ZyZiNwJMAUhnJmB6K2p%2FZgJMAAFuamNzZmlqek5VbgViY2Z4ZG5rfQMHBwUra2dyY2lhfwsGAANhay57K2oue04ATQQraGM3Z3d%2Fe04BBA1na2p6ZGJjN1dvAAFubmF4Y2NkegUGBUhmb2t%2FZGlmcgQBBgJjJmI3ZyZiNwJMAUhlay57endiNwMFCARmYmN4b2suLm0BBA1jaWF%2FbmxjfAQBTQViY2Z4ZG5rfQMHBwUrai57K2oue04ATQZmJmJmeg%3D%3D"}';
// $result = $api->get_event($postdata);

$postdata = '{"identity":"1030677798"}';
$result = $api->download_profile($postdata);

// $postdata = '{"identity":"1030677798"}';
// $result = $api->delete_profile($postdata);

print_r($result);
