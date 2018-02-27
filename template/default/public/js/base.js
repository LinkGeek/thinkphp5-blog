
layui.use(['util','layer'], function(){
	var util = layui.util,
	layer = layui.layer;

	/*右下角按钮*/
	util.fixbar({
		bar1: '&#xe606;'
		,click: function(type){
			console.log(type);
			if(type === 'bar1'){
				//layer.msg('联系客服');
				qqService();
			}
		}
	});
});

function qqService(){
	var C=window.open("http://wpa.qq.com/msgrd?v=3&uin=941192051&site=qq&menu=yes","3png service","width=800, height=500,top=50,left=50,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
}
