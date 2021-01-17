<!Doctype html>
<html>
	<head>
		<script src="html5-qrcode.min.js"></script>
		<!--Or use directly from Github
		<script src="https://raw.githubusercontent.com/mebjas/html5-qrcode/master/minified/html5-qrcode.min.js"></script>-->
	</head>
	<body>
		<div id="reader" width="600px"></div>
	</body>
	<script>
		function onScanSuccess(qrMessage) {
			// handle the scanned code as you like
			console.log(`QR matched = ${qrMessage}`);
		}
		 
		function onScanFailure(error) {
			// handle scan failure, usually better to ignore and keep scanning
			console.warn(`QR error = ${error}`);
		}
		 
		let html5QrcodeScanner = new Html5QrcodeScanner(
			"reader", { fps: 10, qrbox: 250 }, /* verbose= */ true);
		html5QrcodeScanner.render(onScanSuccess, onScanFailure);
	</script>
</html>