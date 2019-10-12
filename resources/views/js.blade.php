		<script data-pace-options='{ "restartOnRequestAfter": true }' src="{{URL::asset('js/plugin/pace/pace.min.js')}}"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write("<script src={{URL::asset('js/libs/jquery-2.1.1.min.js')}}><\/script>");
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write("<script src={{URL::asset('js/libs/jquery-ui-1.10.3.min.js')}}><\/script>");
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="{{URL::asset('js/app.config.js')}}"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="{{URL::asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="{{URL::asset('js/notification/SmartNotification.min.js')}}"></script>

		<!-- JARVIS WIDGETS -->
		<script src="{{URL::asset('js/smartwidgets/jarvis.widget.min.js')}}"></script>

		<!-- EASY PIE CHARTS -->
		<script src="{{URL::asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

		<!-- SPARKLINES -->
		<script src="{{URL::asset('js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- JQUERY VALIDATE -->
		<script src="{{URL::asset('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="{{URL::asset('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="{{URL::asset('js/plugin/select2/select2.min.js')}}"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="{{URL::asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

		<!-- browser msie issue fix -->
		<script src="{{URL::asset('js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>

		<!-- FastClick: For mobile devices -->
		<script src="{{URL::asset('js/plugin/fastclick/fastclick.min.js')}}"></script>

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		

		<!-- MAIN APP JS FILE -->
		<script src="{{URL::asset('js/app.min.js')}}"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		
		<!-- SmartChat UI : plugin -->
		<script src="{{URL::asset('js/smart-chat-ui/smart.chat.ui.min.js')}}"></script>
		<script src="{{URL::asset('js/smart-chat-ui/smart.chat.manager.min.js')}}"></script>
		
		<!-- PAGE RELATED PLUGIN(S) -->
	
		