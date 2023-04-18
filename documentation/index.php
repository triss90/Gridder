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
                    <br>
                    <a class="button" href="https://github.com/triss90/Gridder/archive/refs/tags/<?php echo $latestBuild; ?>.zip" target="_blank" rel="nofollow" download>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                            <path d="M7 11l5 5l5 -5"></path>
                            <path d="M12 4l0 12"></path>
                        </svg>
                        Download Gridder <?php echo $latestBuild; ?>
                    </a>
                    <a class="button transparent dark" href="https://github.com/triss90/Gridder" target="_blank">
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

            <!-- Notification -->
            <div class="row">
                <div class="tiny-12">
                    <div class="notification info">
                        <h3>Gridder <?php echo $latestBuild; ?> 🥳</h3>
                        <p>
                            The new Gridder <?php echo $latestBuild; ?> is live!
                            Looking for documentation for Gridder v1.5.1? click <a href="/documentation/docs/1/">here</a>.
                        </p>
                    </div>
                </div>
            </div>

            <br><br><br>
            
            <!-- Installation -->
            <div class="row">
                <div class="tiny">
                    
                    <h2 id="installation">Get Started</h2>
                    <p>Simply <a href="#home">download</a> Gridder and add it to your website's head, like this:</p>
                    <pre>
                        <code class="language-html">&lt;!--index.html--&gt;
                            &lt;html&gt;

                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;link href=&quot;path/to/gridder.css&quot; rel=&quot;stylesheet&quot;&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;

                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;container&quot;&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;row&quot;&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-2&quot;&gt;My&lt;/div&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-4&quot;&gt;Grid&lt;/div&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-6&quot;&gt;System&lt;/div&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;

                            &lt;/html&gt;
                        </code>
                    </pre>

                    <p>Remember to add <code>&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;</code> to the head aswell, to make sure the site scales correctly.</p>

                </div>
            </div>

            <br><br><br>

            <!-- CDN -->
            <div class="row center-tiny">
                <div class="small-12 medium-8 large-7">
                    <h2>CDN?</h2>
                    <p>Yes! The latest build(<?php echo $latestBuild; ?>) of Gridder is available on <strong>jsdelivr</strong>:</p>
                    <pre><code class="language-html">https://cdn.jsdelivr.net/gh/triss90/Gridder/dist/css/gridder.css</code></pre>
                </div>
            </div>            

            <br><br><br>

            <!-- FAQ -->
            <div class="row center-tiny">
                <div class="tiny">
                    <h2>Frequently asked questions</h2>
                </div>
            </div>
            <div class="row">
                <div class="tiny-12 small-12 medium-5 large-5">
                    <h3>What about browser support ?</h3>
                    <p>Gridder works in all modern browsers: <span class="tag info">IE10+</span> <span class="tag info">Edge</span> <span class="tag info">Firefox</span> <span class="tag info">Chrome</span> <span class="tag info">Safari</span> <span class="tag info">Opera</span></p>
                    <p class="ciu_embed" data-feature="flexbox" data-periods="future_1,current,past_1,past_2"><iframe src="//caniuse.bitsofco.de/embed/index.html?feat=flexbox&amp;periods=future_1,current,past_1,past_2" frameborder="0" width="100%" height="608px"></iframe></p>
                </div>
                <div class="tiny-12 small-12 medium-6 medium-offset-1 large-6 large-offset-1">
                    <h3>What is in store for Gridder in the future ?</h3>
                    <p>We are currently working on a new version of gridder, built with a mix of <span class="tag info">CSS Flexbox</span> and <span class="tag info">CSS Grid Layout</span>.</p>

                    <h3>Should I use Gridder in my next project ?</h3>
                    <p>The short answer... YES!</p>
                    <p>Gridder is built to be scalable, and thus works for small, aswell as large projects. There's been some controversy about the speed of flexbox when used for pagelayouts, but this has been <a href="https://developers.google.com/web/updates/2013/10/Flexbox-layout-isn-t-slow" target="_blank">debunked</a></p>
                    <p>With that said, Gridder excels in small to mid-sized projects, largly because of it's easy of use and setup.</p>
                </div>
            </div>

        </section>

    </main>

    <?php include('_inc/footer.php'); ?>
<?php include('_inc/scripts.php'); ?>