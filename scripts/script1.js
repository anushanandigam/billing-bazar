jQuery(document).ready(function(){

$("#add-beneficiary-submit-button").click(function(){
  $("#benificiary_btn").css("visibility","hidden");
  $("#otp_form").removeClass();
})


  $(".viewless_button").hide();

    $(".viewall_button").click(function(){
    $(".menu_toggle").show();
    $(this).hide();
    $(".viewless_button").show();
    });

    $(".viewless_button").click(function(){
    $(".menu_toggle").hide();
    $(this).hide();
    $(".viewall_button").show();
    });

    $(".footer_sections p").hide();
    $(".img_s1").mouseover(function(){
      $(".s1_para").slideDown();
    }).mouseout(function(){
      $(".s1_para").slideUp();
    }).click(function(){
      $(".s1_para").slideToggle();
    })

    $(".img_s2").mouseover(function(){
      $(".s2_para").slideDown();
    }).mouseout(function(){
      $(".s2_para").slideUp();
    }).click(function(){
      $(".s2_para").slideToggle();
    });

    $(".img_s3").mouseover(function(){
      $(".s3_para").slideDown();
    }).mouseout(function(){
      $(".s3_para").slideUp();
    }).click(function(){
      $(".s3_para").slideToggle();
    });

    $(".navBar li a").click(function(){
      $(this).css("text-decoration","none");
    });
    
    $(".navBar li").css({"padding-left":"0px","padding-right":"0px"});
    
    (function( $ ) {

    //Function to animate slider captions 
  function doAnimations( elems ) {
    //Cache the animationend event in a variable
    var animEndEv = 'webkitAnimationEnd animationend';
    
    elems.each(function () {
      var $this = $(this),
        $animationType = $this.data('animation');
      $this.addClass($animationType).one(animEndEv, function () {
        $this.removeClass($animationType);
      });
    });
  }
  
  //Variables on page load 
  var $myCarousel = $('#carousel-example-generic'),
    $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    
  //Initialize carousel 
  $myCarousel.carousel();
  
  //Animate captions in first slide on page load 
  doAnimations($firstAnimatingElems);
  
  //Pause carousel  
  $myCarousel.carousel('pause');
  
  
  //Other slides to be animated on carousel slide event 
  $myCarousel.on('slide.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
  });  
    $('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });
  
})(jQuery); 

  /*Bus Date*/
     $("#bus_date").datepicker({
   changeMonth: true,
     changeYear: true

});

     $('#bus_date').datepicker({
    beforeShow: function (textbox, instance) {
            instance.dpDiv.css({
            marginTop: (-textbox.offsetHeight) + 'px',
                   
            });
    }
}); 
      /*Bus Date End*/

      /*trian date*/
       $("#train_date").datepicker({
   changeMonth: true,
     changeYear: true

});

     $('#train_date').datepicker({
    beforeShow: function (textbox, instance) {
            instance.dpDiv.css({
            marginTop: (-textbox.offsetHeight) + 'px',
                   
            });
    }
}); 
      /*trian date end*/

    /*Flight Date*/
     $("#departure_date").datepicker({
   changeMonth: true,
     changeYear: true,dateFormat: 'yy-mm-dd'
     
});

     $('#departure_date').datepicker({
    
    beforeShow: function (textbox, instance) {
            instance.dpDiv.css({
            marginTop: (-textbox.offsetHeight) + 'px',
                   
            });
    }
}); 


   $("#return_date").datepicker({
   changeMonth: true,
     changeYear: true,dateFormat: 'yy-mm-dd'
});

     $('#return_date').datepicker({

    beforeShow: function (textbox, instance) {
            instance.dpDiv.css({
            marginTop: (-textbox.offsetHeight) + 'px',
                   
            });
    }
}); 
    /*Flight Date End*/
  
  jQuery("input[name='flight_service']").change(function(){
        var checked_flight=jQuery(this).val();
        if(checked_flight=='ONE'){
     $("#flight_round").css("visibility","hidden");
         
        } else if(checked_flight=='ROUND'){
     $("#flight_round").removeClass();
     $("#flight_round").css("visibility","visible");
     }
        });


/*Error Message Right Side*/
jQuery("div.help-block").css({"color":"red"}).addClass("text-right");

      /*MobileNumber Validation*/
jQuery("input[name='MobileRecharge[service]']").change(function(){
        var checked_mobile_radio=jQuery(this).val();
        if(checked_mobile_radio=='prepaid'){
          jQuery("#prepaid_form").show();
         jQuery("#postpaid_form").hide();
         
        } else if(checked_mobile_radio=='postpaid'){
       jQuery("#prepaid_form").hide();
       jQuery("#postpaid_form").show();
       jQuery("#postpaid_form").removeClass();
     }
        });
        
        

      /*Datacard Validations*/
      jQuery("input[name='DataCardRecharge[service]']").change(function(){
        var checked_datacard_radio=jQuery(this).val();

        if(checked_datacard_radio=='prepaid'){
          jQuery("#button-datacard-recharge").html("Recharge Now");
        } else{
          jQuery("#button-datacard-recharge").html("Pay Now");
        }
        
      });

      /*Mobile Validations*/

      /*Mobile Number*/
       $("#mobilerecharge-service_number").keyup(function(){
          var mobile_number=$(this).val();
          if(mobile_number==0 || mobile_number==1 || mobile_number==2 || 
            mobile_number==3 || mobile_number==4 || mobile_number==5 || mobile_number==6 || isNaN(mobile_number)){
            $(this).val("");
          } 
        }).blur(function(){
          var mobile_number=$(this).val();
          if(mobile_number==""){
           $(".mobile_number_error").html("Can't Left This Blank");
          } else if(mobile_number.length<10 || mobile_number.length>10){
            $(".mobile_number_error").html("Please Enter Correct Number");
          } else{
            $(".mobile_number_error").html("");
          }
        });


        /*Amount*/
        $("#mobilerecharge-amount").keyup(function(){
          var mobile_amount=$(this).val();
          if(isNaN(mobile_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var mobile_amount=$(this).val();
          if(mobile_amount==""){
            $(".amount_error").html("Can't Left This Blank");
          } else{
            $(".amount_error").html("");
          }
        });


     $('#button-mobile-recharge,#button-postpaid-recharge').prop('disabled', true);
     $('#form-mobile-recharge input[type="text"]').keyup(function() {

        var prepaid_number=$("#mobilerecharge-service_number");
        var prepaid_amount=$("#mobilerecharge-amount");
         var prepaid_operator=$("#mobilerecharge-operator");
        if(prepaid_number.val() != '' && prepaid_amount.val() !='' && prepaid_operator.val() !='') {
           $('#button-mobile-recharge').prop('disabled', false);
        }
     });


        /*Operator*/
        $("#mobilerecharge-operator").change(function(){
         var prepaid_operator=$(this).val();
         var prepaid_number=$("#mobilerecharge-service_number");
         var prepaid_amount=$("#mobilerecharge-amount");

         if(prepaid_operator==""){
          $(".mobile_operator_error").html("Please Select Operator");
         }
         else if(prepaid_number.val() != '' && prepaid_amount.val() !=''){
          $('#button-mobile-recharge').prop('disabled', false);
         } else{
          $(".mobile_operator_error").html("");
          
         }
        })



        /*postpaid form*/
        $("#mobilerecharge-postpaid_number").keyup(function(){
          var post_number=$(this).val();
          if(post_number==0 || post_number==1 || post_number==2 || 
            post_number==3 || post_number==4 || post_number==5 || post_number==6 || isNaN(post_number)){
            $(this).val("");
          } 
        }).blur(function(){
          var post_number=$(this).val();
          if(post_number==""){
           $(".postpaid_number_error").html("Can't Left This Blank");
          } else if(post_number.length<10 || post_number.length>10){
            $(".postpaid_number_error").html("Please Enter Correct Number");
          } else{
            $(".postpaid_number_error").html("");
          }
        });
        

         /*Amount*/
        $("#postpaid-amount").keyup(function(){
          var post_amount=$(this).val();
          if(isNaN(post_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var post_amount=$(this).val();
          if(post_amount==""){
            $(".postpaid_amount_error").html("Can't Left This Blank");
          } else{
            $(".postpaid_amount_error").html("");
          }
        });

         $('#form-mobile-postpaid-recharge input[type="text"]').keyup(function() {

      var postpaid_number=$("#mobilerecharge-postpaid_number");
        var postpaid_amount=$("#postpaid-amount");
        var postpaid_operator=$("#postpaid-operator");
        if(postpaid_number.val() != '' && postpaid_amount.val() !='' && postpaid_operator.val() !='') {
           $('#button-postpaid-recharge').prop('disabled', false);
        }
     });

          /*Operator*/
        $("#postpaid-operator").change(function(){
         var post_operator=$(this).val();
         var post_number=$("#mobilerecharge-postpaid_number");
         var post_amount=$("#postpaid-amount");

         if(post_operator==""){
          $(".postpaid_operator_error").html("Please Select Operator");
         }
         else if(post_number.val() != '' && post_amount.val() !=''){
          $('#button-postpaid-recharge').prop('disabled', false);
         } else{
          $(".postpaid_operator_error").html("");
          
         }
        })


      
      /*Mobile Validations End*/


      /*Electricty Validations*/

     
      /*Amount*/
        $("#electricitybillpayment-amount").keyup(function(){
          var electricity_amount=$(this).val();
          if(isNaN(electricity_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var electricity_amount=$(this).val();
          if(electricity_amount==""){
            $(".electricity_amount_error").html("Can't Left This Blank");
          } else{
            $(".electricity_amount_error").html("");
          }
        });
         /*Operator*/
      $("#electricitybillpayment-operator").change(function(){
         var electricity_operator=$(this).val();
         var electricity_amount=$("#electricitybillpayment-amount");
         if(electricity_operator==""){
          $(".electricity_operator_error").html("Please Select Operator");
         } else if(electricity_amount.val() !=''){
            $('#button-pay-electricity-bill').prop('disabled', false);
         } else{
          $(".electricity_operator_error").html("");
         }
      });

    $('#button-pay-electricity-bill').prop('disabled', true);
        $('#form-pay-electricity-bill input[type="text"]').keyup(function() {
        var electricity_amount=$("#electricitybillpayment-amount");
        var electricity_operator=$("#electricitybillpayment-operator");
        if(electricity_amount.val() !='' && electricity_operator.val() !='') {
           $('#button-pay-electricity-bill').prop('disabled', false);
        }
     });
      /*Electricty Validations End*/

      /*DTH VALIDATIONS*/

      /*Subsriber Id*/
      $("#dthrecharge-service_number").keyup(function(){
          var dth_id=$(this).val();
          if(isNaN(dth_id)){
            $(this).val("");
          }
        }).blur(function(){
          var dth_id=$(this).val();
          if(dth_id==""){
            $(".dth_number_error").html("Can't Left This Blank");
          } else{
            $(".dth_number_error").html("");
          }
        });

        
        /*Amount*/
        $("#dthrecharge-amount").keyup(function(){
          var dth_amount=$(this).val();
          if(isNaN(dth_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var dth_amount=$(this).val();
          if(dth_amount==""){
            $(".dth_amount_error").html("Can't Left This Blank");
          } else{
            $(".dth_amount_error").html("");
          }
        });

        /*Operator*/
        $("#DthRechargeharge-operator").change(function(){
         var dth_operator=$(this).val();
         var sub_id=$("#dthrecharge-service_number");
         var dth_amount=$("#dthrecharge-amount");
         if(dth_operator==""){
          $(".dth_operator_error").html("Please Select Operator");
         }else if(sub_id.val() !='' && dth_amount.val() !=''){
            $('#button-dth-recharge').prop('disabled', false);
         } else{
          $(".dth_operator_error").html("");
         }
      });


        $('#button-dth-recharge').prop('disabled', true);
        $('#form-dth input[type="text"]').keyup(function() {
        var sub_id=$("#dthrecharge-service_number");
        var dth_amount=$("#dthrecharge-amount");
        var dth_operator=$("#DthRechargeharge-operator");
        if(dth_amount.val() !='' && dth_operator.val() !='' && sub_id.val() !='') {
           $('#button-dth-recharge').prop('disabled', false);
        }
        });
      /*DTH VALIDATIONS END*/


      /*LANDLINE VALIDATIONS*/

     

      /*Number*/
      $("#landlinerecharge-service_number").keyup(function(){
          var landline_number=$(this).val();
          if(isNaN(landline_number)){
            $(this).val("");
          } 
        }).blur(function(){
          var landline_number=$(this).val();
          if(landline_number==""){
           $(".landline_number_error").html("Can't Left This Blank");
          } else if(landline_number.length<10 || landline_number.length>10){
            $(".landline_number_error").html("Please Enter Correct Number");
          } else{
            $(".landline_number_error").html("");
          }
        });

        /*Circle*/
        $("#landlinerecharge-circle").change(function(){
         var ll_circle=$(this).val();
         if(ll_circle==""){
          $(".landline_circle_error").html("Please Select Operator");
         } else{
          $(".landline_circle_error").html("");
         }
      });

        /*Amount*/
        $("#landlinerecharge-amount").keyup(function(){
          var ll_amount=$(this).val();
          if(isNaN(ll_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var ll_amount=$(this).val();
          if(ll_amount==""){
            $(".ll_amount_error").html("Can't Left This Blank");
          } else{
            $(".ll_amount_error").html("");
          }
        });

         /*Operator*/
      $("#landlinerecharge-operator").change(function(){
         var ll_operator=$(this).val();
         var ll_amount=$("#landlinerecharge-amount");
        var ll_no=$("#landlinerecharge-service_number");
         if(ll_operator==""){
          $(".landline_operator_error").html("Please Select Operator");
         } else if(ll_amount.val() !='' && ll_no.val() !=''){
          $('#button-ll-recharge').prop('disabled', false);
         } else{
          $(".landline_operator_error").html("");
         }
      });


        $('#button-ll-recharge').prop('disabled', true);
        $('#form-ll-recharge input[type="text"]').keyup(function() {
        var ll_operator=$("#landlinerecharge-operator");
        var ll_amount=$("#landlinerecharge-amount");
        var ll_no=$("#landlinerecharge-service_number");
        if(ll_operator.val() !='' && ll_amount.val() !='' && ll_no.val() !='') {
           $('#button-ll-recharge').prop('disabled', false);
        }
        });
      /*LANDLINE VALIDATIONS END*/

      /*DATACARD VALIDATIONS*/

      /*Number*/
       $("#datacardrecharge-service_number").keyup(function(){
          var datacard_number=$(this).val();
          if(isNaN(datacard_number)){
            $(this).val("");
          }
        }).blur(function(){
          var datacard_number=$(this).val();
          if(datacard_number==""){
           $(".datacard_number_error").html("Can't Left This Blank");
          } else{
            $(".datacard_number_error").html("");
          }
        });

       


        /*Amount*/
        $("#datacardrecharge-amount").keyup(function(){
          var datacard_amount=$(this).val();
          if(isNaN(datacard_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var datacard_amount=$(this).val();
          if(datacard_amount==""){
            $(".datacard_amount_error").html("Can't Left This Blank");
          } else{
            $(".datacard_amount_error").html("");
          }
        });

         /*Operator*/
        $("#datacardrecharge-operator").change(function(){
         var datacard_operator=$(this).val();
         var datacard_number=$("#datacardrecharge-service_number");
        var datacard_amount=$("#datacardrecharge-amount");
         if(datacard_operator==""){
          $(".datacard_operator_error").html("Please Select Operator");
         } else if(datacard_number.val() !='' && datacard_amount.val() !=''){
            $('#button-datacard-recharge').prop('disabled', false);
         } else{
          $(".datacard_operator_error").html("");
         }
      });


        $('#button-datacard-recharge').prop('disabled', true);
        $('#form-data-card-recharge input[type="text"]').keyup(function() {
        var datacard_number=$("#datacardrecharge-service_number");
        var datacard_amount=$("#datacardrecharge-amount");
        var datacard_operator=$("#datacardrecharge-operator");
        if(datacard_number.val() !='' && datacard_amount.val() !='' && datacard_operator.val() !='') {
           $('#button-datacard-recharge').prop('disabled', false);
        }
        });
      /*DATACARD VALIDATIONS END*/

      /*BUS VALIDATIONS*/

      /*Bus From*/
      $("#bus_from").blur(function(){
        var bus_from=$(this).val();
        if(bus_from==""){
          $(".bus_from_error").html("Can't Left This Blank");
        } else{
          $(".bus_from_error").html("");
        }
      })

      /*Bus To*/
      $("#bus_to").blur(function(){
        var bus_to=$(this).val();
        if(bus_to==""){
          $(".bus_to_error").html("Can't Left This Blank");
        } else{
          $(".bus_to_error").html("");
        }
      });

      /*Bus Date*/
      $("#bus_date").change(function(){
        var bus_from=$("#bus_from");
        var bus_to=$("#bus_to");
        if(bus_from.val() !='' && bus_to.val() !=''){
           $('#button-bus-booking').prop('disabled', false);
        }
      })

       $('#button-bus-booking').prop('disabled', true);
        $('#form-bus input[type="text"]').keyup(function() {
        var bus_from=$("#bus_from");
        var bus_to=$("#bus_to");
        var bus_date=$("#bus_date");
        if(bus_from.val() !='' && bus_to.val() !='' && bus_date.val() !='') {
           $('#button-bus-booking').prop('disabled', false);
        }
        });
      /*BUS VALIDATIONS END*/

     

      /*HOTEL VALIDATIONS*/

      /*City*/

      $("#hotel_city").blur(function(){
        var hotel_city=$(this).val();
        if(hotel_city==""){
          $(".hotel_city_error").html("Can't Left This Blank");
        } else{
          $(".hotel_city_error").html("");
        }
      })

       $('#button-hotel-search').prop('disabled', true);
        $('#hotel_city').keyup(function() {
             $('#button-hotel-search').prop('disabled', false);
   
        });
      /*HOTEL VALIDATIONS END*/

      /*FLIGHT VALIDATIONS*/

      /*flight From*/
      $("#flight_from").blur(function(){
        var flight_from=$(this).val();
        if(flight_from==""){
          $(".flight_from_error").html("Can't Left This Blank");
        } else{
          $(".flight_from_error").html("");
        }
      })

      /*flight To*/
      $("#flight_to").blur(function(){
        var flight_to=$(this).val();
        if(flight_to==""){
          $(".flight_to_error").html("Can't Left This Blank");
        } else{
          $(".flight_to_error").html("");
        }
      });

      /*flight Date*/
      $("#flight_date").change(function(){
        alert($(this).val());
      })
      /*FLIGHT VALIDATIONS END*/


      /*MOVIE VALIDATIONS*/

      /*City*/
      $("#movie_city").blur(function(){
        var movie_city=$(this).val();
        if(movie_city==""){
          $(".movie_city_error").html("Can't Left This Blank");
        } else{
          $(".movie_city_error").html("");
        }
      })

      $('#button-movie-search').prop('disabled', true);
        $('#movie_city').keyup(function() {
             $('#button-movie-search').prop('disabled', false);
   
        });

      /*MOVIE VALIDATIONS END*/

/*INSURANCE VALIDATIONS*/
 /*Mobile Number*/
       $("#insurance_number").keyup(function(){
          var mobile_number=$(this).val();
          if(mobile_number==0 || mobile_number==1 || mobile_number==2 || 
            mobile_number==3 || mobile_number==4 || mobile_number==5 || mobile_number==6 || isNaN(mobile_number)){
            $(this).val("");
          } 
        }).blur(function(){
          var mobile_number=$(this).val();
          if(mobile_number==""){
           $(".insurance_mob").html("Can't Left This Blank");
          } else if(mobile_number.length<10 || mobile_number.length>10){
            $(".insurance_mob").html("Please Enter Correct Number");
          } else{
            $(".insurance_mob").html("");
          }
        });

       

        /*Amount*/
        $("#insurance-amount").keyup(function(){
          var insurance_amount=$(this).val();
          if(isNaN(insurance_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var insurance_amount=$(this).val();
          if(insurance_amount==""){
            $(".insurance_amount_error").html("Can't Left This Blank");
          } else{
            $(".insurance_amount_error").html("");
          }
        });

         /*Select insurance*/
        $("#insurance-operator").change(function(){
         var insurance_type=$(this).val();
         var insurance_number=$("#insurance_number");
        var insurance_amount=$("#insurance-amount");
         if(insurance_type==""){
          $(".insurance_type_error").html("Please Select Operator");
         }else if(insurance_number.val() !='' && insurance_amount.val() !=''){
          $('#button-insurance').prop('disabled', false);
         }
        else{
          $(".insurance_type_error").html("");
         }
        })

         $('#button-insurance').prop('disabled', true);
        $('#form-insurance input[type="text"]').keyup(function() {
        var insurance_number=$("#insurance_number");
        var insurance_amount=$("#insurance-amount");
        var insurance_type=$("#insurance-operator");
        if(insurance_number.val() !='' && insurance_amount.val() !='' && insurance_type.val() !='') {
           $('#button-insurance').prop('disabled', false);
        }
        });

/*INSURANCE VALIDATIONS END*/

/*IRCTC VALIDATIONS*/
 /*train From*/
      $("#train_from").blur(function(){
        var train_from=$(this).val();
        if(train_from==""){
          $(".train_from_error").html("Can't Left This Blank");
        } else{
          $(".train_from_error").html("");
        }
      })

      /*Train To*/
      $("#train_to").blur(function(){
        var train_to=$(this).val();
        if(train_to==""){
          $(".train_to_error").html("Can't Left This Blank");
        } else{
          $(".train_to_error").html("");
        }
      });

      /*Train Date*/
      $("#train_date").change(function(){
        var train_from=$("#train_from");
        var train_to=$("#train_to");
        if(train_from.val() !='' && train_to.val() !=''){
           $('#button-train-booking').prop('disabled', false);
        }
      })

       $('#button-train-booking').prop('disabled', true);
        $('#form-train input[type="text"]').keyup(function() {
        var train_from=$("#train_from");
        var train_to=$("#train_to");
        var train_date=$("#train_date");
        if(train_from.val() !='' && train_to.val() !='' && train_date.val() !='') {
           $('#button-trains-booking').prop('disabled', false);
        }
        });
/*IRCTC VALIDATIONS END*/
/*MONEY TRANSFER VALIDATIONS*/

/*through IFSC*/
 $("#beneficiaryform-beneficiary_name").blur(function(){
        var ben_name=$(this).val();
        if(ben_name==""){
          $(".ifsc_error1").html("Can't Left This Blank");
        } else{
          $(".ifsc_error1").html("");
        }
      });

 $("#beneficiaryform-beneficiary_nick_name").blur(function(){
        var nick_name=$(this).val();
        if(nick_name==""){
          $(".ifsc_error2").html("Can't Left This Blank");
        } else{
          $(".ifsc_error2").html("");
        }
      });

  $("#beneficiaryform-beneficiary_bank_name").change(function(){
         var bank_name=$(this).val();
         if(bank_name==""){
          $(".ifsc_error3").html("Please Select Operator");
         }
         else{
          $(".ifsc_error3").html("");
          
         }
        })

 $("#beneficiaryform-beneficiary_ifsc_code").blur(function(){
        var ifsc_code=$(this).val();
        if(ifsc_code==""){
          $(".ifsc_error4").html("Can't Left This Blank");
        } else{
          $(".ifsc_error4").html("");
        }
      });

 $("#beneficiaryform-beneficiary_account_no").blur(function(){
        var acc_no=$(this).val();
        if(acc_no==""){
          $(".ifsc_error5").html("Can't Left This Blank");
        } else{
          $(".ifsc_error5").html("");
        }
      });

 $("#beneficiaryform-beneficiary_mdn").keyup(function(){
          var mobile_number=$(this).val();
          if(mobile_number==0 || mobile_number==1 || mobile_number==2 || 
            mobile_number==3 || mobile_number==4 || mobile_number==5 || mobile_number==6 || isNaN(mobile_number)){
            $(this).val("");
          } 
        }).blur(function(){
          var mobile_number=$(this).val();
          if(mobile_number==""){
           $(".ifsc_error6").html("Can't Left This Blank");
          } else if(mobile_number.length<10 || mobile_number.length>10){
            $(".ifsc_error6").html("Please Enter Correct Number");
          } else{
            $(".ifsc_error6").html("");
          }
        });

         $("#beneficiaryform-amount").keyup(function(){
          var ifsc_amount=$(this).val();
          if(isNaN(ifsc_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var ifsc_amount=$(this).val();
          if(ifsc_amount==""){
            $(".ifsc_error7").html("Can't Left This Blank");
          } else{
            $(".ifsc_error7").html("");
          }
        });

        $('#ifsc_submit').prop('disabled', true);
        $('#beneficiaryform-beneficiary_name').keyup(function() {
        var ben_name=$("#beneficiaryform-beneficiary_name");
        if(ben_name.val() !='') {
           $('#ifsc_submit').prop('disabled', false);
        }
        });


/*Through MMID*/

$("#mmid-beneficiaryform-amount").keyup(function(){
          var mmid_amount=$(this).val();
          if(isNaN(mmid_amount)){
            $(this).val("");
          }
        }).blur(function(){
          var mmid_amount=$(this).val();
          if(mmid_amount==""){
            $(".mmid_error1").html("Can't Left This Blank");
          } else{
            $(".mmid_error1").html("");
          }
        });


$("#bene_mmid_beneficiary_name").blur(function(){
        var mmid_bene_name=$(this).val();
        if(mmid_bene_name==""){
          $(".mmid_error2").html("Can't Left This Blank");
        } else{
          $(".mmid_error2").html("");
        }
      });
$("#beneficiaryform-mmid-mdn").keyup(function(){
          var mobile_number=$(this).val();
          if(mobile_number==0 || mobile_number==1 || mobile_number==2 || 
            mobile_number==3 || mobile_number==4 || mobile_number==5 || mobile_number==6 || isNaN(mobile_number)){
            $(this).val("");
          } 
        }).blur(function(){
          var mobile_number=$(this).val();
          if(mobile_number==""){
           $(".mmid_error3").html("Can't Left This Blank");
          } else if(mobile_number.length<10 || mobile_number.length>10){
            $(".mmid_error3").html("Please Enter Correct Number");
          } else{
            $(".mmid_error3").html("");
          }
        });

  $("#beneficiaryform_mmid_no").blur(function(){
        var mmid_bene_no=$(this).val();
        if(mmid_bene_no==""){
          $(".mmid_error4").html("Can't Left This Blank");
        } else{
          $(".mmid_error4").html("");
        }
      });

  $('#beneficiary-mmid-submit-button').prop('disabled', true);
        $('#form-train input[type="text"]').keyup(function() {
        var train_from=$("#train_from");
        var train_to=$("#train_to");
        var train_date=$("#train_date");
        if(train_from.val() !='' && train_to.val() !='' && train_date.val() !='') {
           $('#beneficiary-mmid-submit-button').prop('disabled', false);
        }
        });
/*MONEY TRANSFER VALIDATIONS END*/



      });


    