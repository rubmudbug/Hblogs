<div class="container">
    <?php echo form_open('register/registerForm'); ?>
        <h2 class="form-signin-heading">请注册</h2>
        <label for="inputEmail" class="sr-only">邮箱地址</label>
        <input type="email" id="inputEmail" class="form-control" name="user_email" placeholder="邮箱地址" required autofocus>
        <label for="inputUserName" class="sr-only">用户名/昵称</label>
        <input type="text" id="inputUserName" class="form-control" name="user_name" placeholder="用户姓名" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" name="user_pwd" placeholder="密 码" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
    </form>
</div>