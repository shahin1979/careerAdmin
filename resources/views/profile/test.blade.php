<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Multiselect</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

{{--    <link rel="stylesheet" href="{!! asset('docs/css/bootstrap-4.5.2.min.css') !!}" type="text/css">--}}
    <link href="{!! asset('assets/bootstrap-4.3.1/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
{{--    <link rel="stylesheet" href="{!! asset('docs/css/bootstrap-example.min.css') !!}" type="text/css">--}}
{{--    <link rel="stylesheet" href="{!! asset('docs/css/prettify.min.css') !!}" type="text/css">--}}
{{--    <link rel="stylesheet" href="{!! asset('docs/css/fontawesome-5.15.1-web/all.css') !!}" type="text/css">--}}

    <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('docs/js/bootstrap.bundle-4.5.2.min.js') !!}"></script>
{{--    <script type="text/javascript" src="{!! asset('docs/js/prettify.min.js') !!}"></script>--}}

    <link rel="stylesheet" href="{!! asset('dist/css/bootstrap-multiselect.css') !!}" type="text/css">
    <script type="text/javascript" src="{!! asset('dist/js/bootstrap-multiselect.js') !!}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            window.prettyPrint() && prettyPrint();
        });
    </script>

    <style>
        .nav-link.active {
            font-weight: bold;
        }

        .badge {
            font-size: 85%;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#affix" style="font-size:14px;">
<a href="https://github.com/davidstutz/bootstrap-multiselect">
    <img style="position: fixed; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub">
</a>

<div class="container">
    <div class="row">
        <div class="col-md-3 pt-4" id="affix">
            <nav class="bg-light navbar navbar-light position-fixed">
                <div class="navbar-nav">
                    <a class="nav-link" href="#getting-started">Getting Started</a>
                    <a class="nav-link" href="#configuration-options">Configuration Options</a>
                    <a class="nav-link" href="#templates">Templates</a>
                    <a class="nav-link" href="#styling">Styling</a>
                    <a class="nav-link" href="#methods">Methods</a>
                    <a class="nav-link" href="#further-examples">Further Examples</a>
                    <a class="nav-link" href="#post">Server-Side Processing</a>
                    <a class="nav-link" href="#keyboard-support">Keyboard Support</a>
                    <a class="nav-link" href="require.html">Require JS</a>
                    <a class="nav-link" href="#faq">Frequently Asked Questions</a>
                    <a class="nav-link" href="#known-issues">Known Issues</a>
                    <a class="nav-link" href="tests/SpecRunner.html">Tests</a>
                    <a class="nav-link" href="#migration">Migrating to Bootstrap v4</a>
                    <a class="nav-link" href="#license">License</a>
                </div>
            </nav>
        </div>
        <div class="col-md-9 pt-4">
            <div class="pb-2 mb-2 border-bottom">
                <h1>Bootstrap Multiselect</h1>
            </div>

            <p class="alert alert-info">
                <b>If you are interested in actively maintaining this project, please contact me (see GitHub profile for contact information).</b>
            </p>

            <p class="alert alert-info">
                Please consult the <a href="#faq">FAQ</a>, the <a href="https://github.com/davidstutz/bootstrap-multiselect/issues">Issue Tracker</a> or <a href="http://stackoverflow.com/questions/tagged/bootstrap-multiselect">StackOverflow</a> before creating a new issue; when creating an issue or a pull request, read <a href="#how-to-contribute">how to contribute</a> first.
            </p>

            <div class="alert alert-secondary">
                <p><b>Consider making a donation to support the development of this plugin:</b></p>
                <div class="text-center">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="V95Q7QK6JY32Q">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <a href="http://davidstutz.de/donate/" class="small float-right">Why Donate?</a>
                <div class="clearfix"></div>
            </div>

            <div class="page-header">
                <h2 id="getting-started">Getting Started</h2>
            </div>

            <ol>
                <li>
                    <h3>Link the Required Files</h3>

                    <p>
                        First, the <a href="http://jquery.com/" target="_blank">jQuery</a> library needs to be included. Then <a href="http://getbootstrap.com" target="_blank">Twitter Bootstrap</a> - both the Javascript library and the CSS stylesheet - needs to be included.
                    </p>

                    <pre class="prettyprint linenums">
&lt;!-- Include Twitter Bootstrap and jQuery: --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;css/bootstrap.min.css&quot; type=&quot;text/css&quot;/&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;js/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;js/bootstrap.min.js&quot;&gt;&lt;/script&gt;

&lt;!-- Include the plugin's CSS and JS: --&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;js/bootstrap-multiselect.js&quot;&gt;&lt;/script&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;css/bootstrap-multiselect.css&quot; type=&quot;text/css&quot;/&gt;
</pre>

                    <p>
                        The jQuery library can also be included using a CDN, for example the <a href="https://developers.google.com/speed/libraries/devguide?hl=de&csw=1#jquery">Google CDN</a>:
                    </p>

                    <pre class="prettyprint linenums">
&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"&gt;&lt;/script&gt;
</pre>

                    <p class="alert alert-info">
                        Note that the plugin will work both with version 2.x of the jQuery library as well as with version 1.10.x of the jQuery library. So for using the Google CDN you may have to adjust the version.
                    </p>
                </li>
                <li>
                    <h3>Create a Select</h3>

                    <p>
                        Now simply use HTML to create your <code>select</code> input which you want to turn into a multiselect. Remember to set the <code>multiple</code> attribute as to get a real multiselect - but do not worry, the plugin can also be used as usual select without the <code>multiple</code> attribute being present.
                    </p>

                    <pre class="prettyprint linenums">
&lt;!-- Build your select: --&gt;
&lt;select id=&quot;example-getting-started&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option value=&quot;cheese&quot;&gt;Cheese&lt;/option&gt;
    &lt;option value=&quot;tomatoes&quot;&gt;Tomatoes&lt;/option&gt;
    &lt;option value=&quot;mozarella&quot;&gt;Mozzarella&lt;/option&gt;
    &lt;option value=&quot;mushrooms&quot;&gt;Mushrooms&lt;/option&gt;
    &lt;option value=&quot;pepperoni&quot;&gt;Pepperoni&lt;/option&gt;
    &lt;option value=&quot;onions&quot;&gt;Onions&lt;/option&gt;
&lt;/select&gt;
</pre>
                </li>
                <li>
                    <h3>Call the Plugin</h3>

                    <p>
                        In the end, simply call the plugin on your <code>select</code>. You may also specify further options, see the Options tab for further information.
                    </p>

                    <div class="example">
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#example-getting-started').multiselect({
                                    enableHTML: true
                                });
                            });
                        </script>
                        <select id="example-getting-started" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="Mozzarella">Mozzarella</option>
                            <option value="Mushrooms">Mushrooms</option>
                            <option value="Pepperoni">Pepperoni</option>
                            <option value="Onions">Onions</option>
                        </select>
                    </div>
                    <div class="highlight">
<pre class="prettyprint linenums">
&lt;!-- Initialize the plugin: --&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $(&#39;#example-getting-started&#39;).multiselect();
    });
&lt;/script&gt;
</pre>
                    </div>
                </li>
            </ol>

            <div class="page-header">
                <h2 id="configuration-options">Configuration Options</h2>
            </div>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th colspan="3">
                        Overview
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#configuration-options-multiple"><code class="badge badge-secondary">multiple</code></a></td>
                    <td><a href="#configuration-options-enableHTML"><code class="badge badge-secondary">enableHTML</code></a></td>
                    <td><a href="#configuration-options-enableClickableOptGroups"><code class="badge badge-secondary">enableClickableOptGroups</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-enableCollapsibleOptGroups"><code class="badge badge-secondary">enableCollapsibleOptGroups</code></a></td>
                    <td><a href="#configuration-options-collapseOptGroupsByDefault"><code class="badge badge-secondary">collapseOptGroupsByDefault</code></a></td>
                    <td><a href="#configuration-options-disableIfEmpty"><code class="badge badge-secondary">disableIfEmpty</code></a></td>
                </tr>
                <td><a href="#configuration-options-disabledText"><code class="badge badge-secondary">disabledText</code></a></td>
                <td><a href="#configuration-options-dropRight"><code class="badge badge-secondary">dropRight</code></a></td>
                <td><a href="#configuration-options-dropUp"><code class="badge badge-secondary">dropUp</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-maxHeight"><code class="badge badge-secondary">maxHeight</code></a></td>
                    <td><a href="#configuration-options-checkboxName"><code class="badge badge-secondary">checkboxName</code></a></td>
                    <td><a href="#configuration-options-onChange"><code class="badge badge-secondary">onChange</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-onInitialized"><code class="badge badge-secondary">onInitialized</code></a></td>
                    <td><a href="#configuration-options-onDropdownShow"><code class="badge badge-secondary">onDropdownShow</code></a></td>
                    <td><a href="#configuration-options-onDropdownHide"><code class="badge badge-secondary">onDropdownHide</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-onDropdownShown"><code class="badge badge-secondary">onDropdownShown</code></a></td>
                    <td><a href="#configuration-options-onDropdownHidden"><code class="badge badge-secondary">onDropdownHidden</code></a></td>
                    <td><a href="#configuration-options-buttonClass"><code class="badge badge-secondary">buttonClass</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-inheritClass"><code class="badge badge-secondary">inheritClass</code></a></td>
                    <td><a href="#configuration-options-buttonContainer"><code class="badge badge-secondary">buttonContainer</code></a></td>
                    <td><a href="#configuration-options-buttonWidth"><code class="badge badge-secondary">buttonWidth</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-buttonText"><code class="badge badge-secondary">buttonText</code></a></td>
                    <td><a href="#configuration-options-buttonTitle"><code class="badge badge-secondary">buttonTitle</code></a></td>
                    <td><a href="#configuration-options-nonSelectedText"><code class="badge badge-secondary">nonSelectedText</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-nSelectedText"><code class="badge badge-secondary">nSelectedText</code></a></td>
                    <td><a href="#configuration-options-allSelectedText"><code class="badge badge-secondary">allSelectedText</code></a></td>
                    <td><a href="#configuration-options-numberDisplayed"><code class="badge badge-secondary">numberDisplayed</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-delimiterText"><code class="badge badge-secondary">delimiterText</code></a></td>
                    <td><a href="#configuration-options-optionLabel"><code class="badge badge-secondary">optionLabel</code></a></td>
                    <td><a href="#configuration-options-optionClass"><code class="badge badge-secondary">optionClass</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-indentGroupOptions"><code class="badge badge-secondary">indentGroupOptions</code></a></td>
                    <td><a href="#configuration-options-selectedClass"><code class="badge badge-secondary">selectedClass</code></a></td>
                    <td><a href="#configuration-options-includeSelectAllOption"><code class="badge badge-secondary">includeSelectAllOption</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-selectAllJustVisible"><code class="badge badge-secondary">selectAllJustVisible</code></a></td>
                    <td><a href="#configuration-options-selectAllText"><code class="badge badge-secondary">selectAllText</code></a></td>
                    <td><a href="#configuration-options-selectAllValue"><code class="badge badge-secondary">selectAllValue</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-selectAllName"><code class="badge badge-secondary">selectAllName</code></a></td>
                    <td><a href="#configuration-options-selectAllNumber"><code class="badge badge-secondary">selectAllNumber</code></a></td>
                    <td><a href="#configuration-options-onSelectAll"><code class="badge badge-secondary">onSelectAll</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-onDeselectAll"><code class="badge badge-secondary">onDeselectAll</code></a></td>
                    <td><a href="#configuration-options-enableFiltering"><code class="badge badge-secondary">enableFiltering</code></a></td>
                    <td><a href="#configuration-options-includeFilterClearBtn"><code class="badge badge-secondary">includeFilterClearBtn</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-enableCaseInsensitiveFiltering"><code class="badge badge-secondary">enableCaseInsensitiveFiltering</code></a></td>
                    <td><a href="#configuration-options-enableFullValueFiltering"><code class="badge badge-secondary">enableFullValueFiltering</code></a></td>
                    <td><a href="#configuration-options-filterBehavior"><code class="badge badge-secondary">filterBehavior</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-filterPlaceholder"><code class="badge badge-secondary">filterPlaceholder</code></a></td>
                    <td><a href="#configuration-options-includeResetOption"><code class="badge badge-secondary">includeResetOption</code></a></td>
                    <td><a href="#configuration-options-includeResetDivider"><code class="badge badge-secondary">includeResetDivider</code></a></td>
                </tr>
                <tr>
                    <td><a href="#configuration-options-resetText"><code class="badge badge-secondary">resetText</code></a></td>
                </tr>
                </tbody>
            </table>

            <p class="alert alert-info">
                Use Firebug, Chrome Developer Tools to get the best out of the below examples.
            </p>

            <table class="table layout-fixed">
                <tbody>
                <tr>
                    <td width="30%"><code id="configuration-options-multiple">multiple</code></td>
                    <td>
                        <p>
                            <code>multiple</code> is not a real configuration option. It refers to the <code>multiple</code> attribute of the <code>select</code> the plugin is applied on. When the <code>multiple</code> attribute of the <code>select</code> is present, the plugin uses checkboxes to allow multiple selections. If it is not present, the plugin uses radio buttons to allow single selections. When using the plugin for single selections (without the <code>multiple</code> attribute present), the first option will automatically be selected if no other option is selected in advance. See <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/129">#129</a> for how to avoid this behavior.
                        </p>

                        <p>
                            The following example shows the default behavior when the <code>multiple</code> attribute is omitted:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-single').multiselect();
                                });
                            </script>
                            <select id="example-single">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-single').multiselect();
&lt;/script&gt;
&lt;!-- Note the missing multiple attribute! --&gt;
&lt;select id="example-single"&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/option&gt;
    &lt;option value="3"&gt;Option 3&lt;/option&gt;
    &lt;option value="4"&gt;Option 4&lt;/option&gt;
    &lt;option value="5"&gt;Option 5&lt;/option&gt;
    &lt;option value="6"&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>

                        <p>
                            If multiple options are selected in advance and the <code>select</code> lacks the <code>multiple</code> attribute, the last option marked as <code>selected</code> will initially be selected by the plugin.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-single-selected').multiselect();
                                });
                            </script>
                            <select id="example-single-selected">
                                <option value="1">Option 1</option>
                                <option value="2" selected="selected">Option 2</option>
                                <option value="3" selected="selected">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-single-selected').multiselect();
&lt;/script&gt;
&lt;!-- Note the missing multiple attribute! --&gt;
&lt;select id="example-single-selected"&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2" selected="selected"&gt;Option 2&lt;/option&gt;
    &lt;!-- Option 3 will be selected in advance ... --&gt;
    &lt;option value="3" selected="selected"&gt;Option 3&lt;/option&gt;
    &lt;option value="4"&gt;Option 4&lt;/option&gt;
    &lt;option value="5"&gt;Option 5&lt;/option&gt;
    &lt;option value="6"&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>

                        <p>
                            The following example shows the default behavior when the <code>multiple</code> attribute is present. Initially selected options will be adopted automatically:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-multiple-selected').multiselect();
                                });
                            </script>
                            <select id="example-multiple-selected" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2" selected="selected">Option 2</option>
                                <option value="3" selected="selected">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-multiple-selected').multiselect();
&lt;/script&gt;
&lt;!-- Note the missing multiple attribute! --&gt;
&lt;select id="example-multiple-selected" multiple="multiple"&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2" selected="selected"&gt;Option 2&lt;/option&gt;
    &lt;!-- Option 3 will be selected in advance ... --&gt;
    &lt;option value="3" selected="selected"&gt;Option 3&lt;/option&gt;
    &lt;option value="4"&gt;Option 4&lt;/option&gt;
    &lt;option value="5"&gt;Option 5&lt;/option&gt;
    &lt;option value="6"&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>

                            <p>
                                The plugin naturally supports <code>optgroup</code>s, however the group headers are not clickable by default. See the <code>enableClickableOptGroups</code> option for details.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-multiple-optgroups').multiselect();
                                    });
                                </script>
                                <select id="example-multiple-optgroups" multiple="multiple">
                                    <optgroup label="Group 1">
                                        <option value="1-1">Option 1.1</option>
                                        <option value="1-2" selected="selected">Option 1.2</option>
                                        <option value="1-3" selected="selected">Option 1.3</option>
                                    </optgroup>
                                    <optgroup label="Group 2">
                                        <option value="2-1">Option 2.1</option>
                                        <option value="2-2">Option 2.2</option>
                                        <option value="2-3">Option 2.3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-multiple-optgroups').multiselect();
&lt;/script&gt;
&lt;select id=&quot;example-multiple-optgroups&quot;&gt;
    &lt;optgroup label=&quot;Group 1&quot;&gt;
        &lt;option value=&quot;1-1&quot;&gt;Option 1.1&lt;/option&gt;
        &lt;option value=&quot;1-2&quot; selected=&quot;selected&quot;&gt;Option 1.2&lt;/option&gt;
        &lt;option value=&quot;1-3&quot; selected=&quot;selected&quot;&gt;Option 1.3&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Group 2&quot;&gt;
        &lt;option value=&quot;2-1&quot;&gt;Option 2.1&lt;/option&gt;
        &lt;option value=&quot;2-2&quot;&gt;Option 2.2&lt;/option&gt;
        &lt;option value=&quot;2-3&quot;&gt;Option 2.3&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
</pre>
                            </div>

                            <p>
                                Note that the classes of the <code>optgroup</code>s are adopted, allowing to select individual <code>optgroup</code>s easily (inspect the created markup to note the difference!):
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-multiple-optgroups-classes').multiselect();
                                    });
                                </script>
                                <select id="example-multiple-optgroups-classes" multiple="multiple">
                                    <optgroup label="Group 1" class="group-1">
                                        <option value="1-1">Option 1.1</option>
                                        <option value="1-2" selected="selected">Option 1.2</option>
                                        <option value="1-3" selected="selected">Option 1.3</option>
                                    </optgroup>
                                    <optgroup label="Group 2" class="group-2">
                                        <option value="2-1">Option 2.1</option>
                                        <option value="2-2">Option 2.2</option>
                                        <option value="2-3">Option 2.3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-multiple-optgroups-classes').multiselect();
&lt;/script&gt;
&lt;select id=&quot;example-multiple-optgroups&quot;&gt;
    &lt;optgroup label=&quot;Group 1&quot; class=&quot;group-1&quot;&gt;
        &lt;option value=&quot;1-1&quot;&gt;Option 1.1&lt;/option&gt;
        &lt;option value=&quot;1-2&quot; selected=&quot;selected&quot;&gt;Option 1.2&lt;/option&gt;
        &lt;option value=&quot;1-3&quot; selected=&quot;selected&quot;&gt;Option 1.3&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Group 2&quot; class=&quot;group-2&quot;&gt;
        &lt;option value=&quot;2-1&quot;&gt;Option 2.1&lt;/option&gt;
        &lt;option value=&quot;2-2&quot;&gt;Option 2.2&lt;/option&gt;
        &lt;option value=&quot;2-3&quot;&gt;Option 2.3&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
</pre>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-enableHTML">enableHTML</code></td>
                    <td>
                        <p>
                            XSS injection is a serious threat for all modern web applications. Setting <code>enableHTML</code> to <code>false</code> (default setting) will create a XSS safe multiselect.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-xss').multiselect();
                                });
                            </script>
                            <select id="example-xss" multiple="multiple">
                                <option value="1">&lt;script&gt;alert(1);&lt;/script&gt;</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type="text/javascript"&gt;
    $(document).ready(function() {
        $('#example-xss').multiselect();
    });
&lt;/script&gt;
&lt;select id="example-xss" multiple="multiple"&gt;
    &lt;option value="1"&gt;&amp;lt;script&amp;gt;alert(1);&amp;lt;/script&amp;gt;&lt;/option&gt;
&lt;/select&gt;
</pre>

                            <p>On the other hand, when setting <code>enableHTML</code> to <code>true</code>, the plugin will support HTML within <code>option</code>s:</p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-xss-html').multiselect({
                                            nonSelectedText: '<span style="color:red;">Non selected ...</span>',
                                            enableHTML: true
                                        });
                                    });
                                </script>
                                <select id="example-xss-html" multiple="multiple">
                                    <option value="1">&lt;span style=&quot;color:red&quot;&gt;Option 1&lt;/span&gt;</option>
                                </select>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type="text/javascript"&gt;
    $(document).ready(function() {
        $('#example-xss-html').multiselect();
    });
&lt;/script&gt;
&lt;select id="example-xss-html" multiple="multiple"&gt;
    &lt;option value="1"&gt;&amp;gt;span style="color:red"&amp;lt;Option 1&amp;gt;/span&amp;gt;&lt;/option&gt;
