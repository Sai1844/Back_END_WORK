<?php 
    $mytime = getdate(date("U"));
    $date = "mytime[weekday], $mytime[month], $mytime[mday], $mytime[year]";
    echo $date;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="fontawesome/css/all.css">
    
    
<script src="https://kit.fontawesome.com/e0bea5fe2a.js" crossorigin="anonymous"></script>
    <script src="jquery/jquery.js"></script>
	<!-- this link is very important -->
    
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
	
</head>
<body>
    <div class="container">
        <div class="rating-review">
            <div class="tri table-flex">
            <table>
                <tr>
                    <td>
                        <div class="rbn">
                            <h3>1.5/5.0</h3>
                        </div>
                        <div class="pdt-rate">
                            <div class="pro-rating">
                                <div class="clearfix rating mart8">
                                <div class="rating-stars">
                                    <div class="grey-stars"></div>
                                    <div class="filled-stars" style="width: 60%;"></div>
                                </div>
                                </div>
                            </div>
                            <div class="rnrn">
                                <p class="rars">No Reviews </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="rpb">
                            <div class="rnpb">
                                <label>5 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb"  style="width: 20%;">
                                    </div>
                                </div>
                                <div class="label">(1)</div>
                            </div>
                            <div class="rnpb">
                                <label>4 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb"  style="width: 20%;">
                                    </div>
                                </div>
                                <div class="label">(1)</div>
                            </div>
                            <div class="rnpb">
                                <label>3 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb"  style="width: 80%;">
                                    </div>
                                </div>
                                <div class="label">(15)</div>
                            </div>
                            <div class="rnpb">
                                <label>2 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb"  style="width: 30%;">
                                    </div>
                                </div>
                                <div class="label">(11)</div>
                            </div>
                            <div class="rnpb">
                                <label>1 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb"  style="width: 40%;">
                                    </div>
                                </div>
                                <div class="label">(13)</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="rrb">
                            <p>Please Review Our Products!</p>
                            <button class="rbtn opmd">Add Review</button>
                            
                        </div>
                    </td>
                    
                </tr>
            </table>
            <div class="review-modal" style="display:none">
                <div class="review-bg">
                    <div class="rmp">
                        <div class="rpc">
                            <span><i class="fa fa-times"></i></span>
                        </div>
                        <div class="rps" align="center">
                            <i class="fa fa-star" data-index="0" style="display: none;"></i>
                            <i class="fa fa-star" data-index="1"></i>
                            <i class="fa fa-star" data-index="2"></i>
                            <i class="fa fa-star" data-index="3"></i>
                            <i class="fa fa-star" data-index="4"></i>
                            <i class="fa fa-star" data-index="5"></i>
                        </div>
                        <input type="hidden"  value="" class="starRateV">
                        <input type="hidden"  value="<?php  echo $date; ?>" class="rateDate">
                        <div class="rptf" align="center">
                            <input type="text" class="raterName" placeholder="Enter your Name...">
                        </div>
                        <div class="rptf" align="center">
                            <textarea class="rateMsg" id="rate-field" placeholder="Describe Your Experience" ></textarea>
                        </div>
                        <div class="rate-error" align="center"></div>
                        <div class="rpsb" align="center">
                            <button class="rpbtn">Post Review</button>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
            <div class="bri">
                <div class="uscm">
                    <div class="uscms-secs">
                        <div class="us-img">
                            <p>B</p>
                        </div>
                        <div class="uscms">
                            <div class="us-rate">
                            <div class="pdt-rate">
                            <div class="pro-rating">
                                <div class="clearfix rating mart8">
                                <div class="rating-stars">
                                    <div class="grey-stars"></div>
                                    <div class="filled-stars" style="width: 60%;"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="us-cmt">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, fuga reiciendis iusto cumque ipsum non blanditiis quae! Vitae, repudiandae dolorem repellendus laboriosam quaerat possimus. Ullam accusamus temporibus repellat molestiae repudiandae.</p>
                        </div>
                        <div class="us-nm">
                            <p><i>By <span class="cmnm">Bright</span> on <span class="cmdt">20 jan 2020</span></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="main.js"></script>
</body>
</html>