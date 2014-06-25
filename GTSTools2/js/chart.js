		//global variable _ temp
		var platform=[];
		var u7=[];
		var u714=[];
		var u1430=[];
		var u30=[];
		var engineername=[];
		var count=0;
		var countt=0;
		var country=[];
		var lob=[];
		var platformname=[];
		var platformgroup=[];
		var machtype=[];
		var machmdl=[];
		var machser=[];
		var tomgrp=[];
		var spad=[];
		var mainttype=[];
		var callnbr=[];
		var resolutiontype=[];
		var currreasc=[];
		var inctsevy=[];
		var custno=[];
		var custabbrname=[];
		var custcontctname=[];
		var custtelno=[];
		var daysgroup=[];
		var daysunclosed=[];
		var inctcreatnts=[];
		var localarrivedate=[];
		var localarrivetime=[];
		var currirsts=[];
		var empabbrname=[];
		var inccount=[];
		var primirdestin=[];
		var remark=[];
		var tooltip=[];
		var engineercount=[];
		var ip="9.187.180.143";

		jQuery(document).ready(function() {
	 		// initiate layout and plugins			
	 		App.init();
	 	});

		//to populate data for chart1	
		function a() {

		     jQuery.ajax({
		         type: "GET",
		         url: 'http://localhost/GTSTools/proxy5.php?content=unclscall',
		         contentType: "application/json; charset=utf-8",
		         dataType: "json",
		         async: false,
		         success: function (data) {
					$(data).each(function(index,value){
						platform.push(value.platform_group);
						u7.push(value.uncl_call_7);
						u714.push(value.uncl_call_7_14);
						u1430.push(value.uncl_call_14_30);
						u30.push(value.uncl_call_30);
						count++;
					});
		         },

		         error: function (jqXHR, status) {
		             // error handler
					 alert("error");
		         }	
			
		}); 
		}

	//get data of engineers to populate data for chart2
		function b(){
			 jQuery.ajax({
	         type: "GET",
	         url: 'http://localhost/GTSTools/proxy5.php?content=engineer',
	         contentType: "application/json; charset=utf-8",
	         dataType: "json",
	         async: false,
	         success: function (data) {
				//console.log(data);

				$(data).each(function(index,value){
					//engineername.push([(value.EngineerName),(value.calls)]);
					engineername.push([(value.emp_name)]);
					engineercount.push(value.call_count);
					//call.push(value.calls);
				});

	         },

	         error: function (jqXHR, status) {
	             // error handler
				 alert("error");
	         }	
		
			});
		}

	//function for chart1 (Number of Open Incidents per Platform )
		$(function () {
		 
		a();
	
		var s1 = [];
		var s2 = [];
		var s3 = [];
		var s4 = [];
		for(var i = 0; i < u7.length; i++){
			s1.push(parseInt(u7[i]));
			s2.push(parseInt(u714[i]));
			s3.push(parseInt(u1430[i]));
			s4.push(parseInt(u30[i]));
		}
		
		var s5 = []; //empty series just for total labels -- flexible value

		  var pLabelsTotal = []; // array of totals above each column
		  for (var i = 0; i < s1.length; i++){
		      pLabelsTotal.push(s1[i] + s2[i] + s3[i] + s4[i]);   
		  }

		  //size of plabeltotals
		  for(var x = 0; x < count; x++){
		  	if(pLabelsTotal[x] % 10 < 10)
				s5.push(10);
			else s5.push(20);
			}
	        $('#chart1').highcharts({
	            chart: {
	                type: 'column',
	                zoomType: 'y' 
	            },
	            xAxis: {
	                categories: platform,
	                labels: {
                   		rotation: -45,
                	}
	            },
	            yAxis: {
	                min: 0,	              
	                title: {
	                    text: ''
	                },
	                stackLabels: {
	                    enabled: true,
	                    style: {
	                        fontWeight: 'bold',
	                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
	                    }
	                }
	            },
	            title:{
	        		text:''
			    },
			    subTitle:{
			        text:''
			    },
	            legend: {
	                align: 'right',
	                x: -50,
	                verticalAlign: 'top',
	                y: 5,
	                floating: true,
	                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
	                borderColor: '#CCC',
	                borderWidth: 1,
	                shadow: true
	            },
	            tooltip: {
	                formatter: function() {
	                    return '<b>'+ this.x +'</b><br/>'+
	                        this.series.name +': '+ this.y +'<br/>'+
	                        'Total: '+ this.point.stackTotal;
	                }
	            },
	            plotOptions: {
	                column: {
	                    stacking: 'normal',
	                    cursor: 'pointer',
	                    dataLabels: {
	                        enabled: false,
	                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
	                        style: {
	                            textShadow: '0 0 3px black, 0 0 3px black'
	                        }
	                    },
	                    point: {
	                    	events: {
                       			 click: function () {
                       			 	var pointIndex = this.x;
                       			 	var data1 = (pointIndex+1) +", "+this.y;
                       			 	var seriesName = this.series.name;
                       			 	var seriesIndex = 0;

                       			 	if(seriesName == "Unclosed call > 30 days"){
                       			 		seriesIndex = 3;
                       			 	}
                       			 	else if(seriesName == "Unclosed call > 14 Days <= 30 Days"){
                       			 		seriesIndex = 2;
                       			 	}
                       			 	else if(seriesName == "Unclosed call > 7 Days <= 14 Days"){
                       			 		seriesIndex = 1;
                       			 	}
                       			 	else{
                       			 		seriesIndex = 0;
                       			 	}

                       			 	country=[];
							    	ob=[];
							    	platformname=[];
							    	platformgroup=[];
							    	machtype=[];
							    	machmdl=[];
							    	machser=[];
							    	tomgrp=[];
							    	mainttype=[];
							    	callnbr=[];
							    	resolutiontype=[];
							    	currreasc=[];
							    	inctsevy=[];
							    	custno=[];
							    	custabbrname=[];
							    	custcontctname=[];
							    	custtelno=[];
							    	daysgroup=[];
							    	daysunclosed=[];
							    	inctcreatnts=[];
							    	localarrivedate=[];
							    	localarrivetime=[];
							    	currirsts=[];
							    	empabbrname=[];
							    	inccount=[];
							    	primirdestin=[];
							    	remark=[];
							    	spad=[];
							    	countt=0;

								    $('#info3').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data1);
								    jQuery.ajax({
							         type: "GET",
							         url: 'http://localhost/GTSTools/proxy5.php?content=unclscallDetail&param1='+seriesIndex+'&param2='+platform[pointIndex], 
							         contentType: "application/json; charset=utf-8",
							         dataType: "json",
							         async: false,
							         success: function (data) {
										$(data).each(function(index,value){
											country.push(value.cntry);
											lob.push(value.lob);
											platformname.push(value.platform);
											platformgroup.push(value.platform_group);
											machtype.push(value.mach_type);
											machmdl.push(value.mach_mdl);
											machser.push(value.mach_ser);
											tomgrp.push(value.tom_grp);
											mainttype.push(value.maint_type);
											callnbr.push(value.call_nbr);
											resolutiontype.push(value.resolution_type)
											currreasc.push(value.curr_reas_c);
											inctsevy.push(value.inct_sevy);
											custno.push(value.cust_no);
											custabbrname.push(value.cust_abbr_name);
											custcontctname.push(value.cust_contct_name);
											custtelno.push(value.cust_tel_no);
											daysgroup.push(value.days_group);
											daysunclosed.push(value.days_unclosed);
											inctcreatnts.push(value.inct_creatn_ts);
											localarrivedate.push(value.local_arrive_date);
											localarrivetime.push(value.local_arrive_time);
											currirsts.push(value.curr_ir_sts);
											empabbrname.push(value.emp_abbr_name);
											inccount.push(value.inc_count);
											primirdestin.push(value.prim_ir_destn);
											spad.push(value.scratchpad);
											if(value.remarks==null || value.remarks=="NA") remark.push("");
											else remark.push(value.remarks);
											countt++;
										});

					        		 },

							         error: function (jqXHR, status) {
							             // error handler
										 alert("error");
							         }	
						
								});
								var i;
						    	var j=1;
						    	var table="";

								for(i=0;i<countt;i++,j++) {
									tooltip[i]="tooltip"+i;
									table = table + "<tr><td>"+j+"</td><td><div id="+tooltip[i]+">"+callnbr[i]+"</div></td><td>"+platformname[i]+"</td><td>"+machtype[i]+"</td><td>"+machmdl[i]+"</td><td>"+machser[i]+"</td><td>"+inctsevy[i]+"</td><td>"+custabbrname[i]+"</td><td>"+daysunclosed[i]+"</td><td>"+inctcreatnts[i]+"</td><td>"+currirsts[i]+"</td><td>"+empabbrname[i]+"</td><td><FORM NAME='remark'><textarea name='remarks' id="+callnbr[i]+" onkeyup='inputremarks(this.form)'>"+remark[i]+"</textarea></form></td></tr>";
																	 
								}

								$('#dialog').html('<div class="table"><table id="myTable" class="tablesorter"><thead><tr><th align="center">No</th><th>Call Number</th><th>Platform</th><th>Type</th><th>Model</th><th>Series</th><th>Incident Severity</th><th>Customer</th><th>Days Unclosed</th><th>Inct Creatn Ts</th><th>Curr Ir Sts</th><th>Employee</th><th>Remark</th></tr></thead><tbody>'+table+'</tbody></table></div>');

							 	$('#myModal').modal('show');
					
								$(document).ready(function() {
								  var oTable = $('#sample_1').dataTable();
								  oTable.fnDestroy();
								} );

								$('#table-content').html(table);

						        $(document).ready(function() {
								  var oTable = $('#sample_1').dataTable();
								  oTable.fnDraw();
								} );

								}
                    		}

	                    }
	                }
	            },
	             credits: {
				    enabled: false
				},
	            series: [{
	            	id: '3',
	            	showInLegend: false,
	                name: 'Unclosed call > 30 days',
	                data: s4,
	                color: '#cf000f'
	            }, {
	            	id: '2',
	            	showInLegend: false,
	                name: 'Unclosed call > 14 Days <= 30 Days',
	                data: s3,
	                color: '#e67e22'
	            }, {
	            	id: '1',
	            	showInLegend: false,
	                name: 'Unclosed call > 7 Days <= 14 Days',
	                data: s2,
	                color: '#f1c40f'
	            }, {
	            	id: '0',
	            	showInLegend: false,
	                name: 'Unclosed call <= 7 days',
	                data: s1,
	                color: '#25a65b'
	            }]
	        });
			
	    });

	
	// function for char2 (top 10 engineer)
		$(function () {
		
		b();
		var engName = [];

        for(var i = 0; i < engineercount.length; i++){
			engName.push(parseInt(engineercount[i]));
		}

        $('#chart2').highcharts({
            chart: {
                type: 'bar',
                zoomType: 'y'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: [engineername[0],engineername[1],engineername[2], engineername[3],engineername[4],engineername[5],engineername[6],engineername[7],engineername[8],engineername[9]],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: '',
                    align: 'high'
                },
                labels: {
                    
                }
            },
            tooltip: {
                formatter: function() {
	                    return '<b>'+ this.x +'</b><br/>'+
	                        'Total: '+ this.y;
	            }
            },
            plotOptions: {
                bar: {
                	cursor: 'pointer',
                    dataLabels: {
                        enabled: true
                    },
                    point: {
	                    	events: {
                       			 click: function () {
                       			 	var pointIndex = Math.abs(this.x - 9);
                       			 	var data1 = this.y +", "+ (pointIndex + 1);
                       			 	var seriesIndex = 0;

									country=[];
							    	lob=[];
							    	platformname=[];
							    	platformgroup=[];
							    	machtype=[];
							    	machmdl=[];
							    	machser=[];
							    	tomgrp=[];
							    	mainttype=[];
							    	callnbr=[];
							    	resolutiontype=[];
							    	currreasc=[];
							    	inctsevy=[];
							    	custno=[];
							    	custabbrname=[];
							    	custcontctname=[];
							    	custtelno=[];
							    	daysgroup=[];
							    	daysunclosed=[];
							    	inctcreatnts=[];
							    	localarrivedate=[];
							    	localarrivetime=[];
							    	currirsts=[];
							    	empabbrname=[];
							    	inccount=[];
							    	primirdestin=[];
							    	spad=[];
							    	remark=[];
							    	countt=0;

							    	$('#info3').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data1);
								      var po=pointIndex+1;
								      jQuery.ajax({
									         type: "GET",
									         url: 'http://localhost/GTSTools/proxy5.php?content=engineerDetail&param1='+po, 
									         contentType: "application/json; charset=utf-8",
									         dataType: "json",
									         async: false,
									         success: function (data) {
												$(data).each(function(index,value){
													country.push(value.cntry);
													lob.push(value.lob);
													platformname.push(value.platform);
													platformgroup.push(value.platform_group);
													machtype.push(value.mach_type);
													machmdl.push(value.mach_mdl);
													machser.push(value.mach_ser);
													tomgrp.push(value.tom_grp);
													mainttype.push(value.maint_type);
													callnbr.push(value.call_nbr);
													resolutiontype.push(value.resolution_type)
													currreasc.push(value.curr_reas_c);
													inctsevy.push(value.inct_sevy);
													custno.push(value.cust_no);
													custabbrname.push(value.cust_abbr_name);
													custcontctname.push(value.cust_contct_name);
													custtelno.push(value.cust_tel_no);
													daysgroup.push(value.days_group);
													daysunclosed.push(value.days_unclosed);
													inctcreatnts.push(value.inct_creatn_ts);
													localarrivedate.push(value.local_arrive_date);
													localarrivetime.push(value.local_arrive_time);
													currirsts.push(value.curr_ir_sts);
													empabbrname.push(value.emp_abbr_name);
													inccount.push(value.inc_count);
													primirdestin.push(value.prim_ir_destn);
													if(value.remarks==null || value.remarks=="NA") remark.push("");
													else remark.push(value.remarks);
													spad.push(value.scratchpad);
													countt++;
												});

									         },

									         error: function (jqXHR, status) {
									             // error handler
												 alert("error");
									         }
									         
											
									});
									var i;
							    	var j=1;
							    	var table="";
									for(i=0;i<countt;i++,j++){
										tooltip[i]="tooltip"+i;
										table = table + "<tr><td>"+j+"</td><td><div id="+tooltip[i]+">"+callnbr[i]+"</div></td><td>"+platformname[i]+"</td><td>"+machtype[i]+"</td><td>"+machmdl[i]+"</td><td>"+machser[i]+"</td><td>"+inctsevy[i]+"</td><td>"+custabbrname[i]+"</td><td>"+daysunclosed[i]+"</td><td>"+inctcreatnts[i]+"</td><td>"+currirsts[i]+"</td><td>"+empabbrname[i]+"</td><td><FORM NAME='remark'><textarea name='remarks' id="+callnbr[i]+" onkeyup='inputremarks(this.form)'>"+remark[i]+"</textarea></form></td></tr>";
									}

									$('#dialog').html('<div class="table"><table id="myTable2" class="tablesorter"><thead><tr><th>No</th><th>Call Number</th><th>Platform</th><th>Type</th><th>Model</th><th>Series</th><th>Incident Severity</th><th>Customer</th><th>Days Unclosed</th><th>Inct Creatn Ts</th><th>Curr Ir Sts</th><th>Employee</th><th>Remarks</th></tr></thead><tbody>'+table+'</tbody></table></div>');						
									
									$('#myModal').modal('show');

									$(document).ready(function() {
									  var oTable = $('#sample_1').dataTable();
									  oTable.fnDestroy();
									} );

									$('#table-content').html(table);

							        $(document).ready(function() {
									  var oTable = $('#sample_1').dataTable();
									  oTable.fnDraw();
									} );

								}
                    		}

	                    }
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Total',
                color: '#336e7b',
                showInLegend: false,
                data: engName
            }]
        });
    });

	//for submit remarks
		function inputremarks(frm){
  			var remakx = frm.remarks.value;
  			if(frm.remarks.value=="") remakx = "NA";
  			jQuery.ajax({
				type: "GET",
				url: 'http://localhost/GTSTools/proxy5.php?content=rmks&param1='+remakx+'&param2='+frm.remarks.id, 
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				async: true
			});
 		}
