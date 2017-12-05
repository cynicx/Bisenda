<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);

body {
    /* margin:40px; */
    font-family: 'Roboto Condensed', sans-serif;
    background: #eee;
    
}

.head {
    color: #ECF0F1;
}

.board {
    width: 100%;
    height: auto;
    margin: 20px auto;
    background: #fefefe;
    border-radius: 8px 8px 0 0;
}

.board .nav-tabs {
    position: relative;
    margin: 40px auto;
    margin-bottom: 0;
    box-sizing: border-box;
}

.liner {
    height: 2px;
    background: #ddd;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.nav-tabs > li {
    width: 25%;
}

.nav-tabs > li:after {
    content: " ";
    position: absolute;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #aaa;
    transition: left 1s;
}

.nav-tabs > li.active:after {
    left: calc(50% - 10px);
    opacity: 1;
}

.nav-tabs > li[rel-index="-1"]:after {
    left: calc(50% + 100% - 10px);
}

.nav-tabs > li[rel-index="-2"]:after {
    left: calc(50% + 200% - 10px);
}

.nav-tabs > li[rel-index="-3"]:after {
    left: calc(50% + 300% - 10px);
}

.nav-tabs > li[rel-index="1"]:after {
    left: calc(50% - 100% - 10px);
}

.nav-tabs > li[rel-index="2"]:after {
    left: calc(50% - 200% - 10px);
}

.nav-tabs > li[rel-index="3"]:after {
    left: calc(50% - 300% - 10px);
}

.nav-tabs > li a {
    width: 70px;
    height: 70px;
    line-height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

.nav-tabs > li a:hover{
    background: transparent;
}

.nav-tabs > li span {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: white;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}

.nav-tabs > li:nth-of-type(1) span {
    color: #3e5e9a;
    border: 2px solid #3e5e9a;
}

.nav-tabs > li:nth-of-type(1).active span {
    color: #fff;
    background: #3e5e9a;
}

.nav-tabs > li:nth-of-type(2) span {
    color: #f1685e;
    border: 2px solid #f1685e;
}

.nav-tabs > li:nth-of-type(2).active span {
    color: #fff;
    background: #f1685e;
}

.nav-tabs > li:nth-of-type(3) span {
    color: #febe29;
    border: 2px solid #febe29;
}

.nav-tabs > li:nth-of-type(3).active span {
    color: #fff;
    background: #febe29;
}

.nav-tabs > li:nth-of-type(4) span {
    color: #25c225;
    border: 2px solid #25c225;
}

.nav-tabs > li:nth-of-type(4).active span {
    color: #fff;
    background: #25c225;
}

.nav-tabs > li > a.disabled {
    opacity: 1;
}

.nav-tabs > li > a.disabled span {
    border-color: #ddd;
    color: #aaa;
}

div#step-1 {
    background: #fff;
}

div[role="tabpanel"]:after {
    content: "";
    display: block;
    clear: both;
}
</style>

<script>
    $(function() {
    // Nav Tab stuff

    $('.nav-tabs > li > a').click(function() {
        if($(this).hasClass('disabled')) {
            return false;
        } else {
            var linkIndex = $(this).parent().index() - 1;
            $('.nav-tabs > li').each(function(index, item) {
                $(this).attr('rel-index', index - linkIndex);
            });
        }
    });
    $('#step-1-next').click(function() {
        // Check values here
        var isValid = true;
        
        if(isValid) {
            $('.nav-tabs > li:nth-of-type(2) > a').removeClass('disabled').click();
        }
    });
    $('#step-2-next').click(function() {
        // Check values here
        var isValid = true;
        
        if(isValid) {
            $('.nav-tabs > li:nth-of-type(3) > a').removeClass('disabled').click();
        }
    });
    $('#step-3-next').click(function() {
        // Check values here
        var isValid = true;
        
        if(isValid) {
            $('.nav-tabs > li:nth-of-type(4) > a').removeClass('disabled').click();
        }
    });
});
</script>


<div class="head" style='color:#00477e'>
    <h1>Bisenda proudly serves your merchant</h1>
</div>

<div class="container">
    <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                <div class="liner"></div>
                <li rel-index="0" class="active">
                    <a href="#step-1" class="btn" aria-controls="step-1" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-user"></i></span>
                    </a>
                </li>
                <li rel-index="1">
                    <a href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-heart"></i></span>
                    </a>
                </li>
                <li rel-index="2">
                    <a href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-plus"></i></span>
                    </a>
                </li>
                <li rel-index="3">
                    <a href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-ok"></i></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step-1">
                
                <div class="col-md-12">
                    <h3>Business Info</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Business Name</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Name"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">EIN (used to verify your business)</label>
                            <input  maxlength="10" type="text" required="required" class="form-control" placeholder="12-3456789"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject">
                                Type of Business</label>
                            <select id="subject" name="subject" class="form-control">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">Restaurant</option>
                                <option value="suggestions">Shopping</option>
                                <option value="product">Financial</option>
                                <option value="product">Retail</option>
                                <option value="product">Online</option>
                                <option value="product">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Website (option)</label>
                            <input maxlength="100" type="text"  class="form-control" placeholder="URL" />
                        </div>
                    </div> 
                    <h3>Business Location</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Street Adress</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Address"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input  maxlength="40" type="text" required="required" class="form-control" placeholder="Enter City"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">ZIP</label>
                            <input  maxlength="5" type="text" required="required" class="form-control" placeholder="Enter ZIP Code"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">State</label>
                            <input  maxlength="2" type="text" required="required" class="form-control" placeholder="Enter State"  />
                        </div>
                    </div>
                    <h3>Business Contact</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Phone Number</label>
                            <input  maxlength="14" type="text" required="required" class="form-control" placeholder="(555) 555-5555"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email"  />
                        </div>
                    </div>
                
                    <button id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                </div>
            </div>

            <!-- // step 2 ******** -->
            <div role="tabpanel" class="tab-pane" id="step-2">
                <div class="col-md-12">
                    <h1> STEP #2 </h1>
                    <button id="step-2-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                </div>
            </div>


            <!-- // step 3 ******** -->            
            <div role="tabpanel" class="tab-pane" id="step-3">
                <div class="col-md-12">
                    <h1> STEP #3 </h1>
                    <button id="step-3-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                </div>
            </div>


            <!-- // step 4 ******** -->            
            <div role="tabpanel" class="tab-pane" id="step-4">
                <div class="col-md-12">
                    <h1> STEP #4 </h1>
                    <button id="step-4-next" class="btn btn-lg btn-primary pull-right">Continue</button>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<br><br>

<?php require 'application/views/footer.php';