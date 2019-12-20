<footer>
	<div class="middle-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<h5 class="text-white">Disclaimer</h5>
					<p class="small text-white">No warranty is provided regarding the accuracy or adequacy of these generators for every situation. If you are not sure about any legal questions, or have any questions or doubts about a Privacy Policy, a Terms & Conditions or Terms of Service or Terms of Use contract or a Disclaimer or a Disclosure, you should consult with a lawyer or law firm specialized in digital communications law. These generators are provided to our site visitors as a free service and is intended to operate as a "guideline". No warranty or guarantee is given nor implied about its use as a comprehensive or even partial solution to legal and/or regulatory obligations and/or best practices.</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/assets/js/popper.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="/assets/js/website-shared.js" type="text/javascript"></script>

<script type="text/javascript" src="/assets/js/cookie-consent-builder.min.js"></script>
<script type="text/javascript" src="/assets/js/clipboard.min.js"></script>
<script type="text/javascript" src="/assets/js/notify.min.js" ></script>

<script>
	 $('#user-code-copy-button').on('click', function(e) {
	        new Clipboard('#user-code-copy-button', {
	            text: function(trigger) {
	                return document.getElementById('user_code').value;
	            }
	        });
	        $.notify('Copied to clipboard. You can paste your generated policy now (Control+V or CMD+V or right-click > Paste).', 'branded');
	    });
</script>