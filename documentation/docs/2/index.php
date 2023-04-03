<?php include('../../_inc/settings.php');?>

<?php include('../../_inc/header.php'); ?>

<body id="documentation">

    <?php include('../../_inc/navigation.php'); ?>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="tiny">
                    <h1>Gridder <?php echo $latestBuild; ?> Documentation</h1>
                    <h3>Learn all the ins and outs of the Gridder framework.</h3>
                    <p>Looking for Gridder v1.5.1 documentation? You can find it <a href="/documentation/docs/1/">here</a>.</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container">

        <div id="grid" class="row">

            <div class="tiny-2">
                <nav id="sidebar">
                    <h3>Basic Grid</h3>
                    <a class="the-grid" href="#the-grid">The Grid</a>
                    <a class="breakpoints" href="#breakpoints">Breakpoints</a>
                    <a class="auto-grid" href="#auto-grid">Auto Grid</a>
                    <a class="nesting" href="#nesting">Nesting</a>
                    <a class="masonry" href="#masonry">Masonry</a>
                    <h3>Alignment</h3>
                    <a class="offsets" href="#offsets">Offsets</a>
                    <a class="start" href="#start">Start</a>
                    <a class="center" href="#center">Center</a>
                    <a class="end" href="#end">End</a>
                    <a class="top" href="#top">Top</a>
                    <a class="middle" href="#middle">Middle</a>
                    <a class="down" href="#down">Down</a>
                    <h3>Distribution</h3>
                    <a class="between" href="#between">Between</a>
                    <a class="around" href="#around">Around</a>
                    <h3>Reordering</h3>
                    <a class="reverse" href="#reverse">Reverse</a>
                    <a class="first" href="#first">First</a>
                    <a class="last" href="#last">Last</a>
                </nav>
                
            </div>

            <div class="tiny-10">

                <!-- Basic Grid -->
                <div class="row">
                    <div class="tiny">
                        <h1 id="basic">Basic Grid</h1>
                    </div>
                </div>

                <!-- The Grid -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="the-grid">
                            <h2>The Grid</h2>
                            <p>
                                The grid is a 12-column fluid grid with a max width of 122em, 
                                that shrinks with the browser/device at smaller sizes. 
                                The max width can be changed by either overwriting the original breakpoints or adjusting the SCSS variables and recompiling. 
                                The syntax is simple and it makes coding responsive designs much easier. 
                                Go ahead, resize the browser.
                            </p>
                            <span class="demo">
                                <div class="row">
                                    <div class="tiny-12 small-1">
                                        <div class="demo-box">one</div>
                                    </div>
                                    <div class="tiny-12 small-11">
                                        <div class="demo-box">eleven</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-2">
                                        <div class="demo-box">two</div>
                                    </div>
                                    <div class="tiny-12 small-10">
                                        <div class="demo-box">ten</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-3">
                                        <div class="demo-box">three</div>
                                    </div>
                                    <div class="tiny-12 small-9">
                                        <div class="demo-box">nine</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-4">
                                        <div class="demo-box">four</div>
                                    </div>
                                    <div class="tiny-12 small-8">
                                        <div class="demo-box">eight</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-5">
                                        <div class="demo-box">five</div>
                                    </div>
                                    <div class="tiny-12 small-7">
                                        <div class="demo-box">seven</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-6">
                                        <div class="demo-box">six</div>
                                    </div>
                                    <div class="tiny-12 small-6">
                                        <div class="demo-box">six</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-7">
                                        <div class="demo-box">seven</div>
                                    </div>
                                    <div class="tiny-12 small-5">
                                        <div class="demo-box">five</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-8">
                                        <div class="demo-box">eight</div>
                                    </div>
                                    <div class="tiny-12 small-4">
                                        <div class="demo-box">four</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-9">
                                        <div class="demo-box">nine</div>
                                    </div>
                                    <div class="tiny-12 small-3">
                                        <div class="demo-box">three</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-10">
                                        <div class="demo-box">ten</div>
                                    </div>
                                    <div class="tiny-12 small-2">
                                        <div class="demo-box">two</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12 small-11">
                                        <div class="demo-box">eleven</div>
                                    </div>
                                    <div class="tiny-12 small-1">
                                        <div class="demo-box">one</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tiny-12">
                                        <div class="demo-box">twelve</div>
                                    </div>
                                </div>
                            </span>
                        </section>
                    </div>
                </div>
                
                <!-- Breakpoints -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="breakpoints">
                            <br><br><h2>Breakpoints</h2>
                            <p>
                                For grids that don't vary in size between wide desktop devices and small handheld devices, 
                                use the <span class="tag info">.-tiny-*</span> classes.
                                Specify a numbered class from 1-12 if you need a particuarly sized column; 
                                otherwise, feel free to rely on the <a href="#auto-grid">auto grid</a>.
                            </p>
                            
                            <p>
                                If you need more flexibility in adjusting the grid to different screen sizes, use the 
                                <span class="tag info">.-tiny-*</span>, 
                                <span class="tag info">.-small-*</span>, 
                                <span class="tag info">.-medium-*</span>, 
                                <span class="tag info">.-large-*</span> and 
                                <span class="tag info">.-huge-*</span> classes.
                            </p>
                            <table class="border">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tiny<br><small>&lt;48em</small></th>
                                        <th>Small<br><small>&#8805;48em</small></th>
                                        <th>Medium<br><small>&#8805;64em</small></th>
                                        <th>Large<br><small>&#8805;75em</small></th>
                                        <th>Huge<br><small>&#8805;122em</small></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Max container width</strong></td>
                                        <td>None(auto)</td>
                                        <td>46em</td>
                                        <td>62em</td>
                                        <td>73em</td>
                                        <td>120em</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Class prefix</strong></td>
                                        <td><span class="tag info">.tiny-*</span></td>
                                        <td><span class="tag info">.small-*</span></td>
                                        <td><span class="tag info">.medium-*</span></td>
                                        <td><span class="tag info">.large-*</span></td>
                                        <td><span class="tag info">.huge-*</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong># of columns</strong></td>
                                        <td colspan="5">12</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Gutter width</strong></td>
                                        <td colspan="5">1em (0.5em on each side of a column)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nestable</strong></td>
                                        <td colspan="5">Yes</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Column ordering</strong></td>
                                        <td colspan="5">Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                            <small>* a number between 1 - 12 defining the number columns</small>
                        </section>
                    </div>
                </div>

                <!-- Auto Grid -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="auto-grid">
                            <br><br><h2>Auto grid</h2>
                            <p>The flexbox grid is clever! You can add any number of columns to your rows without defining their width and let the grid figure out the rest.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;tiny&quot;&gt;1 of 2&lt;/div&gt;
        &lt;div class=&quot;tiny&quot;&gt;2 of 2&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;tiny&quot;&gt;1 of 3&lt;/div&gt;
        &lt;div class=&quot;tiny&quot;&gt;2 of 3&lt;/div&gt;
        &lt;div class=&quot;tiny&quot;&gt;3 of 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </section>  
                    </div>
                </div>

                <!-- Nesting -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="nesting"><br><br><h2>Nesting</h2></section>
                        <p>Gridder supports nesting out of box. Simply add a new <span class="tag info">.row</span> inside an existing grid like so:</p>
                        <pre><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;tiny-12 medium-6 large-8&quot;&gt;
        &lt;p&gt;Grid Column&lt;/p&gt;

        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;tiny-12 medium-6 large-6&quot;&gt;
                &lt;p&gt;Nested Grid Column&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tiny-12 medium-6 large-6&quot;&gt;
                &lt;p&gt;Nested Grid Column&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;
    &lt;div class=&quot;tiny-12 medium-6 large-4&quot;&gt;
        &lt;p&gt;Grid Column&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        <br>
                        
                        <div class="row">
                            <div class="tiny-12 medium-6 large-8">
                                <div class="demo-box">
                                    <p>Grid Column</p>
                                    <div class="row">
                                        <div class="tiny-12 medium-6 large-6">
                                            <div class="demo-box-nested">Nested Grid Column</div>
                                        </div>
                                        <div class="tiny-12 medium-6 large-6">
                                            <div class="demo-box-nested ">Nested Grid Column</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tiny-12 medium-6 large-4">
                                <div class="demo-box">Grid Column</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Masonry -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="masonry"><br><br><h2>Masonry</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Alignment -->
                <div class="row">
                    <div class="tiny">
                        <h1 id="alignment">Alignment</h1>
                    </div>
                </div>

                <!-- Offsets -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="offsets"><br><br><h2>Offsets</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Start -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="start"><br><br><h2>Start</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Center -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="center"><br><br><h2>Center</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- End -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section"id="end"><br><br><h2>End</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Top -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="top"><br><br><h2>Top</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Middle -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="middle"><br><br><h2>Middle</h2></section>
                        <p></p>
                    </div>
                </div>


                <!-- Down -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="down"><br><br><h2>Down</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Distribution -->
                <div class="row">
                    <div class="tiny">
                        <h1 id="distribution">Distribution</h1>
                    </div>
                </div>

                <!-- Between -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="between"><br><br><h2>Between</h2></section>
                        <p></p>
                    </div>
                </div>
                
                <!-- Around -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="around"><br><br><h2>Around</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Reordering -->
                <div class="row">
                    <div class="tiny">
                        <h1 id="reordering">Reordering</h1>
                    </div>
                </div>

                <!-- Reverse -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="reverse"><br><br><h2>Reverse</h2></section>
                        <p></p>
                    </div>
                </div>
                
                <!-- First -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="first"><br><br><h2>First</h2></section>
                        <p></p>
                    </div>
                </div>

                <!-- Last -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section"id="last"><br><br><h2>Last</h2></section>
                        <p></p>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <?php include('../../_inc/footer.php'); ?>
<?php include('../../_inc/scripts.php'); ?>