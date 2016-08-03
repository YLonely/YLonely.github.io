<?php
$urls = array(
    'http://ylonelyhub.com/',
    'http://ylonelyhub.com/2016/08/03/%E6%AD%A3%E5%88%99%E5%BC%95%E6%93%8E%E5%85%A5%E9%97%A8%E2%80%94%E2%80%94%E5%9F%BA%E4%BA%8E%E8%99%9A%E6%8B%9F%E6%9C%BA%E7%9A%84%E6%AD%A3%E5%88%99%E5%8C%B9%E9%85%8D(%E4%BA%8C)/',
    'http://ylonelyhub.com/2016/07/31/%E6%AD%A3%E5%88%99%E5%BC%95%E6%93%8E%E5%85%A5%E9%97%A8%E2%80%94%E2%80%94%E5%9F%BA%E4%BA%8E%E8%99%9A%E6%8B%9F%E6%9C%BA%E7%9A%84%E6%AD%A3%E5%88%99%E5%8C%B9%E9%85%8D(%E4%B8%80)/',
    'http://ylonelyhub.com/2016/07/28/%E6%AD%A3%E5%88%99%E5%BC%95%E6%93%8E%E5%85%A5%E9%97%A8%E2%80%94%E2%80%94%E6%AD%A3%E5%88%99%E6%96%87%E6%B3%95%E5%8C%B9%E9%85%8D%E5%8F%AF%E4%BB%A5%E7%AE%80%E5%8D%95%E5%BF%AB%E6%8D%B7(%E5%9B%9B)/',
    'http://ylonelyhub.com/2016/07/26/%E6%AD%A3%E5%88%99%E5%BC%95%E6%93%8E%E5%85%A5%E9%97%A8%E2%80%94%E2%80%94%E6%AD%A3%E5%88%99%E6%96%87%E6%B3%95%E5%8C%B9%E9%85%8D%E5%8F%AF%E4%BB%A5%E7%AE%80%E5%8D%95%E5%BF%AB%E6%8D%B7(%E4%B8%89)/',
    'http://ylonelyhub.com/2016/07/22/%E6%AD%A3%E5%88%99%E5%BC%95%E6%93%8E%E5%85%A5%E9%97%A8%E2%80%94%E2%80%94%E6%AD%A3%E5%88%99%E6%96%87%E6%B3%95%E5%8C%B9%E9%85%8D%E5%8F%AF%E4%BB%A5%E7%AE%80%E5%8D%95%E5%BF%AB%E6%8D%B7(%E4%B8%80)/',
    'http://ylonelyhub.com/2016/07/22/%E6%AD%A3%E5%88%99%E5%BC%95%E6%93%8E%E5%85%A5%E9%97%A8%E2%80%94%E2%80%94%E6%AD%A3%E5%88%99%E6%96%87%E6%B3%95%E5%8C%B9%E9%85%8D%E5%8F%AF%E4%BB%A5%E7%AE%80%E5%8D%95%E5%BF%AB%E6%8D%B7(%E4%BA%8C)/',
);
$api = 'http://data.zz.baidu.com/urls?site=www.ylonelyhub.com&token=Xwow9V0XVgYCVAza';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>