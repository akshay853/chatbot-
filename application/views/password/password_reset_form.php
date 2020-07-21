<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    .form-gap {
        padding-top: 70px;
    }
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="form-gap"></div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Reset Password?</h2>
                        <p>Add your New password here.</p>
                        <div class="panel-body">

                            <form action="<?php echo base_url();?>password/password_reset_form_action"id="register-form" role="form" autocomplete="off" class="form" method="post">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input required id="password" min="6" max="8" name="password" placeholder="New Password" class="form-control"  type="password">
                                        <input id="usertype" name="usertype" type="hidden" value="<?php echo $user_type;?>">
                                        <input id="type" name="type" type="hidden" value="<?php echo $user_type;?>">
                                        <input id="userid" name="userid" type="hidden" value="<?php echo $user_id;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input required id="confirm" min="6" max="8" name="confirm" placeholder="Confirm" class="form-control"  type="password">
                                        <input id="usertype" name="usertype" type="hidden" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">

                                </div>

                                <input type="hidden" class="hide" name="token" id="token" value="">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>