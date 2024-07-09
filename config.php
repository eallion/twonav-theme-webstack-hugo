<?php 
if($_GET['fn'] != 'home'){
    $url = preg_replace('/([?&])fn=[^&]*/', '$1fn=home', $_SERVER['REQUEST_URI']);
    header('Location: ' . $url);
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $theme;?> - 主题配置</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="referrer" content="same-origin">
  <link href="<?php echo $layui['css']; ?>" rel="stylesheet">
  <style>
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px
    }
    ::-webkit-scrollbar-track {
        background-color: transparent;
        -webkit-border-radius: 2em;
        -moz-border-radius: 2em;
        border-radius: 2em;
    }
    ::-webkit-scrollbar-thumb {
        background-color: #9c9da0;
        -webkit-border-radius: 2em;
        -moz-border-radius: 2em;
        border-radius: 2em
    }
    .layui-tab .layui-tab-title li {
        min-width: 40px;
    }
    .tabBody {
        margin: 40px 0 65px 0;
        padding: 20px 0 10px 0;
    }
    .tabBody > div { 
        display: none;
    }
    .layui-form-item {
        margin-bottom: 10px;
    }
  </style>
</head>
<body>
<div class="layui-layout layui-layout-admin">
  <form class="layui-form" lay-filter="form" style="margin-right: 8px;">
    <div class="layui-header" style="background-color: #ffffff;">
      <div class="layui-tab layui-tab-brief layui-btn-container" lay-filter="tabHeader" style="margin: 6px 0;">
        <ul class="layui-tab-title">
          <li class="layui-this">常规配置</li>
          <li>背景配置</li>
          <li>已废弃</li>
          <div class="layui-layer-setwin close_btn" style="top: 8px;"><span class="layui-icon layui-icon-close layui-layer-close layui-layer-close1"></span></div>
        </ul>
      </div>
    </div>

    <div class="tabBody">
      <div class="layui-tab layui-show" desc="常规">
        <div class="layui-form-item">
          <label class="layui-form-label">前台管理</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="admin">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">开启且已登录时可以在主页操作书签</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">拖拽排序</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="sort">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">需开启前台管理 (点击下方帮助获取使用说明)</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">悬停提示</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="hover_tip">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">鼠标悬停在链接卡片上的冒泡效果</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">QQ登录</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="qq_login">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">仅高级版支持,未登录时在主页显示QQ登录</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">站内搜索</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="search_bookmark">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">在搜索框输入关键字实时查找站内书签</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">聚合搜索</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="search-bg">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">顶部的搜索功能</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">搜索热词</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="suggestion">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">数据来源于百度</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">随处搜索</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="search-modal">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">右上角和右下角那个搜索</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">侧边导航</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="sidebar-nav">
              <option value="0">收起</option>
              <option value="1">展开</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">侧边导航栏的默认状态</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">随机一言</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="hitokoto">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">右上角那一句话</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">延迟加载</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="lazyload">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">延迟加载图标(建议开启)</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">分类隐藏</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="hide-category">
              <option value="0">关闭</option>
              <option value="1">自动</option>
              <option value="2">强制</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">分类tab标签是否隐藏一级分类</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">链接描述</label>
          <div class="layui-input-inline" style="width: 80px;">
            <select lay-verify="required" name="hide-description">
              <option value="0">显示</option>
              <option value="1">隐藏</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">是否显示链接描述</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">字体大小</label>
          <div class="layui-input-inline" style="width: 110px;">
            <select lay-verify="required" name="font-size">
              <option value="13">13</option>
              <option value="14">14(默认)</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">字体大小</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">夜间模式</label>
          <div class="layui-input-inline" style="width: 110px;">
            <select lay-verify="required" name="NightMode">
              <option value="0">默认白天</option>
              <option value="1">默认夜间</option>
              <option value="2">自动模式</option>
              <option value="3">强制白天</option>
              <option value="4">强制夜间</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">仅默认状态,前端手动切换时优先</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">加载动画</label>
          <div class="layui-input-inline" style="width: 110px;">
            <select lay-verify="required" name="loading">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">是否显示加载中的动画</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">页内标题</label>
          <div class="layui-input-block">
            <input type="text" name="big-title" placeholder="搜索框上方的标题" autocomplete="off" class="layui-input" lay-affix="clear">
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">广告/公告</label>
          <div class="layui-input-block">
            <textarea name="carousel" rows="2" placeholder="详情见帮助" class="layui-textarea"></textarea>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">header代码</label>
          <div class="layui-input-block">
            <textarea name="header_code" rows="2" placeholder="自定义代码" class="layui-textarea"></textarea>
          </div>
        </div>

      </div>


      <div class="layui-tab" desc="背景">

        <div class="layui-form-item">
          <label class="layui-form-label">背景色</label>
          <div class="layui-input-inline" style="width: 110px;">
            <select lay-verify="required" name="bg">
              <option value="not">白色</option>
              <option value="white-bg">白格子</option>
              <option value="grid-bg">灰格子</option>
              <option value="polkadot-bg">小圆点</option>
              <option value="mosaic-bg">马赛克</option>
              <option value="brickwall-bg">砖墙</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">背景色</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">炫彩横幅</label>
          <div class="layui-input-block">
            <input type="text" name="canvas-bg" placeholder="详情见帮助,范围1-17或#表示随机或1,3,5随机写法" autocomplete="off" class="layui-input" lay-affix="clear">
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">白天背景</label>
          <div class="layui-input-block">
            <input type="text" name="bg_img" placeholder="详情见帮助" autocomplete="off" class="layui-input" style="padding-left: 65px;" lay-affix="clear">
            <i class="layui-icon layui-icon-upload-drag layui-btn layui-btn-primary" style="position: absolute; top:0px;" title="上传"></i>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">夜间背景</label>
          <div class="layui-input-block">
            <input type="text" name="bg_img_night" placeholder="详情见帮助" autocomplete="off" class="layui-input" style="padding-left: 65px;" lay-affix="clear">
            <i class="layui-icon layui-icon-upload-drag layui-btn layui-btn-primary" style="position: absolute; top:0px;" title="上传"></i>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">白天横幅</label>
          <div class="layui-input-block">
            <input type="text" name="light_bg" placeholder="详情见帮助,留空则透明" autocomplete="off" class="layui-input" style="padding-left: 65px;" lay-affix="clear">
            <i class="layui-icon layui-icon-upload-drag layui-btn layui-btn-primary" style="position: absolute; top:0px;" title="上传"></i>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">夜间横幅</label>
          <div class="layui-input-block">
            <input type="text" name="night_bg" placeholder="详情见帮助,留空则黑色背景" autocomplete="off" class="layui-input" style="padding-left: 65px;" lay-affix="clear">
            <i class="layui-icon layui-icon-upload-drag layui-btn layui-btn-primary" style="position: absolute; top:0px;" title="上传"></i>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">Logo白天</label>
          <div class="layui-input-block">
            <input type="text" name="logo_light" placeholder="白天展开侧边栏的Logo" autocomplete="off" class="layui-input" style="padding-left: 65px;" lay-affix="clear">
            <i class="layui-icon layui-icon-upload-drag layui-btn layui-btn-primary" style="position: absolute; top:0px;" title="上传"></i>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">Logo夜间</label>
          <div class="layui-input-block">
            <input type="text" name="logo_dark" placeholder="夜间展开侧边栏的Logo" autocomplete="off" class="layui-input" style="padding-left: 65px;" lay-affix="clear">
            <i class="layui-icon layui-icon-upload-drag layui-btn layui-btn-primary" style="position: absolute; top:0px;" title="上传"></i>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">Logo收起</label>
          <div class="layui-input-block">
            <input type="text" name="logo_collapsed" placeholder="白天和夜间收起侧边栏的Logo" autocomplete="off" class="layui-input" style="padding-left: 65px;" lay-affix="clear">
            <i class="layui-icon layui-icon-upload-drag layui-btn layui-btn-primary" style="position: absolute; top:0px;" title="上传"></i>
          </div>
        </div>

      </div>

      <div class="layui-tab" desc="废弃">
        <div class="layui-form-item">
          <label class="layui-form-label" style="color: red;font-size: 1.2em;">温馨提示</label>
          <div class="layui-form-mid layui-word-aux" style="color: red !important;font-size: 1.2em;">本页配置功能已由系统接管,保留在此是方便大家迁移配置,后续会移除</div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">顶部链接</label>
          <div class="layui-input-block">
            <textarea name="navbar-link" rows="2" placeholder="详情见帮助" class="layui-textarea"></textarea>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">友情链接</label>
          <div class="layui-input-block">
            <textarea name="friend-link" rows="2" placeholder="详情见帮助" class="layui-textarea"></textarea>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">文章分类</label>
          <div class="layui-input-block">
            <input type="text" name="wzid" placeholder="输入文章分类的ID,多个请用英文状态的,间隔" autocomplete="off" class="layui-input">
          </div>
        </div>
        
        <div class="layui-form-item">
          <label class="layui-form-label">今日热榜</label>
          <div class="layui-input-inline" style="width: 110px;">
            <select lay-verify="required" name="lytoday">
              <option value="0">关闭</option>
              <option value="1">开启</option>
            </select>
          </div>
          <div class="layui-form-mid layui-word-aux">由六零导航页提供服务 <a href="https://doc.lylme.com/spage/#/lytoday-js" target="_blank">查看文档</a>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">热榜参数</label>
          <div class="layui-input-block">
            <input type="text" name="lytoday_parameter" placeholder="例如: day=none&hot=baidu,weibo,douyin,zhihu 可留空" autocomplete="off" class="layui-input" lay-affix="clear">
          </div>
        </div>
        
        <div class="layui-form-item">
          <label class="layui-form-label">废弃说明</label>
          <div class="layui-input-block">
            <textarea  rows="2" class="layui-textarea">热榜功能已集成到扩展功能>热点新闻,配置更加灵活自由且无请求次数限制,请前往手动开启</textarea>
          </div>
        </div>
        
      </div>

    </div>

    <div class="layui-footer" style="left: 0;padding: 10px;z-index: 1000;background-color: rgb(255 255 255);">
      <a class="layui-btn layui-btn-primary layui-border-black close_btn">关闭</a>
      <a class="layui-btn layui-btn-primary layui-border-black" id="help">帮助</a>
      <button class="layui-btn" lay-submit lay-filter="save" id="save">保存</button>
      <span class="layui-hide-xs" style="margin-left: 20px;" title="CTRL + S 也可以保存, ESC 也可以关闭">Alt + S 可快速保存设置 Alt + C 关闭配置页面</span>
    </div>
  </form>
