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
					question : 'Cum s-a format Podişul Moldovei?',
					answers : {
						0 : 'Prin sedimentare',
						1 : 'Prin încrețire și înălțare',
						2 : 'Prin eroziune selectivă',
						3 : 'Prin sedimentare, agentul principal fiind Târnava Mare',
					},
					correct : 0,
				},
				
				1 : {
					question : 'Petrografie: din ce este alcătuit Podişul Moldovei?',
					answers : {
						0 : 'Din roci sedimentare: gresii, marne, calcare',
						1 : 'Din roci magmatice',
						2 : 'Din roci metamorfice: șisturi cristaline, șisturi verzi',
						3 : 'Din strate de loess',
					},
					correct : 0,
				},
				
				2 : {
					question : 'Care sunt altitudinile predominante din Podişul Moldovei?',
					answers : {
						0 : '300-500 m',
						1 : '100-200 m',
						2 : 'peste 1000 m',
						3 : 'în jur de 800 m',
					},
					correct : 0,
				},
				
				3 : {
					question : 'Care este altitudinea maximă din Podişul Moldovei?',
					answers : {
						0 : '682 m în Dealul Ciungi',
						1 : '467 m în Vf. Greci',
						2 : '1080 m în Dealul Bechci',
						3 : '1217 m în Dealul Chichioara',
					},
					correct : 0,
				},
				
				4 : {
					question : 'Ce tip de fragmentare este prezentă în Podișul Moldovei?',
					answers : {
						0 : 'Deluroasă',
						1 : 'Nu prezintă fragmentare',
						2 : 'Accentuată',
						3 : 'Accentuată, cu relief carstic',
					},
					correct : 0,
				},
				
				5 : {
					question : 'Unde se formează cuestele?',
					answers : {
						0 : 'La contactul dintre Câmpia Moldovei și unități mai înalte',
						1 : 'De-a lungul Prutului',
						2 : 'La contactul dintre Podișul Moldovei și Subcarpații Moldovei',
						3 : 'La contactul dintre Podișul Moldovei și Câmpia Română',
					},
					correct : 0,
				},
				
				6 : {
					question : 'Prin ce se caracterizează relieful fluvial din Podişul Moldovei?',
					answers : {
						0 : 'Văi largi, însoțite de terase',
						1 : 'Văi înguste cu versanți abrupți',
						2 : 'Nu există relief fluvial',
						3 : 'Văi înguste cu terase',
					},
					correct : 0,
				},
				
				7 : {
					question : 'Ce înclinare are Podișul Moldovei?',
					answers : {
						0 : 'De la Nord la Sud',
						1 : 'De la Sud la Nord',
						2: 'De la Nord la Vest',
						3 : 'De la Vest la Nord-Est',
					},
					correct: 0,
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
