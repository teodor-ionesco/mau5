<!DOCTYPE html>
<html>
	<head>
		<title>Quiz - Podişul Moldovei</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<div class="container">
			<div id="wrapper">

			</div>
		</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script>
			var questions = {
				0 : {
					question : 'Când s-a format Podişul Dobrogei?',
					answers : {
						0 : 'În timpul Orogenezei Caledoniene',
						1 : 'În timpul Orogenezei Hercinice',
						2 : 'Cu puțin după Epoca Glaciară',
						3 : 'S-a format progresiv, în timpul mai multor orogeneze',
					},
					correct : 3,
				},
				
				1 : {
					question : 'Cum s-a format Podișul Casimcei?',
					answers : {
						0 : 'Prin încrețire și înălțare, în timpul Orogenezei Caledoniene',
						1 : 'Prin încrețire și înălțare, în timpul Orogenezei Hercinice',
						2 : 'Prin sedimentare',
						3 : 'Prin eroziune selectivă',
					},
					correct : 0,
				},
				
				2 : {
					question : 'Cum s-a format Masivul Nord-Dobrogean?',
					answers : {
						0 : 'Prin încrețire și înălțare, în timpul Orogenezei Hercinice',
						1 : 'Prin încrețire și înălțare, în timpul Orogenezei Caledoniene',
						2 : 'Prin sedimentare',
						3 : 'Prin eroziune selectivă',
					},
					correct : 0,
				},
				
				3 : {
					question : 'Cum s-a format Podișul Dobrogei de Sud?',
					answers : {
						0 : 'Prin încrețire și înălțare, în timpul Orogenezei Hercinice',
						1 : 'Prin încrețire și înălțare, în timpul Orogenezei Caledoniene',
						2 : 'Prin sedimentare',
						3 : 'Prin eroziune selectivă',
					},
					correct : 2,
				},
				
				4 : {
					question : 'Care sunt altitudinile medii ale Podișului Dobrogei?',
					answers : {
						0 : '100 - 400 m',
						1 : '650 - 400 m',
						2 : 'Aproximativ 520 m',
						3 : '650 - 400 cm',
					},
					correct : 0,
				},
				
				5 : {
					question : 'Care este altitudinea maximă a Podișului Dobrogei?',
					answers : {
						0 : '467 m în Vf. Greci',
						1 : '1080 m în Dealul Becheci',
						2 : '682 m în Dealul Chicioara',
						3 : '2469 m în Vf. Galdhopiggen',
					},
					correct : 0,
				},
				
				6 : {
					question : 'Unde este situat Vf. Greci?',
					answers : {
						0 : 'În M-ții Măcinului',
						1 : 'În sudul Podișului Dobrogei',
						2 : 'În Podişul Casimcei',
						3 : 'La nord de Delta Dunării',
					},
					correct : 0,
				},
				
				7 : {
					question : 'Unde este situat Podișul Casimcei?',
					answers : {
						0 : 'În centrul Podișului Dobrogei',
						1 : 'În sudul Podişul Dobrogei',
						2 : 'Între Podişul Dobrogei de Sud și Bulgaria',
						3 : 'Între Masivul Nord-Dobrogean și Ucraina',
					},
					correct : 0,
				},
				
				8 : {
					question : 'Unde este situat Vf. Narodnaia?',
					answers : {
						0 : 'Nu există un asemenea Vf. în Podişul Dobrogei',
						1 : 'În sudul Podişul Dobrogei',
						2 : 'În Podişul Casimcei',
						3 : 'În Masivul Nord-Dobrogean',
					},
					correct : 0,
				},
				
				9 : {
					question : 'Din ce sunt alcătuiți Munții Măcinului?',
					answers : {
						0 : 'Șisturi cristaline și granite roșii',
						1 : 'Șisturi verzi',
						2 : 'Șisturi verzi și granite roșii',
						3 : 'Șisturi verzi și strate aleatorii de loess',
					},
					correct : 0,
				},
				
				10 : {
					question : 'Din ce este alcătuit Pod. Casimcei?',
					answers : {
						0 : 'Șisturi verzi',
						1 : 'Granite roșii',
						2 : 'Șisturi cristaline și granite roșii',
						3 : 'Roci sedimentare: gresii, marne, nisipuri',
					},
					correct : 0,
				},
				
				11 : {
					question : 'Din ce este alcătuit Podișul Dobrogei de Sud?',
					answers : {
						0 : 'Roci sedimentare necutate: calcare, argile, loess, nisipuri',
						1 : 'Șisturi cristaline și roci sedimentare nceutate: calcare, argile, loess, nisipuri',
						2 : 'Șisturi cristaline și granite roșii',
						3 : 'Șisturi verzi',
					},
					correct : 0,
				},
				
				12 : {
					question : 'Ce tip de fragmentare predomină în Podișul Dobrogei?',
					answers : {
						0 : 'Deluroasă',
						1 : 'Deluroasă, cu relief glaciar',
						2 : 'Accentuată, cu relief carstic predominant',
						3 : 'Accentuată, cu relief fluvial predominant',
					},
					correct : 0,
				},
				
				13 : {
					question : 'Ce sunt crovurile?',
					answers : {
						0 : 'Mici depresiuni de terase',
						1 : 'Vulcani noroioși, activi',
						2 : 'Vulcani noroioși, stinși',
						3 : 'Albii săpate deasupra șisturilor verzi',
					},
					correct : 0,
				},
				
				14 : {
					question : 'Unde se formează crovurile?',
					answers : {
						0 : 'Pe stratele de loess, în Sud',
						1 : 'Pe stratele de loess, în Nord',
						2 : 'Pe albiile săpate de Prut',
						3 : 'Deasupra șisturilor verzi',
					},
					correct : 0,
				},
				
				15 : {
					question : 'Prin ce se caracterizează relieful fluvial în Podișul Dobrogei?',
					answers : {
						0 : 'Formează văi largi, paralele',
						1 : 'Formează văi înguste, concentrice',
						2 : 'Este însoțit de relief glaciar',
						3 : 'Formează văi înguste cu versanți abrupți',
					},
					correct : 0,
				},
			}
			
			var qNum = 16;
			var aNum = 4;
			
			var qCount = 0;
			var question = -1;
			var answer = -1;
			var wrong = 0;
			
			function mix_answers()
			{
				var count = 0;
				var someint;
				
				while (true)
				{
					if(count === aNum)
						break;
					
					someint = Math.floor(Math.random() * aNum);
					
					if(questions[question].answers[someint] === '')
						continue;
					
					$('#mix_questions').html($('#mix_questions').html() + '<p> \
					  <label> \
						<input class="with-gap" name="answer" value="'+someint+'" type="radio" /> \
						<span>'+questions[question].answers[someint]+'</span> \
					  </label> \
					</p>');
					
					questions[question].answers[someint] = '';
					
					count++;
				}
			}
			
			function mix_quiz()
			{
				if(qCount === qNum)
				{
					alert('Felicitări! În total au fost '+qNum+' întrebări. Ai răspuns greșit de '+wrong+' ori. Success tura viitoare!');
					return;
				}
				
				$('#wrapper').html('				<p class="flow-text" id="mix_question"></p> \
				<div id="mix_questions"></div> \
				<a class="btn waves-effect waves-light red" onclick="check();">Verifică</a> &nbsp;&nbsp;&nbsp;');
				var someint;
				
				while(true)
				{
					someint = Math.floor(Math.random() * qNum);
					
					if(questions[someint] === '')
						continue;
					
					$('#mix_question').html(questions[someint].question);
					question = someint;
				
					mix_answers();
					
					answer = questions[someint].correct;
					
					questions[someint] = '';
					
					qCount++;
					
					break;
				}
			}	
			
			function check()
			{
				if(parseInt($('input[name=answer]:checked').val()) === answer)
				{
					alert('Corect!');
					$('#wrapper').html($('#wrapper').html() + '<a class="btn waves-effect waves-light red" onclick="mix_quiz();">Next</a>');
				}
				else
				{
					alert('Greșit! Reîncearcă.');
					wrong++;
				}
			}
			
			$(document).ready(function()
			{
				mix_quiz();
			});
			
		</script>
	</body>
</html>
