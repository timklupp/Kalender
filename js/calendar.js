function Calendar() {

	var fixDate = moment().set('date', 1);
	var currentDate = moment();

	//Unterbindet die mehrfache Anzeige von actDay in paint()
	var cheater = 0;

	this.today = function(){
		fixDate = moment().set('date', 1);
		cheater = 0;
	}
	this.addMonth = function(){
		fixDate.add(1, 'M');
		cheater++;
	}

	this.subMonth = function(){
		fixDate.subtract(1, 'M');
		cheater--;
	}

	this.getDay = function(){
		return currentDate.format('D');
	}

	this.getDayTwo = function(day){
		var getDayTwo = moment().set('date', day);
		return getDayTwo.format("DD");
	}

	this.getMonth = function(format){
		return fixDate.format(format);
	}
	this.getYear = function(){
		return fixDate.format("YYYY");
	}
	this.preDays = function () {
		return fixDate.weekday()-1;
	}

	this.daysInMonth = function() {
		return fixDate.daysInMonth();
	}
	//this.getDayTwo(j)+"."+this.getMonth("MM")+"."+this.getYear()
	this.paint = function(){
	var calContent = "";
	var c = 0;
		for(var i=0;i<this.preDays();i++){
			calContent += "<td class='preDay'></td>";
			c++;
		}

		for(var j=1;j<=this.daysInMonth();j++){
			if(c>6){
				calContent += "</tr><tr>";
				c=0;
			}

			if(j.toString() === this.getDay() && cheater===0){
				calContent += "<td class='actDay activeDays' data-toggle='modal' data-target='#myModal'>"+j+"<div class='hidden'>"+this.getDayTwo(j)+"."+this.getMonth("MM")+"."+this.getYear()+"</div>"+"</td>";
			}
			else {
				calContent += "<td class='activeDays' data-toggle='modal' data-target='#myModal'>"+j+"<div class='hidden'>"+this.getDayTwo(j)+"."+this.getMonth("MM")+"."+this.getYear()+"</div>"+"</td>";
			}
			c++;

		}
		for(var i=0;i<(7-c);i++){
			calContent += "<td class='postDay'></td>";
		}

		var canvas 	= 	"<table class='table table-bordered'>";
			canvas +=	"<th>Mo</th><th>Di</th><th>Mi</th><th>Do</th><th>Fr</th><th>Sa</th><th>So</th>";
			canvas += 	"<tr>";
			canvas +=	calContent;
			canvas += 	"</tr><table>";
		return canvas;
	}
}


var calendar = new Calendar();

$(document).ready(function(){

var paintCanvas = function(){
	$("#control-rm").html(calendar.getMonth("MMMM"));
	$("#control-r").html(calendar.getYear());
	$("#calendar").html(calendar.paint());
};

	paintCanvas();

	$("[data-toggle='popover']").popover({
        placement : 'right'
    });

    $("#navHome").on("click", function(){
    	$(this).addClass("active");
    	$("#navSignup").removeClass("active");
    });

    $("#about").on( "click", function(){
  		$(this).toggleClass("active");
	});

	$("#contact").on( "click", function(){
  		$(this).toggleClass("active");
	});


	//Button Funktion, um auf den aktuellen Monat zurück zu springen. Bei einem Klick wird der Kalender neu generiert.
	$("#btntoday").on("click", function() {calendar.today();}).on( "click", paintCanvas);

	//Button Funktion, um auf den nächsten Monat anzuzeigen. Bei einem Klick wird der Kalender neu generiert.
	$("#btnnext").on( "click", function() {calendar.addMonth();}).on( "click", paintCanvas);

	//Button Funktion, um auf den vorigen Monat anzuzeigen. Bei einem Klick wird der Kalender neu generiert.
	$("#btnprev").on( "click", function() {calendar.subMonth();}).on( "click", paintCanvas);

	//Bei Klick auf .activeDays innerhalb des Kalenders, wird der versteckte html-code aus den generierten .activeDays ausgelesen und in var htmlString gespeichert
	//anschließend wird der (Datums)-String in der ID #modalTitle angezeigt.
	$( "#calendar" ).on( "click", ".activeDays", function() {
    var htmlString = $( this ).find(".hidden").html();
		$("#modalTitle").text(htmlString);
	});



});
