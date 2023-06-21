<section>
	<div class="count-container">
		<div class="container">
			<div class="row">
				<div style="background:#2C5976;" class="col-lg-4">
					<p style="padding-top:18px;text-align:center;font-size:32px;font-weight:bolder;color:white;">Nuestro evento comenzará en:</p>
				</div>
				<div class="col-lg-2"><span style="padding-top:18px;font-weight:bolder;display:table;margin: 0 auto;vertical-align:middle;font-size:50px;" id="days-demo"></span>
					<p style="text-align:center;">Días</p>
				</div>
				<div class="col-lg-2"><span style="padding-top:18px;font-weight:bolder;display:table;margin: 0 auto;vertical-align:middle;font-size:50px;" id="hours-demo"></span>
					<p style="text-align:center;">Horas</p>
				</div>
				<div class="col-lg-2"><span style="padding-top:18px;font-weight:bolder;display:table;margin: 0 auto;vertical-align:middle;font-size:50px;" id="minutes-demo"></span>
					<p style="text-align:center;">Minutos</p>
				</div>
				<div class="col-lg-2"><span style="padding-top:18px;font-weight:bolder;display:table;margin: 0 auto;vertical-align:middle;font-size:50px;" id="seconds-demo"></span>
					<p style="text-align:center;">Segundos</p>
				</div>
			</div>
		</div>
	</div>
</section> 

<script>

//===
// VARIABLES
//===
const DATE_TARGET = new Date();
// DOM for render
const SPAN_DAYS = document.querySelector('span#days-demo');
const SPAN_HOURS = document.querySelector('span#hours-demo');
const SPAN_MINUTES = document.querySelector('span#minutes-demo');
const SPAN_SECONDS = document.querySelector('span#seconds-demo');
// Milliseconds for the calculations
const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

//===
// FUNCTIONS
//===

/**
 * Method that updates the countdown and the sample
 */
function updateCountdown() {
    // Calcs
    let NOW = new Date()
    NOW.setDate(NOW.getDate() - 45);
    const DURATION = DATE_TARGET - NOW;
    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
    // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

    // Render
    SPAN_DAYS.textContent = REMAINING_DAYS;
    SPAN_HOURS.textContent = REMAINING_HOURS;
    SPAN_MINUTES.textContent = REMAINING_MINUTES;
    SPAN_SECONDS.textContent = REMAINING_SECONDS;
}

//===
// INIT
//===
updateCountdown();
// Refresh every second
setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
</script>