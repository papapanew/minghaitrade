<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海口快推科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

namespace app\api\controller;

use think\Db;
use app\api\logic\DdosApiLogic;

class Security extends Base
{
    public $ddosApiLogic;

    /*
     * 初始化操作
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->ddosApiLogic = new DdosApiLogic;
    }

    /**
     * 自动定期扫描
     * @return [type] [description]
     */
    public function ddos_auto_scan()
    {
        $redata = $this->ddosApiLogic->ddos_auto_scan();
        exit($redata['msg']);
    }
}