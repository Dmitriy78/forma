<?php 
require_once 'class/Lang.php';

$lang = new Lang();
?>

<div class="col-sm-4 col-sm-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            
            <div class="row">
                <div class="col-sm-6 text-left"><?= $lang->getTranslate('Register_form')?></div>
                <div class="col-sm-6 text-right">
                    <a href="/register.php?lang=ru">рус</a>
                    <a href="/register.php?lang=en">en</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form action="/" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="control-label" for="exampleInputEmail1"><?= $lang->getTranslate('Login')?></label>
                    <input type="text" class="form-control" id="login" name="login" required="">
                </div>

                <div class="form-group has-error">
                    <label class="control-label" for="exampleInputEmail1"><?= $lang->getTranslate('Password')?></label>
                    <input type="password" class="form-control" id="pass" name="pass" required="">
                </div>
                
                <div class="form-group has-error">
                    <label class="control-label" for="exampleInputEmail1"><?= $lang->getTranslate('Password')?></label>
                    <input type="password" class="form-control" id="pass" name="pass" required="">
                </div>

                <div class="form-group ">
                    <label for="exampleInputEmail1"><?= $lang->getTranslate('Email')?></label>
                    <input type="email" class="form-control" id="email" name="email" required="">
                </div>
                
                <div class="form-group ">
                    <label for="exampleInputEmail1"><?= $lang->getTranslate('Foto')?></label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/jpeg,image/png,image/gif">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info" ><?= $lang->getTranslate('Registration')?></button>
                </div>

                <div class="form-group text-center">
                    <a href="/login.php" ><?= $lang->getTranslate('I_have_an_account_Sign_in')?></a>
                </div>

            </form>
        </div>
    </div>
</div>




