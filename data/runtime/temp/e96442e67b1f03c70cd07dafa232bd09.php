<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:33:"./template/pc/lists_guestbook.htm";i:1757218433;s:69:"D:\phpstudy_pro\WWW\www.31744.minghaitrade.com\template\pc\header.htm";i:1757166722;s:69:"D:\phpstudy_pro\WWW\www.31744.minghaitrade.com\template\pc\footer.htm";i:1757135763;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_ico"); echo $__VALUE__; ?>" rel="shortcut icon" type="image/x-icon" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/common.css","","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/nystyle.css","","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/swiper.min.css","","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery-3.7.0.min.js","","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper.min.js","","","","",""); echo $__VALUE__; ?>
</head>
<body style="background-color:#f9f9f9;">
<div <?php if(\think\Request::instance()->param('m') == 'Index'): ?> class="webtop" <?php else: ?>class="webtop neitop"<?php endif; ?>>
  <div class="webtop_main">
    <div class="web_logo"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?>"/></a> </div>
    <div class="websearch"> <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","","","default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <form action="<?php echo $field['action']; ?>" method="post" onsubmit="return checkFrom(this);">
        <div class="scipt">
          <input type="text" name="keywords" placeholder="请输入您关键词..."/>
        </div>
        <div class="scbtn">
          <button type="submit"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ss.png"/> </i> </button>
        </div>
        <div class="clear"></div>
        <?php echo $field['hidden']; ?>
      </form>
      <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> <a href="javascript:;" class="close"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/gb.png"/> </a> </div>
    <div class="websearch_btn"> <a href="javascript:;"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ss.png"/> </i> </a> </div>
    <div class="web_nav">
      <div class="nav_menu">
        <p> <span></span> <span></span> <span></span> </p>
      </div>
      <div class="nav_list">
        <ul>
          <li <?php if(\think\Request::instance()->param('m') == 'Index'): ?> class="active" <?php endif; ?>><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys1";}'); echo $__VALUE__; ?></a></li>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_modelid) && !empty($ui_modelid)) : $modelid = $ui_modelid; else: $modelid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", "", $modelid); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a> <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?> <i></i>
            <ul>
              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_modelid) && !empty($ui_modelid)) : $modelid = $ui_modelid; else: $modelid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
              <li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></li>
              <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
            </ul>
            <?php endif; ?> </li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
          <li class="<?php echo $field['currentstyle']; ?>">
            <?php  $tagLanguage = new \think\template\taglib\eyou\TagLanguage; $_result = $tagLanguage->getLanguage("default", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <a href="<?php echo $field['url']; ?>"><img src="<?php echo $field['logo']; ?>" alt="<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
          </li>
        </ul>
        <div class="nav_mask"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<script type="text/javascript">
    $('.nav_mask').click(function () {
      $('.nav_list').removeClass('open')
    })
    $('.nav_menu,.nav_list').click(function (e) {
      e.stopPropagation()
    })
    $('.web_nav').find('.nav_menu').click(function (e) {
      $('.nav_list').toggleClass('open')
    })
    $(function () {
      $(".nav_list ul li i").click(function () {
        var b = false;
        if ($(this).attr("class") == "cur") {
          b = true;
        }
        $(".nav_list ul li ul").prev("i").removeClass("cur");
        $(".nav_list>ul>li").children("ul").slideUp("fast");
        if (!b) {
          $(this).addClass("cur");
          $(this).siblings("ul").slideDown("fast");
        }
      })
    });
  </script>
<div class="ey_banner"> <img src="<?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv("2", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 1, true) : $_result->slice(0, 1, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentclass"] = $field["currentstyle"] = ""; else:  $field["currentclass"] = $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?><?php echo $field['litpic']; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>" class="ba_img"/>
  <div class="ba_con">
    <p><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></p>
    <i></i><span><?php echo gettoptype($eyou['field']['typeid'],'englist_name'); ?></span></div>
</div>
<div class="ey_crumb"> <i></i>
  <div class="ey_crumb_main">
    <ul>
      <li class="ey_active"><a href="<?php echo $eyou['field']['typeurl']; ?>"><?php echo $eyou['field']['typename']; ?></a></li>
      <div class="clear"></div>
    </ul>
    <p><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/crumb.png" class="crumb"/>当前位置： <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?></p>
    <div class="clear"></div>
  </div>
