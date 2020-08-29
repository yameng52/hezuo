<!-- <div class="side-nav-panel-right">
    <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
        <li class="profil">
            <img src="/static/img/profile.jpg" alt="">
            <h2>John Doe</h2>
        </li>
        <li><a href="setting.html"><i class="fa fa-cog"></i>Settings</a></li>
        <li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
        <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
        <li><a href="{{url('index/login')}}"><i class="fa fa-sign-in"></i>Login</a></li>
        <li><a href="{{url('index/reg')}}"><i class="fa fa-user-plus"></i>Register</a></li>
        <li><a href="{{url('index/order')}}"><i class="fa fa-envelope-o"></i>我的订单</a></li>
        <li><a href="{{url('index/collect')}}"><i class="fa fa-sign-in"></i>我的收藏</a></li>
        <li><a href="{{url('index/desc')}}"><i class="fa fa-user-plus"></i>我的评论</a></li>
    </ul>
</div> -->
<div class="side-nav-panel-right">
        <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
            <li class="profil">
                <img src="img/profile.jpg" alt="">
            </li>   

            @if($_SERVER['uid'])
                <h4>欢迎<b style="color:orange">{{$_SERVER['name']}}</b>登录</h4>
                <li><a href="{{url('index/order')}}"><i class="fa fa-envelope-o"></i>我的订单</a></li>
                <li><a href="{{url('index/collect')}}"><i class="fa fa-sign-in"></i>我的收藏</a></li>
                <li><a href="{{url('index/desc')}}"><i class="fa fa-user-plus"></i>我的评论</a></li>
            @else
                <h4><a href="http://passport.1910.com/web/login?redirect={{$_SERVER['current_url']}}">请登录</a></h4>
            @endif
            
            @if($_SERVER['uid'])
                <li><a href="/index/quit"><i class="fa fa-sign-in"></i>退出</a></li>
            @else
                <li><a href="http://passport.1910.com/web/login?redirect={{$_SERVER['current_url']}}"><i class="fa fa-sign-in"></i>登录</a></li>
                <li><a href="/index/reg"><i class="fa fa-user-plus"></i>注册</a></li>
            @endif
            
            
        </ul>
    </div>