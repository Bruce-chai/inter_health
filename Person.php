<?php

namespace app\admin\controller;

use think\Log;
use app\admin\model\TPiPerson;

class Person extends Base
{
    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return array
     */
    public function save(TPiPerson $TPiPerson)
    {
        $url = $this->baseHost . 'Person/users';
        $data = create_curl($url);
        return $data;
    }
}
