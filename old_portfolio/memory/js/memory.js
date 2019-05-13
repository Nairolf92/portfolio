	function init() { // Fonction principale
		NBLIG = 3;
		NBCOL = 4;
		NBMELANGE = NBLIG*NBCOL*2;
		
		CARTEW = 300 - (NBLIG*40);
		CARTEH = CARTEW;
		DX = 210 - (NBCOL*30);
		DY = 90 - (NBLIG*15);

		canvas = document.getElementById('canvas');
		gc = canvas.getContext('2d');
		plateau = new Array(NBLIG); 
		for(var i=0; i < NBLIG; i++) {
			plateau[i] = new Array(NBCOL);
		}	

		premiereCarte = undefined;
		secondeCarte = undefined;
		nbPairesTrouvees = 0;

		canvas.height = CARTEH*NBLIG+DY*NBLIG+DY;
		canvas.width = CARTEW*NBCOL+DX*NBCOL+DX;

		canvas.addEventListener("mousedown", choisirCarte, false);
		
		setTimeout(function() { creerPlateau(); },600);
	}
	
	function aleat(min, max) { 
		return Math.floor(Math.random() * (max - min)) + min;
	}

	function choisirCarte(evt) {
			//clic souris
			var x = evt.clientX;
			var y = evt.clientY;
			// marges liées au canevas
			x -= canvas.offsetLeft;
			y -= canvas.offsetTop;
			var carte = undefined;

			for(var i = 0; i < NBLIG; i++) {
				for(var j = 0; j < NBCOL; j++) {
					if(x >= plateau[i][j].posX && x <= (plateau[i][j].posX + CARTEW) && y >= plateau[i][j].posY && y <= (plateau[i][j].posY + CARTEH) && plateau[i][j].trouve == false) {
						carte = plateau[i][j];
						if(premiereCarte == undefined) {
							premiereCarte = carte;
							setTimeout(function() { carte.visible = true; },180);
							retrecissement(0,premiereCarte);
						} else if (secondeCarte == undefined && carte != premiereCarte) {
							secondeCarte = carte;
							setTimeout(function() { carte.visible = true; },180);
							retrecissement(0,secondeCarte);

							if(premiereCarte.face == secondeCarte.face) {
								premiereCarte.trouve = true;
								secondeCarte.trouve = true;
								reinitCartes();
								nbPairesTrouvees++;
								if(nbPairesTrouvees == (NBLIG * NBCOL) / 2) {
									setTimeout(function() { victoire(); },500);
								}
								} else {
								setTimeout(function() { reinitCartes(); },750);
							}
						}
					}
				}
			}
		}
	
	function victoire() {
		gc.clearRect(0, 0, canvas.width, canvas.height);
		gc.globalAlpha = 1;
		gc.font = "4em Arial";
		gc.textAlign = "center";
		gc.fillStyle = "white";
		gc.fillText("Felicitations !", canvas.width/2, canvas.height/2);
	}
	
	function retrecissement(rotation,carte) {
		if(rotation < 1) {
			rotation+=0.04;
			carte.flip = rotation;
			afficherPlateau();
			setTimeout(function() { retrecissement(rotation,carte); },1000/120);
		} else {
			setTimeout(function() { agrandissement(rotation,carte); },1000/120);
		}
	}
	function agrandissement(rotation,carte) {
		if(rotation > 0) {
			rotation-=0.04;
			carte.flip = rotation;
			afficherPlateau();
			setTimeout(function() { agrandissement(rotation,carte); },1000/120);
		}
	}
	
	function melangerPlateau() {
		var nb;
		for(var i = 0; i < NBMELANGE; i++) {
			var i1 = aleat(0, NBLIG);
			var j1 = aleat(0, NBCOL);
			var i2 = aleat(0, NBLIG);
			var j2 = aleat(0, NBCOL);
			nb = plateau[i1][j1];
			plateau[i1][j1] = plateau[i2][j2];
			plateau[i2][j2] = nb;
		}
	}
	

	function calculerCoordonnees() {
		for(var i = 0; i < NBLIG; i++) {
			for(var j = 0; j < NBCOL; j++) {
				if(i == 0 && j == 0) {
					plateau[i][j].posX = DX;
					plateau[i][j].posY = DY;
				} else if (i == 0 && j != 0) {
					plateau[0][j].posY = DY;
					plateau[0][j].posX = (j+1) * DX + j * CARTEW;
				} else if (i != 0 && j == 0) {
					plateau[i][0].posX = DX;
					plateau[i][0].posY = (i+1) * DY + i * CARTEH;
				} else {
					plateau[i][j].posX = (j+1) * DX + j * CARTEW;
					plateau[i][j].posY = (i+1) * DY + i * CARTEH;
				}
			}	
		}
	}
	
	function afficherPlateau() {
		gc.clearRect(0, 0, canvas.width, canvas.height);
		for(var i = 0; i < NBLIG; i++) {
			for(var j = 0; j < NBCOL; j++) {
				plateau[i][j].dessinerCarte();
			}
		}
	}
	
	function reinitCartes() {
		premiereCarte.visible = false;
		secondeCarte.visible = false;
		premiereCarte = undefined;
		secondeCarte = undefined;
		afficherPlateau();
	}
	
	function creerPlateau() {
		var cartes = new Array;
		for(var i = 1; i <= (NBLIG*NBCOL) / 2; i++) {
			cartes.push(new carte(i));
			cartes.push(new carte(i));
		}
		var a = 0;
		for(var i = 0; i < NBLIG; i++) {
			for(var j = 0; j < NBCOL; j++) {
				plateau[i][j] = cartes[a];
				a++;
			}
		}
		melangerPlateau();
		calculerCoordonnees();
		afficherPlateau();
	}