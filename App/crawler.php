<?php 
namespace App;

use QL\QueryList;

class Crawler
{   
    // 用户信息
    protected $infoRules = [
        'name'      =>  ['.user-name span', 'text'],
        'learn'     =>  ['.u-info-learn em', 'text'],
        'sex'       =>  ['.sexSecret', 'title'],
        'credit'    =>  ['.u-info-credit em', 'text'],
        'mp'        =>  ['.u-info-mp em', 'text'],
        'desc'      =>  ['.user-desc', 'text'],
        'follows'   =>  ['.follows a em', 'text'],
        'fans'      =>  ['.followers a em', 'text'],
    ];

    // 用户课程
    protected $coursesRules = [
        'title'     =>  ['.study-hd a', 'text'],
        'learn'     =>  ['.study-points .i-left', 'text'],
        'time'      =>  ['.study-points .i-mid', 'text'],
    ];

    /**
     * 构造方法
     */
    public function __construct()
    {
        // var_dump($this->crawlerInfo(2469898));
        // var_dump($this->crawlerCourses(2222045));
        

        var_dump($this->crawlerOne(2469898));
    }

    /**
     * 抓取一个用户的信息
     * @param  integer $userid
     * @return array
     */
    public function crawlerOne($userid)
    {
        $data = $this->crawlerInfo($userid);
        // 处理
        $data['courses'] = $this->crawlerCourses($userid);

        return $this->handle($data);

    }

    /**
     * [handle description]
     * @return [type] [description]
     */
    public function handle($data)
    {   
        // 处理学习时长
        $learn = rtrim($data['learn'], '分');
        if(strpos($learn, '小时') !== false) {
            $data['learn'] = floatval(str_replace('小时 ', '.', $learn));
        } else {
            $data['learn'] = floatval('0.' . $learn);
        }

        // 处理课程数组
        $data['courses'] = array_map(function ($list) {

            // 处理learn
            $list['learn'] = intval(trim($list['learn'], '已学%'));

            // 处理time
            $time = trim($list['time'], '用时 ');
            $time = rtrim($time, '分');
            if(strpos($time, '小时') !== false) {
                $time = str_replace('小时', '.', $time);
            } else {
                $time = '0.' . $time;
            }
            $list['time'] = floatval(str_replace(' ', '', $time));

            return $list;

        }, $data['courses']);

        return $data;
    }

    /**
     * 获取要抓去的URL
     * @param  integer  $userid
     * @param  integer  $page
     * @return string   $url
     */
    private function getUserURL($userid, $page = 1)
    {
        $url = "http://www.imooc.com/u/{$userid}/courses";
        if($page != 1) {
            $url .= "?page={$page}";
        }
        return $url;
    }

    /**
     * 抓取用户的基本信息
     * @param  integer $userid
     * @return string  $url
     */
    private function crawlerInfo($userid)
    {
        return QueryList::Query($this->getUserURL($userid), $this->infoRules)->data[0];
    }

    /**
     * 抓取用户的课程信息
     * @param  integer $url 
     * @param  integer $page
     * @return integer $course
     *      
     * @todo 用户的课程数量刚好是20的倍数问题还没解决
     */
    private function crawlerCourses($userid, $page = 1)
    {   
        $courses = QueryList::Query($this->getUserURL($userid, $page), $this->coursesRules, '.my-space-course .tl-item .course-one')->data;
        if(count($courses) % 20 == 0) {
            if($page>5) {
                return $courses;
            }
            $courses = array_merge($courses, $this->crawlerCourses($userid, ++$page));
        }
        return $courses;
    }
} 

