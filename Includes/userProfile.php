<!--Start User Profile-->
<div class="container user-profile-container">
    <div class="row">
        <div id="screenRes" class="col-md-15">
            <form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset>
                    <!-- Form Name -->
                    <div class="form-spacer">
                        <br>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Username ">Tài Khoản </label>  
                        <div class="col-md-1">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-check"></i>
                                </div> 
                                <th>
                                    <label class="col-md-4 control-label" for="Username "><?php echo $uname;?></label>
                                </th>
                                
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <span class="input-error"><?php echo $fnameCriteria;?></span>
                        <label class="col-md-4 control-label" for="First Name">Họ</label>  
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input value = "<?php echo $fname;?>" id="First Name" name="fname" type="text" placeholder="First Name" class="form-control input-md">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <span class="input-error"><?php echo $lnameCriteria;?></span>
                        <label class="col-md-4 control-label" for="Last Name ">Tên</label>  
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input value = "<?php echo $lname;?>" id="Last Name " name="lname" type="text" placeholder="Last Name " class="form-control input-md">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <span class="input-error"><?php echo $addressCriteria;?></span>
                        <label class="col-md-4 control-label" for="Address ">Địa chỉ </label>  
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <input value = "<?php echo $address;?>" id="Address " name="address" type="text" placeholder="Nhập địa chỉ" class="form-control input-md">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Email Address">Email </label>  
                        <div class="col-md-1">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <label class="col-md-4 control-label" for="Email Address "><?php echo $email;?></label>
                            </div>
                        </div>
                    </div>


                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Overview (max 200 words)">Một số sở thích về bạn</label>
                        <div class="col-md-4">                     
                            <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="description" placeholder="Tối đa 200 chữ"><?php echo $description;?></textarea>
                        </div>
                    </div>

                        
                    <div class="form-group">
                        <label class="col-md-4 control-label" ></label>  
                        <div class="col-md-4">
                            <button name="updateProfile" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Cập nhật</button>
                            <button name="revertProfile" class="btn btn-danger" value=""><span class="glyphicon glyphicon-repeat"></span> Hoàn tác</button>
                            <span class="message"><?php echo "&nbsp&nbsp <b>$updateMessage</b>";?></span>
                        </div> 
                    </div>

                    <!-- Text input-->
                    <br>
                    <hr>
                    <div class="change-password-container">
                        <div class="change-password-subtitle">
                            <h3>Thay đổi mật khẩu</h3>
                            <p><i class="fas fa-exclamation-triangle"></i>Bạn nên đăng nhập lại sau khi đổi mật khẩu.</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="input-error"><?php echo $currentPasswordCriteria;?></span>
                        <label class="col-md-4 control-label" for="Current Password ">Mật khẩu hiện tại</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-unlock-alt"></i>
                                </div>
                                <input type="password" id="Current Password " name="currentPassword" type="text" placeholder="Mật khẩu hiện tại" class="form-control input-md">
                            </div>
                        </div>
                    </div>

                
                    <!-- Text input-->
                    <div class="form-group">
                    <span class="input-error"><?php echo $newPasswordCriteria;?></span>
                        <label class="col-md-4 control-label" for="New Password ">Mật khẩu mới </label>  
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-key"></i>
                                </div>
                                <input type="password" id="New Password " name="newPassword" type="text" placeholder="Mật khẩu mới" class="form-control input-md">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                    <span class="input-error"><?php echo $confirmPasswordCriteria;?></span>
                        <label class="col-md-4 control-label" for="Confirm Password ">Xác nhận lại mật khẩu</label>  
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-key"></i>
                                </div>
                                <input type="password" id="Confirm Password " name="confirmPassword" type="text" placeholder="Xác nhận lại mật khẩu" class="form-control input-md">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" ></label>  
                        <div class="col-md-4">
                            <button name="updatePassword" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Cập nhật</button>
                            <button name="clearPassword" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Đặt lại</button>
                            <span class=message"><?php echo "&nbsp&nbsp <b>$passwordMessage</b>";?></span>
                        </div>
                    </div>

                    <br>
                    <hr>
                    <div class="danger-zone">
                        <div class="danger-zone-inside">
                            <div class="change-password-container">
                                <div class="change-password-subtitle">
                                    <h3>Xóa tài khoản</h3>
                                    <p><i class="fas fa-exclamation-triangle"></i>&nbsp&nbspCảnh báo: Tài khoản của bạn sẽ bị <b>XÓA</b>. Vui lòng kiểm tra lại.</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="input-error"><?php echo $delPasswordCriteria;?></span>
                                <label class="col-md-4 control-label" for="Current Password ">Mật khẩu </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-unlock-alt"></i>
                                        </div>
                                        <input type="password" id="Current Password " name="delPassword" type="text" placeholder="Xác nhận lại mật khẩu" class="form-control input-md">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" ></label>  
                                <div class="col-md-4">
                                    <button name="deleteAccount" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span>Xóa tài khoản</button>
                                    <span class=message"><?php echo "&nbsp&nbsp <b>$passwordMessage</b>";?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div> 
    </div>
</div>

<div class="form-spacer">
    <br><br><br><br><br>
</div>
<!-- End User Profile -->