&lt;/select&gt;
</pre>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-enableClickableOptGroups">enableClickableOptGroups</code></td>
                    <td>
                        <p>
                            If set to <code>true</code>, <code>optgroup</code>'s will be clickable, allowing to easily select multiple options belonging to the same group.
                        </p>

                        <p class="alert alert-warning">
                            <code>enableClickableOptGroups</code> is not available in single selection mode, i.e. when the <code>multiple</code> attribute is not present.
                        </p>

                        <p class="alert alert-info">
                            When using <code>selectedClass</code>, the selected classes are also applied on the option groups.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableClickableOptGroups').multiselect({
                                        enableClickableOptGroups: true
                                    });
                                });
                            </script>
                            <select id="example-enableClickableOptGroups" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1">Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableClickableOptGroups').multiselect({
            enableClickableOptGroups: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Note that this option does also work with disabled options:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableClickableOptGroups-disabled').multiselect({
                                        enableClickableOptGroups: true
                                    });
                                });
                            </script>
                            <select id="example-enableClickableOptGroups-disabled" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1" disabled>Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1" disabled>Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableClickableOptGroups-disabled').multiselect({
            enableClickableOptGroups: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Note that the behavior of <code>onChange</code> changes. Whenever an optgroup is changed/clicked, the <code>onChange</code> event is fired with all affected options as first parameter.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableClickableOptGroups-onChange').multiselect({
                                        enableClickableOptGroups: true,
                                        onChange: function(option, checked) {
                                            alert(option.length + ' options ' + (checked ? 'selected' : 'deselected'));
                                        }
                                    });
                                });
                            </script>
                            <select id="example-enableClickableOptGroups-onChange" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1">Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableClickableOptGroups-onChange').multiselect({
            enableClickableOptGroups: true,
            onChange: function(option, checked) {
                alert(option.length + ' options ' + (checked ? 'selected' : 'deselected'));
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Note that the <code>optgroup</code>'s are automatically selected if a whole group is selected by default:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableClickableOptGroups-init').multiselect({
                                        enableClickableOptGroups: true
                                    });
                                });
                            </script>
                            <select id="example-enableClickableOptGroups-init" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1" disabled="disabled">Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableClickableOptGroups-init').multiselect({
            enableClickableOptGroups: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-enableCollapsibleOptGroups">enableCollapsibleOptGroups</code></td>
                    <td>
                        <p>
                            If set to <code>true</code>, <code>optgroup</code>'s will be collapsible.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableCollapsibleOptGroups').multiselect({
                                        enableCollapsibleOptGroups: true
                                    });
                                });
                            </script>
                            <select id="example-enableCollapsibleOptGroups" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1" disabled>Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableCollapsibleOptGroups').multiselect({
            enableCollapsibleOptGroups: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Both options, <code>enableCollapsibleOptGroups</code> and <code>enableClickableOptGroups</code>, can also be combined:
                        </p>

                        <p class="alert alert-warning">
                            Note, however, that the behavior of combining both options might not be as expected - play around with the below example to get some intuition.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableCollapsibleOptGroups-enableClickableOptGroups').multiselect({
                                        enableClickableOptGroups: true,
                                        enableCollapsibleOptGroups: true
                                    });
                                });
                            </script>
                            <select id="example-enableCollapsibleOptGroups-enableClickableOptGroups" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1" disabled>Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableCollapsibleOptGroups-enableClickableOptGroups').multiselect({
            enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            The groups can be collapsed by default using the following simple trick:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableCollapsibleOptGroups-collapsed').multiselect({
                                        enableCollapsibleOptGroups: true,
                                        buttonContainer: '<div id="example-enableCollapsibleOptGroups-collapsed-container" class="btn-group" />'
                                    });
                                    $('#example-enableCollapsibleOptGroups-collapsed-container .caret-container').click();
                                });
                            </script>
                            <select id="example-enableCollapsibleOptGroups-collapsed" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1" disabled>Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
                                        <pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
$(document).ready(function() {
    $('#example-enableCollapsibleOptGroups-collapsed').multiselect({
        enableCollapsibleOptGroups: true,
        buttonContainer: '&lt;div id=&quot;example-enableCollapsibleOptGroups-collapsed-container&quot; class=&quot;btn-group&quot; /&gt;'
    });
    $('#example-enableCollapsibleOptGroups-collapsed-container .caret-container').click();
});
&lt;/script&gt;
                                        </pre>
                        </div>

                        <p>
                            Combining the above with <code>enableFiltering</code> and <code>includeSelectAllOption</code>:
                        </p>

                        <p class="alert alert-warning">
                            Again, note, that the behavior of combining <code>enableCollapsibleOptGroups</code>, <code>enableCollapsibleOptGroups</code>, <code>enableFiltering</code> and <code>includeSelectAllOption</code> is not thoroughly tested. <b>Experiment with the example below to get some intuition.</b>
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableCollapsibleOptGroups-enableClickableOptGroups-enableFiltering-includeSelectAllOption').multiselect({
                                        enableClickableOptGroups: true,
                                        enableCollapsibleOptGroups: true,
                                        enableFiltering: true,
                                        includeSelectAllOption: true
                                    });
                                });
                            </script>
                            <select id="example-enableCollapsibleOptGroups-enableClickableOptGroups-enableFiltering-includeSelectAllOption" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1" disabled>Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableCollapsibleOptGroups-enableClickableOptGroups-enableFiltering-includeSelectAllOption').multiselect({
            enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-collapseOptGroupsByDefault">collapseOptGroupsByDefault</code></td>
                    <td>
                        <p>This option will collapse all <code>optgroup</code>s by default.</p>

                        <p class="alert alert-info">There is also an example in the <a href="#further-examples">Further Examples</a> section demonstrating an alternative way of collapsing <code>optgroups</code> by default.</a></p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-collapseOptGroupsByDefault').multiselect({
                                        enableCollapsibleOptGroups: true,
                                        collapseOptGroupsByDefault: true
                                    });
                                });
                            </script>
                            <select id="example-collapseOptGroupsByDefault" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1" disabled>Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
    <pre class="prettyprint linenums">
    &lt;script type=&quot;text/javascript&quot;&gt;
        $(document).ready(function() {
            $('#example-collapseOptGroupsByDefault').multiselect({
                enableCollapsibleOptGroups: true,
                collapseOptGroupsByDefault: true
            });
        });
    &lt;/script&gt;
    </pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-disableIfEmpty">disableIfEmpty</code></td>
                    <td>
                        <p>
                            If set to <code>true</code>, the multiselect will be disabled if no options are given.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-disableIfEmpty').multiselect({
                                        disableIfEmpty: true
                                    });
                                });
                            </script>
                            <select id="example-disableIfEmpty" multiple="multiple"></select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-disableIfEmpty').multiselect({
            disableIfEmpty: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-disabledText">disabledText</code></td>
                    <td>
                        <p>
                            The text shown if the multiselect is disabled. Note that this option is set to the empty string <code>''</code> by default, that is <code>nonSelectedText</code> is shown if the multiselect is disabled and no options are selected.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-disabledText').multiselect({
                                        disableIfEmpty: true,
                                        disabledText: 'Disabled ...'
                                    });
                                });
                            </script>
                            <select id="example-disabledText" multiple="multiple"></select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-disabledText').multiselect({
            disableIfEmpty: true,
            disabledText: 'Disabled ...'
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            The <code>disabledText</code> option does also work when the underlying <code>select</code> is disabled:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-disabledText-disabled').multiselect({
                                        disabledText: 'Disabled ...'
                                    });
                                });
                            </script>
                            <select id="example-disabledText-disabled" multiple="multiple" disabled="disabled">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-disabledText-disabled').multiselect({
            disabledText: 'Disabled ...'
        });
    });
&lt;/script&gt;
&lt;select id=&quot;example-disabledText-disabled&quot; multiple=&quot;multiple&quot; disabled=&quot;disabled&quot;&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
    &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>

                        <p>
                            Note that selected options will still be shown:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-disabledText-disabled-selected').multiselect({
                                        disabledText: 'Disabled ...'
                                    });
                                });
                            </script>
                            <select id="example-disabledText-disabled-selected" multiple="multiple" disabled="disabled">
                                <option value="1">Option 1</option>
                                <option value="2" selected="selected">Option 2</option>
                                <option value="3" selected="selected">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-disabledText-disabled-selected').multiselect({
            disabledText: 'Disabled ...'
        });
    });
&lt;/script&gt;
&lt;select id=&quot;example-disabledText-disabled-selected&quot; multiple=&quot;multiple&quot; disabled=&quot;disabled&quot;&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot; selected=&quot;selected&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot; selected=&quot;selected&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
    &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-dropRight">dropRight</code></td>
                    <td>
                        <p>
                            The dropdown can also be dropped right.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-dropRight').multiselect({
                                        buttonWidth: '400px',
                                        dropRight: true
                                    });
                                });
                            </script>
                            <select id="example-dropRight" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-dropRight').multiselect({
            buttonWidth: '400px',
            dropRight: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-dropUp">dropUp</code></td>
                    <td>
                        <p>
                            The dropdown can also be dropped up. Note that it is recommended to also set <code>maxHeight</code>. The plugin calculates the necessary height of the dropdown and takes the minimum of the calculated value and <code>maxHeight</code>.
                        </p>

                        <p class="alert alert-warning">
                            Note that this feature has been introduced in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/594">#594</a> and is known to have issues depending on the environment.
                        </p>

                        <p class="alert alert-info">
                            An example of automatically adding the <code>dropUp</code> option when scrolling can be found in <a href="#further-examples">Further Examples</a>.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-dropUp').multiselect({
                                        enableFiltering: true,
                                        includeSelectAllOption: true,
                                        maxHeight: 400,
                                        dropUp: true
                                    });
                                });
                            </script>
                            <select id="example-dropUp" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option data-role="divider"></option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-dropUp').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
            dropUp: true
        });
    });
&lt;/script&gt;
&lt;select id=&quot;example-dropUp&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option data-role=&quot;divider&quot;&gt;&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
    &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-maxHeight">maxHeight</code></td>
                    <td>
                        <p>
                            The maximum height of the dropdown. This is useful when using the plugin with plenty of options.
                        </p>

                        <div class="example">
                            <p>
                                The multiselect on the left uses <code>maxHeight</code> set to <code>200</code>. On the other hand, the multiselect on the right does not use <code>maxHeight</code>.
                            </p>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-with-maxHeight').multiselect({
                                        maxHeight: 200
                                    });
                                });
                            </script>
                            <select id="example-with-maxHeight" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="9">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                                <option value="16">Option 16</option>
                                <option value="17">Option 17</option>
                                <option value="18">Option 18</option>
                                <option value="19">Option 19</option>
                                <option value="20">Option 20</option>
                            </select>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-without-maxHeight').multiselect();
                                });
                            </script>
                            <select id="example-without-maxHeight" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="9">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                                <option value="16">Option 16</option>
                                <option value="17">Option 17</option>
                                <option value="18">Option 18</option>
                                <option value="19">Option 19</option>
                                <option value="20">Option 20</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-with-maxHeight').multiselect({
            maxHeight: 200
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-checkboxName">checkboxName</code></td>
                    <td>
                        <p>
                            The name used for the generated checkboxes. See <a href="#post">Server-Side Processing</a> for details.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-checkboxName').multiselect({
                                        checkboxName: function(option) {
                                            return 'multiselect[]';
                                        }
                                    });
                                });
                            </script>
                            <select id="example-checkboxName" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-checkboxName').multiselect({
            checkboxName: function(option) {
                return 'multiselect[]';
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-onChange">onChange</code></td>
                    <td>
                        <p>
                            A function which is triggered on the change event of the options. Note that the event is not triggered when selecting or deselecting options using the <code>select</code> and <code>deselect</code> methods provided by the plugin.
                        </p>

                        <p class="alert alert-warning">
                            Note that the behavior of <code>onChange</code> changes when setting <code>enableClickableOptGroups</code> to <code>true</code>.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onChange').multiselect({
                                        onChange: function(option, checked, select) {
                                            alert('Changed option ' + $(option).val() + '.');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-onChange" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-onChange').multiselect({
            onChange: function(option, checked, select) {
                alert('Changed option ' + $(option).val() + '.');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-onInitialized">onInitialized</code></td>
                    <td>
                        <p>
                            A function which is triggered when the multiselect is finished initializing.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onInitialized-button').on('click', function() {
                                        $('#example-onInitialized').multiselect({
                                            onInitialized: function(select, container) {
                                                alert('Initialized.');
                                            }
                                        });
                                    });
                                });
                            </script>
                            <div class="btn-group">
                                <select id="example-onInitialized" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <button id="example-onInitialized-button" class="btn btn-primary">Activate!</button>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-onInitialized-button').on('click', function() {
            $('#example-onInitialized').multiselect({
                onInitialized: function(select, container) {
                    alert('Initialized.');
                }
            });
        });
    });
&lt;/script&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;select id=&quot;example-onInitialized&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
    &lt;/select&gt;
    &lt;button id=&quot;example-onInitialized-button&quot; class=&quot;btn btn-primary&quot;&gt;Activate!&lt;/button&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-onDropdownShow">onDropdownShow</code></td>
                    <td>
                        <p>
                            A callback called when the dropdown is shown.
                        </p>

                        <p class="alert alert-warning">
                            The <code>onDropdownShow</code> option is not available when using Twitter Bootstrap 2.3.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onDropdownShow').multiselect({
                                        onDropdownShow: function(event) {
                                            alert('Dropdown shown.');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-onDropdownShow" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-onDropdownShow').multiselect({
            onDropdownShow: function(event) {
                alert('Dropdown shown.');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-onDropdownHide">onDropdownHide</code></td>
                    <td>
                        <p>
                            A callback called when the dropdown is closed.
                        </p>

                        <p class="alert alert-warning">
                            The <code>onDropdownHide</code> option is not available when using Twitter Bootstrap 2.3.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onDropdownHide').multiselect({
                                        onDropdownHide: function(event) {
                                            alert('Dropdown closed.');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-onDropdownHide" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-onDropdownHide').multiselect({
            onDropdownHide: function(event) {
                alert('Dropdown closed.');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-onDropdownShown">onDropdownShown</code></td>
                    <td>
                        <p>
                            A callback called <i>after</i> the dropdown has been shown.
                        </p>

                        <p class="alert alert-warning">
                            The <code>onDropdownShown</code> option is not available when using Twitter Bootstrap 2.3.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onDropdownShown').multiselect({
                                        onDropdownShown: function(event) {
                                            alert('Dropdown shown.');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-onDropdownShown" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-onDropdownShown').multiselect({
            onDropdownShown: function(event) {
                alert('Dropdown closed.');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-onDropdownHidden">onDropdownHidden</code></td>
                    <td>
                        <p>
                            A callback called <i>after</i> the dropdown has been closed.
                        </p>

                        <p class="alert alert-warning">
                            The <code>onDropdownHidden</code> option is not available when using Twitter Bootstrap 2.3.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onDropdownHidden').multiselect({
                                        onDropdownHidden: function(event) {
                                            alert('Dropdown closed.');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-onDropdownHidden" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-ondropdownHidden').multiselect({
            onDropdownHidden: function(event) {
                alert('Dropdown closed.');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-buttonClass">buttonClass</code></td>
                    <td>
                        <p>
                            The class of the multiselect button.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-buttonClass').multiselect({
                                        buttonClass: 'btn btn-link'
                                    });
                                });
                            </script>
                            <select id="example-buttonClass" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-buttonClass').multiselect({
            buttonClass: 'btn btn-link'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-inheritClass">inheritClass</code></td>
                    <td>
                        <p>
                            Inherit the class of the button from the original select.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-inheritButton').multiselect({
                                        inheritClass: true
                                    });
                                });
                            </script>
                            <select id="example-inheritButton" class="bg-warning" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-inheritButton').multiselect({
            inheritClass: true
        });
    });
&lt;/script&gt;

&lt;select id=&quot;example-inheritButton&quot; class=&quot;bg-warning&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
    &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-buttonContainer">buttonContainer</code></td>
                    <td>
                        <p>
                            The container holding both the button as well as the dropdown.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-buttonContainer').multiselect({
                                        buttonContainer: '<div class="btn-group" />'
                                    });
                                });
                            </script>
                            <select id="example-buttonContainer" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-buttonContainer').multiselect({
            buttonContainer: '&lt;div class=&quot;btn-group&quot; /&gt;'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-buttonWidth">buttonWidth</code></td>
                    <td>
                        <p>
                            The width of the multiselect button may be fixed using this option.
                        </p>

                        <p class="alert alert-info">
                            Actually, <code>buttonWidth</code> describes the width of the <code>.btn-group</code> container and the width of the <code>button</code> is set to <code>100%</code>.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-buttonWidth').multiselect({
                                        buttonWidth: '400px'
                                    });
                                });
                            </script>
                            <select id="example-buttonWidth" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-buttonWidth').multiselect({
            buttonWidth: '400px'
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>Note that if the text in the button title is too long, it will be truncated and use an ellipsis</p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-buttonWidth-overflow').multiselect({
                                        buttonWidth: '150px'
                                    });
                                });
                            </script>
                            <select id="example-buttonWidth-overflow" multiple="multiple">
                                <option value="1" selected>Option 1</option>
                                <option value="2" selected>Option 2</option>
                                <option value="3" selected>Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-buttonWidth-overflow').multiselect({
            buttonWidth: '150px'
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            This does also work for long options:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-buttonWidth-overflow-option').multiselect({
                                        buttonWidth: '150px'
                                    });
                                });
                            </script>
                            <select id="example-buttonWidth-overflow-option" multiple="multiple">
                                <option value="1" selected>Long Long Long Option 1</option>
                                <option value="2">Very Very Long Option 2</option>
                                <option value="3">Even Longer Option 3</option>
                                <option value="4">Ridiculous Long Option 4</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-buttonWidth-overflow').multiselect({
            buttonWidth: '150px'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-buttonText">buttonText</code></td>
                    <td>
                        <p>
                            A callback specifying the text shown on the button dependent on the currently selected options.
                        </p>

                        <p>
                            The callback gets the currently selected <code>options</code> and the <code>select</code> as argument and returns the string shown as button text. The default <code>buttonText</code> callback returns <code>nonSelectedText</code> in the case no option is selected, <code>nSelectedText</code> in the case more than <code>numberDisplayed</code> options are selected and the names of the selected options if less than <code>numberDisplayed</code> options are selected.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-buttonText').multiselect({
                                        buttonText: function(options, select) {
                                            if (options.length === 0) {
                                                return 'No option selected ...';
                                            }
                                            else if (options.length > 3) {
                                                return 'More than 3 options selected!';
                                            }
                                            else {
                                                var labels = [];
                                                options.each(function() {
                                                    if ($(this).attr('label') !== undefined) {
                                                        labels.push($(this).attr('label'));
                                                    }
                                                    else {
                                                        labels.push($(this).html());
                                                    }
                                                });
                                                return labels.join(', ');
                                            }
                                        }
                                    });
                                });
                            </script>
                            <select id="example-buttonText" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-buttonText').multiselect({
            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'No option selected ...';
                }
                else if (options.length > 3) {
                    return 'More than 3 options selected!';
                }
                 else {
                     var labels = [];
                     options.each(function() {
                         if ($(this).attr('label') !== undefined) {
                             labels.push($(this).attr('label'));
                         }
                         else {
                             labels.push($(this).html());
                         }
                     });
                     return labels.join(', ') + '';
                 }
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-buttonTitle">buttonTitle</code></td>
                    <td>
                        <p>
                            A callback specifying the title of the button.
                        </p>

                        <p>
                            The callback gets the currently selected <code>options</code> and the <code>select</code> as argument and returns the title of the button as string. The default <code>buttonTitle</code> callback returns <code>nonSelectedText</code> in the case no option is selected and the names of the selected options of less than <code>numberDisplayed</code> options are selected. If more than <code>numberDisplayed</code> options are selected, <code>nSelectedText</code> is returned.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-buttonTitle').multiselect({
                                        buttonText: function(options, select) {
                                            return 'Check the title!';
                                        },
                                        buttonTitle: function(options, select) {
                                            var labels = [];
                                            options.each(function () {
                                                labels.push($(this).text());
                                            });
                                            return labels.join(' - ');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-buttonTitle" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-buttonTitle').multiselect({
            buttonText: function(options, select) {
                return 'Check the title!';
            },
            buttonTitle: function(options, select) {
                var labels = [];
                options.each(function () {
                    labels.push($(this).text());
                });
                return labels.join(' - ');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-nonSelectedText">nonSelectedText</code></td>
                    <td>
                        <p>
                            The text displayed when no option is selected. This option is used in the default <code>buttonText</code> and <code>buttonTitle</code> functions.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-nonSelectedText').multiselect({
                                        nonSelectedText: 'Check an option!'
                                    });
                                });
                            </script>
                            <select id="example-nonSelectedText" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-nonSelectedText').multiselect({
            nonSelectedText: 'Check an option!'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-nSelectedText">nSelectedText</code></td>
                    <td>
                        <p>
                            The text displayed if more than <code>numberDisplayed</code> options are selected. This option is used by the default <code>buttonText</code> and <code>buttonTitle</code> callbacks.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-nSelectedText').multiselect({
                                        nSelectedText: ' - Too many options selected!'
                                    });
                                });
                            </script>
                            <select id="example-nSelectedText" multiple="multiple">
                                <option value="1" selected>Option 1</option>
                                <option value="2" selected>Option 2</option>
                                <option value="3" selected>Option 3</option>
                                <option value="4" selected>Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-nSelectedText').multiselect({
            nSelectedText: ' - Too many options selected!'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-allSelectedText">allSelectedText</code></td>
                    <td>
                        <p>
                            <code>allSelectedText</code> is the text displayed if all options are selected. You can disable displaying the <code>allSelectedText</code> by setting it to false.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-allSelectedText').multiselect({
                                        allSelectedText: 'No option left ...'
                                    });
                                });
                            </script>
                            <select id="example-allSelectedText" multiple="multiple">
                                <option value="1" selected>Option 1</option>
                                <option value="2" selected>Option 2</option>
                                <option value="3" selected>Option 3</option>
                                <option value="4" selected>Option 4</option>
                                <option value="5" selected>Option 5</option>
                                <option value="6" selected>Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-allSelectedText').multiselect({
            allSelectedText: 'No option left ...'
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            This option may be useful in combination with the <code>includeSelectAllOption</code>:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-allSelectedText-includeSelectAllOption').multiselect({
                                        includeSelectAllOption: true,
                                        allSelectedText: 'No option left ...'
                                    });
                                });
                            </script>
                            <select id="example-allSelectedText-includeSelectAllOption" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-allSelectedText-includeSelectAllOption').multiselect({
            includeSelectAllOption: true,
            allSelectedText: 'No option left ...'
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Note that the <code>allSelectedText</code> is not shown if only one option is available.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-allSelectedText-allSelectedText-single').multiselect({
                                        includeSelectAllOption: true,
                                        allSelectedText: 'No option left ...'
                                    });
                                });
                            </script>
                            <select id="example-allSelectedText-allSelectedText-single" multiple="multiple">
                                <option value="1">Option 1</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-allSelectedText-allSelectedText-single').multiselect({
            includeSelectAllOption: true,
            allSelectedText: 'No option left ...'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-numberDisplayed">numberDisplayed</code></td>
                    <td>
                        <p>
                            This option is used by the <code>buttonText</code> and <code>buttonTitle</code> functions to determine if too many options would be displayed.
                        </p>

                        <p class="alert alert-info">The functionality can be disabled by setting <code>numberDisplayed</code> to <code>0</code>.</p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-numberDisplayed').multiselect({
                                        numberDisplayed: 1
                                    });
                                });
                            </script>
                            <select id="example-numberDisplayed" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-numberDisplayed').multiselect({
            numberDisplayed: 1
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-delimiterText">delimiterText</code></td>
                    <td>
                        <p>
                            Sets the separator for the list of selected items for mouse-over. Defaults to ', '. Set to '\n' for a neater display.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-delimiterText').multiselect({
                                        delimiterText: '; '
                                    });
                                });
                            </script>
                            <select id="example-delimiterText" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2" selected="selected">Option 2</option>
                                <option value="3" selected="selected">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-delimiterText').multiselect({
            delimiterText '; '
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-optionLabel">optionLabel</code></td>
                    <td>
                        <p>
                            A callback used to define the labels of the options.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-optionLabel').multiselect({
                                        optionLabel: function(element) {
                                            return $(element).html() + ' (' + $(element).val() + ')';
                                        }
                                    });
                                });
                            </script>
                            <select id="example-optionLabel" multiple="multiple">
                                <option value="option-1">Option 1</option>
                                <option value="option-2">Option 2</option>
                                <option value="option-3">Option 3</option>
                                <option value="option-4">Option 4</option>
                                <option value="option-5">Option 5</option>
                                <option value="option-6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-optionLabel').multiselect({
            optionLabel: function(element) {
                return $(element).html() + '(' + $(element).val() + ')';
            }
        });
    });
