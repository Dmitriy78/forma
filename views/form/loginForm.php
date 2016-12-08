<?php 
require_once 'class/Lang.php';

$lang = new Lang();
?>

<div class="col-sm-4 col-sm-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            
            <div class="row">
                <div class="col-sm-6 text-left"><?= $lang->getTranslate('Login_form')?></div>
                <div class="col-sm-6 text-right">
                    <a href="/?lang=ru">рус</a>
                    <a href="/?lang=en">en</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form action="/" method="post" id='form-login'>

                <div class="form-group" id='form-group-login'>
                    <label class="control-label" for="exampleInputEmail1"><?= $lang->getTranslate('Login')?></label>
                    <input type="text" class="form-control" id="login" name="login">
                    <div class="help-block" id='help-block-login'></div>
                </div>

                <div class="form-group has-error" id='form-group-pass'>
                    <label class="control-label" for="exampleInputEmail1"><?= $lang->getTranslate('Password')?></label>
                    <input type="password" class="form-control" id="pass" name="pass">
                    <div class="help-block" id='help-block-pass'></div>
                </div>

                <!--    <div class="form-group col-sm-3 col-sm-offset-4">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>-->

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info" id='btn-login'><?= $lang->getTranslate('Entrance')?></button>
                </div>

                <div class="form-group text-center">
                    <a href="/register.php" ><?= $lang->getTranslate('Not_registered_yet_Sign_up')?></a>
                </div>

            </form>
        </div>
    </div>
</div>




