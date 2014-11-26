<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="j_query_mobile_library/jquery.mobile.icons-1.4.5.min.css" />
		<script src="j_query_mobile_library/jquery.mobile-1.4.5.min.js"></script>
		<script src="j_query_mobile_library/mobile/jquery.mobile-1.4.5.min.js"></script>
	</head>

	<body>

		<!-- Start of first page -->
		<div data-role="page" id="foo">

			<div data-role="header">
				<h1>Foo</h1>
			</div><!-- /header -->

			<div role="main" class="ui-content">
				<p>
					I'm first in the source order so I'm shown as the page.
				</p>
				<p>
					View internal page called <a href="#bar">bar</a>
				</p>
			</div><!-- /content -->

			<div data-role="footer">
				<h4>Page Footer</h4>
			</div><!-- /footer -->
		</div><!-- /page -->

		<!-- Start of second page -->
		<div data-role="page" id="bar">

			<div data-role="header">
				<h1>Bar</h1>
			</div><!-- /header -->

			<div role="main" class="ui-content">
				<p>
					I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.
				</p>
				<p>
					<a href="#foo">Back to foo</a>
				</p>
			</div><!-- /content -->

			<div data-role="footer">
				<h4>Page Footer</h4>
			</div><!-- /footer -->
		</div><!-- /page -->
	</body>
</html>

