<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>

		<h2 id="themes">Unsorted documentation</h2>

		<div class="cols id1">
			<div class="col col-8 content">
				<div class="col-6">

					<p><span class="markedTodo">@todo sort this into relevant sections</span></p>

					<h3>Pushing your website live</h3>

					<p>When you're done developing:</p>
					<ol>
						<li>Edit /library/globals.php and change the value for 'SPOON_DEBUG' from true to false.</li>
						<li>Edit /default_www/robots.txt and change 'Disallow: /' to 'Disallow: /private/'.</li>
					</ol>

					<h3>Tags</h3>

					<p>If your module is using tags, you should provide a method getByTag($tagId) in your model-file. This method is used when a user edits a tag through the backend. In the tag-module their will be an overview with all items that are linked to the given tag.</p>

					<p>The getByTag($tagId)-method should return an multidimensional array with the following keys for each row: url, name, module.</p>

					<h3 id="debugMode">When is my site in debug mode?</h3>

					<p>Your site is in debug mode when the following option:</p>

					<pre class="brush: php;">
						// should the debug information be shown
						define('SPOON_DEBUG', true);
					</pre>
					<p>is set to true.</p>

					<h3 id="ignore">Paths that should be ignored by your versioning system</h3>
					<ul>
						<li><code>/default_www/backend/cache/*/*</code>: contents of each subfolder in <code>/default_www/backend/cache/</code></li>
						<li><code>/default_www/frontend/cache/*/*</code>: contents of each subfolder in <code>/default_www/frontend/cache/</code></li>
						<li><code>/default_www/frontend/files/*/*</code>: contents of each subfolder in <code>/default_www/frontend/cache/</code></li>
						<li><code>/default_www/frontend/files/userfiles/files/*</code></li>
						<li><code>/default_www/frontend/files/userfiles/images/*</code></li>
						<li><code>/default_www/install/cache/*</code></li>
						<li><code>/default_www/install/installed.txt</code></li>
						<li><code>/library/globals.php</code></li>
						<li><code>/library/globals.*.php</code></li>
					</ul>

					<h3 id="urls">URLs</h3>
					<p>The URL will identify an action inside a module. For example: http://fork-cms.be/private/nl/blog/index, let's break that up into the different parts.</p>

					<ul>
						<li>http://fork.local : the URL</li>
						<li>private : the application (in this case an alias for backend)</li>
						<li>nl : the language you are working in</li>
						<li>blog : the current module</li>
						<li>index : the current action</li>
					</ul>

					<h3>I want to install Fork CMS but I have no access to the folder(s) above my document root/public folder.</h3>

					<p>Simply move the <code>library/</code> folder inside <code>default_www</code>. The installler will detect this.</p>

					<h3 id="reinstalling">Reinstalling Fork CMS</h3>
					<p>To reinstall Fork CMS — a reinstall as in, you previously installed and ran Fork CMS from the same disk location — do the following:</p>
					<ul>
						<li>Delete the file installed.txt in the default_www/install folder.</li>
						<li>Delete all of cache files by running the remove_cache script in tools/remove_cache</li>
						<li>Install Fork again by visiting <code>&lt;your-domain&gt;/install</code>; follow the installer steps.</li>
						<li>Log in and go to Pages and resave a page to update the navigation cache. Done!</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="hr"><hr /></div>

	</div>

	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/syntax/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

</body>
</html>