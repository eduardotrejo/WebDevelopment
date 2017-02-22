$(document).ready(function(){
  	$("#toggle").click(function(){
   		$("table").toggle();
   	});
   	$("td").hover( function(){ 
		$(this).toggleClass("wordHover");
  	});	
  	$('#alertData td').click(function(){
    	var cid = $(this).attr('id');
    	if(cid == "Heavy Rain"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game is a film noir thriller, featuring four diverse protagonists involved with the mystery of the Origami Kille, a serial killer who uses extended periods of rainfall to drown his victims.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Max Payne 3"){
   		$("#titleGenre").html("<center><h4>Description:<br>Max Payne 3 is a third-person shooter in which the player assumes the role of its titular character, Max Payne. Max Payne 3 features a similar over-the-shoulder camera as its predecessors, with the addition of a cover mechanic, while also retaining much of the same run-and-gun style of gameplay.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Call of Duty 4: Modern Warfare"){
   		$("#titleGenre").html("<center><h4>Description:<br>The story takes place in the year 2011, where a radical leader has executed the president of an unnamed country in the Middle East, and an ultranationalist movement starts a civil war in Russia.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Diablo III"){
   		$("#titleGenre").html("<center><h4>Description:<br>In the game, players choose one of six character classes—Barbarian, Crusader, Demon Hunter, Monk, Witch Doctor or Wizard—and are tasked with defeating the Lord of Terror, Diablo.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "StarCraft"){
   		$("#titleGenre").html("<center><h4>Description:<br>StarCraft is a military science fiction real-time strategy video game developed and published by Blizzard Entertainment and released for Microsoft Windows on March 31, 1998.The game later spawned a franchise, and is the first game of the StarCraft series.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Half-Life"){
   		$("#titleGenre").html("<center><h4>Description:<br>Half-Lifes a series of first-person shooter video games that share a single science fiction alternate history. The games in the series all utilize either the GoldSrc or Source engines and are linear, narrative, single-player titles.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Donkey Kong"){
   		$("#titleGenre").html("<center><h4>Description:<br>Donkey Kong is an arcade game released by Nintendo in 1981. It is an early example of the platform game genre, as the gameplay focuses on maneuvering the main character across a series of platforms while dodging and jumping over obstacles</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Uncharted 2: Among Thieves"){
   		$("#titleGenre").html("<center><h4>Description:<br>Uncharted 2 is an action-adventure platform video game played from a third-person view, with the player in control of Nathan Drake. Drake is physically adept and is able to jump, climb, and scale narrow ledges and wall-faces to get between points.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Portal"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game primarily comprises a series of puzzles that must be solved by teleporting the player's character and simple objects using the Aperture Science Handheld Portal Device, a device that can create inter-spatial portals between two flat planes.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Doom II"){
   		$("#titleGenre").html("<center><h4>Description:<br>Doom II: Hell on Earth is an award winning first-person shooter video game and the second title of id Software's Doom franchise.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "The Legend of Zelda: Ocarina of Time"){
   		$("#titleGenre").html("<center><h4>Description:<br>Ocarina of Time is an action-adventure game with role-playing and puzzle elements set in an open world environment. The player controls Link from a third-person perspective, in a three-dimensional space. </h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "World of Warcraft"){
   		$("#titleGenre").html("<center><h4>Description:<br>World of Warcraft (WoW) is a massively multiplayer online role-playing game (MMORPG) created in 2004 by Blizzard Entertainment. </h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Shadow of the Colossus"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game's storyline focuses on a young man named Wander who enters a forbidden land. Wander must travel across a vast expanse on horseback and defeat sixteen massive beings, known simply as colossi,in order to restore the life of a girl named Mono.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "GoldenEye 007"){
   		$("#titleGenre").html("<center><h4>Description:<br>GoldenEye 007 is a first-person shooter video game developed by Rare and based on the 1995 James Bond film GoldenEye. It was exclusively released for the Nintendo 64 video game console on 25 August 1997.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Super Mario Bros. 3"){
   		$("#titleGenre").html("<center><h4>Description:<br>Super Mario Bros. 3 is a two-dimensional platform game in which the player controls the on-screen protagonist (either Mario or Luigi) from a third-person perspective.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Tetris"){
   		$("#titleGenre").html("<center><h4>Description:<br>The Tetris game is a popular use of tetrominoes, the four-element special case of polyominoes.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Bioshock"){
   		$("#titleGenre").html("<center><h4>BioShock is a first-person shooter with role-playing game customization and stealth elements, and is similar to System Shock 2. The player takes the role of Jack, who aims to fight his way through Rapture using weapons and plasmids (genetic alterations) in order to complete objectives. .</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Final Fantasy 7"){
   		$("#titleGenre").html("<center><h4>Description:<br>Final Fantasy VII follows protagonist Cloud Strife, a mercenary who initially joins the eco-terrorist rebel organization AVALANCHE to stop the world-controlling megacorporation Shinra from draining the life of the planet for use as an energy source.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Bloody Roar"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game's theme incorporated anthropomorphism, where the player has the ability to transform into a half-human, half-animal creature known as a Zoanthrope (The name came from the clinical term, 'zoanthropy', which is similar to that of lycanthropy, but not just with the mind-set of a wolf). </h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Little Big Planet"){
   		$("#titleGenre").html("<center><h4>Description:<br>The series follows the adventures of Sackboy and has a large emphasis on gameplay rather than being story-driven.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Final Fantasy X"){
   		$("#titleGenre").html("<center><h4>Description:<br>Set in the fantasy world of Spira, the game's story revolves around a group of adventurers and their quest to defeat a rampaging monster known as Sin. The player character is Tidus, a blitzball star who finds himself in Spira after his home city of Zanarkand is destroyed by Sin. Shortly after arriving to Spira, Tidus joins the summoner Yuna on her pilgrimage to destroy Sin.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Metal Gear Solid"){
   		$("#titleGenre").html("<center><h4>Description:<br>Metal Gear Solid follows Solid Snake, a soldier who infiltrates a nuclear weapons facility to neutralize the terrorist threat from FOXHOUND, a renegade special forces unit</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Resident Evil 4"){
   		$("#titleGenre").html("<center><h4>Description:<br>The story of Resident Evil 4 follows the U.S. government special agent Leon S. Kennedy, who is sent on a mission to rescue Ashley Graham, the U.S. President's daughter who has been kidnapped by a sinister cult. </h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Pokemon Red"){
   		$("#titleGenre").html("<center><h4>Description:<br>The goal of the games is to become the champion of the Pokémon League by defeating the eight Gym Leaders, then the top four Pokémon trainers in the land, the Elite Four..</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Dr.Mario"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game focuses on the player character Mario, who assumes the role of a doctor and is tasked with eradicating deadly viruses.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "The Legend of Zelda: Wind Waker"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game is set on a group of islands in a vast sea—a first for the series. The player controls Link, the protagonist of the Zelda series. He struggles against the evil king, Ganondorf, for control of a sacred relic known as the Triforce. </h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Super Mario Galaxy"){
   		$("#titleGenre").html("<center><h4>Description:<br>Super Mario Galaxy is set in outer space,where Mario travels from galaxy to galaxy in order to collect Power Stars, which are earned by completing levels in galaxies or defeating enemies</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Super Mario 3D World"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game follows a similar play style to Super Mario 3D Land, which combines the free-roaming gameplay of 3D Mario titles with the mechanics of 2D side-scrolling platforming games in the series, going so far as to include a flagpole and timer on every level</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "TitanFall"){
   		$("#titleGenre").html("<center><h4>Description:<br>Players fight as free-running foot soldier pilots who can commandeer agile, mech-style exoskeleton Titans to complete team-based objectives</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Infamous Second Son"){
   		$("#titleGenre").html("<center><h4>Description:<br>Infamous Second Son is in an open world action game, where the player controls main character Delsin Rowe from a third-person perspective. Delsin Rowe is a Conduit, who can manipulate and weaponize certain materials.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Pokemon X"){
   		$("#titleGenre").html("<center><h4>Description:<br>As with previous installments, both games follow the journey of a young Pokémon trainer (and their friends) as they train Pokémon. This time, the game takes place in the Kalos region—based on France—with the object of the game being to thwart the schemes of the nefarious criminal organization Team Flare, all while attempting to challenge the Pokémon League Champion.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Super Metroid"){
   		$("#titleGenre").html("<center><h4>Description:<br>Super Metroid is an action-platform game which primarily takes place on the fictional planet Zebes, which is a large, open-ended world with areas connected by doors and elevators</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Red Dead Redemption"){
   		$("#titleGenre").html("<center><h4>Description:<br>Red Dead Redemption is played from a third-person perspective in an open world environment, allowing the player to interact with the game world at their leisure. The player can travel the virtual world, a fictionalized version of the Western United States and Mexico, primarily by horseback and on foot.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Mass Effect"){
   		$("#titleGenre").html("<center><h4>Description:<br>The game takes place in the year 2183, with the player assuming direct control of an elite human soldier named Commander Shepard and setting out to explore the Galaxy on a starship, the SSV Normandy. The eponymous mass effect is a form of inertia-suppressing technology, allowing faster-than-light travel.</h4></center>");
   			$("#titleGenre").toggle();
   		}
   		if(cid == "Batman Arkham City"){
   		$("#titleGenre").html("<center><h4>Description:<br>Arkham City is an open world action-adventure game that incorporates elements of stealth game tactics.It is presented from the third-person perspective, showing the playable character on screen and allowing the camera to be freely rotated around them.</h4></center>");
   			$("#titleGenre").toggle();
   		}
	});
});		