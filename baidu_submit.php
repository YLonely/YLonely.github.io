if(!function_exists('Baidu_Submit') &amp;&amp; function_exists('curl_init')) {
 
function Baidu_Submit($post_ID) {
 
$WEB_SITE='www.ylonelyhub.com'; //这里换成你的首选域名
 
$WEB_TOKEN='Xwow9V0XVgYCVAza'; //这里换成你的网站的百度主动推送的token值
 
//已成功推送的文章不再推送
 
if(get_post_meta($post_ID,'Baidusubmit',true) == 1) return;
 
$url = get_permalink($post_ID);
 
$api = 'http://data.zz.baidu.com/urls?site='.$WEB_SITE.'&amp;token='.$WEB_TOKEN;
 
$ch = curl_init();
 
$options = array(
 
CURLOPT_URL =&gt; $api,
 
CURLOPT_POST =&gt; true,
 
CURLOPT_RETURNTRANSFER =&gt; true,
 
CURLOPT_POSTFIELDS =&gt; $url,
 
CURLOPT_HTTPHEADER =&gt; array('Content-Type: text/plain'),
 
);
 
curl_setopt_array($ch, $options);
 
$result = json_decode(curl_exec($ch),true);
 
//如果推送成功则在文章新增自定义栏目Baidusubmit，值为1
 
if (array_key_exists('success',$result)) {
 
add_post_meta($post_ID, 'Baidusubmit', 1, true);
 
}
 
}
 
add_action('publish_post', 'Baidu_Submit', 0);
 }