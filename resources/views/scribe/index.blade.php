<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.10.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.10.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-purchase">
                                <a href="#endpoints-POSTapi-purchase">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-account">
                                <a href="#endpoints-GETapi-account">GET api/account</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-reports">
                                <a href="#endpoints-GETapi-reports">GET api/reports</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-inventory">
                                <a href="#endpoints-GETapi-inventory">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-inventory">
                                <a href="#endpoints-POSTapi-inventory">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-inventory--id-">
                                <a href="#endpoints-GETapi-inventory--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-inventory--id-">
                                <a href="#endpoints-PUTapi-inventory--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-inventory--id-">
                                <a href="#endpoints-DELETEapi-inventory--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-suppliers">
                                <a href="#endpoints-GETapi-suppliers">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-suppliers">
                                <a href="#endpoints-POSTapi-suppliers">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-suppliers--id-">
                                <a href="#endpoints-GETapi-suppliers--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-suppliers--id-">
                                <a href="#endpoints-PUTapi-suppliers--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-suppliers--id-">
                                <a href="#endpoints-DELETEapi-suppliers--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-sales">
                                <a href="#endpoints-GETapi-sales">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-sales">
                                <a href="#endpoints-POSTapi-sales">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-sales--id-">
                                <a href="#endpoints-GETapi-sales--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-sales--id-">
                                <a href="#endpoints-PUTapi-sales--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-sales--id-">
                                <a href="#endpoints-DELETEapi-sales--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login_manager">
                                <a href="#endpoints-POSTapi-login_manager">POST api/login_manager</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-change_password">
                                <a href="#endpoints-POSTapi-change_password">POST api/change_password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-change_manager_password">
                                <a href="#endpoints-POSTapi-change_manager_password">POST api/change_manager_password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 2, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-purchase">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-POSTapi-purchase">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/purchase" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"products\": [
        {
            \"id\": \"sed\",
            \"quantity\": 9,
            \"cost\": 601,
            \"price\": 2056575
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/purchase"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "products": [
        {
            "id": "sed",
            "quantity": 9,
            "cost": 601,
            "price": 2056575
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-purchase">
</span>
<span id="execution-results-POSTapi-purchase" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-purchase"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-purchase" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-purchase" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-purchase"></code></pre>
</span>
<form id="form-POSTapi-purchase" data-method="POST"
      data-path="api/purchase"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-purchase', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-purchase"
                    onclick="tryItOut('POSTapi-purchase');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-purchase"
                    onclick="cancelTryOut('POSTapi-purchase');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-purchase" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/purchase</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-purchase"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-purchase"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>products</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="products.0.id"                data-endpoint="POSTapi-purchase"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="products.0.quantity"                data-endpoint="POSTapi-purchase"
               value="9"
               data-component="body">
    <br>
<p>Example: <code>9</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>cost</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="products.0.cost"                data-endpoint="POSTapi-purchase"
               value="601"
               data-component="body">
    <br>
<p>Example: <code>601</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="products.0.price"                data-endpoint="POSTapi-purchase"
               value="2056575"
               data-component="body">
    <br>
<p>Example: <code>2056575</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>supplier_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="products.0.supplier_id"                data-endpoint="POSTapi-purchase"
               value=""
               data-component="body">
    <br>

                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-account">GET api/account</h2>

<p>
</p>



<span id="example-requests-GETapi-account">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/account" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/account"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-account">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;purchase&quot;: 6869.84000000000014551915228366851806640625,
    &quot;revenue&quot;: -111233968.1599999964237213134765625,
    &quot;saels&quot;: 111240838
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-account" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-account"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-account" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-account"></code></pre>
</span>
<form id="form-GETapi-account" data-method="GET"
      data-path="api/account"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-account', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-account"
                    onclick="tryItOut('GETapi-account');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-account"
                    onclick="cancelTryOut('GETapi-account');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-account" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/account</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-reports">GET api/reports</h2>

<p>
</p>



<span id="example-requests-GETapi-reports">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/reports" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reports"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reports">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;storeMovement&quot;: [
        {
            &quot;date&quot;: &quot;January&quot;,
            &quot;views&quot;: 1
        },
        {
            &quot;date&quot;: &quot;December&quot;,
            &quot;views&quot;: 168865
        }
    ],
    &quot;bestSelling&quot;: [
        {
            &quot;item_name&quot;: &quot;Pepsi 300ml&quot;,
            &quot;sales&quot;: 37482
        },
        {
            &quot;item_name&quot;: &quot;Safia Water 600ml&quot;,
            &quot;sales&quot;: 21658
        },
        {
            &quot;item_name&quot;: &quot;Capo Fresh Milk 1L&quot;,
            &quot;sales&quot;: 15980
        },
        {
            &quot;item_name&quot;: &quot;Looli Beef Sausage 500g&quot;,
            &quot;sales&quot;: 15446
        },
        {
            &quot;item_name&quot;: &quot;Capo Set Yogurt 800g&quot;,
            &quot;sales&quot;: 15266
        }
    ],
    &quot;leastSelling&quot;: [
        {
            &quot;item_name&quot;: null,
            &quot;sales&quot;: 2
        },
        {
            &quot;item_name&quot;: &quot;Yara Sunflower Oil 1L&quot;,
            &quot;sales&quot;: 2826
        },
        {
            &quot;item_name&quot;: &quot;Alnasr Sesame Oil 225ml&quot;,
            &quot;sales&quot;: 2856
        },
        {
            &quot;item_name&quot;: &quot;Alwaha Luxury Tea 100g&quot;,
            &quot;sales&quot;: 3506
        },
        {
            &quot;item_name&quot;: &quot;Butterfly Tomato Paste 400g&quot;,
            &quot;sales&quot;: 3604
        }
    ],
    &quot;lowStock&quot;: [
        {
            &quot;barcode&quot;: &quot;5285000395164&quot;,
            &quot;stock_quantity&quot;: 0
        },
        {
            &quot;barcode&quot;: &quot;6217000119951&quot;,
            &quot;stock_quantity&quot;: 250
        },
        {
            &quot;barcode&quot;: &quot;6224001125010&quot;,
            &quot;stock_quantity&quot;: 300
        },
        {
            &quot;barcode&quot;: &quot;8212634901116&quot;,
            &quot;stock_quantity&quot;: 350
        },
        {
            &quot;barcode&quot;: &quot;6161106641055&quot;,
            &quot;stock_quantity&quot;: 400
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reports" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reports"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reports" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reports"></code></pre>
</span>
<form id="form-GETapi-reports" data-method="GET"
      data-path="api/reports"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reports', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reports"
                    onclick="tryItOut('GETapi-reports');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reports"
                    onclick="cancelTryOut('GETapi-reports');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reports" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reports</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-reports"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-reports"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-inventory">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-inventory">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/inventory" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/inventory"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-inventory">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 4,
            &quot;barcode&quot;: &quot;5285000395164&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;0&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 08/01/2023&quot;,
            &quot;cost&quot;: 23,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-15T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-31T10:12:22.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;barcode&quot;: &quot;8212633832015&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;600&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2024&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;barcode&quot;: &quot;12000052392&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;500&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 06/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;barcode&quot;: &quot;6161106641055&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;400&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 15/10/2022&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;barcode&quot;: &quot;6161106640560&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;600&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 08/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;barcode&quot;: &quot;8212634901116&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;350&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;barcode&quot;: &quot;6224007562109&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;650&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 01/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;barcode&quot;: &quot;6161106640133&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;700&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2024&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;barcode&quot;: &quot;6161106640430&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;600&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;barcode&quot;: &quot;6161106640089&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;400&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 06/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;barcode&quot;: &quot;6224001125010&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;300&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;barcode&quot;: &quot;8210145612316&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;500&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;barcode&quot;: &quot;6217000119951&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;250&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 06/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;barcode&quot;: &quot;6161106641192&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;550&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 15/10/2022&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;barcode&quot;: &quot;6297000851112&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;700&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2024&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;barcode&quot;: &quot;8210040356728&quot;,
            &quot;item_name&quot;: null,
            &quot;stock_quantity&quot;: &quot;400&quot;,
            &quot;description&quot;: null,
            &quot;expiration_date&quot;: &quot; 12/01/2023&quot;,
            &quot;cost&quot;: null,
            &quot;category&quot;: null,
            &quot;price&quot;: null,
            &quot;created_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-28T18:41:02.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-inventory" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-inventory"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-inventory" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-inventory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-inventory"></code></pre>
</span>
<form id="form-GETapi-inventory" data-method="GET"
      data-path="api/inventory"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-inventory', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-inventory"
                    onclick="tryItOut('GETapi-inventory');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-inventory"
                    onclick="cancelTryOut('GETapi-inventory');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-inventory" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/inventory</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-inventory">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-inventory">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/inventory" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"barcode\": \"ut\",
    \"item_name\": \"c\",
    \"stock_quantity\": 2,
    \"expiration_date\": \"2023-01-02T14:44:57\",
    \"cost\": 14818418.27999999932944774627685546875,
    \"category\": 498,
    \"price\": 9223810.09999999962747097015380859375
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/inventory"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "barcode": "ut",
    "item_name": "c",
    "stock_quantity": 2,
    "expiration_date": "2023-01-02T14:44:57",
    "cost": 14818418.27999999932944774627685546875,
    "category": 498,
    "price": 9223810.09999999962747097015380859375
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-inventory">
</span>
<span id="execution-results-POSTapi-inventory" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-inventory"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-inventory" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-inventory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-inventory"></code></pre>
</span>
<form id="form-POSTapi-inventory" data-method="POST"
      data-path="api/inventory"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-inventory', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-inventory"
                    onclick="tryItOut('POSTapi-inventory');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-inventory"
                    onclick="cancelTryOut('POSTapi-inventory');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-inventory" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/inventory</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>barcode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="barcode"                data-endpoint="POSTapi-inventory"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>item_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="item_name"                data-endpoint="POSTapi-inventory"
               value="c"
               data-component="body">
    <br>
<p>Must not be greater than 256 characters. Example: <code>c</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock_quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="stock_quantity"                data-endpoint="POSTapi-inventory"
               value="2"
               data-component="body">
    <br>
<p>Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="POSTapi-inventory"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expiration_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="expiration_date"                data-endpoint="POSTapi-inventory"
               value="2023-01-02T14:44:57"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-01-02T14:44:57</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cost</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="cost"                data-endpoint="POSTapi-inventory"
               value="14818418.28"
               data-component="body">
    <br>
<p>Example: <code>14818418.28</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="category"                data-endpoint="POSTapi-inventory"
               value="498"
               data-component="body">
    <br>
<p>Example: <code>498</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="price"                data-endpoint="POSTapi-inventory"
               value="9223810.1"
               data-component="body">
    <br>
<p>Example: <code>9223810.1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-inventory--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-inventory--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/inventory/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/inventory/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-inventory--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 4,
        &quot;barcode&quot;: &quot;5285000395164&quot;,
        &quot;item_name&quot;: null,
        &quot;stock_quantity&quot;: &quot;0&quot;,
        &quot;description&quot;: null,
        &quot;expiration_date&quot;: &quot; 08/01/2023&quot;,
        &quot;cost&quot;: 23,
        &quot;category&quot;: null,
        &quot;price&quot;: null,
        &quot;created_at&quot;: &quot;2022-12-15T18:41:02.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-12-31T10:12:22.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-inventory--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-inventory--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-inventory--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-inventory--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-inventory--id-"></code></pre>
</span>
<form id="form-GETapi-inventory--id-" data-method="GET"
      data-path="api/inventory/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-inventory--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-inventory--id-"
                    onclick="tryItOut('GETapi-inventory--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-inventory--id-"
                    onclick="cancelTryOut('GETapi-inventory--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-inventory--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/inventory/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-inventory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-inventory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-inventory--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the inventory. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-inventory--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-inventory--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/inventory/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"barcode\": \"vel\",
    \"item_name\": \"kudjg\",
    \"stock_quantity\": 20,
    \"expiration_date\": \"2023-01-02T14:44:57\",
    \"cost\": 323.1568311199999925520387478172779083251953125,
    \"category\": 730092.538361800019629299640655517578125,
    \"price\": 43173881.016246266663074493408203125
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/inventory/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "barcode": "vel",
    "item_name": "kudjg",
    "stock_quantity": 20,
    "expiration_date": "2023-01-02T14:44:57",
    "cost": 323.1568311199999925520387478172779083251953125,
    "category": 730092.538361800019629299640655517578125,
    "price": 43173881.016246266663074493408203125
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-inventory--id-">
</span>
<span id="execution-results-PUTapi-inventory--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-inventory--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-inventory--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-inventory--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-inventory--id-"></code></pre>
</span>
<form id="form-PUTapi-inventory--id-" data-method="PUT"
      data-path="api/inventory/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-inventory--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-inventory--id-"
                    onclick="tryItOut('PUTapi-inventory--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-inventory--id-"
                    onclick="cancelTryOut('PUTapi-inventory--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-inventory--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/inventory/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/inventory/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-inventory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-inventory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-inventory--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the inventory. Example: <code>4</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>barcode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="barcode"                data-endpoint="PUTapi-inventory--id-"
               value="vel"
               data-component="body">
    <br>
<p>Example: <code>vel</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>item_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="item_name"                data-endpoint="PUTapi-inventory--id-"
               value="kudjg"
               data-component="body">
    <br>
<p>Must not be greater than 256 characters. Example: <code>kudjg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock_quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="stock_quantity"                data-endpoint="PUTapi-inventory--id-"
               value="20"
               data-component="body">
    <br>
<p>Example: <code>20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="PUTapi-inventory--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expiration_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="expiration_date"                data-endpoint="PUTapi-inventory--id-"
               value="2023-01-02T14:44:57"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-01-02T14:44:57</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cost</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="cost"                data-endpoint="PUTapi-inventory--id-"
               value="323.15683112"
               data-component="body">
    <br>
<p>Example: <code>323.15683112</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="category"                data-endpoint="PUTapi-inventory--id-"
               value="730092.5383618"
               data-component="body">
    <br>
<p>Example: <code>730092.5383618</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="price"                data-endpoint="PUTapi-inventory--id-"
               value="43173881.016246"
               data-component="body">
    <br>
<p>Example: <code>43173881.016246</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-inventory--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-inventory--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/inventory/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/inventory/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-inventory--id-">
</span>
<span id="execution-results-DELETEapi-inventory--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-inventory--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-inventory--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-inventory--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-inventory--id-"></code></pre>
</span>
<form id="form-DELETEapi-inventory--id-" data-method="DELETE"
      data-path="api/inventory/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-inventory--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-inventory--id-"
                    onclick="tryItOut('DELETEapi-inventory--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-inventory--id-"
                    onclick="cancelTryOut('DELETEapi-inventory--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-inventory--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/inventory/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-inventory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-inventory--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-inventory--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the inventory. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-suppliers">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-suppliers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/suppliers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-suppliers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;sdsd&quot;,
            &quot;phone&quot;: 123,
            &quot;created_at&quot;: &quot;2022-12-31T10:15:57.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-12-31T10:15:57.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-suppliers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-suppliers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-suppliers" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-suppliers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-suppliers"></code></pre>
</span>
<form id="form-GETapi-suppliers" data-method="GET"
      data-path="api/suppliers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-suppliers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-suppliers"
                    onclick="tryItOut('GETapi-suppliers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-suppliers"
                    onclick="cancelTryOut('GETapi-suppliers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-suppliers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/suppliers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-suppliers">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-suppliers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/suppliers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"windayn\",
    \"phone\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "windayn",
    "phone": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-suppliers">
</span>
<span id="execution-results-POSTapi-suppliers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-suppliers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-suppliers" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-suppliers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-suppliers"></code></pre>
</span>
<form id="form-POSTapi-suppliers" data-method="POST"
      data-path="api/suppliers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-suppliers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-suppliers"
                    onclick="tryItOut('POSTapi-suppliers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-suppliers"
                    onclick="cancelTryOut('POSTapi-suppliers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-suppliers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/suppliers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-suppliers"
               value="windayn"
               data-component="body">
    <br>
<p>Must not be greater than 256 characters. Example: <code>windayn</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="phone"                data-endpoint="POSTapi-suppliers"
               value="1"
               data-component="body">
    <br>
<p>Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-suppliers--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-suppliers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/suppliers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-suppliers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;sdsd&quot;,
        &quot;phone&quot;: 123,
        &quot;created_at&quot;: &quot;2022-12-31T10:15:57.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-12-31T10:15:57.000000Z&quot;,
        &quot;invoices&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;barcode&quot;: &quot;5285000395164&quot;,
                &quot;item_name&quot;: &quot; Indomie Vegetable Flavor 70g&quot;,
                &quot;category&quot;: &quot;Ingredient&quot;,
                &quot;description&quot;: &quot;Pastas&quot;,
                &quot;product_life_in_days&quot;: 240,
                &quot;size&quot;: &quot;70&quot;,
                &quot;unit_of_measure&quot;: &quot;g&quot;,
                &quot;measurement_class&quot;: &quot;mass&quot;,
                &quot;seasonality&quot;: null,
                &quot;cost&quot;: 108.3299999999999982946974341757595539093017578125,
                &quot;price&quot;: 130,
                &quot;min_price&quot;: 40,
                &quot;max_price&quot;: 170,
                &quot;created_at&quot;: &quot;2022-12-28T18:59:37.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-12-28T18:59:37.000000Z&quot;,
                &quot;supplier_id&quot;: 1
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-suppliers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-suppliers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-suppliers--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-suppliers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-suppliers--id-"></code></pre>
</span>
<form id="form-GETapi-suppliers--id-" data-method="GET"
      data-path="api/suppliers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-suppliers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-suppliers--id-"
                    onclick="tryItOut('GETapi-suppliers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-suppliers--id-"
                    onclick="cancelTryOut('GETapi-suppliers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-suppliers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/suppliers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-suppliers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-suppliers--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-suppliers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/suppliers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"gobvj\",
    \"phone\": 11
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "gobvj",
    "phone": 11
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-suppliers--id-">
</span>
<span id="execution-results-PUTapi-suppliers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-suppliers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-suppliers--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-suppliers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-suppliers--id-"></code></pre>
</span>
<form id="form-PUTapi-suppliers--id-" data-method="PUT"
      data-path="api/suppliers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-suppliers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-suppliers--id-"
                    onclick="tryItOut('PUTapi-suppliers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-suppliers--id-"
                    onclick="cancelTryOut('PUTapi-suppliers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-suppliers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/suppliers/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/suppliers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-suppliers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PUTapi-suppliers--id-"
               value="gobvj"
               data-component="body">
    <br>
<p>Must not be greater than 256 characters. Example: <code>gobvj</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="phone"                data-endpoint="PUTapi-suppliers--id-"
               value="11"
               data-component="body">
    <br>
<p>Example: <code>11</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-suppliers--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-suppliers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/suppliers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-suppliers--id-">
</span>
<span id="execution-results-DELETEapi-suppliers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-suppliers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-suppliers--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-suppliers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-suppliers--id-"></code></pre>
</span>
<form id="form-DELETEapi-suppliers--id-" data-method="DELETE"
      data-path="api/suppliers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-suppliers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-suppliers--id-"
                    onclick="tryItOut('DELETEapi-suppliers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-suppliers--id-"
                    onclick="cancelTryOut('DELETEapi-suppliers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-suppliers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/suppliers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-suppliers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-sales">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-sales">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/sales" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sales"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-sales">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-sales" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-sales"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sales" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-sales" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sales"></code></pre>
</span>
<form id="form-GETapi-sales" data-method="GET"
      data-path="api/sales"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-sales', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-sales"
                    onclick="tryItOut('GETapi-sales');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-sales"
                    onclick="cancelTryOut('GETapi-sales');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-sales" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/sales</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-sales"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-sales"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-sales">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-sales">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/sales" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"products\": [
        {
            \"id\": \"corrupti\",
            \"quantity\": 16
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sales"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "products": [
        {
            "id": "corrupti",
            "quantity": 16
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-sales">
</span>
<span id="execution-results-POSTapi-sales" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-sales"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-sales" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-sales" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-sales"></code></pre>
</span>
<form id="form-POSTapi-sales" data-method="POST"
      data-path="api/sales"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-sales', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-sales"
                    onclick="tryItOut('POSTapi-sales');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-sales"
                    onclick="cancelTryOut('POSTapi-sales');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-sales" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/sales</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-sales"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-sales"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>prducts</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="prducts"                data-endpoint="POSTapi-sales"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>products</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="products.0.id"                data-endpoint="POSTapi-sales"
               value="corrupti"
               data-component="body">
    <br>
<p>Example: <code>corrupti</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="products.0.quantity"                data-endpoint="POSTapi-sales"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-sales--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-sales--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/sales/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sales/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-sales--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-sales--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-sales--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sales--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-sales--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sales--id-"></code></pre>
</span>
<form id="form-GETapi-sales--id-" data-method="GET"
      data-path="api/sales/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-sales--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-sales--id-"
                    onclick="tryItOut('GETapi-sales--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-sales--id-"
                    onclick="cancelTryOut('GETapi-sales--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-sales--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/sales/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-sales--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-sales--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-sales--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the sale. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-sales--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-sales--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/sales/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sales/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-sales--id-">
</span>
<span id="execution-results-PUTapi-sales--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-sales--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-sales--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-sales--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-sales--id-"></code></pre>
</span>
<form id="form-PUTapi-sales--id-" data-method="PUT"
      data-path="api/sales/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-sales--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-sales--id-"
                    onclick="tryItOut('PUTapi-sales--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-sales--id-"
                    onclick="cancelTryOut('PUTapi-sales--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-sales--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/sales/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/sales/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-sales--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-sales--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-sales--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the sale. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-sales--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-sales--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/sales/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sales/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-sales--id-">
</span>
<span id="execution-results-DELETEapi-sales--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-sales--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-sales--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-sales--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-sales--id-"></code></pre>
</span>
<form id="form-DELETEapi-sales--id-" data-method="DELETE"
      data-path="api/sales/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-sales--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-sales--id-"
                    onclick="tryItOut('DELETEapi-sales--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-sales--id-"
                    onclick="cancelTryOut('DELETEapi-sales--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-sales--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/sales/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-sales--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-sales--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-sales--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the sale. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-login_manager">POST api/login_manager</h2>

<p>
</p>



<span id="example-requests-POSTapi-login_manager">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login_manager" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"ivF=9iF+_u07HZ?C\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login_manager"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "ivF=9iF+_u07HZ?C"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login_manager">
</span>
<span id="execution-results-POSTapi-login_manager" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login_manager"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login_manager" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login_manager" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login_manager"></code></pre>
</span>
<form id="form-POSTapi-login_manager" data-method="POST"
      data-path="api/login_manager"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login_manager', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login_manager"
                    onclick="tryItOut('POSTapi-login_manager');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login_manager"
                    onclick="cancelTryOut('POSTapi-login_manager');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login_manager" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login_manager</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-login_manager"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-login_manager"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-login_manager"
               value="ivF=9iF+_u07HZ?C"
               data-component="body">
    <br>
<p>Example: <code>ivF=9iF+_u07HZ?C</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-change_password">POST api/change_password</h2>

<p>
</p>



<span id="example-requests-POSTapi-change_password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/change_password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"g&lt;Dp74$f}Uv+a?*Ke\",
    \"new_password\": \"nopxhwqpozroqgbmlbmxdxhecdpnkrluwlfayijepphoajhyfojnsvyztiwcghwzabunuhtvnlrxeblalpeqh\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/change_password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "g&lt;Dp74$f}Uv+a?*Ke",
    "new_password": "nopxhwqpozroqgbmlbmxdxhecdpnkrluwlfayijepphoajhyfojnsvyztiwcghwzabunuhtvnlrxeblalpeqh"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-change_password">
</span>
<span id="execution-results-POSTapi-change_password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-change_password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change_password" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-change_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change_password"></code></pre>
</span>
<form id="form-POSTapi-change_password" data-method="POST"
      data-path="api/change_password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-change_password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-change_password"
                    onclick="tryItOut('POSTapi-change_password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-change_password"
                    onclick="cancelTryOut('POSTapi-change_password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-change_password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/change_password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-change_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-change_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-change_password"
               value="g<Dp74$f}Uv+a?*Ke"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>g&lt;Dp74$f}Uv+a?*Ke</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="new_password"                data-endpoint="POSTapi-change_password"
               value="nopxhwqpozroqgbmlbmxdxhecdpnkrluwlfayijepphoajhyfojnsvyztiwcghwzabunuhtvnlrxeblalpeqh"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>nopxhwqpozroqgbmlbmxdxhecdpnkrluwlfayijepphoajhyfojnsvyztiwcghwzabunuhtvnlrxeblalpeqh</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-change_manager_password">POST api/change_manager_password</h2>

<p>
</p>



<span id="example-requests-POSTapi-change_manager_password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/change_manager_password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"}}&gt;:eT!*#ul?C~:n*N\",
    \"new_password\": \"olvtjgibhaugdtahcpllhefou\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/change_manager_password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "}}&gt;:eT!*#ul?C~:n*N",
    "new_password": "olvtjgibhaugdtahcpllhefou"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-change_manager_password">