</div>
<div class="ey_order">
  <div class="ey_order_main">
    <div class="ey_order_left">
      <div class="ey_order_img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/kfimg.jpg"/></div>
      <!-- <p>欢迎您来到我们的<br/>
        在线留言板块！</p> -->
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_17"); echo $__VALUE__; ?></p>
      <span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_19"); echo $__VALUE__; ?></span>
      <div class="ey_order_btn"><?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "7"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><a href="<?php echo $field['typeurl']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ico06.png"/><?php echo $field['typename']; ?></a><?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?></div>
    </div>
    <div class="ey_order_right">
      <div class="web_msg" id="web_msg"> <?php  $typeid = "0"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", "", 0); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <form method="POST" action="<?php echo $field['action']; ?>" <?php echo $field['formhidden']; ?> onsubmit="<?php echo $field['submit']; ?>">
          <h3>留言框 </h3>
          <ul>
            <li>
              <h4 class="xh"><?php echo $field['itemname_1']; ?>：</h4>
              <div class="msg_ipt1">
                <input class="textborder" size="30" type='text' id='attr_1' name='<?php echo $field['attr_1']; ?>' placeholder="<?php echo $field['itemname_1']; ?>" />
              </div>
            </li>
            <li>
              <h4><?php echo $field['itemname_3']; ?>：</h4>
              <div class="msg_ipt12">
                <input class="textborder" size="42" type='text' id='attr_3' name='<?php echo $field['attr_3']; ?>' placeholder="<?php echo $field['itemname_3']; ?>" />
              </div>
            </li>
            <li>
              <h4 class="xh"><?php echo $field['itemname_4']; ?>：</h4>
              <div class="msg_ipt1">
                <input class="textborder" size="16" type='text' id='attr_4' name='<?php echo $field['attr_4']; ?>' placeholder="<?php echo $field['itemname_4']; ?>"/>
              </div>
            </li>
            <li>
              <h4 class="xh"><?php echo $field['itemname_5']; ?>：</h4>
              <div class="msg_ipt1">
                <input class="textborder" size="30" type='text' id='attr_5' name='<?php echo $field['attr_5']; ?>' placeholder="<?php echo $field['itemname_5']; ?>"/>
              </div>
            </li>
            <li>
              <h4><?php echo $field['itemname_6']; ?>：</h4>
              <div class="msg_ipt12">
                <input class="textborder" size="30" type='text' id='attr_6' name='<?php echo $field['attr_6']; ?>' placeholder="<?php echo $field['itemname_6']; ?>"/>
              </div>
            </li>
            <li>
              <h4><?php echo $field['itemname_8']; ?>：</h4>




              <div id="language_val" data-language="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:8:"language";}'); echo $__VALUE__; ?>"></div>

              <div class="msg_ipt12" id="vity_list">
                <select class="msg_option" <?php echo $field['first_id_8']; ?>>
                            <option value=''>请选择您所在的省份223</option>
                            <?php if(is_array($field['options_8']) || $field['options_8'] instanceof \think\Collection || $field['options_8'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['options_8'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                            <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                  <?php echo $field['hidden_8']; ?>
                </select>
              </div>

            </li>
            <li>
              <h4><?php echo $field['itemname_7']; ?>：</h4>
              <div class="msg_ipt12">
                <input class="textborder" size="50" type='text' id='attr_7' name='<?php echo $field['attr_7']; ?>' placeholder="请输入您的<?php echo $field['itemname_7']; ?>"/>
              </div>
            </li>
            <li>
              <h4><?php echo $field['itemname_2']; ?>：</h4>
              <div class="msg_ipt12 msg_ipt0">
                <textarea class="areatext" style="width:100%;" id='attr_2' name='<?php echo $field['attr_2']; ?>' rows="8" cols="65" placeholder="请输入您的任何要求、意见或建议"></textarea>
              </div>
            </li>
            <li>
              <h4></h4>
              <div class="msg_btn">
                <input type="submit" value="提 交" name="submit"  class="msg_btn1"/>
                <input type="reset" value="重 填" name="reset"/>
              </div>
            </li>
          </ul>
          <?php echo $field['hidden']; ?>
        </form>
        <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="webfoot wow fadeInUp">
  <div class="webfoot_lxfs w1400">
    <ul>
      <li> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/em.png"/> </i>
        <p> <em><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_3"); echo $__VALUE__; ?>：</em> <span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?></span> </p>
      </li>
      <li> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/tel.png"/> </i>
        <p> <em><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_1"); echo $__VALUE__; ?>：</em> <span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></span> </p>
      </li>
      <li> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/add.png"/> </i>
        <p> <em><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_2"); echo $__VALUE__; ?>：</em> <span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span> </p>
      </li>
    </ul>
  </div>
  <div class="webfoot_main w1400">
    <div class="webfoot_left">
      <div class="webfoot_logo"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?>"/></a> </div>
      <div class="webfoot_copy">
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?><br>
          备案号：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></p>
        <p><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>/sitemap.xml" target="_blank">SiteMap</a></p>
      </div>
    </div>
    <div class="webfoot_nav">
      <ul>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_modelid) && !empty($ui_modelid)) : $modelid = $ui_modelid; else: $modelid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "", "", $modelid); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li>
          <p><?php echo $field['typename']; ?></p>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_modelid) && !empty($ui_modelid)) : $modelid = $ui_modelid; else: $modelid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,6, true) : $field['children']->slice(0,6, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="<?php echo $field2['typeurl']; ?>"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/xydh.png"/> </i> <?php echo $field2['typename']; ?> </a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?> </li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      </ul>
    </div>
    <div class="webfoot_ewm">
      <p><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>" width="130px" height="130px"/></p>
      <span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attrname_4"); echo $__VALUE__; ?></span> </div>
    <div class="clear"></div>
  </div>
</div>
<div class="webview">
  <div class="webview_ewm"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ewm.png"/> </i> <span>关注</span>
    <p><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>"></p>
  </div>
  <div class="webview_tel"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/zj.png"/> </i> <span>联系</span>
    <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></p>
  </div>
  <div class="webview_tel mobile_tel"> <a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/tzj.png"/> </i> <span>联系</span> </a> </div>
  <div class="webview_top"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/top.png"/> </i> <span>顶部</span> </div>
</div>
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","","","",""); echo $__VALUE__; if(\think\Request::instance()->param('m') == 'Index'): ?>
<div class="weblinks">
  <div class="weblinks_main w1400">
    <div class="weblinks_title"> <i> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/yl.png"/> </i>友情链接： </div>
    <div class="weblinks_list"> <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("text", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 45, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="<?php echo $field['url']; ?>" <?php echo $field['target']; ?>><?php echo $field['title']; ?></a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
  </div>
</div>
<?php else: endif; ?>
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end --> 

</body>
</html>

<script type="text/javascript">
  $(function () {

    var languageVal = $('#language_val').attr('data-language')
console.log(languageVal)

      if(languageVal === 'English'){
        document.getElementById("vity_list").style.display = "none";
      }
      
  });
</script>