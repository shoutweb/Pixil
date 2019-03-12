@extends('layouts.releasedAppHeader')
<div id="main" class="layout-row flex">
    <!-- ############ Content START-->
    <div id="content" class="flex ">
        <!-- ############ Main START-->
        <div class="sr">
            <div class="page-hero page-container">
                <div class="media bg-media bg-primary">
                    <div class="media-content" style="background-image:url(../assets/img/b20.jpg)"></div>
                </div>
                <div class="p-5 pos-rlt text-center">
                    <h1 class="display-4 font-weight-bold text-white m-5">Support Artist</h1>
                    <p></p>
                </div>
            </div>
            <div class="page-container pos-rlt padding">
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <div class="py-5 sr-item">
                            <label>First Name:</label>
                            <input type="text" name="firstName" id="firstName" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="py-5 sr-item">
                            <label>Last Name:</label>
                            <input type="text" name="lastName" id="lastName" />
                            </div>
                    </div>
                    <span>The following information needs to be real for your payment to be processed</span>
                    <div class="col-md-8">
                        <div class="py-5 sr-item">
                            <label>Email Address:</label>
                            <input type="text" name="emailAddress" id="emailAddress" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="py-5 sr-item">
                            <label>Saved Payment:</label>
                            <input type="password" name="paymentCardNumber" id="paymentCardNumber" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ############ Main END-->
    </div>
    <!-- ############ Content END-->
</div>
@extends('layouts.releasedAppFooter')