<!DOCTYPE html>
<html>
	<head>
		<title>Quiz - DCaT</title>
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
					question : 'Cum s-a format Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : 'Prin scufundarea și sedimentarea bazinului transilvan',
						1 : 'Prin încrețirea și înălțarea bazinului transilvan',
						2 : 'Prin eroziunea selectivă a cutelor diapire',
						3 : 'Prin explozia unor vulcani din domuri',
					},
					correct : 0,
				},
				
				1 : {
					question : 'Petrografie: din ce este alcătuită Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : 'Din roci sedimentare necutate: gresii, marne, argile, nisipuri',
						1 : 'Din roci magmatice',
						2 : 'Din roci metamorfice: șisturi cristaline, șisturi verzi',
						3 : 'Din relief carstic: calcare și conglomerate calcaroase',
					},
					correct : 0,
				},
				
				2 : {
					question : 'Care sunt altitudinile predominante din Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : '500-600 m',
						1 : '500-600 km',
						2 : 'peste 1000 m',
						3 : 'în jur de 400 m',
					},
					correct : 0,
				},
				
				3 : {
					question : 'Care este altitudinea maximă din Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : '1080 m în Dealul Becheci',
						1 : '467 m în Vf. Greci',
						2 : '1347 m în Vf. Semenic',
						3 : '1217 m în Dealul Chichioara',
					},
					correct : 0,
				},
				
				4 : {
					question : 'Ce fel de fragmentare prezintă Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : 'Deluroasă și colinară',
						1 : 'Nu prezintă fragmentare',
						2 : 'Prezentă doar în jurul cutelor diapire',
						3 : 'Accentuată, cu relief carstic',
					},
					correct : 0,
				},
				
				5 : {
					question : 'Ce conțin cutele diapire din Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : 'Sare',
						1 : 'Cărbune',
						2 : 'Gaz metan',
						3 : 'Aur',
					},
					correct : 0,
				},
				
				6 : {
					question : 'Ce conțin domurile din Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : 'Gaz metan',
						1 : 'Argint',
						2 : 'Bauxită',
						3 : 'Var stins',
					},
					correct : 0,
				},
				
				7 : {
					question : 'Prin ce se caracterizează relieful fluvial din Depresiunea Colinară a Transilvaniei?',
					answers : {
						0 : 'Văi largi cu terase',
						1 : 'Văi înguste cu versanți abrupți',
						2 : 'Nu există relief fluvial',
						3 : 'Văi înguste cu terase',
					},
					correct : 0,
				},
			}
			
			var qNum = 8;
			var aNum = 4;
			
			var qCount = 0;
			var question = -1;
			var answer = -1;
			var wrong = 0;
			
			function mix_answers()
			{
				var count = 0;
				var someint;
				
				while(true)
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