</span>
<span id="execution-results-POSTapi-change_manager_password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-change_manager_password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change_manager_password" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-change_manager_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change_manager_password"></code></pre>
</span>
<form id="form-POSTapi-change_manager_password" data-method="POST"
      data-path="api/change_manager_password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-change_manager_password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-change_manager_password"
                    onclick="tryItOut('POSTapi-change_manager_password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-change_manager_password"
                    onclick="cancelTryOut('POSTapi-change_manager_password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-change_manager_password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/change_manager_password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-change_manager_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-change_manager_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-change_manager_password"
               value="}}>:eT!*#ul?C~:n*N"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>}}&gt;:eT!*#ul?C~:n*N</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="new_password"                data-endpoint="POSTapi-change_manager_password"
               value="olvtjgibhaugdtahcpllhefou"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>olvtjgibhaugdtahcpllhefou</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"delmer.damore@example.org\",
    \"password\": \"_TfU7WNT\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "delmer.damore@example.org",
    "password": "_TfU7WNT"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-login"
               value="delmer.damore@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>delmer.damore@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-login"
               value="_TfU7WNT"
               data-component="body">
    <br>
<p>Example: <code>_TfU7WNT</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"jamison61@example.org\",
    \"name\": \"wyq\",
    \"password\": \"BuD4mzp\',E(wI-S,\",
    \"manager_password\": \"hsyqrgkkvlrkxwltwglwjlgnmwpxsartdgjxrjbhcmlpaicxrvfibdtjfhnuubgnuuddtxtmfblrserwaeazw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "jamison61@example.org",
    "name": "wyq",
    "password": "BuD4mzp',E(wI-S,",
    "manager_password": "hsyqrgkkvlrkxwltwglwjlgnmwpxsartdgjxrjbhcmlpaicxrvfibdtjfhnuubgnuuddtxtmfblrserwaeazw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-register"
               value="jamison61@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>jamison61@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-register"
               value="wyq"
               data-component="body">
    <br>
<p>Must not be greater than 256 characters. Example: <code>wyq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-register"
               value="BuD4mzp',E(wI-S,"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>BuD4mzp',E(wI-S,</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>manager_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="manager_password"                data-endpoint="POSTapi-register"
               value="hsyqrgkkvlrkxwltwglwjlgnmwpxsartdgjxrjbhcmlpaicxrvfibdtjfhnuubgnuuddtxtmfblrserwaeazw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>hsyqrgkkvlrkxwltwglwjlgnmwpxsartdgjxrjbhcmlpaicxrvfibdtjfhnuubgnuuddtxtmfblrserwaeazw</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