&lt;/script&gt;
&lt;select id=&quot;example-label&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option value=&quot;option-1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;option-2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;option-3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;option-4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;option-5&quot;&gt;Option 5&lt;/option&gt;
    &lt;option value=&quot;option-6&quot;&gt;Option 6&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-optionClass">optionClass</code></td>
                    <td>
                        <p>
                            A callback used to define the classes for the <code>li</code> elements containing checkboxes and labels.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-optionClass').multiselect({
                                        optionClass: function(element) {
                                            var value = $(element).val();

                                            if (value%2 == 0) {
                                                return 'even';
                                            }
                                            else {
                                                return 'odd';
                                            }
                                        }
                                    });
                                });
                            </script>
                            <style type="text/css">
                                #example-optionClass-container .multiselect-container .odd:not(.active) {
                                    background: #eeeeee;
                                }
                            </style>
                            <div id="example-optionClass-container">
                                <select id="example-optionClass" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-optionClass').multiselect({
            optionClass: function(element) {
                var value = $(element).val();

                if (value%2 == 0) {
                    return 'even';
                }
                else {
                    return 'odd';
                }
            }
        });
    });
&lt;/script&gt;
&lt;style type=&quot;text/css&quot;&gt;
    #example-optionClass-container .multiselect-container .odd:not(.active) {
        background: #eeeeee;
    }
&lt;/style&gt;
&lt;div id=&quot;example-optionClass-container&quot;&gt;
    &lt;select id=&quot;example-optionClass&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-indentGroupOptions">indentGroupOptions</code></td>
                    <td>
                        <p>
                            This option controls if options inside a <code>optgroup</code> are indented.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-indentGroupOptions').multiselect({
                                        indentGroupOptions: false,
                                        enableCollapsibleOptGroups: true
                                    });
                                });
                            </script>
                            <div>
                                <select id="example-indentGroupOptions" multiple="multiple">
                                    <optgroup label="Group 1"></optgroup>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-indentGroupOptions').multiselect({
            indentGroupOptions: false,
            enableCollapsibleOptGroups: true
        });
    });
&lt;/script&gt;
&lt;div&quot;&gt;
    &lt;select id=&quot;example-indentGroupOptions&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><code id="configuration-options-selectedClass">selectedClass</code></td>
                    <td>
                        <p>
                            The class(es) applied on selected options.
                        </p>

                        <div class="example">
                            <style type="text/css">
                                #example-selectedClass-container .multiselect-selected .form-check-label {
                                    color: red;
                                }
                            </style>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selectedClass').multiselect({
                                        buttonContainer: '<div class="btn-group" id="example-selectedClass-container"></div>',
                                        selectedClass: 'active multiselect-selected'
                                    });
                                });
                            </script>
                            <select id="example-selectedClass" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;style type="text/css"&gt;
    #example-selectedClass-container .multiselect-selected .form-check-label {
        color: red;
    }
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectedClass').multiselect({
            buttonContainer: '&lt;div class=&quot;btn-group&quot; id=&quot;example-selectedClass-container&quot;&gt;&lt;/div&gt;',
            selectedClass: 'active multiselect-selected'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-includeSelectAllOption">includeSelectAllOption</code>
                    </td>
                    <td>
                        <p>
                            Set to <code>true</code> or <code>false</code> to enable or disable the select all option.
                        </p>

                        <p class="alert alert-info">
                            To see an example using both the select all option and the filter, see the documentation of the <code>enableFiltering</code> option.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-includeSelectAllOption').multiselect({
                                        includeSelectAllOption: true
                                    });
                                });
                            </script>
                            <select id="example-includeSelectAllOption" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-includeSelectAllOption').multiselect({
            includeSelectAllOption: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            The <code>includeSelectAllOption</code> option can also be used in combination with <code>optgroup</code>'s.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-includeSelectAllOption-optgroups').multiselect({
                                        includeSelectAllOption: true
                                    });
                                });
                            </script>
                            <select id="example-includeSelectAllOption-optgroups" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1">Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-includeSelectAllOption-optgroups').multiselect({
            includeSelectAllOption: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Note that the select all does not trigger the <code>onChange</code> event and only triggers the <code>onSelectAll</code> event:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-includeSelectAllOption-onChange').multiselect({
                                        includeSelectAllOption: true,
                                        onChange: function(option, checked) {
                                            alert('Not triggered when clicking the select all!');
                                        },
                                    });
                                });
                            </script>
                            <select id="example-includeSelectAllOption-onChange" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type="text/javascript"&gt;
    $(document).ready(function() {
        $('#example-includeSelectAllOption-onChange').multiselect({
            includeSelectAllOption: true,
            onChange: function(option, checked) {
                alert('Not triggered when clicking the select all!');
            },
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            The select all element naturally respects disabled elements:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-includeSelectAllOption-disbled').multiselect({
                                        includeSelectAllOption: true
                                    });
                                });
                            </script>
                            <select id="example-includeSelectAllOption-disbled" multiple="multiple">
                                <option value="1" disabled="disabled">Option 1</option>
                                <option value="2" disabled="disabled" selected>Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type="text/javascript"&gt;
    $(document).ready(function() {
        $('#example-includeSelectAllOption-disbled').multiselect({
            includeSelectAllOption: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-selectAllJustVisible">selectAllJustVisible</code>
                    </td>
                    <td>
                        <p>
                            Setting both <code>includeSelectAllOption</code> and <code>enableFiltering</code> to <code>true</code>, the select all option does always select only the visible option. With setting <code>selectAllJustVisible</code> to <code>false</code> this behavior is changed such that always all options (irrespective of whether they are visible) are selected.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selectAllJustVisible').multiselect({
                                        enableFiltering: true,
                                        includeSelectAllOption: true,
                                        selectAllJustVisible: false
                                    });
                                });
                            </script>
                            <select id="example-selectAllJustVisible" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectAllJustVisible').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            selectAllJustVisible: false
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-selectAllText">selectAllText</code>
                    </td>
                    <td>
                        <p>
                            The text displayed for the select all option.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selectAllText').multiselect({
                                        includeSelectAllOption: true,
                                        selectAllText: 'Check all!'
                                    });
                                });
                            </script>
                            <select id="example-selectAllText" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectAllText').multiselect({
            includeSelectAllOption: true,
            selectAllText: 'Check all!'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-selectAllValue">selectAllValue</code>
                    </td>
                    <td>
                        <p>
                            The select all option is added as additional <code>option</code> within the <code>select</code>. To distinguish this option from the original options the value used for the select all option can be configured using the <code>selectAllValue</code> option.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selectAllValue').multiselect({
                                        includeSelectAllOption: true,
                                        selectAllValue: 'select-all-value'
                                    });
                                });
                            </script>
                            <select id="example-selectAllValue" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectAllValue').multiselect({
            includeSelectAllOption: true,
            selectAllValue: 'select-all-value'
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>The <code>selectAllValue</code> option should usually be a string, however, numeric values work as well:</p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selectAllValue-numeric').multiselect({
                                        includeSelectAllOption: true,
                                        selectAllValue: 0
                                    });
                                });
                            </script>
                            <select id="example-selectAllValue-numeric" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectAllValue-numeric').multiselect({
            includeSelectAllOption: true,
            selectAllValue: 0
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-selectAllName">selectAllName</code>
                    </td>
                    <td>
                        <p>
                            This option allows to control the name given to the select all option. See <a href="#post">Server-Side Processing</a> for more details.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selectAllName').multiselect({
                                        includeSelectAllOption: true,
                                        selectAllName: 'select-all-name'
                                    });
                                });
                            </script>
                            <select id="example-selectAllName" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectAllName').multiselect({
            includeSelectAllOption: true,
            selectAllName: 'select-all-name'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-selectAllNumber">selectAllNumber</code>
                    </td>
                    <td>
                        <p>
                            If set to <code>true</code> (default), the number of selected options will be shown in parantheses when all options are seleted. The below example shows the behavior of the selectalloption with <code>selectAllNumber</code> set to <code>false</code>:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selectAllNumber').multiselect({
                                        includeSelectAllOption: true,
                                        selectAllNumber: false
                                    });
                                });
                            </script>
                            <select id="example-selectAllNumber" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectAllNumber').multiselect({
            includeSelectAllOption: true,
            selectAllNumber: false
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-onSelectAll">onSelectAll</code>
                    </td>
                    <td>
                        <p>
                            This function is triggered when the select all option is used to select all options. Note that this can also be triggered manually using the <code>.multiselect('selectAll')</code> method.
                        </p>

                        <p class="alert alert-warning">
                            Note that the <code>onChange</code> option is not triggered when (de)selecting all options using the select all option.
                        </p>

                        <p class="alert alert-warning">
                            The <code>onSelectAll</code> option is only triggered if the select all option was checked; it is not triggered if all options were checked manually (causing the select all option to be checked as well).
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onSelectAll').multiselect({
                                        includeSelectAllOption: true,
                                        onSelectAll: function() {
                                            alert('onSelectAll triggered!');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-onSelectAll" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-onSelectAll').multiselect({
        includeSelectAllOption: true,
        onSelectAll: function() {
            alert('onSelectAll triggered!');
        }
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-onDeselectAll">onDeselectAll</code>
                    </td>
                    <td>
                        <p>
                            This function is triggered when the select all option is used to <b>de</b>select all options. Note that this can also be triggered manually using the <code>.multiselect('deselectAll')</code> method.
                        </p>

                        <p class="alert alert-warning">
                            Note that the <code>onChange</code> option is not triggered when (de)selecting all options using the select all option.
                        </p>

                        <p class="alert alert-warning">
                            The <code>onDeselectAll</code> option is only triggered if the select all option was unchecked; it is not triggered if all options were unchecked manually (causing the select all option to be unchecked as well).
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-onDeselectAll').multiselect({
                                        includeSelectAllOption: true,
                                        enableFiltering: true,
                                        onDeselectAll: function() {
                                            alert('onDeselectAll triggered!');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-onDeselectAll" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-onDeselectAll').multiselect({
            includeSelectAllOption: true,
            onDeselectAll: function() {
                alert('onDeselectAll triggered!');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-enableFiltering">enableFiltering</code>
                    </td>
                    <td>
                        <p>
                            Set to <code>true</code> or <code>false</code> to enable or disable the filter. A filter <code>input</code> will be added to dynamically filter all options.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableFiltering').multiselect({
                                        enableFiltering: true
                                    });
                                });
                            </script>
                            <select id="example-enableFiltering" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableFiltering').multiselect({
            enableFiltering: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            The <code>enableFiltering</code> option can easily be used in combination with the <code>includeSelectAllOption</code> option:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableFiltering-includeSelectAllOption').multiselect({
                                        includeSelectAllOption: true,
                                        enableFiltering: true
                                    });
                                });
                            </script>
                            <select id="example-enableFiltering-includeSelectAllOption" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableFiltering-includeSelectAllOption').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            The <code>enableFiltering</code> option can also be used in combination with <code>optgroup</code>'s.
                        </p>
                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableFiltering-optgroups').multiselect({
                                        enableFiltering: true
                                    });
                                });
                            </script>
                            <select id="example-enableFiltering-optgroups" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1">Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-example-enableFiltering-optgroups').multiselect({
            enableFiltering: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Clickable <code>optgroup</code>'s are also supported:
                        </p>
                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableFiltering-enableClickableOptGroups').multiselect({
                                        enableFiltering: true,
                                        enableClickableOptGroups: true
                                    });
                                });
                            </script>
                            <select id="example-enableFiltering-enableClickableOptGroups" multiple="multiple">
                                <optgroup label="Group 1">
                                    <option value="1-1">Option 1.1</option>
                                    <option value="1-2" selected="selected">Option 1.2</option>
                                    <option value="1-3" selected="selected">Option 1.3</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-example-enableFiltering-enableClickableOptgroups').multiselect({
            enableFiltering: true,
            enableClickableOptGroups: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>
                            Finally, the option can also be used together with <code>onChange</code> or similar events:
                        </p>
                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableFiltering-onChange-onDropdownHide').multiselect({
                                        enableFiltering: true,
                                        onChange: function(option, checked) {
                                            alert('onChange!');
                                        },
                                        onDropdownHide: function(event) {
                                            alert('onDropdownHide!');
                                        }
                                    });
                                });
                            </script>
                            <select id="example-enableFiltering-onChange-onDropdownHide" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableFiltering-onChange-onDropdownHide').multiselect({
            enableFiltering: true,
            onChange: function(option, checked) {
                alert('onChange!');
            },
            onDropdownHide: function(event) {
                alert('onDropdownHide!');
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code id="configuration-options-includeFilterClearBtn">includeFilterClearBtn</code>
                    </td>
                    <td>

                        <p>
                            If it is not desired to have a clear button for the search it can also be disabled.
                        </p>
                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-includeFilterClearBtn').multiselect({
                                        enableFiltering: true,
                                        includeFilterClearBtn: false
                                    });
                                });
                            </script>
                            <select id="example-includeFilterClearBtn" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2" selected="selected">Option 2</option>
                                <option value="3" selected="selected">Option 3</option>
                                <option value="4" selected="selected">Option 4</option>
                                <option value="5" selected="selected">Option 5</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-includeFilterClearBtn').multiselect({
            enableFiltering: true,
            includeFilterClearBtn: false
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                    </td>
                </tr>

                <tr>
                    <td>
                        <code id="configuration-options-enableCaseInsensitiveFiltering">enableCaseInsensitiveFiltering</code>
                    </td>
                    <td>
                        <p>
                            The filter as configured above will use case sensitive filtering, by setting <code>enableCaseInsensitiveFiltering</code> to <code>true</code> this behavior can be changed to use case insensitive filtering.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableCaseInsensitiveFiltering').multiselect({
                                        enableCaseInsensitiveFiltering: true
                                    });
                                });
                            </script>
                            <select id="example-enableCaseInsensitiveFiltering" multiple="multiple">
                                <option value="1">OpTiOn 1</option>
                                <option value="2">OpTiOn 2</option>
                                <option value="3">OpTiOn 3</option>
                                <option value="4">OpTiOn 4</option>
                                <option value="5">OpTiOn 5</option>
                                <option value="6">OpTiOn 6</option>
                                <option value="7">OpTiOn 7</option>
                                <option value="8">OpTiOn 8</option>
                                <option value="9">OpTiOn 9</option>
                                <option value="10">OpTiOn 10</option>
                                <option value="11">OpTiOn 11</option>
                                <option value="12">OpTiOn 12</option>
                                <option value="13">OpTiOn 13</option>
                                <option value="14">OpTiOn 14</option>
                                <option value="15">OpTiOn 15</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableCaseInsensitiveFiltering').multiselect({
            enableCaseInsensitiveFiltering: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-enableFullValueFiltering">enableFullValueFiltering</code>
                    </td>
                    <td>
                        <p>
                            Set to <code>true</code> to enable full value filtering, that is all options are shown where the query is a prefix of. An example is given here: <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/555">#555</a>.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-enableFullValueFiltering').multiselect({
                                        enableFiltering: true,
                                        enableFullValueFiltering: true
                                    });
                                });
                            </script>
                            <select id="example-enableFullValueFiltering" multiple="multiple">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enableFullValueFiltering').multiselect({
            enableFiltering: true,
            enableFullValueFiltering: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-filterBehavior">filterBehavior</code>
                    </td>
                    <td>
                        <p>
                            The options are filtered based on their <code>text</code>. This behavior can be changed to use the <code>value</code> of the options or <code>both</code> the text and the value.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-filterBehavior').multiselect({
                                        enableFiltering: true,
                                        filterBehavior: 'value'
                                    });
                                });
                            </script>

                            <p>
                                In this example, the options have values from <code>a</code> to <code>n</code>. Instead of searching the text of the options, the value of the options is searched.
                            </p>

                            <select id="example-filterBehavior" multiple="multiple">
                                <option value="a">Option 1</option>
                                <option value="b">Option 2</option>
                                <option value="c">Option 3</option>
                                <option value="d">Option 4</option>
                                <option value="e">Option 5</option>
                                <option value="f">Option 6</option>
                                <option value="g">Option 7</option>
                                <option value="h">Option 8</option>
                                <option value="i">Option 9</option>
                                <option value="j">Option 10</option>
                                <option value="k">Option 11</option>
                                <option value="l">Option 12</option>
                                <option value="m">Option 13</option>
                                <option value="n">Option 14</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-filterBehavior').multiselect({
            enableFiltering: true,
            filterBehavior: 'value'
        });
    });
