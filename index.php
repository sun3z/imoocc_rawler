<?php 
use App\Crawler;

require __DIR__ . '/vendor/autoload.php';

new Crawler();


// $str = '[{"title":"PHP\u5f00\u53d1APP\u63a5\u53e3","learn":"\u5df2\u5b6648%","time":"\u7528\u65f6 4\u5c0f\u65f655\u5206"},{"title":"\u73a9\u8f6cBootstrap\uff08\u57fa\u7840\uff09","learn":"\u5df2\u5b662%","time":"\u7528\u65f613\u5206"},{"title":"\u524d\u7aef\u5f00\u53d1\u5de5\u5177\u6280\u5de7\u4ecb\u7ecd\u2014Sublime\u7bc7","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"JSON\u5e94\u7528\u573a\u666f\u4e0e\u5b9e\u6218","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"\u5206\u9875\u9875\u7801\u5236\u4f5c","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"PHP+MySQL\u5206\u9875\u539f\u7406\u5b9e\u73b0","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"MVC\u67b6\u6784\u6a21\u5f0f\u5206\u6790\u4e0e\u8bbe\u8ba1","learn":"\u5df2\u5b6668%","time":"\u7528\u65f617\u5c0f\u65f6 2\u5206"},{"title":"PHP\u4e0eMySQL\u5173\u7cfb\u5927\u63ed\u79d8","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"Android\u653b\u57ce\u72ee\u7684\u7b2c\u4e00\u95e8\u8bfe\uff08\u5165\u95e8\u7bc7\uff09","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"\u5b66\u5199\u4e00\u4e2a\u5b57","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"\u6570\u636e\u5e93\u8bbe\u8ba1\u90a3\u4e9b\u4e8b","learn":"\u5df2\u5b6640%","time":"\u7528\u65f630\u5206"},{"title":"\u5982\u4f55\u7528CSS\u8fdb\u884c\u7f51\u9875\u5e03\u5c40","learn":"\u5df2\u5b6642%","time":"\u7528\u65f617\u5206"},{"title":"\u9b3c\u65a7\u795e\u5de5\u4e4b\u6b63\u5219\u8868\u8fbe\u5f0f","learn":"\u5df2\u5b6611%","time":"\u7528\u65f615\u5206"},{"title":"PHP\u8fdb\u9636\u7bc7","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"\u90a3\u4e9b\u5e74\u4f60\u9047\u5230\u7684\u9519\u8bef\u4e0e\u5f02\u5e38","learn":"\u5df2\u5b6675%","time":"\u7528\u65f619\u5c0f\u65f6 6\u5206"},{"title":"Java\u5165\u95e8\u7b2c\u4e8c\u5b63","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"\u89c2\u5bdf\u8005\u6a21\u5f0f","learn":"\u5df2\u5b6613%","time":"\u7528\u65f6 2\u5c0f\u65f649\u5206"},{"title":"\u9ad8\u6027\u80fd\u7684PHP\u65e5\u5fd7\u7cfb\u7edf\u2014SeasLog","learn":"\u5df2\u5b6638%","time":"\u7528\u65f6 4\u5206"},{"title":"\u5927\u8bddPHP\u8bbe\u8ba1\u6a21\u5f0f","learn":"\u5df2\u5b6619%","time":"\u7528\u65f6 1\u5c0f\u65f629\u5206"},{"title":"mongoDB\u5165\u95e8\u7bc7","learn":"\u5df2\u5b6617%","time":"\u7528\u65f618\u5206"},{"title":"PHP\u4e2d\u7684\u6570\u636e\u4f20\u8f93\u795e\u5668cURL","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 6\u5c0f\u65f632\u5206"},{"title":"\u4ece\u96f6\u5f00\u59cb\u6253\u9020\u81ea\u5df1\u7684PHP\u6846\u67b6","learn":"\u5df2\u5b6630%","time":"\u7528\u65f694\u5c0f\u65f653\u5206"},{"title":"AngularJS\u5b9e\u6218","learn":"\u5df2\u5b6611%","time":"\u7528\u65f623\u5206"},{"title":"PDO\u2014\u6570\u636e\u5e93\u62bd\u8c61\u5c42","learn":"\u5df2\u5b6629%","time":"\u7528\u65f621\u5c0f\u65f634\u5206"},{"title":"\u8fd1\u8ddd\u79bb\u63a2\u7d22memcache\u7f13\u5b58","learn":"\u5df2\u5b6619%","time":"\u7528\u65f6 3\u5c0f\u65f6 3\u5206"},{"title":"JavaScript\u5165\u95e8\u7bc7","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"\u963f\u5f53\u5927\u8bdd\u897f\u6e38\u4e4bWEB\u7ec4\u4ef6","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"PHP\u5b9e\u73b0\u9875\u9762\u9759\u6001\u5316","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 1\u5206"},{"title":"\u7248\u672c\u7ba1\u7406\u5de5\u5177\u4ecb\u7ecd\u2014Git\u7bc7","learn":"\u5df2\u5b6612%","time":"\u7528\u65f6 9\u5206"},{"title":"\u624b\u628a\u624b\u6559\u4f60\u5b9e\u73b0\u7535\u5546\u7f51\u7ad9\u540e\u53f0\u5f00\u53d1","learn":"\u5df2\u5b663%","time":"\u7528\u65f610\u5206"},{"title":"\u624b\u628a\u624b\u6559\u4f60\u5b9e\u73b0\u7535\u5546\u7f51\u7ad9\u5f00\u53d1","learn":"\u5df2\u5b665%","time":"\u7528\u65f6 5\u5206"},{"title":"Linux\u8fbe\u4eba\u517b\u6210\u8ba1\u5212 I","learn":"\u5df2\u5b6628%","time":"\u7528\u65f6 8\u5c0f\u65f644\u5206"},{"title":"Linux\u8f6f\u4ef6\u5b89\u88c5\u7ba1\u7406","learn":"\u5df2\u5b660%","time":"\u7528\u65f6 0\u5206"},{"title":"\u5728Ubuntu Server\u4e0b\u642d\u5efaLAMP\u73af\u5883","learn":"\u5df2\u5b6630%","time":"\u7528\u65f6 1\u5c0f\u65f625\u5206"}]';

// $arr = json_decode($str, true);

// // var_dump($arr);

// // var_dump(end($arr));
// // echo '<br>';
// // var_dump($arr);

// // var_dump(in_array(end($arr), $tmp = array_pop($arr), true));
// // var_dump($tmp);

// $end = array_pop($arr);

// var_dump(in_array($end, $arr, true));

// var_dump(array_push($arr, $end));

// var_dump($arr);





