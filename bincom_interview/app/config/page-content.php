<?php
if ($page=='dashboard'){?>
        <div class="text-div">
            <h2><i class="bi-speedometer2"></i> Dashboard</h2>

        </div>
        <div class="main-div" onclick=" _get_panel('form')">
            <div class="div-in">
                <div class="text-div">View Polling Unit Result</div>
            </div>
        </div>

        <div class="main-div" onclick=" _get_panel('get_lga')">
            <div class="div-in">
                <div class="text-div" >View Total Polling Unit</div>
                <!-- <button class="btn">2,304</button> -->
            </div>
        </div>


        <div class="main-div" onclick=" _get_panel('add_polling_unit')">
            <div class="div-in">
                <div class="text-div">Create New Polling Unit</div>
            </div>
        </div>
    

<?php }?>




<?php
if ($page=='form'){?>
        <div class="fill-form-div animated fadeLeft">
        <div class="notification-div">Please navigate through this form below to view polling unit <span>ELECTION RESULT</span>.</div>
        <div class="title-div">SELECT STATE:</div>
        <select id="state_id"  class="text-field" onchange="_get_election_result()">
        <SCript>_get_states_info();</SCript>   
        </select>
        <div class="title-div">SELECT LGA:</div>
        <select id="lga_id"  class="text-field" onchange="_get_ward_info()">
            <option value="" selected="selected">SELECT HERE</option>
        </select>
        <div class="title-div">SELECT WARD:</div>
        <select id="ward_id"  class="text-field" onchange="_get_polling_unit_info()">
            <option value="" selected="selected">SELECT HERE</option>
        </select>
        <div class="title-div">SELECT POLLING UNIT:</div>
        <select id="polling_unit_id"  class="text-field" onchange="_get_election_result()">
        <option value="" selected="selected">SELECT HERE</option>
        </select>
    </div>
<?php }?>




<?php
if ($page=='get_lga'){?>

<div class="fill-form-div animated fadeLeft">
        <div class="notification-div">Please navigate through this form below to view total <span>POLLING UNIT RESULT</span>.</div>
        
        <div class="title-div">SELECT STATE:</div>
        <select id="state_id"  class="text-field" onchange="_get_election_result()">
        <SCript>_get_states_info();</SCript>   
        </select>

        <div class="title-div">SELECT LGA:</div>
        <select id="lga_id"  class="text-field" onchange="_get_polling_unit_count()">
            <option value="" selected="selected">SELECT HERE</option>
        </select>
        
    </div>
<?php }?>


<?php
if ($page=='add_polling_unit'){?>

<div class="fill-form-div animated fadeLeft">
        <div class="notification-div">Add New <span>POLLING UNIT</span></div>
        <div class="title-div">SELECT STATE:</div>
        <select id="state_id"  class="text-field" onchange="_get_election_result()">
        <SCript>_get_states_info();</SCript>   
        </select>
        <div class="title-div">SELECT LGA:</div>
        <select id="lga_id"  class="text-field" onchange="_get_ward_info()">
            <option value="" selected="selected">SELECT HERE</option>
        </select>
        <div class="title-div">SELECT WARD:</div>
        <select id="ward_id"  class="text-field" onchange="_get_polling_unit_info()">
            <option value="" selected="selected">SELECT HERE</option>
        </select>
        <div class="title-div">POLLING UNIT NAME:</div>
       <input type="text" class="text-field" placeholder="ENTER POLLING UNIT NAME"/>

       <div class="title-div">POLLING UNIT DESCRIPTION:</div>
       <input type="text" class="text-field" placeholder="ENTER POLLING UNIT DESCRIPTION"/>
       <button class="btn" type="button" id="submit">SUBMIT</button>
    </div>
<?php }?>