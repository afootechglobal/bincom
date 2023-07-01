<?php include 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title><?php echo $thename?> | Election Result App</title>
<meta name="keywords" content="<?php echo $thename?>, Nigeria Election, Nigeria Election Result, Nigeria Election Result Updates, APC Result In Nigeria, PDP Result In Nigeria, LP Result In Nigeria, ANPP Result In Nigeria"/>
<meta name="description" content="<?php echo $thename?> is designed to capture INEC election result and display live updates on each party's presidential, senitorial, governoship and related election results"/>

<meta property="og:title" content="<?php echo $thename?> | Election Result App"/>
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/bincom.jpg"/>
<meta property="og:description" content="<?php echo $thename?> is designed to capture INEC election result and display live updates on each party's presidential, senitorial, governoship and related election results"/>

<meta name="twitter:title" content="<?php echo $thename?> | Election Result App"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/bincom.jpg"/> 
<meta name="twitter:description" content="<?php echo $thename?> is designed to capture INEC election result and display live updates on each party's presidential, senitorial, governoship and related election results"/>
</head>
<body>

<div class="success-div animated fadeInRight" id="warning-div">
    <div><i class="bi-exclamation-circle"></i></div> 
    USER ERROR!<br /> 
    <span>Some Messages goes here...</span>
</div>


<div class="body-div">
    <div class="left-div">
            <div class="form-div">
                <div class="header-div">
                    <div class="logo-div"><img src="all-images/images/logo.png" alt="Logo"></div>
                    <div class="contact-div"><i class="bi-arrow-clockwise"></i></div>
                    <div class="contact-div back-div" onclick=" _get_panel('dashboard')"><i class="bi-arrow-left"></i> Back</div>
                </div>
                <div class="div" id="dashboard_id">
                    <?php $page='dashboard';
                    include 'config/page-content.php'
                    ?>
                </div>


               
            </div>
        
    </div>




    <div class="right-div">
        <div class="div-in">
			<div class="matrix-back-div">
 				<div class="title-div">Election Result Matrix for each <span>POLLING UNIT</span></div>
                    <div class="result-div">
                        <div class="div-in" id="matrix-div">
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                            <div class="matrix-div"> PDP <button class="btn">2,304</button><br clear="all" /></div>
                        </div>

                        <div class="div-in" id="matrix-div">
                           
                        </div>
                    </div>

                    <div class="chart-div">
                        <div class="div-in" id="pie">
                            <div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>
                            <script>_get_pie('');</script>
                        </div>
                    </div>
                      <br clear="all" />
            </div>

            
                <br clear="all" />
            <div id="bar">
            <script>_get_bar('')</script>
           </div>
            
        </div>
    </div>
</div>


<script>
_get_states_info();
// _get_lga_info();
// _get_ward_info();
_get_polling_unit_info();
_get_election_result();
</script>
</body>
</html>