&lt;/script&gt;
&lt;select id="example-filterBehavior" multiple="multiple"&gt;
    &lt;option value=&quot;a"&gt;Option 1&lt;/option&gt;
    &lt;option value="b"&gt;Option 2&lt;/option&gt;
    &lt;option value="c"&gt;Option 3&lt;/option&gt;
    &lt;option value="d"&gt;Option 4&lt;/option&gt;
    &lt;option value="e"&gt;Option 5&lt;/option&gt;
    &lt;option value="f"&gt;Option 6&lt;/option&gt;
    &lt;option value="g"&gt;Option 7&lt;/option&gt;
    &lt;option value="h"&gt;Option 8&lt;/option&gt;
    &lt;option value="i"&gt;Option 9&lt;/option&gt;
    &lt;option value="j"&gt;Option 10&lt;/option&gt;
    &lt;option value="k"&gt;Option 11&lt;/option&gt;
    &lt;option value="l"&gt;Option 12&lt;/option&gt;
    &lt;option value="m"&gt;Option 13&lt;/option&gt;
    &lt;option value="n"&gt;Option 14&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-filterPlaceholder">filterPlaceholder</code>
                    </td>
                    <td>
                        <p>
                            The placeholder used for the filter input.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-filter-placeholder').multiselect({
                                        enableFiltering: true,
                                        filterPlaceholder: 'Search for something...'
                                    });
                                });
                            </script>

                            <select id="example-filter-placeholder" multiple="multiple">
                                <option value="a">Option 1</option>
                                <option value="b">Option 2</option>
                                <option value="c">Option 3</option>
                                <option value="d">Option 4</option>
                                <option value="e">Option 5</option>
                                <option value="f">Option 6</option>
                                <option value="g">Option 7</option>
                                <option value="h">Option 8</option>
                                <option value="i">Option 9</option>
                                <option value="j">Option 10</option>
                                <option value="k">Option 11</option>
                                <option value="l">Option 12</option>
                                <option value="m">Option 13</option>
                                <option value="n">Option 14</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-filter-placeholder').multiselect({
            enableFiltering: true,
            filterPlaceholder: 'Search for something...'
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-includeResetOption">includeResetOption</code>
                    </td>
                    <td>
                        <p>
                            Add reset button to dropdown.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-include-reset-option').multiselect({
                                        includeResetOption: true
                                    });
                                });
                            </script>

                            <select id="example-include-reset-option" multiple="multiple">
                                <option value="a">Option 1</option>
                                <option value="b">Option 2</option>
                                <option value="c">Option 3</option>
                                <option value="d">Option 4</option>
                                <option value="e">Option 5</option>
                                <option value="f">Option 6</option>
                                <option value="g">Option 7</option>
                                <option value="h">Option 8</option>
                                <option value="i">Option 9</option>
                                <option value="j">Option 10</option>
                                <option value="k">Option 11</option>
                                <option value="l">Option 12</option>
                                <option value="m">Option 13</option>
                                <option value="n">Option 14</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-include-reset-option').multiselect({
            includeResetOption: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-includeResetDivider">includeResetDivider</code>
                    </td>
                    <td>
                        <p>
                            Add a divider between reset button and options.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-include-reset-divider').multiselect({
                                        includeResetOption: true,
                                        includeResetDivider: true
                                    });
                                });
                            </script>

                            <select id="example-include-reset-divider" multiple="multiple">
                                <option value="a">Option 1</option>
                                <option value="b">Option 2</option>
                                <option value="c">Option 3</option>
                                <option value="d">Option 4</option>
                                <option value="e">Option 5</option>
                                <option value="f">Option 6</option>
                                <option value="g">Option 7</option>
                                <option value="h">Option 8</option>
                                <option value="i">Option 9</option>
                                <option value="j">Option 10</option>
                                <option value="k">Option 11</option>
                                <option value="l">Option 12</option>
                                <option value="m">Option 13</option>
                                <option value="n">Option 14</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-include-reset-divider').multiselect({
            includeResetOption: true,
            includeResetDivider: true
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <code id="configuration-options-resetText">resetText</code>
                    </td>
                    <td>
                        <p>
                            Add reset button to dropdown.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-reset-text').multiselect({
                                        includeResetOption: true,
                                        resetText: "Reset all"
                                    });
                                });
                            </script>

                            <select id="example-reset-text" multiple="multiple">
                                <option value="a">Option 1</option>
                                <option value="b">Option 2</option>
                                <option value="c">Option 3</option>
                                <option value="d">Option 4</option>
                                <option value="e">Option 5</option>
                                <option value="f">Option 6</option>
                                <option value="g">Option 7</option>
                                <option value="h">Option 8</option>
                                <option value="i">Option 9</option>
                                <option value="j">Option 10</option>
                                <option value="k">Option 11</option>
                                <option value="l">Option 12</option>
                                <option value="m">Option 13</option>
                                <option value="n">Option 14</option>
                            </select>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-reset-text').multiselect({
            includeResetOption: true,
            resetText: "Reset all"
        });
    });
&lt;/script&gt;
</pre>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="page-header">
                <h2 id="templates">Templates</h2>
            </div>


            <p>
                The generated HTML markup can be controlled using templates. Basically, templates are simple configuration options. The default templates are shown below:
            </p>

            <p class="alert alert-warning">
                However, note that messing with the template's classes may cause unexpected behavior. For example the button should always have the class <code>.multiselect</code>,
            </p>

            <p class="alert alert-info">
                In addition, note that other options may also have influence on the templates, for example the <code>buttonClass</code> option.
            </p>

            <pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example').multiselect({
            templates: {
                button: '&lt;button type=&quot;button&quot; class=&quot;multiselect dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;&lt;span class=&quot;multiselect-selected-text&quot;&gt;&lt;/span>&lt;/button&gt;',
                popupContainer: '&lt;div class=&quot;multiselect-container dropdown-menu&quot;&gt;&lt;/div&gt;',
                filter: '&lt;div class="multiselect-filter d-flex align-items-center"&gt;&lt;i class="fas fa-sm fa-search text-muted"&gt;&lt;/i&gt;&lt;input type="search" class="multiselect-search form-control" /&gt;&lt;/div&gt;',
                option: '&lt;a class=&quot;multiselect-option dropdown-item&quot;&gt;&lt;/a&gt;',
                divider: '&lt;div class=&quot;multiselect-item dropdown-divider&quot;&gt;&lt;/div&gt;',
                optionGroup: '&lt;a class=&quot;multiselect-item multiselect-group&quot;&gt;&lt;/a&gt;',
                resetButton: '&lt;div class=&quot;multiselect-reset text-center p-2&quot;&gt;&lt;a class=&quot;btn btn-sm btn-block btn-outline-secondary&quot;&gt;&lt;/a&gt;&lt;/div&gt;'
            }
        });
    });
&lt;/script&gt;
</pre>

            <p>
                For example other elements instead of buttons may be used by adapting the template:
            </p>

            <div class="example">
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example-templates-button').multiselect({
                            buttonContainer: '<div></div>',
                            buttonClass: '',
                            templates: {
                                button: '<span class="multiselect dropdown-toggle" data-toggle="dropdown">Click me!</span>'
                            }
                        });
                    });
                </script>
                <style type="text/css">
                    span.multiselect {
                        padding: 2px 6px;
                        font-weight: bold;
                        cursor: pointer;
                    }
                </style>
                <select id="example-templates-button" multiple="multiple">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                    <option value="6">Option 6</option>
                </select>
            </div>
            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-templates-button').multiselect({
            buttonContainer: '&lt;div&gt;&lt;/div&gt;',
            buttonContainer: '',
            buttonClass: '',
            templates: {
                button: '&lt;span class=&quot;multiselect dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;Click me!&lt;/span&gt;'
            }
        });
    });
&lt;/script&gt;
&lt;style type=&quot;text/css&quot;&gt;
    span.multiselect {
        padding: 2px 6px;
        font-weight: bold;
        cursor: pointer;
    }
&lt;/style&gt;
</pre>
            </div>

            <p>
                The most interesting template is the <code>li</code> template as it allows to customize the displayed options; for example (see <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/738">#738</a> for details) to include input elements in the options:
            </p>

            <div class="example">
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example-templates-input').multiselect({
                            templates: {
                                li: '<a class="multiselect-option dropdown-item"><input type="text" /></a>'
                            }
                        });
                    });
                </script>
                <style type="text/css">
                    span.multiselect {
                        padding: 2px 6px;
                        font-weight: bold;
                        cursor: pointer;
                    }
                </style>
                <select id="example-templates-input" multiple="multiple">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                    <option value="6">Option 6</option>
                </select>
            </div>
            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-templates-input').multiselect({
            templates: {
                li: '&lt;a class&quot;multiselect-option dropdown-item&quot;&gt;&lt;a&gt;&lt;label style=&quot;display:inline;&quot;&gt;&lt;/label&gt;&lt;input type=&quot;text&quot; /&gt;&lt;/a&gt;&lt;/a&gt;'
            }
        });
    });
&lt;/script&gt;
</pre>

                <div class="page-header">
                    <h2 id="styling">Styling</h2>
                </div>

                <p>The style of the plugin is fully adaptable through CSS; a completely rendered example is shown below - including select all option, filter and option groups.</p>

                <pre class="prettyprint linenums">
&lt;div class=&quot;multiselect-container dropdown-menu show&quot;&gt;
    &lt;div class=&quot;multiselect-item multiselect-filter&quot;&gt;
        &lt;div class=&quot;input-group input-group-sm p-1&quot;&gt;
            &lt;div class=&quot;input-group-prepend&quot;&gt;
                &lt;i class=&quot;input-group-text fas fa-search&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;input class=&quot;form-control multiselect-search&quot; type=&quot;text&quot; placeholder=&quot;Search&quot;&gt;
            &lt;div class=&quot;input-group-append&quot;&gt;
                &lt;button class=&quot;multiselect-clear-filter input-group-text&quot; type=&quot;button&quot;&gt;
                    &lt;i class=&quot;fas fa-times&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;a class=&quot;multiselect-option dropdown-item multiselect-item multiselect-all&quot;&gt;
        &lt;span class=&quot;form-check d-inline-flex&quot; title=&quot;Select all&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;multiselect-all&quot;&gt;
            &lt;label class=&quot;form-check-label font-weight-bold&quot;&gt;Select all&lt;/label&gt;
        &lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;multiselect-reset text-center p-2&quot;&gt;
        &lt;a class=&quot;btn btn-sm btn-block btn-outline-secondary&quot;&gt;Reset&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;multiselect-item dropdown-divider mt-0&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;multiselect-item multiselect-group dropdown-item&quot;&gt;
        &lt;input type=&quot;checkbox&quot; value=&quot;undefined&quot;&gt;
        Fruits
        &lt;span class=&quot;caret-container dropdown-toggle pl-1&quot;&gt;&lt;/span&gt;
    &lt;/a&gt;
    &lt;a class=&quot;multiselect-option dropdown-item&quot;&gt;
        &lt;span class=&quot;form-check d-inline-flex&quot; title=&quot;Apple&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;Apple&quot;&gt;
            &lt;label class=&quot;form-check-label&quot;&gt;Apple&lt;/label&gt;
        &lt;/span&gt;&lt;/a&gt;
    &lt;a class=&quot;multiselect-option dropdown-item&quot;&gt;
        &lt;span class=&quot;form-check d-inline-flex&quot; title=&quot;Banana&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;Banana&quot;&gt;
            &lt;label class=&quot;form-check-label&quot;&gt;Banana&lt;/label&gt;
        &lt;/span&gt;
    &lt;/a&gt;
    &lt;a class=&quot;multiselect-item multiselect-group dropdown-item&quot;&gt;
        &lt;input type=&quot;checkbox&quot; value=&quot;undefined&quot;&gt;
        Vegetables
        &lt;span class=&quot;caret-container dropdown-toggle pl-1&quot;&gt;&lt;/span&gt;
    &lt;/a&gt;
    &lt;a class=&quot;multiselect-option dropdown-item&quot;&gt;
        &lt;span class=&quot;form-check d-inline-flex&quot; title=&quot;Potato&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;Potato&quot;&gt;
            &lt;label class=&quot;form-check-label&quot;&gt;Potato&lt;/label&gt;
        &lt;/span&gt;
    &lt;/a&gt;
    &lt;a class=&quot;multiselect-option dropdown-item&quot;&gt;
        &lt;span class=&quot;form-check d-inline-flex&quot; title=&quot;Parsnip&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;Parsnip&quot;&gt;
            &lt;label class=&quot;form-check-label&quot;&gt;Parsnip&lt;/label&gt;
        &lt;/span&gt;
    &lt;/a&gt;
&lt;/div&gt;
</pre>

                <p>
                    The most important classes are: <code>multiselect-container</code>, <code>multiselect-filter</code>, <code>multiselect-all</code>, <code>multiselect-item</code>, <code>multiselect-group</code>, <code>multiselect-option</code> as well as <code>disabled</code> and <code>active</code>. Both for collapsing and filtering options, the classes <code>multiselect-filter-hidden</code> and <code>multiselect-collapsible-hidden</code> are used.
                </p>

                <div class="page-header">
                    <h2 id="methods">Methods</h2>
                </div>

                <table class="table layout-fixed">
                    <tbody>
                    <tr>
                        <td width="30%">
                            <code>.multiselect('destroy')</code>
                        </td>
                        <td>
                            <p>
                                This method is used to destroy the plugin on the given element - meaning unbinding the plugin.
                            </p>

                            <div class="example">
                                <div class="btn-group">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-destroy').multiselect();
                                            $('#example-destroy-button').on('click', function() {
                                                $('#example-destroy').multiselect('destroy');
                                            });
                                        });
                                    </script>
                                    <div class="btn-group">
                                        <select id="example-destroy" multiple="multiple">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                            <option value="6">Option 6</option>
                                        </select>
                                        <button id="example-destroy-button" class="btn btn-danger">Destroy/Unbind</button>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-destroy').multiselect();
        $('#example-destroy-button').on('click', function() {
            $('#example-destroy').multiselect('destroy');
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('refresh')</code>
                        </td>
                        <td>
                            <p>
                                This method is used to refresh the checked checkboxes based on the currently selected options within the <code>select</code>. Click &apos;Select some options&apos; to select some of the options. Then click refresh. The plugin will update the checkboxes accordingly.
                            </p>

                            <div class="example">
                                <div>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-refresh').multiselect();

                                            $('#example-refresh-select').on('click', function() {
                                                $('option[value="1"]', $('#example-refresh')).prop('selected', true);
                                                $('option[value="3"]', $('#example-refresh')).prop('selected', true);
                                                $('option[value="4"]', $('#example-refresh')).prop('selected', true);

                                                alert('Option 1, 2 and 4.');
                                            });

                                            $('#example-refresh-deselect').on('click', function() {
                                                $('option', $('#example-refresh')).each(function(element) {
                                                    $(this).removeAttr('selected').prop('selected', false);
                                                });
                                            });

                                            $('#example-refresh-button').on('click', function() {
                                                $('#example-refresh').multiselect('refresh');
                                            });
                                        });
                                    </script>
                                    <select id="example-refresh" multiple="multiple">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                    </select>
                                    <div class="btn-group mt-2">
                                        <button id="example-refresh-select" class="btn btn-outline-secondary">Select some options!</button>
                                        <button id="example-refresh-deselect" class="btn btn-outline-secondary">Deselect some options...</button>
                                        <button id="example-refresh-button" class="btn btn-primary">Refresh</button>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-refresh').multiselect();

        $('#example-refresh-select').on('click', function() {
            $('option[value="1"]', $('#example-refresh')).prop('selected', true);
            $('option[value="3"]', $('#example-refresh')).prop('selected', true);
            $('option[value="4"]', $('#example-refresh')).prop('selected', true);

            alert('Option 1, 2 and 4.');
        });

        $('#example-refresh-deselect').on('click', function() {
            $('option', $('#example-refresh')).each(function(element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
        });

        $('#example-refresh-button').on('click', function() {
            $('#example-refresh').multiselect('refresh');
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('rebuild')</code>
                        </td>
                        <td>
                            <p>
                                Rebuilds the whole dropdown menu. All selected options will remain selected (if still existent!).
                            </p>

                            <div class="example">
                                <div>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-rebuild').multiselect();

                                            $('#example-rebuild-button').on('click', function() {
                                                $('#example-rebuild').multiselect('rebuild');
                                            });

                                            $('#example-rebuild-add').on('click', function() {
                                                $('#example-rebuild').append('<option value="add1">Addition 1</option><option value="add2">Addition 2</option><option value="add3">Addition 3</option>');
                                            });

                                            $('#example-rebuild-delete').on('click', function() {
                                                $('option[value="add1"]', $('#example-rebuild')).remove();
                                                $('option[value="add2"]', $('#example-rebuild')).remove();
                                                $('option[value="add3"]', $('#example-rebuild')).remove();
                                            });
                                        });
                                    </script>
                                    <select id="example-rebuild" multiple="multiple">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                    </select>
                                    <div class="btn-group mt-2">
                                        <button id="example-rebuild-add" class="btn btn-outline-secondary">Add some options!</button>
                                        <button id="example-rebuild-delete" class="btn btn-outline-secondary">Remove some options...</button>
                                        <button id="example-rebuild-button" class="btn btn-primary">Rebuild</button>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-rebuild').multiselect();

        $('#example-rebuild-button').on('click', function() {
            $('#example-rebuild').multiselect('rebuild');
        });

        $('#example-rebuild-add').on('click', function() {
            $('#example-rebuild').append('&lt;option value="add1"&gt;Addition 1&lt;/option&gt;
&lt;option value="add2"&gt;Addition 2&lt;/option&gt;&lt;option value="add3"&gt;Addition 3&lt;/option&gt;');
        });

        $('#example-rebuild-delete').on('click', function() {
            $('option[value="add1"]', $('#example-rebuild')).remove();
            $('option[value="add2"]', $('#example-rebuild')).remove();
            $('option[value="add3"]', $('#example-rebuild')).remove();
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('select', value)</code>
                        </td>
                        <td>
                            <p>
                                Selects an option by its value. Works also using an array of values.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-select').multiselect();

                                        $('#example-select-button').on('click', function() {
                                            $('#example-select').multiselect('select', ['1', '2', '4']);

                                            alert('Selected 1, 2 and 4.');
                                        });
                                    });
                                </script>
                                <select id="example-select" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <button id="example-select-button" class="btn btn-outline-secondary ml-1">Select some options...</button>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-select').multiselect();

        $('#example-select-button').on('click', function() {
            $('#example-select').multiselect('select', ['1', '2', '4']);

            alert('Selected 1, 2 and 4.');
        });
    });
&lt;/script&gt;
</pre>
                            </div>

                            <p>
                                The method provides an additional parameter: <code>.multiselect('select', value, triggerOnChange)</code>. If the second parameter is set to true, the method will manually trigger the <code>onChange</code> option.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-select-onChange').multiselect({
                                            onChange: function(option, checked, select) {
                                                alert('onChange triggered ...');
                                            }
                                        });

                                        $('#example-select-onChange-button').on('click', function() {
                                            $('#example-select-onChange').multiselect('select', '1', true);
                                        });
                                    });
                                </script>
                                <select id="example-select-onChange" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <button id="example-select-onChange-button" class="btn btn-outline-secondary ml-1">Select one option</button>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-select-onChange').multiselect({
            onChange: function(option, checked, select) {
                alert('onChange triggered ...');
            }
        });

        $('#example-select-onChange-button').on('click', function() {
            $('#example-select-onChange').multiselect('select', '1', true);
        });
    });
&lt;/script&gt;
</pre>
                            </div>

                            <p>
                                The above parameter does also work when selecting multipe values. Note that <code>onChange</code> is called for each selected option individually!
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-select-onChange-array').multiselect({
                                            onChange: function(option, checked, select) {
                                                alert('onChange triggered ...');
                                            }
                                        });

                                        $('#example-select-onChange-array-button').on('click', function() {
                                            $('#example-select-onChange-array').multiselect('select', ['1', '3'], true);
                                        });
                                    });
                                </script>
                                <select id="example-select-onChange-array" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <button id="example-select-onChange-array-button" class="btn btn-outline-secondary ml-1">Select two options</button>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-select-onChange-array').multiselect({
            onChange: function(option, checked, select) {
                alert('onChange triggered ...');
            }
        });

        $('#example-select-onChange-array-button').on('click', function() {
            $('#example-select-onChange-array').multiselect('select', ['1', '3'], true);
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('deselect', value)</code>
                        </td>
                        <td>
                            <p>
                                Deselect an option by its value. Works also using an array of values.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-deselect').multiselect();

                                        $('#example-deselect-button').on('click', function() {
                                            $('#example-deselect').multiselect('deselect', ['1', '2', '4']);

                                            alert('Deselected 1, 2 and 4.');
                                        });
                                    });
                                </script>
                                <select id="example-deselect" multiple="multiple">
                                    <option value="1" selected>Option 1</option>
                                    <option value="2" selected>Option 2</option>
                                    <option value="3" selected>Option 3</option>
                                    <option value="4" selected>Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <button id="example-deselect-button" class="btn btn-outline-secondary">Deselect some options...</button>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-deselect').multiselect();

        $('#example-deselect-button').on('click', function() {
            $('#example-deselect').multiselect('deselect', ['1', '2', '4']);

            alert('Deselected 1, 2 and 4.');
        });
    });