</div>

<script src="<?php echo $layui['js']; ?>"></script>
<script src="./templates/admin/js/public.js?v=<?php echo $Ver;?>"></script>
<script>
const u = _GET('u');
const fn = _GET('fn');
const t = _GET('theme');

layui.use( function(){
    var element = layui.element;
    var form = layui.form;
    var upload = layui.upload;
    var $ = layui.$;
    
    //表单赋值
    form.val('form', <?php echo json_encode($theme_config);?>);
    
    //获取焦点
    $('#save').focus();
    
    //tab切换事件
    element.on('tab(tabHeader)', function(data){
        $('.tabBody .layui-tab').removeClass('layui-show').eq(data.index).addClass('layui-show');
    });
    
    //保存
    form.on('submit(save)', function(data){
        $.post(get_api('write_theme','config') + `&t=${t}&template_type=${fn}`,data.field,function(data,status){
            if(data.code == 1) {
                layer.msg(data.msg, {icon: 1,time: 500,end: function() {if(_GET('source') != 'admin'){parent.location.reload();}}});
            }else{
                layer.msg(data.msg, {icon: 5});
            }
        });
        return false; 
    });
    
    //上传图片
    upload.render({
        elem: '.layui-icon-upload-drag',
        url: get_api('write_upload_img','user'),
        exts: 'jpg|jpeg|png|bmp|gif|ico|svg|webp', 
        acceptMime:  'image/*',
        size: 10240,
        done: function(res, index, upload){
            if(res.code == '1'){
                $(this.item).closest('.layui-form-item').find('input[type="text"]').val(res.url);
                layer.msg('上传成功');
            }else{
                layer.msg('上传失败,' + res.msg, {icon: 5});
            }
        }
    });
    
    //关闭
    $('.close_btn').on('click', function(){
        parent.layer.close(parent.layer.getFrameIndex(window.name));
        return false; 
    });
    
    //帮助
    $('#help').on('click', function(){
        window.open("https://gitee.com/tznb/TwoNav/wikis/pages?sort_id=7976690&doc_id=3767990");
        return false; 
    });
    
    //按键事件
    $(document).keydown(function(event) {
        if ((event.keyCode == 83 && event.ctrlKey) || (event.keyCode == 83 && event.altKey)) { 
            event.preventDefault();
            $('#save').click();
        }
        if (event.which == 27 || (event.keyCode == 67 && event.altKey)) {
            $('.close_btn').click();
        }
    });
});
</script>
</body>
</html>