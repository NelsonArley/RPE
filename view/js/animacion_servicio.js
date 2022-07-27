var An = {

	paginacion: document.querySelectorAll("#paginacion li"),
	item:0,
	caja:document.querySelector("#animacion ul"),
	animacion:("animacion"),
	imagen:document.querySelectorAll("#animacion ul li"),
	avanzar: document.querySelector("#animacion #avanzar"),
	retroceder: document.querySelector("#animacion #retroceder"),
	velocidadSlide: 3000,
	formatearLoop: false 
}

var Man = {
	inicioSlide:function(){
		for(var i= 0; i<An.paginacion.length;i++)
		{
			An.paginacion[i].addEventListener("click",Man.paginacionSlide)
		}

		An.avanzar.addEventListener("click",Man.avanzar);
		An.retroceder.addEventListener("click", Man.retroceder);

		Man.intervalo();
	},

	paginacionSlide:function(item){

		An.item = item.target.parentNode.getAttribute("item")-1;

		Man.movimientosSlide(An.item);

	},

	avanzar: function()
	{
		if(An.item == An.imagen.length -1)
		{
			An.item = 0;
		}else 
		{
			An.item++;
		}

		Man.movimientosSlide(An.item);
	},


	retroceder:function()
	{
		if(An.item == 0)
		{
			An.item=An.imagen.length -1;
		}else
		{
			An.item--;
		}

		Man.movimientosSlide(An.item);
	},

	movimientosSlide:function(item){

		An.caja.style.left = item * -100 +"%";
		//console.log(item * -100+"%");
		for(var i=0; i < An.paginacion.length; i++)
		{
			An.paginacion[i].style.opacity =.5;
		}
		
		An.paginacion[item].style.opacity = 1;
		if(An.animacion == "animacion")
		{
			An.caja.style.transition = ".7s left ease-in-out";
		}
		if (An.animacion == "fade") 
		{
			An.imagen[item].style.opacity = 0;
			An.imagen[item].style.transition = ".7s opacity ease-in-out";
			setTimeout(function()
			{
				An.imagen[item].style.opacity = 1;
			},500)
		}

		
	},

	intervalo:function()
	{
		setInterval(function()
		{
			if(An.formatearLoop)
			{
				An.formatearLoop = false;
			}
			else
			{
				Man.avanzar();
			}

		}, An.velocidadSlide)
	}
}
Man.inicioSlide();