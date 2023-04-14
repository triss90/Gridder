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
            
            <!-- Navigation -->
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
                    <a class="end" href="#end">End</a>
                    <a class="center" href="#center">Center</a>
                    <a class="middle" href="#middle">Middle</a>
                    <a class="top" href="#top">Top</a>
                    <a class="bottom" href="#bottom">Bottom</a>
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
                            <p>To use the breakpoints defined above, make sure to wrap your grid in the <span class="tag info">.container</span> class, like so:</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;container&quot;&gt;

                                    &lt;!-- ... Your Grid (rows, columns and everything) ... --&gt;
                                    
                                    &lt;/div&gt;
                                </code>
                            </pre>
                        </section>
                    </div>
                </div>

                <!-- Auto Grid -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="auto-grid">
                            <br><h2>Auto grid</h2>
                            <p>The flexbox grid is clever! You can add any number of columns to your rows without defining their width and let the grid figure out the rest.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny&quot;&gt;1 of 2&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny&quot;&gt;2 of 2&lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;row&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny&quot;&gt;1 of 3&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny&quot;&gt;2 of 3&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny&quot;&gt;3 of 3&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row">
                                <div class="tiny"><div class="demo-box">1 of 2</div></div>
                                <div class="tiny"><div class="demo-box">2 of 2</div></div>
                            </div>
                            <div class="row">
                                <div class="tiny"><div class="demo-box">1 of 3</div></div>
                                <div class="tiny"><div class="demo-box">2 of 3</div></div>
                                <div class="tiny"><div class="demo-box">3 of 3</div></div>
                            </div>
                        </section>  
                    </div>
                </div>

                <!-- Nesting -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="nesting">
                            <br><br>
                            <h2>Nesting</h2>
                            <p>Gridder supports nesting out of box. Simply add a new <span class="tag info">.row</span> inside an existing grid like so:</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-12 medium-6 large-8&quot;&gt;

                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grid Column

                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;row&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-12 medium-6&quot;&gt;Nested Grid Column&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-12 medium-6&quot;&gt;Nested Grid Column&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;

                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-12 medium-6 large-4&quot;&gt;Grid Column&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
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
                        </section>
                    </div>
                </div>

                <!-- Masonry -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="masonry">
                            <br><br>
                            <h2>Masonry</h2>
                            <p></p>
                        </section>
                    </div>
                </div>

                <!-- Alignment -->
                <div class="row">
                    <div class="tiny">
                        <br><br><br><hr><br><h1 id="alignment">Alignment</h1>
                    </div>
                </div>

                <!-- Offsets -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="offsets">
                            <br><br>
                            <h2>Offsets</h2>
                            <p>Offsetting columns is easy! Simply add <span class="tag info">*-offset-3</span> if you wish to offset your column 3 columns from the left. The * in this case refers to one of the breakpoints (tiny, small, medium, large and huge). You can naturally chain these to offset differently on the various breakpoints.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-6 tiny-offset-3&quot;&gt;6 columns&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;3 columns&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <br>
                            <div class="row">
                                <div class="tiny-3">
                                     <div class="demo-box-empty">&#8592; 3 colums offset &#8594;</div>
                                </div>
                                <div class="tiny-6">
                                    <div class="demo-box">6 columns</div>
                                </div>
                                <div class="tiny-3">
                                     <div class="demo-box">3 columns</div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Start -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="start">
                            <br><br><h2>Start</h2>
                            <p>Gridder allows you to align columns as you see fit. With the class <span class="tag info">.*-start</span> (where * represents your <a href="#breakpoints">breakpoint</a>), you can force columns to the start of a row.</p>
                            <p>This is useful when reordering items on different viewports.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-start&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-8 medium-6&quot;&gt;column (forced to start of row)&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-start">
                                <div class="tiny-8 medium-6"><div class="demo-box">column (forced to start of row)</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- End -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section"id="end">
                            <br><br><h2>End</h2>
                            <p>With <span class="tag info">.*-end</span> (where * represents your breakpoint) you can force columns to the end of a row. Just like <a href="#start">.*-start</a> this is useful when reordering items on different viewports.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-end&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-8 medium-6&quot;&gt;column (forced to end of row)&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-end">
                                <div class="tiny-8 medium-6"><div class="demo-box">column (forced to end of row)</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Center -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="center">
                            <br><br><h2>Center</h2>
                            <p>Gridder also allows you to align columns to the center of a row with <span class="tag info">.*-center</span> (where * represents your breakpoint). This will align items horizontally.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-center&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-8 medium-6&quot;&gt;column (forced to center of row)&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-center">
                                <div class="tiny-8 medium-6"><div class="demo-box">column (forced to center of row)</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Middle -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="middle">
                            <br><br><h2>Middle</h2>
                            <p>You can also align items to the middle of a row with <span class="tag info">.*-middle</span> (where * represents your breakpoint). This will align items vertically.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-middle&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-8 medium-6&quot;&gt;column (forced to middle of row)&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-middle demo-row">
                                <div class="tiny-8 medium-6"><div class="demo-box">column (forced to middle of row)</div></div>
                            </div>
                            <p>Combining <a href="#center">.*-center</a> and <a href="#middle">.*-middle</a> allows you to center items in a row both vertically and horizontally.</p>
                             <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-center tiny-middle&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-8 medium-6&quot;&gt;column (centered)&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-center tiny-middle demo-row">
                                <div class="tiny-8 medium-6"><div class="demo-box" style="margin:0;">column (centered)</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Top -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="top">
                            <br><br><h2>Top</h2>
                            <p>Just like you can force items on the horizontal plane with <a href="#start">.*-start</a> and <a href="#end">.*-end</a>, 
                                you can do so on the vertical plane with <a href="#top">.*-top</a> and <a href="#bottom">.bottom-*</a>.</p>
                            <p>To force items to the top, use <span class="tag info">.*-top</span> (where * represents your <a href="#breakpoints">breakpoint</a>).</p>
                            <p>This is useful when reordering items on different viewports.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-top&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-8 medium-6&quot;&gt;column (forced to top of row)&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-top demo-row">
                                <div class="tiny-8 medium-6"><div class="demo-box">column (forced to top of row)</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Bottom -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="bottom">
                            <br><br><h2>Bottom</h2>
                            <p>To force items to the bottom, use <span class="tag info">.*-bottom</span> (where * represents your <a href="#breakpoints">breakpoint</a>).</p>
                            <p>This is useful when reordering items on different viewports.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-bottom&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-8 medium-6&quot;&gt;column (forced to bottom of row)&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-bottom demo-row">
                                <div class="tiny-8 medium-6"><div class="demo-box" style="margin-bottom: 0;">column (forced to bottom of row)</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Distribution -->
                <div class="row">
                    <div class="tiny">
                        <br><br><br><hr><br><h1 id="distribution">Distribution</h1>
                    </div>
                </div>

                <!-- Between -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="between">
                            <br><br><h2>Between</h2>
                            <p>Gridder allows for a few ways to dsitribute space, one of witch is to fill space between columns, leaving no space at the start and end of the row. To to this, simply add <span class="tag info">.*-between</span> (where * represents your <a href="#breakpoints">breakpoint</a>) to your row element.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-between&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;column&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;column&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;column&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-between">
                                <div class="tiny-3"><div class="demo-box">column</div></div>
                                <div class="tiny-3"><div class="demo-box">column</div></div>
                                <div class="tiny-3"><div class="demo-box">column</div></div>
                            </div>
                        </section>
                    </div>
                </div>
                
                <!-- Around -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="around">
                            <br><br><h2>Between</h2>
                            <p>Another way of distributing space, is using the <span class="tag info">.*-around</span> (where * represents your <a href="#breakpoints">breakpoint</a>) class, which distributes items evenly across a row, leaving space at the start and end of the row.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row tiny-around&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;column&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;column&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;column&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <div class="row tiny-around">
                                <div class="tiny-3"><div class="demo-box">column</div></div>
                                <div class="tiny-3"><div class="demo-box">column</div></div>
                                <div class="tiny-3"><div class="demo-box">column</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Reordering -->
                <div class="row">
                    <div class="tiny">
                        <br><br><br><hr><br><h1 id="reordering">Reordering</h1>
                    </div>
                </div>

                <!-- Reverse -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="reverse">
                            <br><br><h2>Reverse</h2>
                            <p>To reverse the order of columns in row, simply add the class reverse to the row element.</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row reverse&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;1&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;2&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;3&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;4&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <p>Note how the order is reversed:</p>
                            <div class="row reverse">
                                <div class="tiny-3"><div class="demo-box">1</div></div>
                                <div class="tiny-3"><div class="demo-box">2</div></div>
                                <div class="tiny-3"><div class="demo-box">3</div></div>
                                <div class="tiny-3"><div class="demo-box">4</div></div>
                            </div>
                        </section>
                    </div>
                </div>
                
                <!-- First -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section" id="first">
                            <br><br><h2>First</h2>
                            <p>To make a column appear as the first element, simply add <span class="tag info">.*-first</span> (where * represents your <a href="#breakpoints">breakpoint</a>) to the column element.</p>
                            <p>This is very useful for reordering columns on different viewports</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;1&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;2&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;3&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3 tiny-first&quot;&gt;4&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <p>Note how the order has changed:</p>
                            <div class="row">
                                <div class="tiny-3"><div class="demo-box">1</div></div>
                                <div class="tiny-3"><div class="demo-box">2</div></div>
                                <div class="tiny-3"><div class="demo-box">3</div></div>
                                <div class="tiny-3 tiny-first"><div class="demo-box">4</div></div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Last -->
                <div class="row">
                    <div class="tiny">
                        <section class="docs-section"id="last">
                            <br><br><h2>Last</h2>
                            <p>To make a column appear as the last element, simply add <span class="tag info">.*-last</span> (where * represents your <a href="#breakpoints">breakpoint</a>) to the column element.</p>
                            <p>This is very useful for reordering columns on different viewports</p>
                            <pre>
                                <code class="language-html">&lt;div class=&quot;row&quot;&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3 tiny-last&quot;&gt;1&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;2&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;3&lt;/div&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;tiny-3&quot;&gt;4&lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
                            <p>Note how the order has changed:</p>
                            <div class="row">
                                <div class="tiny-3 tiny-last"><div class="demo-box">1</div></div>
                                <div class="tiny-3"><div class="demo-box">2</div></div>
                                <div class="tiny-3"><div class="demo-box">3</div></div>
                                <div class="tiny-3"><div class="demo-box">4</div></div>
                            </div>
                        </section>
                        <p></p>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <?php include('../../_inc/footer.php'); ?>
<?php include('../../_inc/scripts.php'); ?>