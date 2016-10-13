/* if ($model->load(Yii::$app->request->post())) {           
           $model->gt_created = date('Y-m-d H:i:s');
           $model->gt_createdby = \Yii::$app->user->identity->gt_username;
           $model->gt_modified = date('Y-m-d H:i:s');
           $model->gt_modifiedby = \Yii::$app->user->identity->gt_username ;           
           $model->gt_vid = 0;
           $model->gt_userid = 0;
           $model->gt_vendorid = $id;
           $model->gt_transactionid = 'f4282a1fdc10d29e1632'; 
           $model->gt_status = 'Processing';
           $model->gt_voucher = $voucher;      
           $model->save();


         }   
         if($model->validate())
         {
            $this->expire($model);                   
                                  
         }          
        else {        
         $errors = $model->errors;
         print_r($errors) ;
         } */


         <ul class="tab">
                  <li id = "About"><a style="margin:0px;" onclick="openTab(event, 'About')">About ABW</a></li>
                  <li id = "Benefits"><a style="margin:0px;" onclick="window.open('/fitnesstrekker/partner/index.php?r=abw%2Fbenefits', '_self')">Benefits</a></li>
                   <li id = "Expectation"><a style="margin:0px;" onclick="window.open('/fitnesstrekker/partner/index.php?r=abw%2Fexpectation', '_self')">Expectation from you</a></li>
          <li id = "Register"><a style="margin:0px;" onclick="window.open('/fitnesstrekker/partner/index.php?r=abw%2Fregister', '_self')">Register Now</a></li>
         </ul>



          $(document).ready(function() {
    $('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});

});





<style type="text/css">
    ul.tab {
    list-style-type: none;
    margin-right: 0px;
    padding: 0;
    overflow: hidden;
    
}
/* Float the list items side by side */
ul.tab li {}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    text-decoration: none;
    transition: 0.3s;
    font-size: 14px;
}

/* Change background color of links on hover */
ul.tab li a:hover {}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {}


/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    
}

#Basic\ Details{
    display: block;
}

</style>









<div id="rootwizard" class="tabbable tabs-left">
  <ul>
      <li><a href="#tab1" data-toggle="tab">First</a></li>
    <li><a href="#tab2" data-toggle="tab">Second</a></li>
    <li><a href="#tab3" data-toggle="tab">Third</a></li>
    <li><a href="#tab4" data-toggle="tab">Fourth</a></li>
    
  </ul>
  <div class="tab-content">
      <div class="tab-pane" id="tab1">
        <?= Html::a('About ABW', ['/abw/about'], ['class' => '']); ?>
      </div>
      <div class="tab-pane" id="tab2">
        2
      </div>
    <div class="tab-pane" id="tab3">
      3
      </div>
    <div class="tab-pane" id="tab4">
      4
      </div>
    
    <ul class="pager wizard">
      <li class="previous first" style="display:none;"><a href="#">First</a></li>
      <li class="previous"><a href="#">Previous</a></li>
      <li class="next last" style="display:none;"><a href="#">Last</a></li>
        <li class="next"><a href="#">Next</a></li>
    </ul>
  </div>  
</div>



<li>
      <?= Html::a('About ABW', ['/abw/about'], ['class' => '']); ?>
    </li>
    <li>
      <?= Html::a('Benefits', ['/abw/benefits'], ['class' => '']); ?>
    </li>
    <li>
      <?= Html::a('Expectation from you', ['/abw/expectation'], ['class' => '']); ?>
    </li>
    <li>
      <?= Html::a('Register Now', ['/abw/register'], ['class' => '']); ?>
    </li>
</li>



style= "top:8%;position:fixed;width:100%;"
style= "top:12%;position:fixed;width:100%;"

$(document).ready(function() {
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 280) 
      $('.tab').addClass('fixed');
    }
    if ($(window).scrollTop() < 281) {
      $('.tab').removeClass('fixed');
    }
  });
});