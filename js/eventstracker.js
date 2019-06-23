 $(document).ready(function() {
		$('#nav2').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'IWDL DigInit', 'Click', 'Tabs/' + $(this).text()]);
		});
        $('#top').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'TopBanner', 'Click', '"'+$(this).text() + '" from  '+document.URL]);
		});
		$('#headerbanner').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Header', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});	
		$('#mainnav').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Header', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#mobilenav').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Header', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#homepagejumbo').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Homepage', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#alerted').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Homepage', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#homepagejumbo').find('input').click(function() {
			_gaq.push(['library._trackEvent', 'Homepage', 'Search', 'PRIMO Searchbox from '+document.URL]);
		});
		$('#databasetitle').find('option').click(function() {
			_gaq.push(['library._trackEvent', 'Homepage', 'Browse', 'Browse Database Title / ' + $(this).text()]);
		});
		$('#newsblock').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'News', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#dashboard_content').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Dashboard', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#dashboard_content').find('input').click(function() {
			_gaq.push(['library._trackEvent', 'Dashboard', 'Search', 'Searchbox from  '+document.URL]);
		});
		$('#database_select_subject').find('option').click(function() {
			_gaq.push(['library._trackEvent', 'Dashboard', 'Browse', 'Browse Database Subject / ' + $(this).text()]);
		});
		$('#database_select_title').find('option').click(function() {
			_gaq.push(['library._trackEvent', 'Dashboard', 'Browse', 'Browse Database Title / ' + $(this).text()]);
		});
		$('#journals_subject').find('option').click(function() {
			_gaq.push(['library._trackEvent', 'Dashboard', 'Browse', 'Browse Journal Title / ' + $(this).text()]);
		});
		$('#dashboard_content').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Dashboard', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#breadcrumbdiv').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Breadcrumb', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#leftnavmenu').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Left Menu', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#right_content').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Right Content', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#right_content').find('input').click(function() {
			_gaq.push(['library._trackEvent', 'Right Content', 'Search', 'Searchbox from '+document.URL]);
		});
		$('#databasetitle').find('option').click(function() {
			_gaq.push(['library._trackEvent', 'Right Content', 'Browse', 'Browse Database Title / ' + $(this).text()]);
		});
		$('#helpcontainer').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Help', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#footer').find('a').click(function() {
			_gaq.push(['library._trackEvent', 'Footer', 'Click', '"'+$(this).text() + '"  from  '+document.URL]);
		});
		$('#footer').find('input').click(function() {
			_gaq.push(['library._trackEvent', 'Footer', 'Search', 'Searchbox  from  '+document.URL]);
		});
});