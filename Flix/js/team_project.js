$(document).ready(function(){
  $("img").hover(function(){
    $("img").css("background-color","yellow");
    },function(){
    $("img").css("background-color","none");
  });
  $(".a").click( function(){
  	
	if($(this).attr("id") == "starwars")
	{
		$("#action").toggle();
		$("#action").html("Title: Star Wars<br>Year: 1997<br>Director: George Lucas<br>").css("color", "grey");
	}
	if($(this).attr("id") == "avatar")
	{
		$("#action").toggle();
		$("#action").html("Title: Avatar<br>Year: 2009<br>Director: James Cameron<br>").css("color", "grey");
	}
	if($(this).attr("id") == "machete")
	{
		$("#action").toggle();
		$("#action").html("Title: Machete Kills<br>Year: 2013<br>Director: Robert Rodriguez<br>").css("color", "grey");
	}
	if($(this).attr("id") == "vendetta")
	{
		$("#action").toggle();
		$("#action").html("Title: V for Vendetta<br>Year: 2005<br>Director: James McTeigue<br>").css("color", "grey");
	}
	if($(this).attr("id") == "rundown")
	{
		$("#action").toggle();
		$("#action").html("Title: The Rundown<br>Year: 2003<br>Director: Peter Berg<br>").css("color", "grey");
	}
	if($(this).attr("id") == "transformers")
	{
		$("#action").toggle();
		$("#action").html("Title: Transformers<br>Year: 2007<br>Director: Michael Bay<br>").css("color", "grey");
	}
	if($(this).attr("id") == "helsing")
	{
		$("#adventure").toggle();
		$("#adventure").html("Title: Van Helsing<br>Year: 1997<br>Director: Stephen Sommers<br>").css("color", "grey");
	}
	if($(this).attr("id") == "totoro")
	{
		$("#animated").toggle();
		$("#animated").html("Title: My Neighbor Totoro<br>Year: 1988<br>Director: Hayao Miyazaki<br>").css("color", "grey");
	}
	if($(this).attr("id") == "howl")
	{
		$("#animated").toggle();
		$("#animated").html("Title: Howl's Moving Castle<br>Year: 2004<br>Director: Hayao Miyazaki<br>").css("color", "grey");
	}
	if($(this).attr("id") == "kiki")
	{
		$("#animated").toggle();
		$("#animated").html("Title: Kiki's Delivery Service<br>Year: 1989<br>Director: Hayao Miyazaki<br>").css("color", "grey");
	}
	if($(this).attr("id") == "treasure")
	{
		$("#animated").toggle();
		$("#animated").html("Title: Treasure Planet<br>Year: 2002<br>Director: Ron Clements<br>").css("color", "grey");
	}
	if($(this).attr("id") == "aladdin")
	{
		$("#animated").toggle();
		$("#animated").html("Title: Aladdin<br>Year: 1992<br>Director: Ron Clements<br>").css("color", "grey");
	}
	if($(this).attr("id") == "titan")
	{
		$("#animated").toggle();
		$("#animated").html("Title: Titan A.E.<br>Year: 2000<br>Director: Don Bluth<br>").css("color", "grey");
	}
	if($(this).attr("id") == "iron")
	{
		$("#animated").toggle();
		$("#animated").html("Title: The Iron Giant<br>Year: 1999<br>Director: Brad Bird<br>").css("color", "grey");
	}
	if($(this).attr("id") == "m")
	{
		$("#comedy").toggle();
		$("#comedy").html("Title: Mars Attack!<br>Year: 1996<br>Director: Tim Burton<br>").css("color", "grey");
	}
	if($(this).attr("id") == "jingle")
	{
		$("#comedy").toggle();
		$("#comedy").html("Title: Jingle All the Way<br>Year: 1996<br>Director: Brian Levant<br>").css("color", "grey");
	}
	if($(this).attr("id") == "space")
	{
		$("#comedy").toggle();
		$("#comedy").html("Title: Spaceballs<br>Year: 1987<br>Director: Mel Brooks<br>").css("color", "grey");
	}
	if($(this).attr("id") == "arctic")
	{
		$("#documentary").toggle();
		$("#documentary").html("Title: To the Arctic<br>Year: 2012<br>Director: Greg MacGillivray<br>").css("color", "grey");
	}
	if($(this).attr("id") == "fish")
	{
		$("#documentary").toggle();
		$("#documentary").html("Title: Blackfish<br>Year: 2013<br>Director: Gabriella Cowperthwaite<br>").css("color", "grey");
	}
	if($(this).attr("id") == "food")
	{
		$("#documentary").toggle();
		$("#documentary").html("Title: Food Inc<br>Year: 2008<br>Director: Robert Kenner<br>").css("color", "grey");
	}
	if($(this).attr("id") == "history")
	{
		$("#drama").toggle();
		$("#drama").html("Title: American History X<br>Year: 1998<br>Director: Tony Kaye<br>").css("color", "grey");
	}
	if($(this).attr("id") == "12")
	{
		$("#drama").toggle();
		$("#drama").html("Title: 12 Years a Slave<br>Year: 2013<br>Director: Steve McQueen<br>").css("color", "grey");
	}
	if($(this).attr("id") == "saw")
	{
		$("#horror").toggle();
		$("#horror").html("Title: Saw<br>Year: 2004<br>Director: James Wan<br>").css("color", "grey");
	}
	if($(this).attr("id") == "tron")
	{
		$("#sciencefiction").toggle();
		$("#sciencefiction").html("Title: Tron<br>Year: 1982<br>Director: Steven Lisberger<br>").css("color", "grey");
	}
	if($(this).attr("id") == "chronicles")
	{
		$("#sciencefiction").toggle();
		$("#sciencefiction").html("Title: The Chronicles of Riddick<br>Year: 2004<br>Director: David Twohy<br>").css("color", "grey");
	}
	if($(this).attr("id") == "real")
	{
		$("#sciencefiction").toggle();
		$("#sciencefiction").html("Title: Van Real Steel<br>Year: 2011<br>Director: Shawn Levy<br>").css("color", "grey");
	}
	if($(this).attr("id") == "fifth")
	{
		$("#sciencefiction").toggle();
		$("#sciencefiction").html("Title: The Fifth Element<br>Year: 1997<br>Director: Luc Besson<br>").css("color", "grey");
	}
	if($(this).attr("id") == "usual")
	{
		$("#thriller").toggle();
		$("#thriller").html("Title: The Usual Suspects<br>Year: 1995<br>Director: Bryan Singer<br>").css("color", "grey");
	}
	if($(this).attr("id") == "bone")
	{
		$("#thriller").toggle();
		$("#thriller").html("Title: The Bone Collector<br>Year: 1994<br>Director: Philip Noyce<br>").css("color", "grey");
	}
	if($(this).attr("id") == "call")
	{
		$("#thriller").toggle();
		$("#thriller").html("Title: The Call<br>Year: 2013<br>Director: Brad Anderson<br>").css("color", "grey");
	}
  });  
});