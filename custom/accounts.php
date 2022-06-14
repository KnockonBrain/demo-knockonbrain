<?php
include "header.php";
include "connection.php";
?>

&nbsp;

<div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-16">
                            <h2 class="tm-block-title">Edit Account</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="" class="tm-signup-form">
                                <div class="form-group">
                                    <label for="name">Account Name</label>
                                    <input placeholder="Enter your name" id="name" name="name" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="email">Account Email</label>
                                    <input placeholder="Enter your email ID" id="email" name="email" type="email" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input placeholder="******" id="password" name="password" type="password" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="password2">Re-enter Password</label>
                                    <input placeholder="******" id="password2" name="password2" type="password" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input placeholder="" id="phone" name="phone" type="tel" class="form-control validate">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" class="btn btn-success">Update
                                        </button>
                                    </div>
                                    <div class="col-12 col-sm-8 tm-btn-right">
                                        <button type="submit" class="btn btn-danger">Delete Account
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            



<?php
include "footer.php";
?>