&lt;/script&gt;
</pre>
                            </div>

                            <p>
                                The method provides an additional parameter: <code>.multiselect('deselect', value, triggerOnChange)</code>. If the second parameter is set to true, the method will manually trigger the <code>onChange</code> option.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-deselect-onChange').multiselect({
                                            onChange: function(option, checked, select) {
                                                alert('onChange triggered ...');
                                            }
                                        });

                                        $('#example-deselect-onChange-button').on('click', function() {
                                            $('#example-deselect-onChange').multiselect('deselect', '1', true);
                                        });
                                    });
                                </script>
                                <select id="example-deselect-onChange" multiple="multiple">
                                    <option value="1" selected>Option 1</option>
                                    <option value="2" selected>Option 2</option>
                                    <option value="3" selected>Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <button id="example-deselect-onChange-button" class="btn btn-outline-secondary ml-1">Deselect one option</button>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-deselect-onChange').multiselect({
            onChange: function(option, checked, select) {
                alert('onChange triggered ...');
            }
        });

        $('#example-deselect-onChange-button').on('click', function() {
            $('#example-deselect-onChange').multiselect('deselect', '1', true);
        });
    });
&lt;/script&gt;
</pre>
                            </div>

                            <p>
                                The above parameter does also work when deselecting multiple options. Note that <code>onChange</code> is called for each deselected option individually.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-deselect-onChange-array').multiselect({
                                            onChange: function(option, checked, select) {
                                                alert('onChange triggered ...');
                                            }
                                        });

                                        $('#example-deselect-onChange-array-button').on('click', function() {
                                            $('#example-deselect-onChange-array').multiselect('deselect', ['1', '3'], true);
                                        });
                                    });
                                </script>
                                <select id="example-deselect-onChange-array" multiple="multiple">
                                    <option value="1" selected>Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3" selected>Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <button id="example-deselect-onChange-array-button" class="btn btn-outline-secondary">Deselect two options</button>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-deselect-onChange-array').multiselect({
            onChange: function(option, checked, select) {
                alert('onChange triggered ...');
            }
        });

        $('#example-deselect-onChange-array-button').on('click', function() {
            $('#example-deselect-onChange-array').multiselect('deselect', ['1', '3'], true);
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('selectAll', justVisible)</code>
                        </td>
                        <td>
                            <p>
                                Selects all options. If <code>justVisible</code> is set to <code>true</code> or not provided, all visible options are selected (when using the filter), otherweise (<code>justVisible</code> set to <code>false</code>) all options are selected.
                            </p>

                            <p class="alert alert-info">
                                Note that setting <code>justVisible</code> to <code>true</code>, or providing no parameter will select all visible options, that is the dropdown needs to be opened.
                            </p>

                            <p class="alert alert-info">
                                Currently, it is required to call <code>.multiselect('updateButtonText')</code> manually after calling <code>.multiselect('selectAll', justVisible)</code>.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-selectAll').multiselect({
                                            includeSelectAllOption: true
                                        });

                                        $('#example-selectAll-visible').on('click', function() {
                                            $('#example-selectAll').multiselect('selectAll', true);
                                        });
                                        $('#example-selectAll-all').on('click', function() {
                                            $('#example-selectAll').multiselect('selectAll', false);
                                        });
                                    });
                                </script>
                                <select id="example-selectAll" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <div class="btn-group ml-1">
                                    <button id="example-selectAll-visible" class="btn btn-outline-secondary">Select all visible options</button>
                                    <button id="example-selectAll-all" class="btn btn-outline-secondary">Select all options</button>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selectAll').multiselect({
            includeSelectAllOption: true
        });

        $('#example-selectAll-visible').on('click', function() {
            $('#example-selectAll').multiselect('selectAll', true);
        });
        $('#example-selectAll-all').on('click', function() {
            $('#example-selectAll').multiselect('selectAll', false);
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('deselectAll', justVisible)</code>
                        </td>
                        <td>
                            <p>
                                Deselects all options. If <code>justVisible</code> is set to <code>true</code> or not provided, all visible options are deselected, otherweise (<code>justVisible</code> set to <code>false</code>) all options are deselected.
                            </p>

                            <p class="alert alert-info">
                                Note that setting <code>justVisible</code> to <code>true</code>, or providing no parameter will select all visible options, that is the dropdown needs to be opened.
                            </p>

                            <p class="alert alert-info">
                                Currently, it is required to call <code>.multiselect('updateButtonText')</code> manually after calling <code>.multiselect('selectAll', justVisible)</code>.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-deselectAll').multiselect({
                                            includeSelectAllOption: true
                                        });

                                        $('#example-deselectAll-visible').on('click', function() {
                                            $('#example-deselectAll').multiselect('deselectAll', true);
                                        });
                                        $('#example-deselectAll-all').on('click', function() {
                                            $('#example-deselectAll').multiselect('deselectAll', false);
                                        });
                                    });
                                </script>
                                <select id="example-deselectAll" multiple="multiple">
                                    <option value="1" selected>Option 1</option>
                                    <option value="2" selected>Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4" selected>Option 4</option>
                                    <option value="5" selected>Option 5</option>
                                    <option value="6" selected>Option 6</option>
                                </select>
                                <div class="btn-group ml-2">
                                    <button id="example-deselectAll-visible" class="btn btn-outline-secondary">Deselect all visible options</button>
                                    <button id="example-deselectAll-all" class="btn btn-outline-secondary">Deselect all options</button>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-deselectAll').multiselect({
            includeSelectAllOption: true
        });

        $('#example-deselectAll-visible').on('click', function() {
            $('#example-deselectAll').multiselect('deselectAll', true);
        });
        $('#example-deselectAll-all').on('click', function() {
            $('#example-deselectAll').multiselect('deselectAll', false);
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('updateButtonText')</code>
                        </td>
                        <td>
                            <p>
                                When manually selecting/deselecting options and the corresponding checkboxes, this function updates the text and title of the button.
                            </p>

                            <p class="alert alert-info">
                                Note that usually this method is only needed when using <code>.multiselect('selectAll', justVisible)</code> or <code>.multiselect('deselectAll', justVisible)</code>. In all other cases, <code>.multiselect('refresh')</code> should be used.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-updateButtonText').multiselect({
                                            buttonContainer: '<div class="btn-group" id="example-updateButtonText-container"></div>'
                                        });

                                        $('#example-updateButtonText-select').on('click', function() {
                                            $('option[value="1"]', $('#example-updateButtonText')).prop('selected', true);
                                            $('option[value="3"]', $('#example-updateButtonText')).prop('selected', true);

                                            $('input[value="1"]', $('#example-updateButtonText-container')).prop('checked', true);
                                            $('input[value="3"]', $('#example-updateButtonText-container')).prop('checked', true);

                                            $('input[value="1"]', $('#example-updateButtonText-container')).closest('.multiselect-option').addClass('active');
                                            $('input[value="3"]', $('#example-updateButtonText-container')).closest('.multiselect-option').addClass('active');
                                        });
                                        $('#example-updateButtonText-update').on('click', function() {
                                            $('#example-updateButtonText').multiselect('updateButtonText');
                                        });
                                    });
                                </script>
                                <select id="example-updateButtonText" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <div class="btn-group ml-2">
                                    <button id="example-updateButtonText-select" class="btn btn-outline-secondary">Select some options ...</button>
                                    <button id="example-updateButtonText-update" class="btn btn-outline-secondary">Update</button>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-updateButtonText').multiselect({
            buttonContainer: '<div class="btn-group" id="example-updateButtonText-container"></div>'
        });

        $('#example-updateButtonText-select').on('click', function() {
            $('option[value="1"]', $('#example-updateButtonText')).prop('selected', true);
            $('option[value="3"]', $('#example-updateButtonText')).prop('selected', true);

            $('input[value="1"]', $('#example-updateButtonText-container')).prop('checked', true);
            $('input[value="3"]', $('#example-updateButtonText-container')).prop('checked', true);

            $('input[value="1"]', $('#example-updateButtonText-container')).closest('.multiselect-option').addClass('active');
            $('input[value="3"]', $('#example-updateButtonText-container')).closest('.multiselect-option').addClass('active');
        });
        $('#example-updateButtonText-update').on('click', function() {
            $('#example-updateButtonText').multiselect('updateButtonText');
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('setOptions', options)</code>
                        </td>
                        <td>
                            <p>
                                Used to change configuration after initializing the multiselect. This may be useful in combination with <code>.multiselect('rebuild')</code>.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {

                                        var firstConfigurationSet = {
                                            includeSelectAllOption: false,
                                            enableFiltering: false
                                        };
                                        var secondConfigurationSet = {
                                            includeSelectAllOption: false,
                                            enableFiltering: true
                                        };

                                        var set = 1;
                                        $('#example-setOptions').multiselect(firstConfigurationSet);

                                        function rebuildMultiselect(options) {
                                            $('#example-setOptions').multiselect('setOptions', options);
                                            $('#example-setOptions').multiselect('rebuild');
                                        }

                                        $('#example-setOptions-button').on('click', function(event) {
                                            switch (set) {
                                                case 2:
                                                    rebuildMultiselect(firstConfigurationSet);

                                                    $(this).text('Configuration Set 2');
                                                    set = 1;
                                                    break;
                                                case 1:
                                                default:
                                                    rebuildMultiselect(secondConfigurationSet);

                                                    $(this).text('Configuration Set 1');
                                                    set = 2;
                                                    break;

                                            }
                                        });
                                    });
                                </script>
                                <div class="btn-group">
                                    <select id="example-setOptions" multiple="multiple">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                    </select>
                                    <button id="example-setOptions-button" class="btn btn-primary">Configuration Set 2</button>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {

        var firstConfigurationSet = {
            includeSelectAllOption: false,
            enableFiltering: false
        };
        var secondConfigurationSet = {
            includeSelectAllOption: false,
            enableFiltering: true
        };

        var set = 1;
        $('#example-setOptions').multiselect(firstConfigurationSet);

        function rebuildMultiselect(options) {
            $('#example-setOptions').multiselect('setOptions', options);
            $('#example-setOptions').multiselect('rebuild');
        }

        $('#example-setOptions-button').on('click', function(event) {
            switch (set) {
                case 2:
                    rebuildMultiselect(firstConfigurationSet);

                    $(this).text('Configuration Set 2');
                    set = 1;
                    break;
                case 1:
                default:
                    rebuildMultiselect(secondConfigurationSet);

                    $(this).text('Configuration Set 1');
                    set = 2;
                    break;

            }
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('disable')</code>
                        </td>
                        <td>
                            <p>
                                Disable both the underlying select and the dropdown button.
                            </p>

                            <div class="example">
                                <div class="btn-group">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-disable').multiselect();

                                            $('#example-disable-button').on('click', function() {
                                                $('#example-disable').multiselect('disable');
                                            });
                                        });
                                    </script>
                                    <div class="btn-group">
                                        <select id="example-disable" multiple="multiple">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                            <option value="6">Option 6</option>
                                        </select>
                                        <button id="example-disable-button" class="btn btn-primary">Disable...</button>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-disable').multiselect();

        $('#example-disable-button').on('click', function() {
            $('#example-disable').multiselect('disable');
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('enable')</code>
                        </td>
                        <td>
                            <p>
                                Enable both the underlying select and the dropdown button.
                            </p>

                            <div class="example">
                                <div class="btn-group">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-enable').multiselect();

                                            $('#example-enable-button').on('click', function() {
                                                $('#example-enable').multiselect('enable');
                                            });
                                        });
                                    </script>
                                    <div class="btn-group">
                                        <select id="example-enable" disabled="disabled" multiple="multiple">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                            <option value="6">Option 6</option>
                                        </select>
                                        <button id="example-enable-button" class="btn btn-primary">Enable!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-enable').multiselect();

        $('#example-enable-button').on('click', function() {
            $('#example-enable').multiselect('enable');
        });
    });
&lt;/script&gt;
</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('dataprovider', data)</code>
                        </td>
                        <td>
                            <p>
                                This method is used to provide options programmatically. See the example below.
                            </p>

                            <div class="example">
                                <div class="btn-group">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-dataprovider').multiselect();

                                            var options = [
                                                {label: 'Option 1', title: 'Option 1', value: '1', selected: true},
                                                {label: 'Option 2', title: 'Option 2', value: '2'},
                                                {label: 'Option 3', title: 'Option 3', value: '3', selected: true},
                                                {label: 'Option 4', title: 'Option 4', value: '4'},
                                                {label: 'Option 5', title: 'Option 5', value: '5'},
                                                {label: 'Option 6', title: 'Option 6', value: '6', disabled: true}
                                            ];
                                            $('#example-dataprovider').multiselect('dataprovider', options);
                                        });
                                    </script>
                                    <select id="example-dataprovider" multiple="multiple"></select>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-dataprovider').multiselect();

    var options = [
        {label: 'Option 1', title: 'Option 1', value: '1', selected: true},
        {label: 'Option 2', title: 'Option 2', value: '2'},
        {label: 'Option 3', title: 'Option 3', value: '3', selected: true},
        {label: 'Option 4', title: 'Option 4', value: '4'},
        {label: 'Option 5', title: 'Option 5', value: '5'},
        {label: 'Option 6', title: 'Option 6', value: '6', disabled: true}
    ];
    $('#example-dataprovider').multiselect('dataprovider', options);
&lt;/script&gt;
&lt;select id=&quot;example-dataprovider&quot; multiple=&quot;multiple&quot;&gt;&lt;/select&gt;
</pre>
                            </div>

                            <p>
                                The method is also able to handle <code>optgroup</code>'s:
                            </p>

                            <div class="example">
                                <div class="btn-group">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-dataprovider-optgroups').multiselect();

                                            var optgroups = [
                                                {
                                                    label: 'Group 1', children: [
                                                        {label: 'Option 1.1', value: '1-1', selected: true},
                                                        {label: 'Option 1.2', value: '1-2'},
                                                        {label: 'Option 1.3', value: '1-3'}
                                                    ]
                                                },
                                                {
                                                    label: 'Group 2', children: [
                                                        {label: 'Option 2.1', value: '1'},
                                                        {label: 'Option 2.2', value: '2'},
                                                        {label: 'Option 2.3', value: '3', disabled: true}
                                                    ]
                                                }
                                            ];
                                            $('#example-dataprovider-optgroups').multiselect('dataprovider', optgroups);
                                        });
                                    </script>
                                    <select id="example-dataprovider-optgroups" multiple="multiple"></select>
                                </div>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-dataprovider-optgroups').multiselect();

    var optgroups = [
        {
            label: 'Group 1', children: [
                {label: 'Option 1.1', value: '1-1', selected: true},
                {label: 'Option 1.2', value: '1-2'},
                {label: 'Option 1.3', value: '1-3'}
            ]
        },
        {
            label: 'Group 2', children: [
                {label: 'Option 2.1', value: '1'},
                {label: 'Option 2.2', value: '2'},
                {label: 'Option 2.3', value: '3', disabled: true}
            ]
        }
    ];
    $('#example-dataprovider-optgroups').multiselect('dataprovider', optgroups);
&lt;/script&gt;
&lt;select id=&quot;example-dataprovider-optgroups&quot; multiple=&quot;multiple&quot;&gt;&lt;/select&gt;
</pre>
                            </div>

                            <p>
                                You can add custom data attributes on option group children and non-grouped options:
                            </p>

                            <div class="example">
                                <div class="btn-group">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-dataprovider-data-attributes').multiselect();
                                            var optionsData =[
                                                {
                                                    "label": "Option 1",
                                                    "value": 1,
                                                    "selected": true,
                                                    "attributes": {
                                                        "some-attribute": 1,
                                                        "another-attribute": false
                                                    }
                                                },
                                                {
                                                    "label": "Option 2",
                                                    "value": 2,
                                                    "selected": false,
                                                    "attributes": {
                                                        "some-attribute": 2
                                                    }
                                                }
                                            ];
                                            $('#example-dataprovider-data-attributes').multiselect('dataprovider', optionsData);
                                        });
                                    </script>
                                    <select id="example-dataprovider-data-attributes" multiple="multiple"></select>


                                </div>
                                <div class="highlight">
<pre class="prettyprint linenums">
      $(&#39;#example-dataprovider-data-attributes&#39;).multiselect();

      var optionsData =[
                      {
                        &quot;label&quot;: &quot;Option 1&quot;,
                        &quot;value&quot;: 1,
                        &quot;selected&quot;: true,
                        &quot;attributes&quot;: {
                          &quot;some-attribute&quot;: 1,
                          &quot;another-attribute&quot;: false
                        }
                      },
                      {
                        &quot;label&quot;: &quot;Option 2&quot;,
                        &quot;value&quot;: 2,
                        &quot;selected&quot;: false,
                        &quot;attributes&quot;: {
                          &quot;some-attribute&quot;: 2
                        }
                      }
                    ];
        $(&quot;#example-dataprovider-data-attributes&quot;).multiselect(&#39;dataprovider&#39;, optionsData);
    });
&lt;/script&gt;
&lt;select id=&quot;example-dataprovider-data-attributes&quot; multiple=&quot;multiple&quot;&gt;&lt;/select&gt;
</pre>
                                </div>
                            </div>
                            <p>
                                Renders as:
                            </p>
                            <pre class="prettyprint">
&lt;option value=&quot;1&quot; label=&quot;Option 1&quot; selected=&quot;selected&quot; data-some-attribute=&quot;1&quot; data-another-attribute=&quot;false&quot;&gt;&lt;/option&gt;
&lt;option value=&quot;2&quot; label=&quot;Option 2&quot; data-some-attribute=&quot;2&quot;&gt;&lt;/option&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>.multiselect('setAllSelectedText', value)</code>
                        </td>
                        <td>
                            <p>
                                This method is used to programmatically provide a new text to display in the button when all options are selected, at runtime.
                            </p>

                            <div class="example">
                                <div class="btn-group">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#example-set-all-selected-text').multiselect({allSelectedText: "Initial All Selected"});

                                            $('#new-all-selected-text-btn').click(function(){
                                                $('#example-set-all-selected-text').multiselect('setAllSelectedText', $('#new-all-selected-text-box').val());
                                            });
                                        });
                                    </script>

                                    <select id="example-set-all-selected-text" multiple="multiple">
                                        <option value="1" selected>Option 1</option>
                                        <option value="2" selected>Option 2</option>
                                    </select>

                                    <div class="input-group ml-1">
                                        <input id="new-all-selected-text-box" type="text" class="form-control" placeholder="Enter new text"/>
                                        <div class="input-group-append">
                                            <button id="new-all-selected-text-btn" type="button" class="btn btn-primary">Change All Selected Text</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $('#example-set-all-selected-text').multiselect({allSelectedText: "Initial All Selected"});

    $('#new-all-selected-text-btn').click(function(){
        $('#example-set-all-selected-text').multiselect('setAllSelectedText', $('#new-all-selected-text-box').val());
    });
&lt;/script&gt;
</pre>
                                </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="page-header">
                    <h2 id="further-examples">Further Examples</h2>
                </div>

                <p>
                    Using the <code>onChange</code> configuration option, the following example asks for confirmation if deselecting an option.
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example-confirmation').multiselect({
                                onChange: function(element, checked) {
                                    if (checked === true) {
                                        //action taken here if true
                                    }
                                    else if (checked === false) {
                                        if (confirm('Do you wish to deselect the element?')) {
                                            //action taken here
                                        }
                                        else {
                                            $("#example-confirmation").multiselect('select', element.val());
                                        }
                                    }
                                }
                            });
                        });
                    </script>
                    <select id="example-confirmation" multiple="multiple">
                        <option value="1" selected>Option 1</option>
                        <option value="2" selected>Option 2</option>
                        <option value="3" selected>Option 3</option>
                        <option value="4" selected>Option 4</option>
                        <option value="5">Option 5</option>
                        <option value="6">Option 6</option>
                    </select>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-confirmation').multiselect({
            onChange: function(element, checked) {
                if (checked === true) {
                    //action taken here if true
                }
                else if (checked === false) {
                    if (confirm('Do you wish to deselect the element?')) {
                        //action taken here
                    }
                    else {
                        $("#example-confirmation").multiselect('select', element.val());
                    }
                }
            }
        });
    });
