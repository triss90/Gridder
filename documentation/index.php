<?php include('_inc/settings.php');?>

<?php include('_inc/header.php'); ?>

<body id="home">

    <?php include('_inc/navigation.php'); ?>

    <header class="header big">
        <div class="container">
            <div class="row">
                <div class="tiny">
                    <h1>Gridder: Flexbox Grid System</h1>
                    <h3>Gridder's fluid grid and breakpoints enable endless combinations of column sizes, offsets, allignments and viewport widths.</h3>
                    <hr>
                    <h2 id="download">Download</h2>
                    <a class="button info" href="https://github.com/triss90/Gridder/archive/refs/tags/<?php echo $latestBuild; ?>.zip" target="_blank" rel="nofollow" download>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                            <path d="M7 11l5 5l5 -5"></path>
                            <path d="M12 4l0 12"></path>
                        </svg>
                        Download Gridder <?php echo $latestBuild; ?>
                    </a>
                    <a class="button" href="https://github.com/triss90/Gridder" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                        </svg>
                        Github
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="container">

        <section id="grid">

            <!-- Installation -->
            <div class="row">
                <div class="tiny">
                    <h2 id="installation">Get Started</h2>
                    <p>Simply <a href="#home">download</a> Gridder and add it to your website's head, like this:</p>
                    <pre>
                        <code class="language-html">&lt;!--index.html--&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
    &lt;link href=&quot;path/to/gridder.css&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;tiny-2&quot;&gt;My&lt;/div&gt;
            &lt;div class=&quot;tiny-4&quot;&gt;Grid&lt;/div&gt;
            &lt;div class=&quot;tiny-6&quot;&gt;System&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

                    <small>Remember to add <code>&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;</code> to the head aswell, to make sure the site scales correctly</small>

                </div>
            </div>

        </section>

    </main>

    <?php include('_inc/footer.php'); ?>
<?php include('_inc/scripts.php'); ?>