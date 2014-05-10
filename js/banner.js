$(function(){
	
	$("#kinMaxShow").kinMaxShow({
	
		height:426,
		button:{
			showIndex:false,
			normal:{background:'url(images/btn.png) no-repeat -14px 0',marginRight:'8px',border:'0',bottom:'53px',right:'0'},
			focus:{background:'url(images/btn.png) no-repeat 0 0',border:'0'}
		},
	
		callback:function(index,action){
			switch(index){
				case 0 :
				if(action=='fadeIn'){
					$(this).find('.sub_1_1').animate({left:'-40px'},600)
					$(this).find('.sub_1_2').animate({top:'100px'},600)
					$(this).find('.sub_1_3').animate({top:'223px'},700)
					
				}else{
					$(this).find('.sub_1_1').animate({left:'-150px'},600)
					$(this).find('.sub_1_2').animate({top:'40px'},600)
					$(this).find('.sub_1_3').animate({top:'320px'},600)
					
				};
				break;
						
				case 1 :
				if(action=='fadeIn'){
					$(this).find('.sub_2_1').animate({left:'-40px'},600)
					$(this).find('.sub_2_2').animate({top:'100px'},600)
					$(this).find('.sub_2_3').animate({top:'223px'},700)
					
				}else{
					$(this).find('.sub_2_1').animate({left:'-150px'},600)
					$(this).find('.sub_2_2').animate({top:'40px'},600)
					$(this).find('.sub_2_3').animate({top:'320px'},600)
				};
				break;
				
				case 2 :
				if(action=='fadeIn'){
					$(this).find('.sub_3_1').animate({left:'-40px'},600)
					$(this).find('.sub_3_2').animate({top:'100px'},600)
					$(this).find('.sub_3_3').animate({top:'223px'},700)
					
				}else{
					$(this).find('.sub_3_1').animate({left:'-150px'},600)
					$(this).find('.sub_3_2').animate({top:'40px'},600)
					$(this).find('.sub_3_3').animate({top:'320px'},600)
					
				};
				break;
						
													
			}
		}
	
	});


});


/* 下面是ul外面套DIV 不用可删除 */
function pageInit(){
		var uls = document.getElementsByTagName("ul");
		var operUL;
		for(var i = 0; i < uls.length; i++){
			var curUL = uls[i];
			if(curUL.className == "kinMaxShow_button"){
				operUL = curUL;
				curUL.parentNode.removeChild(curUL);
				break;
			}
		}
		if(operUL){
			var cdiv = document.createElement("div");
			cdiv.className = "banner-w1000";
			cdiv.appendChild(operUL);
			document.getElementById("kinMaxShow").appendChild(cdiv);
		}
	}