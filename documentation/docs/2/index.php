<?php include('../../_inc/settings.php');?>

<?php include('../../_inc/header.php'); ?>

<body id="documentation">

    <?php include('../../_inc/navigation.php'); ?>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="tiny">
                    <h1>Gridder <?php echo $latestBuild; ?> Documentation</h1>
                    <h3>Gridder's fluid grid and breakpoints enable endless combinations of column sizes, offsets, allignments and viewport widths.</h3>
                </div>
            </div>
        </div>
    </header>

    <main class="container">

        <section id="grid">

            <!-- The Grid -->
            <div class="row">
                <div class="tiny">
                    <h2 id="the-grid">The Grid</h2>
                    <p>
                        The grid is a 12-column fluid grid with a max width of 122em, 
                        that shrinks with the browser/device at smaller sizes. 
                        The max width can be changed by either overwriting the original breakpoints or adjusting the SCSS variables and recompiling. 
                        The syntax is simple and it makes coding responsive designs much easier. 
                        Go ahead, resize the browser.
                    </p>
                </div>
            </div>
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
            </span>

            
            <!-- Breakpoints -->
            <div class="row">
                <div class="tiny">
                    <h2 id="breakpoints">Breakpoints</h2>
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
                </div>
            </div>

            <!-- Auto Grid -->
            <div class="row">
                <div class="tiny">
                    <h2 id="auto-grid">Auto grid</h2>
                    <p>The flexbox grid is clever! You can add any number of columns to your rows without defining their width and let the grid figure out the rest.</p>
                     <pre>
                        <code class="language-html">&lt;div class=&quot;container&quot;&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;tiny&quot;&gt;
      1 of 2
    &lt;/div&gt;
    &lt;div class=&quot;tiny&quot;&gt;
      2 of 2
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;tiny&quot;&gt;
      1 of 3
    &lt;/div&gt;
    &lt;div class=&quot;tiny&quot;&gt;
      2 of 3
    &lt;/div&gt;
    &lt;div class=&quot;tiny&quot;&gt;
      3 of 3
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

        </section>

    </main>

    <?php include('../../_inc/footer.php'); ?>
<?php include('../../_inc/scripts.php'); ?>