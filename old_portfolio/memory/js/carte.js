function preChargement(){
	var img0 = new Image();
	img0.src = "img/dos.png";
	var img = new Array;
	for(var i = 1; i <= 6;i++) {
		img[i] = new Image();
		img[i].src = "img/"+ i +".png";
	}
}

function carte(f) {
	
	this.posX = 0;
	this.posY = 0;
	this.face = f;
	this.visible = false;
	this.trouve = false;
	this.flip = 0;

	this.dessinerCarte = function() {
		var img = new Image();
		img.src = "img/dos.png";
		gc.globalAlpha = 1;
		if(this.visible || this.trouve) {
			for(var i = 1; i <= (NBLIG * NBCOL); i++) {
				if(f == i) {
					img.src = "img/"+ i + ".png";
				}
			}
		}
		if(this.trouve) {
			gc.globalAlpha = 0.4;
		}
			gc.drawImage(img,this.posX+(CARTEW*this.flip)/2,this.posY,CARTEW-(CARTEW*this.flip),CARTEH);
	}
}