&lt;/script&gt;
</pre>
                </div>

                <p>
                    The above approach can also be adapted to be used in
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            var lastSelected = $('#example-confirmation-single option:selected').val();
                            $('#example-confirmation-single').multiselect({
                                onChange: function(element, checked) {
                                    if (confirm('Do you wish to change the selection?')) {
                                        lastSelected = element.val();
                                    }
                                    else {
                                        $("#example-confirmation-single").multiselect('select', lastSelected);
                                        $("#example-confirmation-single").multiselect('deselect', element.val());
                                    }
                                }
                            });
                        });
                    </script>
                    <select id="example-confirmation-single">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5" disabled>Option 5</option>
                        <option value="6" disabled>Option 6</option>
                    </select>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        var lastSelected = $('#example-confirmation-single option:selected').val();
        $('#example-confirmation-single').multiselect({
            onChange: function(element, checked) {
                if (confirm('Do you wish to change the selection?')) {
                    lastSelected = element.val();
                }
                else {
                    $(&quot;#example-confirmation-single&quot;).multiselect('select', lastSelected);
                    $(&quot;#example-confirmation-single&quot;).multiselect('deselect', element.val());
                }
            }
        });
    });
&lt;/script&gt;
</pre>
                </div>

                <p>
                    Limit the number of selected options using the <code>onChange</code> option. The user may only select a maximum of 4 options. Then all other options are disabled.
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example-limit').multiselect({
                                onChange: function(option, checked) {
                                    // Get selected options.
                                    var selectedOptions = $('#example-limit option:selected');

                                    if (selectedOptions.length >= 4) {
                                        // Disable all other checkboxes.
                                        var nonSelectedOptions = $('#example-limit option').filter(function() {
                                            return !$(this).is(':selected');
                                        });

                                        nonSelectedOptions.each(function() {
                                            var input = $('input[value="' + $(this).val() + '"]');
                                            input.prop('disabled', true);
                                            input.closest('.multiselect-option').addClass('disabled');
                                        });
                                    }
                                    else {
                                        // Enable all checkboxes.
                                        $('#example-limit option').each(function() {
                                            var input = $('input[value="' + $(this).val() + '"]');
                                            input.prop('disabled', false);
                                            input.closest('.multiselect-option').removeClass('disabled');
                                        });
                                    }
                                }
                            });
                        });
                    </script>
                    <select id="example-limit" multiple="multiple">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                        <option value="6">Option 6</option>
                    </select>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-limit').multiselect({
            onChange: function(option, checked) {
                // Get selected options.
                var selectedOptions = $('#example-limit option:selected');

                if (selectedOptions.length >= 4) {
                    // Disable all other checkboxes.
                    var nonSelectedOptions = $('#example-limit option').filter(function() {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function() {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('.multiselect-option').addClass('disabled');
                    });
                }
                else {
                    // Enable all checkboxes.
                    $('#example-limit option').each(function() {
                        var input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('.multiselect-option').addClass('disabled');
                    });
                }
            }
        });
    });
&lt;/script&gt;
</pre>
                </div>

                <p>
                    Record the order the options are selected. When selecting an item an ordering number will be incremented and saved within the option.
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            var orderCount = 0;
                            $('#example-order').multiselect({
                                onChange: function(option, checked) {
                                    if (checked) {
                                        orderCount++;
                                        $(option).data('order', orderCount);
                                    }
                                    else {
                                        $(option).data('order', '');
                                    }
                                },
                                buttonText: function(options) {
                                    if (options.length === 0) {
                                        return 'None selected';
                                    }
                                    else if (options.length > 3) {
                                        return options.length + ' selected';
                                    }
                                    else {
                                        var selected = [];
                                        options.each(function() {
                                            selected.push([$(this).text(), $(this).data('order')]);
                                        });

                                        selected.sort(function(a, b) {
                                            return a[1] - b[1];
                                        });

                                        var text = '';
                                        for (var i = 0; i < selected.length; i++) {
                                            text += selected[i][0] + ', ';
                                        }

                                        return text.substr(0, text.length -2);
                                    }
                                }
                            });

                            $('#example-order-button').on('click', function() {
                                var selected = [];
                                $('#example-order option:selected').each(function() {
                                    selected.push([$(this).val(), $(this).data('order')]);
                                });

                                selected.sort(function(a, b) {
                                    return a[1] - b[1];
                                });

                                var text = '';
                                for (var i = 0; i < selected.length; i++) {
                                    text += selected[i][0] + ', ';
                                }
                                text = text.substring(0, text.length - 2);

                                alert(text);
                            });
                        });
                    </script>
                    <div class="btn-group">
                        <select id="example-order" multiple="multiple">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                            <option value="5">Option 5</option>
                            <option value="6">Option 6</option>
                        </select>
                        <button id="example-order-button" class="btn btn-primary">Order</button>
                    </div>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        var orderCount = 0;
        $('#example-order').multiselect({
            onChange: function(option, checked) {
                if (checked) {
                    orderCount++;
                    $(option).data('order', orderCount);
                }
                else {
                    $(option).data('order', '');
                }
            },
            buttonText: function(options) {
                if (options.length === 0) {
                    return 'None selected';
                }
                else if (options.length > 3) {
                    return options.length + ' selected';
                }
                else {
                    var selected = [];
                    options.each(function() {
                        selected.push([$(this).text(), $(this).data('order')]);
                    });

                    selected.sort(function(a, b) {
                        return a[1] - b[1];
                    });

                    var text = '';
                    for (var i = 0; i < selected.length; i++) {
                        text += selected[i][0] + ', ';
                    }

                    return text.substr(0, text.length -2);
                }
            },
        });

        $('#example-order-button').on('click', function() {
            var selected = [];
            $('#example-order option:selected').each(function() {
                selected.push([$(this).val(), $(this).data('order')]);
            });

            selected.sort(function(a, b) {
                return a[1] - b[1];
            });

            var text = '';
            for (var i = 0; i < selected.length; i++) {
                text += selected[i][0] + ', ';
            }
            text = text.substring(0, text.length - 2);

            alert(text);
        });
    });
&lt;/script&gt;
</pre>
                </div>

                <p>
                    Simulate single selections using checkboxes. The behavior will be similar to a multiselect with radio buttons except that the selected option can be deselected again.
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example-simulate-single').multiselect({
                                onChange: function(option, checked) {
                                    var values = [];
                                    $('#example-simulate-single option').each(function() {
                                        if ($(this).val() !== option.val()) {
                                            values.push($(this).val());
                                        }
                                    });

                                    $('#example-simulate-single').multiselect('deselect', values);
                                }
                            });
                        });
                    </script>
                    <select id="example-simulate-single" multiple="multiple">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                        <option value="6">Option 6</option>
                    </select>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-simulate-single').multiselect({
            on: {
                change: function(option, checked) {
                    var values = [];
                    $('#example-simulate-single option').each(function() {
                        if ($(this).val() !== option.val()) {
                            values.push($(this).val());
                        }
                    });

                    $('#example-simulate-single').multiselect('deselect', values);
                }
            }
        });
    });
&lt;/script&gt;
</pre>
                </div>

                <p>
                    Using a reset button together with a multiselect.
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example-reset').multiselect();
                            $('#example-reset-form').on('reset', function() {
                                $('#example-reset option:selected').each(function() {
                                    $(this).prop('selected', false);
                                })

                                $('#example-reset').multiselect('refresh');
                            });
                        });
                    </script>
                    <form id="example-reset-form">
                        <select id="example-reset" multiple="multiple">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                            <option value="5">Option 5</option>
                            <option value="6">Option 6</option>
                        </select>
                        <button type="reset" id="example-reset-button" class="btn btn-outline-secondary ml-1">Reset</button>
                    </form>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-reset').multiselect();
        $('#example-reset-form').on('reset', function() {
            $('#example-reset option:selected').each(function() {
                $(this).prop('selected', false);
            })

            $('#example-reset').multiselect('refresh');
        });
    });
&lt;/script&gt;
&lt;form class=&quot;btn-group&quot; id=&quot;example-reset-form&quot;&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;select id=&quot;example-reset&quot; multiple=&quot;multiple&quot;&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
            &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
            &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
        &lt;/select&gt;
        &lt;button type=&quot;reset&quot; id=&quot;example-reset-button&quot; class=&quot;btn btn-default&quot;&gt;Reset&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
                </div>

                <p>
                    Multiselect can also be used in modals:
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example-modal').multiselect();
                        });
                    </script>
                    <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#example-modal-modal">Launch modal</button>
                    <div class="modal fade" id="example-modal-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Bootstrap Multiselect</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <select id="example-modal" multiple="multiple">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-modal').multiselect();
    });
&lt;/script&gt;
&lt;button class=&quot;btn btn-outline-secondary&quot; data-toggle=&quot;modal&quot; data-target=&quot;#example-modal-modal&quot;&gt;Launch modal&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;example-modal-modal&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot;&gt;Bootstrap Multiselect&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt;&lt;span class=&quot;sr-only&quot;&gt;Close&lt;/span&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;select id=&quot;example-modal&quot; multiple=&quot;multiple&quot;&gt;
                    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
                    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
                    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
                    &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                </div>

                <p>
                    An example of using multiselect in an accordion/collapse:
                </p>

                <p class="alert alert-info">
                    Note that the overflow of the <code>.card</code> needs to be visible: <code>style="overflow:visible;"</code>. See the example below.
                </p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example-collapse').multiselect();
                        });
                    </script>
                    <div class="accordion" id="example-collapse-accordion">
                        <div class="card" style="overflow: visible;">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#example-collapse-accordion-one">
                                        Bootstrap Multiselect
                                    </button>
                                </h2>
                            </div>
                            <div id="example-collapse-accordion-one" class="collapse show">
                                <div class="card-body">
                                    <select id="example-collapse" multiple="multiple">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-collapse').multiselect();
    });
&lt;/script&gt;
&lt;div class=&quot;accordion&quot; id=&quot;example-collapse-accordion&quot;&gt;
    &lt;div class=&quot;card&quot; style=&quot;overflow:visible;&quot;&gt;
        &lt;div class=&quot;card-header&quot;&gt;
            &lt;h2 class=&quot;mb-0&quot;&gt;
                &lt;button class=&quot;btn btn-link btn-block text-left&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#example-collapse-accordion-one&quot;&gt;
                    Bootstrap Multiselect
                &lt;/button&gt;
            &lt;/h2&gt;
        &lt;/div&gt;
        &lt;div id=&quot;example-collapse-accordion-one&quot; class=&quot;collapse show&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;select id=&quot;example-collapse&quot; multiple=&quot;multiple&quot;&gt;
                    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
                    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
                    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
                    &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                </div>

                <p>
                    The examples below are aimed to demonstrate the performance of several features when using a large number of options:
                </p>
                <ul>
                    <li>Using the select all option, <code>includeSelectAllOption</code> set to <code>true</code>.</li>
                    <li>Additionally using a filter, <code>enableFiltering</code> set to <code>true</code>.</li>
                    <li>Additionally using <code>enableClickableOptGroups</code>.</li>
                    <li>Resetting the multiselect.</li>
                </ul>

                <p class="alert alert-warning">
                    The below examples need to be activated. <b>Note that this may take some time!</b><br>
                </p>

                <p class="alert alert-info">
                    Use <input type="text" id="example-large-options" value="1000" style="width: 50px;margin: 0px 4px;"/> options: <button id="example-large-enable" class="btn btn-primary">Enable Examples</button>
                </p>

                <div id="example-large-error">

                </div>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example-large-enable').on('click', function() {
                                var options = $('#example-large-options').val();

                                if (options < 1 || options > 5000) {
                                    $('#example-large-error').html('<p class="alert alert-error">Choose between 1 and 5000 options!</p>');
                                }
                                else {
                                    $('#example-large-includeSelectAllOption').html('');
                                    $('#example-large-includeSelectAllOption-enableFiltering').html('');
                                    $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').html('');
                                    $('#example-large-reset').html('');

                                    for (var j = 0; j < options; j++) {
                                        i = j + 1;
                                        $('#example-large-includeSelectAllOption').append('<option value="' + i.toString() + '">Option ' + i.toString() + '</option>');
                                        $('#example-large-includeSelectAllOption-enableFiltering').append('<option value="' + i.toString() + '">Option ' + i.toString() + '</option>');

                                        var group = Math.floor(j/10) + 1;
                                        var number = j % 10 + 1;
                                        if (number === 1) {
                                            $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').append('<optgroup label="Group ' + group.toString() + '"></optgroup>');
                                        }
                                        $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').append('<option value="' + group.toString() + '-' + number.toString() + '">Option ' + group.toString() + '.' + number.toString() + '</option>');

                                        $('#example-large-reset').append('<option value="' + i.toString() + '">Option ' + i.toString() + '</option>');
                                    }

                                    $('#example-large-includeSelectAllOption').multiselect({
                                        maxHeight: 200,
                                        includeSelectAllOption: true
                                    });

                                    $('#example-large-includeSelectAllOption-enableFiltering').multiselect({
                                        maxHeight: 200,
                                        includeSelectAllOption: true,
                                        enableFiltering: true
                                    });

                                    $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').multiselect({
                                        maxHeight: 200,
                                        includeSelectAllOption: true,
                                        enableFiltering: true,
                                        enableClickableOptGroups: true
                                    });

                                    $('#example-large-reset').multiselect({
                                        maxHeight: 200,
                                        includeSelectAllOption: true
                                    });

                                    $('#example-large-reset-form').on('reset', function() {
                                        $('#example-large-reset').multiselect('deselectAll', false);
                                        $('#example-large-reset').multiselect('updateButtonText');
                                    });
                                }
                            });
                        });
                    </script>
                    <div class="btn-toolbar" style="margin-bottom:12px;">
                        <div class="btn-group">
                            <select id="example-large-includeSelectAllOption" multiple="multiple">
                                <option value="1">Option 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-toolbar" style="margin-bottom:12px;">
                        <div class="btn-group">
                            <select id="example-large-includeSelectAllOption-enableFiltering" multiple="multiple">
                                <option value="1">Option 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-toolbar" style="margin-bottom:12px;">
                        <div class="btn-group">
                            <select id="example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups" multiple="multiple">
                                <option value="1">Option 1</option>
                            </select>
                        </div>
                    </div>
                    <form id="example-large-reset-form" style="margin-bottom:12px;">
                        <select id="example-large-reset" multiple="multiple">
                            <option value="1">Option 1</option>
                        </select>
                        <button type="reset" class="btn btn-outline-secondary ml-1">Reset</button>
                    </form>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums" style="max-height: 500px;">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-large-enable').on('click', function() {
            var options = $('#example-large-options').val();

            if (options &lt; 1 || options &gt; 5000) {
                $('#example-large-error').html('&lt;p class=&quot;alert alert-error&quot;&gt;Choose between 1 and 5000 options!&lt;/p&gt;');
            }
            else {
                $('#example-large-includeSelectAllOption').html('');
                $('#example-large-includeSelectAllOption-enableFiltering').html('');
                $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').html('');
                $('#example-large-reset').html('');

                for (var j = 0; j &lt; options; j++) {
                    i = j + 1;
                    $('#example-large-includeSelectAllOption').append('&lt;option value=&quot;' + i.toString() + '&quot;&gt;Option ' + i.toString() + '&lt;/option&gt;');
                    $('#example-large-includeSelectAllOption-enableFiltering').append('&lt;option value=&quot;' + i.toString() + '&quot;&gt;Option ' + i.toString() + '&lt;/option&gt;');

                    var group = Math.floor(j/10) + 1;
                    var number = j % 10 + 1;
                    if (number === 1) {
                        $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').append('&lt;optgroup label=&quot;Group ' + group.toString() + '&quot;&gt;&lt;/optgroup&gt;');
                    }
                    $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').append('&lt;option value=&quot;' + group.toString() + '-' + number.toString() + '&quot;&gt;Option ' + group.toString() + '.' + number.toString() + '&lt;/option&gt;');

                    $('#example-large-reset').append('&lt;option value=&quot;' + i.toString() + '&quot;&gt;Option ' + i.toString() + '&lt;/option&gt;');
                }

                $('#example-large-includeSelectAllOption').multiselect({
                    maxHeight: 200,
                    includeSelectAllOption: true
                });

                $('#example-large-includeSelectAllOption-enableFiltering').multiselect({
                    maxHeight: 200,
                    includeSelectAllOption: true,
                    enableFiltering: true
                });

                $('#example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups').multiselect({
                    maxHeight: 200,
                    includeSelectAllOption: true,
                    enableFiltering: true,
                    enableClickableOptGroups: true
                });

                $('#example-large-reset').multiselect({
                    maxHeight: 200,
                    includeSelectAllOption: true
                });

                $('#example-large-reset-form').on('reset', function() {
                    $('#example-large-reset').multiselect('deselectAll', false);
                    $('#example-large-reset').multiselect('updateButtonText');
                });
            }
        });
    });
&lt;/script&gt;
&lt;div class=&quot;btn-toolbar&quot; style=&quot;margin-bottom:12px;&quot;&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;select id=&quot;example-large-includeSelectAllOption&quot; multiple=&quot;multiple&quot;&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-toolbar&quot; style=&quot;margin-bottom:12px;&quot;&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;select id=&quot;example-large-includeSelectAllOption-enableFiltering&quot; multiple=&quot;multiple&quot;&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-toolbar&quot; style=&quot;margin-bottom:12px;&quot;&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;select id=&quot;example-large-includeSelectAllOption-enableFiltering-enableClickableOptGroups&quot; multiple=&quot;multiple&quot;&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;form id=&quot;example-large-reset-form&quot; style=&quot;margin-bottom:12px;&quot;&gt;
    &lt;select id=&quot;example-large-reset&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;/select&gt;
    &lt;button type=&quot;reset&quot; class=&quot;btn btn-default&quot;&gt;Reset&lt;/button&gt;
&lt;/form&gt;
</pre>
                </div>

                <p>The following examples is aimed to demonstrate the performance of the <code>.multiselect('dataprovider', data)</code> for a large number of options.</p>

                <p class="alert alert-warning">The below examples need to be activated. <b>Note that this may take some time!</b></p>

                <p class="alert alert-info"><button id="example-large-dataprovider-button" class="btn btn-primary">Activate</button></p>

                <div class="example">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            var data = [];
                            for (var i = 0; i < 100; i++) {
                                var group = {label: 'Group ' + (i + 1), children: []};
                                for (var j = 0; j < 10; j++) {
                                    group['children'].push({
                                        label: 'Option ' + (i + 1) + '.' + (j + 1),
                                        value: i + '-' + j
                                    });
                                }

                                data.push(group);
                            }

                            $('#example-large-dataprovider-button').on('click', function() {
                                $('#example-large-dataprovider').multiselect({
                                    maxHeight: 200
                                });
                                $('#example-large-dataprovider').multiselect('dataprovider', data);
                            });
                        });
                    </script>
                    <select id="example-large-dataprovider" multiple="multiple"></select>
                </div>
                <div class="highlight">
<pre class="prettyprint linenums">
$(document).ready(function() {
    var data = [];
    for (var i = 0; i < 100; i++) {
        var group = {label: 'Group ' + (i + 1), children: []};
        for (var j = 0; j < 10; j++) {
            group['children'].push({
                label: 'Option ' + (i + 1) + '.' + (j + 1),
                value: i + '-' + j
            });
        }

        data.push(group);
    }

    $('#example-large-dataprovider-button').on('click', function() {
        $('#example-large-dataprovider').multiselect({
            maxHeight: 200
        });
        $('#example-large-dataprovider').multiselect('dataprovider', data);
    });
});
&lt;p class=&quot;alert alert-info&quot;&gt;&lt;button id=&quot;example-large-dataprovider-button&quot; class=&quot;btn btn-primary&quot;&gt;Activate&lt;/button&gt;&lt;/p&gt;
&lt;select id=&quot;example-large-dataprovider&quot; multiple=&quot;multiple&quot;&gt;&lt;/select&gt;
</pre>

                    <p>
                        The following example illsutrates how to disable options using JavaScript.
                    </p>

                    <div class="example">
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#example-disable-javascript').multiselect({
                                    includeSelectAllOption: true
                                });

                                $('#example-disable-javascript-disable').on('click', function() {
                                    var input = $('#example-disable-javascript-container input[value="3"]');
                                    var option = $('#example-disable-javascript-container option[value="3"]');

                                    input.prop('disabled', true);
                                    option.prop('disabled', true);

                                    input.closest('.multiselect-option').addClass('disabled');
                                });

                                $('#example-disable-javascript-check').on('click', function() {
                                    var options = '';
                                    $('#example-disable-javascript option:selected').each(function() {
                                        options += $(this).val() + ', ';
                                    });

                                    alert(options.substr(0, options.length - 2));
                                });
                            });
                        </script>
                        <select id="example-disable-javascript" multiple="multiple">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                            <option value="5">Option 5</option>
                            <option value="6">Option 6</option>
                        </select>
                        <div class="btn-group ml-1" id="example-disable-javascript-container">
                            <button id="example-disable-javascript-disable" class="btn btn-outline-secondary">Disable an option!</button>
                            <button id="example-disable-javascript-check" class="btn btn-outline-secondary">Check</button>
                        </div>
                    </div>
                    <div class="highlight">
