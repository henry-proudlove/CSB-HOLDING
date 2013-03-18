function randFlag(n){
	flag = Math.ceil(Math.random()*n);
	return n;
}

/*jQuery.fn.flagSwap = function(){
	$e = $(this[0]);
	$e.addClass('rotate');
	setTimeout(function(){
		$e.removeAttr('class').addClass(
			'flag-shape flag-' + Math.ceil(Math.random()*21)
		);
	}, 500);
}*/

jQuery.fn.makeFlags = function(){
	
	w = $(this).width();
	h = $(this).height();
	div = 8;
	minw = 160;
	minh = 120;
	divw = Math.floor(w/minw);
	divh = Math.floor(h/minh);
	console.log(divw + ', ' + divh);
	n = divw*divh;
	pcw = 100/divw;
	pch = 100/divh;
	console.log(pcw + ', ' + pch); 
	style = 'width: ' + pcw + '%; height: ' + pch + '%;';
	for(i=0; i < n; i++){
		flagn = randFlag(21);
		$(this).append(
			'<div class="flag" style="' + style + '"><div class="anim-1 flag-shape flag-' 
			+ Math.ceil(Math.random()*21) + 
			'"></div></div>');
	}
	t = 0;
	/*(function loop() {
		var randT = Math.round(Math.random() * 20);
		setTimeout(function() {
			t++;
			if(t%3){
				randf = Math.ceil(Math.random()*n);
				$('.flag-shape').eq(randf).flagSwap();
				loop();
			}else{
				loop();
			} 
		}, randT);
	}());*/
}

$(document).ready(function(){
	$('#flags').makeFlags();
});