<pre class="prettyprint linenums">
$(document).ready(function() {
    $('#example-disable-javascript').multiselect();
});
&lt;select id=&quot;example-disable-javascript&quot; multiple=&quot;multiple&quot;&gt;&lt;/select&gt;
</pre>

                        <p>
                            Performance example for using <code>.multiselect('refresh')</code> with a large number of options:
                        </p>

                        <p class="alert alert-warning">The below examples need to be activated. <b>Note that this may take some time!</b></p>

                        <p class="alert alert-info"><button id="example-large-refresh-button" class="btn btn-primary">Activate</button></p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-large-refresh-button').on('click', function() {
                                        for (var i = 0; i < 1000; i++) {
                                            $('#example-large-refresh').append('<option value="' + i + '">Option ' + i + '</option>');
                                        }

                                        $('#example-large-refresh').multiselect();
                                    });

                                    $('#example-large-refresh-refresh').on('click', function() {
                                        $('#example-large-refresh').multiselect('refresh');
                                    });

                                    $('#example-large-refresh-select').on('click', function() {
                                        var count = 0;

                                        $('#example-large-refresh option').each(function() {
                                            var i = $(this).val();

                                            if (i%2 == 0) {
                                                $(this).prop('selected', true);
                                                count++;
                                            }

                                        });

                                        alert('Selected ' + count + ' options!');
                                    });
                                });
                            </script>
                            <select id="example-large-refresh" multiple="multiple">
                            </select>
                            <div class="btn-group ml-1">
                                <button id="example-large-refresh-select" class="btn btn-outline-secondary">Select every second option ...</button>
                                <button id="example-large-refresh-refresh" class="btn btn-primary">Refresh!</button>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-large-refresh-button').on('click', function() {
            for (var i = 0; i &lt; 1000; i++) {
                $('#example-large-refresh').append('&lt;option value=&quot;' + i + '&quot;&gt;Option ' + i + '&lt;/option&gt;');
            }

            $('#example-large-refresh').multiselect();
        });

        $('#example-large-refresh-refresh').on('click', function() {
            $('#example-large-refresh').multiselect('refresh');
        });

        $('#example-large-refresh-select').on('click', function() {
            var count = 0;

            $('#example-large-refresh option').each(function() {
                var i = $(this).val();

                if (i%2 == 0) {
                    $(this).prop('selected', true);
                    count++;
                }

            });

            alert('Selected ' + count + ' options!');
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>The following example demonstrates how to limit the number of selections of a specific <code>optgroup</code>:</p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-optgroup-limit').multiselect({
                                        onChange: function(options, checked) {
                                            var $option = $(options);
                                            if ($option.length == 1) {

                                                var $group = $option.parent('optgroup')
                                                if ($group.hasClass('group-1')) {
                                                    var $options = $('option', $group);
                                                    $options = $options.filter(':selected');

                                                    if (checked && $options.length > 2) {
                                                        alert('Cannot select more than 2 elements in this group!');
                                                        $("#example-optgroup-limit").multiselect('deselect', $option.val());
                                                    }
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <div class="btn-group">
                                <select id="example-optgroup-limit" multiple="multiple">
                                    <optgroup class="group-1" label="Group 1">
                                        <option value="1-1">Option 1.1</option>
                                        <option value="1-2">Option 1.2</option>
                                        <option value="1-3">Option 1.3</option>
                                    </optgroup>
                                    <optgroup class="group-2" label="Group 2">
                                        <option value="2-1">Option 2.1</option>
                                        <option value="2-2">Option 2.2</option>
                                        <option value="2-3">Option 2.3</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-optgroup-limit').multiselect({
            onChange: function(options, checked) {
                var $option = $(options);
                if ($option.length == 1) {

                    var $group = $option.parent('optgroup')
                    if ($group.hasClass('group-1')) {
                        var $options = $('option', $group);
                        $options = $options.filter(':selected');

                        if (checked && $options.length &gt; 2) {
                            alert('Cannot select more than 2 elements in this group!');
                            $(&quot;#example-optgroup-limit&quot;).multiselect('deselect', $option.val());
                        }
                    }
                }
            }
        });
    });
&lt;/script&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;select id=&quot;example-optgroup-limit&quot; multiple=&quot;multiple&quot;&gt;
        &lt;optgroup class=&quot;group-1&quot; label=&quot;Group 1&quot;&gt;
            &lt;option value=&quot;1-1&quot;&gt;Option 1.1&lt;/option&gt;
            &lt;option value=&quot;1-2&quot;&gt;Option 1.2&lt;/option&gt;
            &lt;option value=&quot;1-3&quot;&gt;Option 1.3&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;optgroup class=&quot;group-2&quot; label=&quot;Group 2&quot;&gt;
            &lt;option value=&quot;2-1&quot;&gt;Option 2.1&lt;/option&gt;
            &lt;option value=&quot;2-2&quot;&gt;Option 2.2&lt;/option&gt;
            &lt;option value=&quot;2-3&quot;&gt;Option 2.3&lt;/option&gt;
        &lt;/optgroup&gt;
    &lt;/select&gt;
&lt;/div&gt;
</pre>
                        </div>

                        <p>
                            The below example demonstrates how to show the <code>optgroup</code>'s label if all <code>option</code>'s within this group are selected:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-optgroup-buttonText').multiselect({
                                        buttonText: function(options, select) {

                                            // First consider the simple cases, i.e. disabled and empty.
                                            if (this.disabledText.length > 0
                                                && (this.disableIfEmpty || select.prop('disabled'))
                                                && options.length == 0) {

                                                return this.disabledText;
                                            }
                                            else if (options.length === 0) {
                                                return this.nonSelectedText;
                                            }

                                            var $select = $(select);
                                            var $optgroups = $('optgroup', $select);

                                            var delimiter = this.delimiterText;
                                            var text = '';

                                            // Go through groups.
                                            $optgroups.each(function() {
                                                var $selectedOptions = $('option:selected', this);
                                                var $options = $('option', this);

                                                if ($selectedOptions.length == $options.length) {
                                                    text += $(this).attr('label') + delimiter;
                                                }
                                                else {
                                                    $selectedOptions.each(function() {
                                                        text += $(this).text() + delimiter;
                                                    });
                                                }
                                            });

                                            var $remainingOptions = $('option:selected', $select).not('optgroup option');
                                            $remainingOptions.each(function() {
                                                text += $(this).text() + delimiter;
                                            });

                                            return text.substr(0, text.length - 2);
                                        }
                                    });
                                });
                            </script>
                            <div class="btn-group">
                                <select id="example-optgroup-buttonText" multiple="multiple">
                                    <optgroup class="group-1" label="Group 1">
                                        <option value="1-1">Option 1.1</option>
                                        <option value="1-2">Option 1.2</option>
                                        <option value="1-3">Option 1.3</option>
                                    </optgroup>
                                    <optgroup class="group-2" label="Group 2">
                                        <option value="2-1">Option 2.1</option>
                                        <option value="2-2">Option 2.2</option>
                                        <option value="2-3">Option 2.3</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-optgroup-buttonText').multiselect({
            buttonText: function(options, select) {

                // First consider the simple cases, i.e. disabled and empty.
                if (this.disabledText.length &gt; 0
                        && (this.disableIfEmpty || select.prop('disabled'))
                        && options.length == 0) {

                    return this.disabledText;
                }
                else if (options.length === 0) {
                    return this.nonSelectedText;
                }

                var $select = $(select);
                var $optgroups = $('optgroup', $select);

                var delimiter = this.delimiterText;
                var text = '';

                // Go through groups.
                $optgroups.each(function() {
                    var $selectedOptions = $('option:selected', this);
                    var $options = $('option', this);

                    if ($selectedOptions.length == $options.length) {
                        text += $(this).attr('label') + delimiter;
                    }
                    else {
                        $selectedOptions.each(function() {
                            text += $(this).text() + delimiter;
                        });
                    }
                });

                var $remainingOptions = $('option:selected', $select).not('optgroup option');
                $remainingOptions.each(function() {
                    text += $(this).text() + delimiter;
                });

                return text.substr(0, text.length - 2);
            }
        });
    });
&lt;/script&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;select id=&quot;example-optgroup-buttonText&quot; multiple=&quot;multiple&quot;&gt;
        &lt;optgroup class=&quot;group-1&quot; label=&quot;Group 1&quot;&gt;
            &lt;option value=&quot;1-1&quot;&gt;Option 1.1&lt;/option&gt;
            &lt;option value=&quot;1-2&quot;&gt;Option 1.2&lt;/option&gt;
            &lt;option value=&quot;1-3&quot;&gt;Option 1.3&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;optgroup class=&quot;group-2&quot; label=&quot;Group 2&quot;&gt;
            &lt;option value=&quot;2-1&quot;&gt;Option 2.1&lt;/option&gt;
            &lt;option value=&quot;2-2&quot;&gt;Option 2.2&lt;/option&gt;
            &lt;option value=&quot;2-3&quot;&gt;Option 2.3&lt;/option&gt;
        &lt;/optgroup&gt;
    &lt;/select&gt;
&lt;/div&gt;
</pre>
                        </div>

                        <p>The following example demonstrates how to set the class <code>active</code> of <code>input</code>'s parent element:</p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-selected-parents').multiselect({
                                        buttonContainer: '<div id="example-selected-parents-container"></div>',
                                        onChange: function(options, selected) {
                                            // Get checkbox corresponding to option:
                                            var value = $(options).val();
                                            var $input = $('#example-selected-parents-container input[value="' + value + '"]');

                                            // Adapt label class:
                                            if (selected) {
                                                $input.closest('span').addClass('active');
                                            }
                                            else {
                                                $input.closest('span').removeClass('active');
                                            }
                                        }
                                    });
                                });
                            </script>
                            <style type="text/css">
                                #example-selected-parents-container span.active {
                                    font-weight: bold;
                                }
                            </style>
                            <div class="btn-group">
                                <select id="example-selected-parents" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-selected-parents').multiselect({
            buttonContainer: '&lt;div id=&quot;example-selected-parents-container&quot;&gt;&lt;/div&gt;',
            onChange: function(options, selected) {
                // Get checkbox corresponding to option:
                var value = $(options).val();
                var $input = $('#example-selected-parents-container input[value=&quot;' + value + '&quot;]');

                // span label class:
                if (selected) {
                    $input.closest('span').addClass('active');
                }
                else {
                    $input.closest('span').removeClass('active');
                }
            }
        });
    });
&lt;/script&gt;
&lt;style type=&quot;text/css&quot;&gt;
    #example-selected-parents-container span.active {
        font-weight: bold;
    }
&lt;/style&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;select id=&quot;example-selected-parents&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</pre>
                        </div>

                        <p>
                            The following example demonstrates how to clear filtering as soon as an option is selected after the filter was used. Note that the filter is cleared both when an option is selected and deselected.
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-clear-after-filter-selection').multiselect({
                                        buttonContainer: '<div id="example-clear-after-filter-selection-container"></div>',
                                        enableFiltering: true,
                                        onChange: function($option) {
                                            // Check if the filter was used.
                                            var query = $('#example-clear-after-filter-selection-container .multiselect-filter input').val();

                                            if (query) {
                                                $('#example-clear-after-filter-selection-container .multiselect-filter input').val('').trigger('keydown');
                                            }
                                        }
                                    });
                                });
                            </script>
                            <div class="btn-group">
                                <select id="example-clear-after-filter-selection" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-clear-after-filter-selection').multiselect({
            buttonContainer: '<div id="example-clear-after-filter-selection-container"></div>',
            enableFiltering: true,
            onChange: function($option) {
                // Check if the filter was used.
                var query = $('#example-clear-after-filter-selection-container .multiselect-filter input').val();

                if (query) {
                    $('#example-clear-after-filter-selection-container .multiselect-filter input').val('').trigger('keydown');
                }
            }
        });
    });
&lt;/script&gt;
</pre>
                        </div>

                        <p>The following example demonstrates how to display a list of checkboxes without a dropdown:</p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-checkbox-list').multiselect({
                                        buttonContainer: '<div id="example-checkbox-list-container"></div>',
                                        buttonClass: '',
                                        templates: {
                                            button: '',
                                            popupContainer: '<div class="multiselect-container checkbox-list"></div>',
                                            option: '<a class="multiselect-option text-dark text-decoration-none"></a>'
                                        }
                                    });
                                });
                            </script>
                            <style type="text/css">
                                #example-checkbox-list-container .checkbox-list > .multiselect-option {
                                    display: block;
                                    padding: 3px 0;
                                }
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.active ,
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.active :hover,
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.active :focus {
                                    background-color: transparent;
                                }
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.disabled,
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.disabled:hover,
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.disabled:focus {
                                    color: #777;
                                }
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.disabled:hover,
                                #example-checkbox-list-container .checkbox-list > .multiselect-option.disabled:focus {
                                    text-decoration: none;
                                    cursor: unset;
                                    background-color: transparent;
                                    background-image: none;
                                    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
                                }
                                #example-checkbox-list-container .multiselect-container.checkbox-list {
                                    position: static;
                                }
                            </style>
                            <div class="btn-group">
                                <select id="example-checkbox-list" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3" disabled>Option 3</option>
                                    <option value="4" selected>Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-checkbox-list').multiselect({
            buttonContainer: '&lt;div id=&quot;example-checkbox-list-container&quot;&gt;&lt;/div&gt;',
            buttonClass: '',
            templates: {
                button: '',
                ul: '&lt;div class=&quot;multiselect-container checkbox-list&quot;&gt;&lt;/div&gt;',
                li: '&lt;a class=&quot;multiselect-option text-dark text-decoration-none&quot;&gt;&lt;/a&gt;'
            }
        });
    });
&lt;/script&gt;
&lt;style type=&quot;text/css&quot;&gt;

    #example-checkbox-list-container .checkbox-list &gt; li &gt; a {
        display: block;
        padding: 3px 0;
    }

    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.active,
    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.active:hover,
    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.active:focus {
        color: #333;
    }

    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.disabled,
    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.disabled:hover,
    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.disabled:focus {
        color: #777;
    }

    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.disabled:hover,
    #example-checkbox-list-container .checkbox-list &gt; .multiselect-option.disabled:focus {
        text-decoration: none;
        cursor: unset;
        background-color: transparent;
        background-image: none;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    }

    #example-checkbox-list-container .multiselect-container.checkbox-list {
        position: static;
    }

&lt;/style&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;select id=&quot;example-checkbox-list&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot; disabled &gt;Option 3&lt;/option&gt;
        &lt;option value=&quot;4&quot; selected &gt;Option 4&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</pre>
                        </div>

                        <p>
                            The select can also be embedded into an <code>input-group</code> and <code>input-group-sm</code>:
                        </p>

                        <div class="example">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#example-input-group').multiselect();
                                    $('#example-input-group-sm').multiselect();
                                });
                            </script>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Prepend</span>
                                </div>
                                <select id="example-input-group" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <div class="input-group-append">
                                    <span class="input-group-text">Append</span>
                                </div>
                            </div>
                            <div class="input-group input-group-sm mt-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Prepend</span>
                                </div>
                                <select id="example-input-group-sm" multiple="multipe">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                    <option value="6">Option 6</option>
                                </select>
                                <div class="input-group-append">
                                    <span class="input-group-text">Append</span>
                                </div>
                            </div>
                        </div>
                        <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-input-group').multiselect();
    });
&lt;/script&gt;

&lt;div class=&quot;input-group&quot;&gt;
    &lt;div class=&quot;input-group-prepend&quot;&gt;
        &lt;span class&quot;input-group-text&quot;&gt;Prepend&lt;/span&gt;
    &lt;/div&gt;
    &lt;select id=&quot;example-input-group&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class=&quot;input-group-append&quot;&gt;
        &lt;span class&quot;input-group-text&quot;&gt;Append&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group input-group-sm mt-2&quot;&gt;
    &lt;div class=&quot;input-group-prepend&quot;&gt;
        &lt;span class&quot;input-group-text&quot;&gt;Prepend&lt;/span&gt;
    &lt;/div&gt;
    &lt;select id=&quot;example-input-group&quot; multiple=&quot;multiple&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class=&quot;input-group-append&quot;&gt;
        &lt;span class&quot;input-group-text&quot;&gt;Append&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>

                            <div class="page-header">
                                <h2 id="post">Server-Side Processing</h2>
                            </div>

                            <p class="alert alert-warning">
                                The below example uses a PHP script to demonstrate Server-Side Processing. Therefore, the below example will not run online - <b>download the repository and try it on a local server</b>.
                            </p>

                            <p>
                                In order to receive the correct data after submitting the form, the used <code>select</code> has to have an appropriate name. Note that an <code>[]</code> needs to be appended to the name when using the <code>multiple</code> option/attribute. Per default, the checkboxes used within the multiselect will not be submitted, however, this can be changed by adapting <code>checkboxName</code>. The select all option as well as the text input used for the filter will not be submitted. As this may be useful, the name of the select all checkbox may be adapted using the <code>selectAllName</code> option. The value of the select all checkbox can be controlled by the <code>selectAllValue</code> option while the values of the remaining checkboxes correspond to the values used by the <code>option</code>'s of the original <code>select</code>.
                            </p>

                            <p class="alert alert-info">
                                The plugin naturally supports the <code>required</code> attribute.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-post').multiselect({
                                            includeSelectAllOption: true,
                                            enableFiltering: true
                                        });
                                    });
                                </script>
                                <form class="form-horizontal" method="POST" action="post.php">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Multiselect</label>
                                        <div class="col-sm-10">
                                            <select id="example-post" name="multiselect[]" multiple="multiple" required>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                                <option value="6">Option 6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Text Input</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="text" class="form-control" placeholder="Text Input" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="checkbox"> Checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radio"> Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radio"> Radio 2
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-outline-secondary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-post').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true
        });
    });
&lt;/script&gt;
&lt;form class=&quot;form-horizontal&quot; method=&quot;POST&quot; action=&quot;post.php&quot;&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label class=&quot;col-sm-2 control-label&quot;&gt;Multiselect&lt;/label&gt;
        &lt;div class=&quot;col-sm-10&quot;&gt;
            &lt;select id=&quot;example-post&quot; name=&quot;multiselect[]&quot; multiple=&quot;multiple&quot;&gt;
                &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
                &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
                &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label class=&quot;col-sm-2 control-label&quot;&gt;Text Input&lt;/label&gt;
        &lt;div class=&quot;col-sm-10&quot;&gt;
            &lt;input type=&quot;text&quot; name=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Text Input&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div class=&quot;col-sm-offset-2 col-sm-10&quot;&gt;
            &lt;div class=&quot;checkbox&quot;&gt;
                &lt;label&gt;
                    &lt;input type=&quot;checkbox&quot; name=&quot;checkbox&quot;&gt; Checkbox
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div class=&quot;col-sm-offset-2 col-sm-10&quot;&gt;
            &lt;div class=&quot;radio&quot;&gt;
                &lt;label&gt;
                    &lt;input type=&quot;radio&quot; name=&quot;radio&quot;&gt; Radio 1
                &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;radio&quot;&gt;
                &lt;label&gt;
                    &lt;input type=&quot;radio&quot; name=&quot;radio&quot;&gt; Radio 2
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div class=&quot;col-sm-offset-2 col-sm-10&quot;&gt;
            &lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
                            </div>

                            <p>
                                The <code>checkboxName</code> option can also be used to assign different names to the <code>option's</code>, for example for different <code>optgroup</code>s.
                            </p>

                            <p class="alert alert-warning">
                                Note that in the below example, <code>$_POST</code> will contain both the <code>multiselect</code> and the <code>group1</code> as well as <code>group2</code> keys.
                            </p>

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-post-checkboxName').multiselect({
                                            checkboxName: function(option) {
                                                var $optgroup = $(option).closest('optgroup');
                                                if ($optgroup.id == 'example-post-checkboxName-1') {
                                                    return 'group1[]';
                                                }
                                                else {
                                                    return 'group2[]';
                                                }
                                            }
                                        });
                                    });
                                </script>
                                <form class="form-horizontal" method="POST" action="post.php">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Multiselect</label>
                                        <div class="col-sm-10">
                                            <select id="example-post-checkboxName" name="multiselect[]" multiple="multiple" required>
                                                <optgroup label="Group 1" id="example-post-checkboxName-1">
                                                    <option value="1-1">Option 1.1</option>
                                                    <option value="1-2">Option 1.2</option>
                                                    <option value="1-3">Option 1.3</option>
                                                </optgroup>
                                                <optgroup label="Group 1" id="example-post-checkboxName-2">
                                                    <option value="2-1">Option 2.1</option>
                                                    <option value="2-2">Option 2.2</option>
                                                    <option value="2-3">Option 2.3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-outline-secondary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
    $(document).ready(function() {
        $('#example-post-checkboxName').multiselect({
            checkboxName: function(option) {
                var $optgroup = $(option).closest('optgroup');
                if ($optgroup.id == 'example-post-checkboxName-1') {
                    return 'group1[]';
                }
                else {
                    return 'group2[]';
                }
            }
        });
    });
&lt;/script&gt;
&lt;form class=&quot;form-horizontal&quot; method=&quot;POST&quot; action=&quot;post.php&quot;&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label class=&quot;col-sm-2 control-label&quot;&gt;Multiselect&lt;/label&gt;
        &lt;div class=&quot;col-sm-10&quot;&gt;
            &lt;select id=&quot;example-post-checkboxName&quot; name=&quot;multiselect[]&quot; multiple=&quot;multiple&quot; required&gt;
                &lt;optgroup label=&quot;Group 1&quot; id=&quot;example-post-checkboxName-1&quot;&gt;
                    &lt;option value=&quot;1-1&quot;&gt;Option 1.1&lt;/option&gt;
                    &lt;option value=&quot;1-2&quot;&gt;Option 1.2&lt;/option&gt;
                    &lt;option value=&quot;1-3&quot;&gt;Option 1.3&lt;/option&gt;
                &lt;/optgroup&gt;
                &lt;optgroup label=&quot;Group 1&quot; id=&quot;example-post-checkboxName-2&quot;&gt;
                    &lt;option value=&quot;2-1&quot;&gt;Option 2.1&lt;/option&gt;
                    &lt;option value=&quot;2-2&quot;&gt;Option 2.2&lt;/option&gt;
                    &lt;option value=&quot;2-3&quot;&gt;Option 2.3&lt;/option&gt;
                &lt;/optgroup&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div class=&quot;col-sm-offset-2 col-sm-10&quot;&gt;
            &lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
                            </div>

                            <div class="page-header">
                                <h2 id="keyboard-support">Keyboard Support</h2>
                            </div>

                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td><code>Tab</code></td>
                                    <td>As with other form elements, <code>Tab</code> is used to switch to the next form elements. <code>Tab</code> can be used when the dropdown is opened as well as when it is closed.</td>
                                </tr>
                                <tr>
                                    <td><code>Enter</code></td>
                                    <td><code>Enter</code> is used to open the dropdown and select options (for selecting options, <code>Space</code> can be used, as well). After a multiselect is in focus, pressing <code>Enter</code> will open the dropdown. Then, the options can be traversed using arrow up and down.</td>
                                </tr>
                                <tr>
                                    <td><code>Arrow Up/Arrow Down</code></td>
                                    <td>Used to traverse the options after opening the dropdown. An option can be selected using <code>Space</code> or <code>Enter</code>.</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="page-header">
                                <h2 id="faq">Frequently Asked Questions</h2>
                            </div>

                            <dl>
                                <div class="alert alert-info">
                                    <dt id="how-to-contribute">How to contribute?</dt>
                                    <dd>
                                        Pull requests to add additional feature or fix known bugs are always welcome! However, to make it easy for me to review and merge your pull request, the following guidelines should be considered:
                                        <ul>
                                            <li>Check the <a href="https://github.com/davidstutz/bootstrap-multiselect/issues">Issue Tracker</a> and the <a href="#faq">FAQ</a> before starting to implement a feature or fix.</li>
                                            <li>Add one pull request per feature/fix. Otherwise, I cannot guarantee that I will merge the pull request.</li>
                                            <li>Always document your changes. If new features are added, new options or methods should be added to the documentation (<code>index.html</code>) and appropriate examples should be added.</li>
                                            <li>Add a thorough description to your pull request - yes, I am able to read your code, however, reading your description may speed things up!</li>
                                            <li>Add comments to your code!</li>
                                        </ul>
                                        A full list of contributors can be found <a href="https://github.com/davidstutz/bootstrap-multiselect/graphs/contributors">here</a>.
                                    </dd>
                                </div>

                                <dt>How about older browsers as for example Internet Explorer 6, 7 and 8?</dt>
                                <dd>
                                    With version 2.0, jQuery no longer supports the older IE versions. Nevertheless, the plugin should run as expected using the 1.x branch of jQuery. See <a href="http://blog.jquery.com/2013/04/18/jquery-2-0-released/">here</a> for details.
                                </dd>

                                <dt>May I use the plugin in a commercial project (e.g. a commercial Wordpress/Joomla theme)?</dt>
                                <dd>
                                    The plugin is dual licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a> and the <a href="http://opensource.org/licenses/BSD-3-Clause">BSD 3-Clause License</a>. The BSD 3-Clause License allows to use the plugin in commercial projects as long as all source files associated with this plugin retain the copyright notice.
                                </dd>

                                <dt>Using <code>return false;</code> within the <code>onChange</code> option does not prevent the option from being selected/deselected ...</dt>
                                <dd>
                                    The <code>return</code> statement within the <code>onChange</code> method has no influence on the result. For preventing an option from being deselected or selected have a look at the examples in the <a href="#further-examples">Further Examples</a> section.
                                </dd>

                                <dt>How to change the button class depending on the number of selected options?</dt>
                                <dd>
                                    This issue is addressed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/332">332</a>.
                                </dd>

                                <dt>Why does the plugin crash when using <code>.multiselect('select', value);</code> or <code>.multiselect('deselect', value);</code>?</dt>
                                <dd>
                                    This may be caused when the class used for the <code>select</code> occurs for other elements, as well. In addition this may be caused if the multiselect has the class <code>.multiselect</code>. See <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/330">#330</a>.
                                </dd>

                                <dt>How to check whether filtering all options resulted no options being displayed (except the select all option)?</dt>
                                <dd>
                                    This issue is discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/317">#317</a>.
                                </dd>

                                <dt>How to use multiple plugin instances running single selections on one page?</dt>
                                <dd>
                                    There is a minor bug when using multiple plugin instances with single selection on one page. The bug is described here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/331">#331</a>. A possible fix is suggested here: <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/336">#336</a>.
                                </dd>

                                <dt>How to use the plugin within a <code>form.form-inline</code>?</dt>
                                <dd>
                                    This issue is addressed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/322">#322</a>
                                </dd>

                                <dt>Using jQuery, how to get the selected options dynamically?</dt>
                                <dd>
<pre class="linenums prettyprint">
//  get all option elements
$('#example option:selected');

//  get all option element values
$('#example option:selected').map(function(a, item){return item.value;});
</pre>
                                </dd>

                                <dt>How to get the selected options using PHP?</dt>
                                <dd>
                                    This issue is addressed here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/323">https://github.com/davidstutz/bootstrap-multiselect/issues/323</a>. Mainly there are two ways, either add a name to the <code>select</code>:
                                    <pre class="linenums prettyprint">
&lt;select id="example2" multiple="multiple" name="select[]"&gt;&lt;/select&gt;
</pre>
                                    <p>Or add an appropriate name to the checkboxes:</p>
                                    <pre class="linenums prettyprint">
$('#example2').multiselect({
    checkboxName: function(option) {
        return 'multiselect[]';
    }
});
</pre>
                                </dd>

                                <dt>Why does the plugin not work in Chrome for Mobile?</dt>
                                <dd>
                                    This may be caused by several reasons one of which is described and resolved here: <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/223">#223</a>.
                                </dd>

                                <dt>How to underline the searched text when using the filter?</dt>
                                <dd>
                                    This issue is discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/309">#309</a>.
                                </dd>

                                <dt>How to hide the checkboxes?</dt>
                                <dd>
                                    A related issue is discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/205">#205</a> and includes a possible solution when using CSS to hide the checkboxes:
                                    <pre class="prettyprint linenums">
.multiselect-container input {
    display: none
}
</pre>
                                </dd>

                                <dt>How to use Bootstrap Multiselect using <code>$.validate</code>?</dt>
                                <dd>
                                    This topic is discussed in issue <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/347">#347</a>. The fix suggested is as follows:
                                    <pre class="prettyprint linenums">
var $form = $("#myForm");
var validator = $form.data('validator');
validator.settings.ignore = ':hidden:not(".multiselect")';
</pre>
                                </dd>

                                <dt>How to prevent the plugin from selecting the first option in single select mode?</dt>
                                <dd>
                                    This issue is mainly due to the default behavior of most browsers. A workaround can be found here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/129">#129</a>.
                                </dd>

                                <dt>Which are the minimum required components of Twitter Botostrap to get the plugin working?</dt>
                                <dd>
                                    The plugin needs at least the styles for forms and dropdowns. In addition the JavaScript dropdown plugin from Twitter Bootstrap is required. Details can be found here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/344">#344</a>.
                                </dd>

                                <dt>How to use the <code>.multiselect('dataprovider', data)</code> method?</dt>
                                <dd>
                                    Have a look at the <a href="#methods">Methods</a> section. In the past, there has been some confusion about how the method handles option groups. If the documentation does not help you, have a look at the issue tracker, as for example issue <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/356">#356</a>.
                                </dd>

                                <dt>A <code>type="reset"</code> button does not refresh the multiselect, what to do?</dt>
                                <dd>
                                    Have a look at the <a href="#further-examples">Further Examples</a> section (in addition, issue <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/360">360</a> discussed this).
                                </dd>

                                <dt>Using multiple <code>select</code>'s in single selection mode with <code>option</code>'s sharing values across the different <code>select</code>'s.</dt>
                                <dd>
                                    This issue is discussed in detail here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/362">#362</a>. A simple solution is to use different option values for the option <code>checkboxName</code>:
                                    <pre class="prettyprint linenums">
$('.multiselect').multiselect({
    checkboxName: function(option) {
        return _.uniqueId('multiselect_');
    }
});
</pre>
                                    where <code>_.uniqueId('multiselect_')</code> should be replaced with a random generator. Alternatively, a unique value for <code>checkboxName</code> can be used for each multiselect.
                                </dd>

                                <dt>How to avoid <code>TypeError: Cannot read property "toString" of ...</code>?</dt>
                                <dd>
                                    This error may be thrown if <code>null</code> or <code>undefined</code> is provided as argument of <code>.multiselect('select', value)</code> or <code>.multiselect('deselect', value)</code>, see <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/386">#386</a>.
                                </dd>

                                <dt>Why is there no "uncheck all" option?</dt>
                                <dd>
                                    This issue is discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/271">#271.</a>
                                </dd>

                                <dt>Esc does not close the dropdown?!</dt>
                                <dd>
                                    This issue is discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/368">#368</a>. Currently, pressing <code>Esc</code> will not close the dropdown as there were some bugs with this.
                                </dd>

                                <dt>How to keep the dropdown open?</dt>
                                <dd>
                                    This issue is discussed here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/426">#426</a>.
                                </dd>

                                <dt>Why is the dropdown not showing (or only partly shown) within modals?</dt>
                                <dd>
                                    This is a general issue not directly related to Bootstrap Multiselect: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/455">#455</a>.
                                </dd>

                                <dt>How do add icons to the options (<a href="https://github.com/davidstutz/bootstrap-multiselect/issues/475">#475</a>)?</dt>
                                <dd>
                                    Adapt the <code>optionLabel</code> option as follows:
                                    <pre class="prettyprint linenums">
optionLabel: function(element){
    return $(element).attr('label') || $(element).html();
},
</pre>
                                </dd>

                                <dt>How to add a deselect all functionality (the inverse to the select all option)?</dt>
                                <dd>
                                    This issue was discussed in the following pull request: <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/487">#487</a>.
                                </dd>

                                <dt>How to bind object values using Knockout JS?</dt>
                                <dd>
                                    <p>This issue was discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/532">#532</a>.</p>
                                    <p>The plugin depends upon the following standard knockout bindings: <code>options</code>, <code>value</code>, <code>selectedOptions</code>, <code>enable</code>, <code>disable</code>. When these options change, they will update the internal <code>select</code> element and <code>.multiselect('refresh')</code> is triggered.
                                    <ul>
                                        <li><code>options</code>: when <code>options</code> is an observable and changes, the <code>option</code>'s inside the <code>select</code> are updated by knockout and the plugin refreshes.</li>
                                        <li><code>value</code>: can only be used in single selection mode; Knockout does not support using the value binding handler to update a <code>select</code> with <code>multiple=&quotmultiple&quot;</code>.</li>
                                        <li><code>selectedOptions</code>: this is a standard knockout binding that updates the checked options inside the <code>select</code> element; use with <code>multiple=&quotmultiple&quot;</code>.</li>
                                        <li><code>enable</code>: enable the plugin.</li>
                                        <li><code>disable</code>: disable the plugin.</li>
                                    </ul>
                                    <p>Any other options inside the multiselect data bind are passed to the jQuery multiselect plugin.</p>
                                </dd>

                                <dt>Options do net get updated when using Angular JS?</dt>
                                <dd>
                                    This issues was discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/519">#519</a>.
                                </dd>

                                <dt>Is there a search event?</dt>
                                <dd>
                                    This was discussed here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/530">#530</a>.
                                </dd>

                                <dt>How to use the plugin with a local jQuery variable?</dt>
                                <dd>
                                    This was discussed (and solved) here: <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/686">#686</a>
                                </dd>

                                <dt>how to use font-awesome for checkboxes?</dt>
                                <dd>
                                    This issue was discussed here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/576">#576</a>
                                </dd>

                                <dt>How to focus on search/fiter input on dropdown open?</dt>
                                <dd>
                                    This issue is discussed in <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/615">#615</a> and <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/153">#153</a>.
                                </dd>

                                <dt>How to initialize the plugin in npm?</dt>
                                <dd>
                                    This issue is discussed here: <a href="https://github.com/davidstutz/bootstrap-multiselect/issues/585">#585</a>. The proposed workaround looks as follows:
                                    <pre class="linenums prettyprint">
var $ = require('jquery');
var multiselect = require('bootstrap-multiselect');
$.multiselect = multiselect;

$("#example").multiselect();
</pre>
                                </dd>

                                <dt>How to show the dropdown on hover?</dt>
                                <dd>
                                    This can be achieved using a bit of CSS, see <a href="https://stackoverflow.com/questions/16214326/bootstrap-dropdown-with-hover">this StackOverflow discussion</a>.
                                </dd>

                                <dt>Can I use <a href="https://fontawesome.com/">Font Awesome</a> instead of Bootstrap's glyphicons?</dt>
                                <dd>
                                    Yes, see here: <a href="https://github.com/davidstutz/bootstrap-multiselect/pull/887">#887</a>.
                                </dd>
                            </dl>

                            <div class="page-header">
                                <h2 id="known-issues">Known Issues</h2>
                            </div>

                            <p>
                                See the <a href="https://github.com/davidstutz/bootstrap-multiselect/issues">Issue Tracker</a>.
                            </p>

                            <div class="page-header">
                                <h2 id="migration">Migrating to Bootstrap v4</h2>
                            </div>

                            <p>
                                For migrating your project to Bootstrap v4 follow the instructions from <a href="https://getbootstrap.com/docs/4.5/migration/">Bootstrap</a>.
                                Breaking changes for the bootstrap-multiselect are described in the following section:
                            </p>
                            <h3>Templates</h3>
                            <p>
                                In Bootstrap v4 Dropdown menus are no longer created with <code>ul</code>s and <code>li</code>s but with <code>div</code>s and <code>a</code>s.
                                The Dropdown of the multiselect was changed to work in the same way like it is recommended by Bootstrap.
                                To make template names indepedent of the concrete HTML structure they were also adapted:
                            <ul>
                                <li>The template <code>ul</code> was renamed to <code>popupContainer</code></li>
                                <li>The template <code>li</code> was renamed to <code>option</code></li>
                                <li>The template <code>liGroup</code> was renamed to <code>optionGroup</code></li>
                            </ul>

                            Besides the refactoring of upgrading the multiselect to Bootstrap v4 also the filter controls were redesigned.
                            To keep the old design the following template can be used for <code>filter</code>:

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-legacyFiltering').multiselect({
                                            enableFiltering: true,
                                            templates: {
                                                filter: '<div class="multiselect-filter"><div class="input-group input-group-sm p-1"><div class="input-group-prepend"><i class="input-group-text fas fa-search"></i></div><input class="form-control multiselect-search" type="text" /><div class="input-group-append"><button class="multiselect-clear-filter input-group-text" type="button"><i class="fas fa-times"></i></button></div></div></div>'
                                            }
                                        });
                                    });
                                </script>
                                <select id="example-legacyFiltering" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                </select>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
$(document).ready(function() {
   $('#example-legacyFiltering').multiselect({
      enableFiltering: true,
      templates: {
         filter: '&lt;div class="multiselect-filter"&gt;&lt;div class="input-group input-group-sm p-1"&gt;&lt;div class="input-group-prepend"&gt;&lt;i class="input-group-text fas fa-search"&gt;&lt;/i&gt;&lt;/div&gt;&lt;input class="form-control multiselect-search" type="text" /&gt;&lt;div class="input-group-append"&gt;&lt;button class="multiselect-clear-filter input-group-text" type="button"&gt;&lt;i class="fas fa-times"&gt;&lt;/i&gt;&lt;/button&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;'
      }
   });
});
&lt;/script&gt;
</pre>
                            </div>

                            </p>

                            <h3>Colors</h3>
                            <p>
                                In Chrome checked checkboxes are highlighted in blue and also in Bootstrap v4 active dropdown items have a blue color. This led to the situation that checked checkboxes were almost not visible anymore.
                                Therefore the active color for dropdown items was changed a light grey.
                                If you would like to use the Bootstrap default color you can use the <code>selectedClass</code> option with the value <code>multiselect-active-item-fallback</code>:

                            <div class="example">
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#example-multiselect-fallback').multiselect({
                                            selectedClass: "active multiselect-active-item-fallback"
                                        });
                                    });
                                </script>
                                <select id="example-multiselect-fallback" multiple="multiple">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                </select>
                            </div>
                            <div class="highlight">
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
$(document).ready(function() {
   $('#example-multiselect-fallback').multiselect({
      selectedClass: "active multiselect-active-item-fallback"
   });
});
&lt;/script&gt;
</pre>
                            </div>

                            </p>

                            <h3>Fonts</h3>
                            <p>
                                Bootstrap dropped the Glyphicons icon font therefore the icons in the multiselect where changed to <a href="https://fontawesome.com/">Font Awesome</a>.
                                To get the icons working you need to <a href="https://fontawesome.com/how-to-use/on-the-web/setup/hosting-font-awesome-yourself">download Font Awesome</a> and include the all.css or all.min.css into your project.
                                If you change the location of the font files you may need to also adapt the paths at the end of all.css and all.min.css.
                            </p>

                            <div class="page-header">
                                <h2 id="license">License</h2>
                            </div>

                            <dl>
                                <dt>Apache License, Version 2.0</dt>
                                <dd>
                                    <p>Copyright 2012 - 2020 <a href="http://davidstutz.de/">David Stutz</a></p>
                                    <p>
                                        Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">http://www.apache.org/licenses/LICENSE-2.0</a>.
                                    </p>
                                    <p>
                                        Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
                                    </p>
                                </dd>

                                <dt>BSD 3-Clause License</dt>
                                <dd>
                                    <p>Copyright (c) 2012 - 2020 <a href="http://davidstutz.de/">David Stutz</a></p>
                                    <p>All rights reserved.</p>
                                    <p>
                                        Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
                                    </p>
                                    <ul>
                                        <li>Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
                                        <li>Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
                                        <li>Neither the name of David Stutz nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
                                    </ul>
                                    <p>
                                        THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
                                    </p>
                                </dd>
                            </dl>

                            <hr>
                            <p>
                                &copy; 2012 - 2020
                                <a href="http://davidstutz.de">David Stutz</a>, <a href="https://davidstutz.de/impressum/">Impressum</a>, <a href="https://davidstutz.de/datenschutz/">Datenschutz</a> - dual licensed: <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>, <a href="http://opensource.org/licenses/BSD-3-Clause">BSD 3-Clause License</a>
                            </p>
                        </div>
                    </div>
                </div>
</body>
</html>
