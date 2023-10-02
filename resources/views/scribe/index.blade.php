<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Kdad El-Tariq Documentation</title>

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
        var tryItOutBaseUrl = "https://kdadeltariq.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.24.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.24.0.js") }}"></script>

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
                    <ul id="tocify-header-app-client" class="tocify-header">
                <li class="tocify-item level-1" data-unique="app-client">
                    <a href="#app-client">App Client</a>
                </li>
                                    <ul id="tocify-subheader-app-client" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="app-client-auth">
                                <a href="#app-client-auth">Auth</a>
                            </li>
                                                            <ul id="tocify-subheader-app-client-auth" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-login">
                                            <a href="#app-client-POSTapi-v1-client-auth-login">Client Login.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-logout">
                                            <a href="#app-client-POSTapi-v1-client-auth-logout">Client logout.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-register">
                                            <a href="#app-client-POSTapi-v1-client-auth-register">Client Register.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-send-otp">
                                            <a href="#app-client-POSTapi-v1-client-auth-send-otp">Send OTP To Mobile Number.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-resend-otp">
                                            <a href="#app-client-POSTapi-v1-client-auth-resend-otp">Re-Send OTP.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-verify-otp">
                                            <a href="#app-client-POSTapi-v1-client-auth-verify-otp">OTP Verification.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-GETapi-v1-client-auth-profile">
                                            <a href="#app-client-GETapi-v1-client-auth-profile">Client Profile.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-change-mobile">
                                            <a href="#app-client-POSTapi-v1-client-auth-change-mobile">Client Change Mobile.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-chang-password">
                                            <a href="#app-client-POSTapi-v1-client-auth-chang-password">Client Change Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-forget-password">
                                            <a href="#app-client-POSTapi-v1-client-auth-forget-password">Client Forget Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-auth-reset-password">
                                            <a href="#app-client-POSTapi-v1-client-auth-reset-password">Client New Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-DELETEapi-v1-client-auth-delete-account">
                                            <a href="#app-client-DELETEapi-v1-client-auth-delete-account">Client Delete Account.</a>
                                        </li>
                                                                    </ul>
                                                                                <li class="tocify-item level-2" data-unique="app-client-home">
                                <a href="#app-client-home">Home</a>
                            </li>
                                                            <ul id="tocify-subheader-app-client-home" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="app-client-GETapi-v1-client-home-slide">
                                            <a href="#app-client-GETapi-v1-client-home-slide">Client Home Screen Slides.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-POSTapi-v1-client-home-store-shipment">
                                            <a href="#app-client-POSTapi-v1-client-home-store-shipment">Store Shipment and its Order.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-client-GETapi-v1-client-home-list-price-offers">
                                            <a href="#app-client-GETapi-v1-client-home-list-price-offers">List Orders price Offers</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-app-provider" class="tocify-header">
                <li class="tocify-item level-1" data-unique="app-provider">
                    <a href="#app-provider">App Provider</a>
                </li>
                                    <ul id="tocify-subheader-app-provider" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="app-provider-auth">
                                <a href="#app-provider-auth">Auth</a>
                            </li>
                                                            <ul id="tocify-subheader-app-provider-auth" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-login">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-login">Provider Login.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-logout">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-logout">Provider logout.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-register">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-register">Provider Register.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-send-otp">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-send-otp">Send OTP To Mobile Number.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-resend-otp">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-resend-otp">Re-Send OTP.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-verify-otp">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-verify-otp">OTP Verification.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-GETapi-v1-provider-auth-profile">
                                            <a href="#app-provider-GETapi-v1-provider-auth-profile">Provider Profile.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-chang-mobile">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-chang-mobile">Provider Change Mobile.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-chang-password">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-chang-password">Provider Change Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-forget-password">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-forget-password">Provider Forget Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-auth-reset-password">
                                            <a href="#app-provider-POSTapi-v1-provider-auth-reset-password">Provider New Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-DELETEapi-v1-provider-auth-delete-account">
                                            <a href="#app-provider-DELETEapi-v1-provider-auth-delete-account">PRovider Delete Account.</a>
                                        </li>
                                                                    </ul>
                                                                                <li class="tocify-item level-2" data-unique="app-provider-home">
                                <a href="#app-provider-home">Home</a>
                            </li>
                                                            <ul id="tocify-subheader-app-provider-home" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="app-provider-GETapi-v1-provider-home-change-avilibilty">
                                            <a href="#app-provider-GETapi-v1-provider-home-change-avilibilty">Provider Change Avilibility</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-GETapi-v1-provider-home-list-orders">
                                            <a href="#app-provider-GETapi-v1-provider-home-list-orders">Provider List Order</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="app-provider-POSTapi-v1-provider-home-store-price-offer">
                                            <a href="#app-provider-POSTapi-v1-provider-home-store-price-offer">Provider Store Order Price Offer</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-core" class="tocify-header">
                <li class="tocify-item level-1" data-unique="core">
                    <a href="#core">Core</a>
                </li>
                                    <ul id="tocify-subheader-core" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="core-reusable-selected-lists">
                                <a href="#core-reusable-selected-lists">Reusable Selected Lists</a>
                            </li>
                                                            <ul id="tocify-subheader-core-reusable-selected-lists" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="core-GETapi-v1-core-nationalities">
                                            <a href="#core-GETapi-v1-core-nationalities">list nationalities.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="core-GETapi-v1-core-car-types">
                                            <a href="#core-GETapi-v1-core-car-types">list car types.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="core-GETapi-v1-core-car-categories">
                                            <a href="#core-GETapi-v1-core-car-categories">list car categories.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="core-GETapi-v1-core-shipment-types">
                                            <a href="#core-GETapi-v1-core-shipment-types">list shipment types.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="core-GETapi-v1-core-shipment-sub-types">
                                            <a href="#core-GETapi-v1-core-shipment-sub-types">list Shipment Sub Types.</a>
                                        </li>
                                                                    </ul>
                                                                                <li class="tocify-item level-2" data-unique="core-manage-fcm-notifications">
                                <a href="#core-manage-fcm-notifications">Manage FCM Notifications</a>
                            </li>
                                                            <ul id="tocify-subheader-core-manage-fcm-notifications" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="core-GETapi-v1-core-notifications-list">
                                            <a href="#core-GETapi-v1-core-notifications-list">list notifications.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="core-GETapi-v1-core-notifications-mark-read">
                                            <a href="#core-GETapi-v1-core-notifications-mark-read">mark notifications as read.</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-dashboard-admin" class="tocify-header">
                <li class="tocify-item level-1" data-unique="dashboard-admin">
                    <a href="#dashboard-admin">Dashboard Admin</a>
                </li>
                                    <ul id="tocify-subheader-dashboard-admin" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="dashboard-admin-core">
                                <a href="#dashboard-admin-core">Core</a>
                            </li>
                                                            <ul id="tocify-subheader-dashboard-admin-core" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-GETapi-v1-admin-core-check-abilities">
                                            <a href="#dashboard-admin-GETapi-v1-admin-core-check-abilities">check if admin has has one or more Dashboard abilities.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-GETapi-v1-admin-core-check-ability--module---ability-">
                                            <a href="#dashboard-admin-GETapi-v1-admin-core-check-ability--module---ability-">checks if admin has a spesefic ability.</a>
                                        </li>
                                                                    </ul>
                                                                                <li class="tocify-item level-2" data-unique="dashboard-admin-auth">
                                <a href="#dashboard-admin-auth">Auth</a>
                            </li>
                                                            <ul id="tocify-subheader-dashboard-admin-auth" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-login">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-login">Admin Login.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-logout">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-logout">Admin logout.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-send-otp">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-send-otp">Send OTP To Mobile Number.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-resend-otp">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-resend-otp">Re-Send OTP.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-verify-otp">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-verify-otp">OTP Verification.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-GETapi-v1-admin-auth-profile">
                                            <a href="#dashboard-admin-GETapi-v1-admin-auth-profile">Admin Profile.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-changpassword">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-changpassword">Admin Change Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-forget-password">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-forget-password">Admin Forget Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-POSTapi-v1-admin-auth-reset-password">
                                            <a href="#dashboard-admin-POSTapi-v1-admin-auth-reset-password">Admin New Password.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dashboard-admin-DELETEapi-v1-admin-auth-delete-account">
                                            <a href="#dashboard-admin-DELETEapi-v1-admin-auth-delete-account">Admin Delete Account.</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-dev-only" class="tocify-header">
                <li class="tocify-item level-1" data-unique="dev-only">
                    <a href="#dev-only">Dev Only</a>
                </li>
                                    <ul id="tocify-subheader-dev-only" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="dev-only-static-mobile-or-email-binders-for-testing-otp">
                                <a href="#dev-only-static-mobile-or-email-binders-for-testing-otp">Static Mobile Or Email binders for testing OTP</a>
                            </li>
                                                            <ul id="tocify-subheader-dev-only-static-mobile-or-email-binders-for-testing-otp" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="dev-only-POSTapi-v1-dev-static-mobile-otp">
                                            <a href="#dev-only-POSTapi-v1-dev-static-mobile-otp">static mobile number OTP.</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="dev-only-POSTapi-v1-dev-static-mail-otp">
                                            <a href="#dev-only-POSTapi-v1-dev-static-mail-otp">static email address OTP.</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 1, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Api Docs for Kdad El-Tariq System</p>
<aside>
    <strong>Base URL</strong>: <code>https://kdadeltariq.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting <b>Login API</b>.<br>All APIs <b>Must</b> Request Json Response <b>Accept:application/json</b>.<br>APIs <b>May</b> request response json <b>Content-Type:application/json</b>.<br>All APIs <b>Must</b> have version Header <b>Api-Version:v1</b>.<br>All APIs <b>May</b> have locale Header <b>Accept-Language:ar</b>.<br>All APIs <b>Must</b> have API Key Header <b>Api-Key:XX</b></p>

        <h1 id="app-client">App Client</h1>

    <p>Manage Client App Apis</p>

                        <h2 id="app-client-auth">Auth</h2>
                                        <p>
                    <p>Auth Cycle Apis</p>
                </p>
                                        <h2 id="app-client-POSTapi-v1-client-auth-login">Client Login.</h2>

<p>
</p>

<p>an API which Offers a mean to login a client</p>

<span id="example-requests-POSTapi-v1-client-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564777888\",
    \"password\": \"12345678\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564777888",
    "password": "12345678"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-login">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-login" data-method="POST"
      data-path="api/v1/client/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-login"
                    onclick="tryItOut('POSTapi-v1-client-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-login"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-login"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-login"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-login"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-client-auth-login"
               value="0564777888"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564777888</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-client-auth-login"
               value="12345678"
               data-component="body">
    <br>
<p>The password of User account. Example: <code>12345678</code></p>
        </div>
        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-logout">Client logout.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to logout a client</p>

<span id="example-requests-POSTapi-v1-client-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-logout">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-logout" data-method="POST"
      data-path="api/v1/client/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-logout"
                    onclick="tryItOut('POSTapi-v1-client-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-logout"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-client-auth-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-logout"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-logout"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-logout"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-logout"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-register">Client Register.</h2>

<p>
</p>

<p>an API which Offers a mean to register a new client</p>

<span id="example-requests-POSTapi-v1-client-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"name\": \"0564776688\",
    \"mobile\": \"0564776688\",
    \"email\": \"fahmi@moltaqa.net\",
    \"password\": \"12345678\",
    \"password_confirmation\": \"12345678\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "name": "0564776688",
    "mobile": "0564776688",
    "email": "fahmi@moltaqa.net",
    "password": "12345678",
    "password_confirmation": "12345678"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-register">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-register" data-method="POST"
      data-path="api/v1/client/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-register"
                    onclick="tryItOut('POSTapi-v1-client-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-register"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-register"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-register"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-register"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-register"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-client-auth-register"
               value="0564776688"
               data-component="body">
    <br>
<p>The user personal name. Example: <code>0564776688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-client-auth-register"
               value="0564776688"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564776688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-client-auth-register"
               value="fahmi@moltaqa.net"
               data-component="body">
    <br>
<p>(optional) The E-Mail Address of the user. Example: <code>fahmi@moltaqa.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-client-auth-register"
               value="12345678"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>12345678</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-client-auth-register"
               value="12345678"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>12345678</code></p>
        </div>
        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-send-otp">Send OTP To Mobile Number.</h2>

<p>
</p>

<p>an API which Offers a mean to Send OTP To Mobile Number.</p>

<span id="example-requests-POSTapi-v1-client-auth-send-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/send-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564776688\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/send-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564776688"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-send-otp">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-send-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-send-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-send-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-send-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-send-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-send-otp" data-method="POST"
      data-path="api/v1/client/auth/send-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-send-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-send-otp"
                    onclick="tryItOut('POSTapi-v1-client-auth-send-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-send-otp"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-send-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-send-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/send-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-send-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-send-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-send-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-send-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-send-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-client-auth-send-otp"
               value="0564776688"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564776688</code></p>
        </div>
        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-resend-otp">Re-Send OTP.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Re-Send OTP.</p>

<span id="example-requests-POSTapi-v1-client-auth-resend-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/resend-otp" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/resend-otp"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-resend-otp">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-resend-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-resend-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-resend-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-resend-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-resend-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-resend-otp" data-method="POST"
      data-path="api/v1/client/auth/resend-otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-resend-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-resend-otp"
                    onclick="tryItOut('POSTapi-v1-client-auth-resend-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-resend-otp"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-resend-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-resend-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/resend-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-client-auth-resend-otp"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-resend-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-resend-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-resend-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-resend-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-resend-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-verify-otp">OTP Verification.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to verify user otp</p>

<span id="example-requests-POSTapi-v1-client-auth-verify-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/verify-otp" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"code\": \"1234\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/verify-otp"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "code": "1234"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-verify-otp">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-verify-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-verify-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-verify-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-verify-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-verify-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-verify-otp" data-method="POST"
      data-path="api/v1/client/auth/verify-otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-verify-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-verify-otp"
                    onclick="tryItOut('POSTapi-v1-client-auth-verify-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-verify-otp"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-verify-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-verify-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/verify-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-client-auth-verify-otp"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-verify-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-verify-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-verify-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-verify-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-verify-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-client-auth-verify-otp"
               value="1234"
               data-component="body">
    <br>
<p>The OTP sent via sms to user. Example: <code>1234</code></p>
        </div>
        </form>

                    <h2 id="app-client-GETapi-v1-client-auth-profile">Client Profile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to login a client</p>

<span id="example-requests-GETapi-v1-client-auth-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/client/auth/profile" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/profile"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-client-auth-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-client-auth-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-client-auth-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-client-auth-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-client-auth-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-client-auth-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-client-auth-profile" data-method="GET"
      data-path="api/v1/client/auth/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-client-auth-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-client-auth-profile"
                    onclick="tryItOut('GETapi-v1-client-auth-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-client-auth-profile"
                    onclick="cancelTryOut('GETapi-v1-client-auth-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-client-auth-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/client/auth/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-client-auth-profile"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-client-auth-profile"
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
                              name="Accept"                data-endpoint="GETapi-v1-client-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-client-auth-profile"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-client-auth-profile"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-client-auth-profile"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-change-mobile">Client Change Mobile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to change client mobile number.</p>

<span id="example-requests-POSTapi-v1-client-auth-change-mobile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/change-mobile" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564776688\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/change-mobile"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564776688"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-change-mobile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-change-mobile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-change-mobile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-change-mobile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-change-mobile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-change-mobile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-change-mobile" data-method="POST"
      data-path="api/v1/client/auth/change-mobile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-change-mobile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-change-mobile"
                    onclick="tryItOut('POSTapi-v1-client-auth-change-mobile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-change-mobile"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-change-mobile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-change-mobile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/change-mobile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-client-auth-change-mobile"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-change-mobile"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-change-mobile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-change-mobile"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-change-mobile"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-change-mobile"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-client-auth-change-mobile"
               value="0564776688"
               data-component="body">
    <br>
<p>The new Mobile Number of the user. Example: <code>0564776688</code></p>
        </div>
        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-chang-password">Client Change Password.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Change password for logged in client.</p>

<span id="example-requests-POSTapi-v1-client-auth-chang-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/chang-password" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"password\": \"123456789\",
    \"old_password\": \"12345678\",
    \"password_confirmation\": \"123456789\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/chang-password"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "password": "123456789",
    "old_password": "12345678",
    "password_confirmation": "123456789"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-chang-password">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-chang-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-chang-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-chang-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-chang-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-chang-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-chang-password" data-method="POST"
      data-path="api/v1/client/auth/chang-password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-chang-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-chang-password"
                    onclick="tryItOut('POSTapi-v1-client-auth-chang-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-chang-password"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-chang-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-chang-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/chang-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-chang-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="123456789"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>old_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="old_password"                data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="12345678"
               data-component="body">
    <br>
<p>The user old password. Example: <code>12345678</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-client-auth-chang-password"
               value="123456789"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>123456789</code></p>
        </div>
        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-forget-password">Client Forget Password.</h2>

<p>
</p>

<p>an API which Offers a mean to reset client password for logged out clients.</p>

<span id="example-requests-POSTapi-v1-client-auth-forget-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/forget-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564777888\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/forget-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564777888"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-forget-password">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-forget-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-forget-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-forget-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-forget-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-forget-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-forget-password" data-method="POST"
      data-path="api/v1/client/auth/forget-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-forget-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-forget-password"
                    onclick="tryItOut('POSTapi-v1-client-auth-forget-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-forget-password"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-forget-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-forget-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/forget-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-forget-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-forget-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-forget-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-forget-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-forget-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-client-auth-forget-password"
               value="0564777888"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564777888</code></p>
        </div>
        </form>

                    <h2 id="app-client-POSTapi-v1-client-auth-reset-password">Client New Password.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to set new password for logged out clients after verification step.</p>

<span id="example-requests-POSTapi-v1-client-auth-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/auth/reset-password" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"password\": \"123456789\",
    \"password_confirmation\": \"123456789\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/reset-password"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "password": "123456789",
    "password_confirmation": "123456789"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-auth-reset-password">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-auth-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-auth-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-auth-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-auth-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-auth-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-auth-reset-password" data-method="POST"
      data-path="api/v1/client/auth/reset-password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-auth-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-auth-reset-password"
                    onclick="tryItOut('POSTapi-v1-client-auth-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-auth-reset-password"
                    onclick="cancelTryOut('POSTapi-v1-client-auth-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-auth-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/auth/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-client-auth-reset-password"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-auth-reset-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-client-auth-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-auth-reset-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-auth-reset-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-auth-reset-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-client-auth-reset-password"
               value="123456789"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-client-auth-reset-password"
               value="123456789"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>123456789</code></p>
        </div>
        </form>

                    <h2 id="app-client-DELETEapi-v1-client-auth-delete-account">Client Delete Account.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to delete a client account</p>

<span id="example-requests-DELETEapi-v1-client-auth-delete-account">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://kdadeltariq.test/api/v1/client/auth/delete-account" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/auth/delete-account"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-client-auth-delete-account">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-client-auth-delete-account" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-client-auth-delete-account"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-client-auth-delete-account"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-client-auth-delete-account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-client-auth-delete-account">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-client-auth-delete-account" data-method="DELETE"
      data-path="api/v1/client/auth/delete-account"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-client-auth-delete-account', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-client-auth-delete-account"
                    onclick="tryItOut('DELETEapi-v1-client-auth-delete-account');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-client-auth-delete-account"
                    onclick="cancelTryOut('DELETEapi-v1-client-auth-delete-account');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-client-auth-delete-account"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/client/auth/delete-account</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-client-auth-delete-account"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-client-auth-delete-account"
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
                              name="Accept"                data-endpoint="DELETEapi-v1-client-auth-delete-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="DELETEapi-v1-client-auth-delete-account"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="DELETEapi-v1-client-auth-delete-account"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="DELETEapi-v1-client-auth-delete-account"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                                <h2 id="app-client-home">Home</h2>
                                        <p>
                    <p>Home Screen Apis</p>
<p>used to manage client app home apis</p>
                </p>
                                        <h2 id="app-client-GETapi-v1-client-home-slide">Client Home Screen Slides.</h2>

<p>
</p>

<p>an API which Offers a mean to list client home screen slides.</p>

<span id="example-requests-GETapi-v1-client-home-slide">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/client/home/slide" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/home/slide"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-client-home-slide">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-client-home-slide" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-client-home-slide"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-client-home-slide"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-client-home-slide" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-client-home-slide">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-client-home-slide" data-method="GET"
      data-path="api/v1/client/home/slide"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-client-home-slide', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-client-home-slide"
                    onclick="tryItOut('GETapi-v1-client-home-slide');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-client-home-slide"
                    onclick="cancelTryOut('GETapi-v1-client-home-slide');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-client-home-slide"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/client/home/slide</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-client-home-slide"
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
                              name="Accept"                data-endpoint="GETapi-v1-client-home-slide"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-client-home-slide"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-client-home-slide"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-client-home-slide"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-client-POSTapi-v1-client-home-store-shipment">Store Shipment and its Order.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Store Shipment and its Order then send FCM to nearby providers.</p>

<span id="example-requests-POSTapi-v1-client-home-store-shipment">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/client/home/store-shipment" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --form "source_address=jada , street 15"\
    --form "source_latitude=31.2384238384782"\
    --form "source_longitude=43.26543254625"\
    --form "destination_address=jada , street 40"\
    --form "destination_latitude=31.2384238384782"\
    --form "destination_longitude=43.2384238384782"\
    --form "loaded_at=2023-10-15 04:30:00"\
    --form "car_type_id=1"\
    --form "car_category_id=1"\
    --form "shipment_type_id=1"\
    --form "shipment_sub_type_id=1"\
    --form "length=60"\
    --form "width=70"\
    --form "height=90"\
    --form "weight=112"\
    --form "description=shipment description"\
    --form "image=@C:\Users\raya\AppData\Local\Temp\php3691.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/home/store-shipment"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

const body = new FormData();
body.append('source_address', 'jada , street 15');
body.append('source_latitude', '31.2384238384782');
body.append('source_longitude', '43.26543254625');
body.append('destination_address', 'jada , street 40');
body.append('destination_latitude', '31.2384238384782');
body.append('destination_longitude', '43.2384238384782');
body.append('loaded_at', '2023-10-15 04:30:00');
body.append('car_type_id', '1');
body.append('car_category_id', '1');
body.append('shipment_type_id', '1');
body.append('shipment_sub_type_id', '1');
body.append('length', '60');
body.append('width', '70');
body.append('height', '90');
body.append('weight', '112');
body.append('description', 'shipment description');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-client-home-store-shipment">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-client-home-store-shipment" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-client-home-store-shipment"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-client-home-store-shipment"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-client-home-store-shipment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-client-home-store-shipment">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-client-home-store-shipment" data-method="POST"
      data-path="api/v1/client/home/store-shipment"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-client-home-store-shipment', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-client-home-store-shipment"
                    onclick="tryItOut('POSTapi-v1-client-home-store-shipment');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-client-home-store-shipment"
                    onclick="cancelTryOut('POSTapi-v1-client-home-store-shipment');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-client-home-store-shipment"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/client/home/store-shipment</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>source_address</code></b>&nbsp;&nbsp;
<small>srting</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="source_address"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="jada , street 15"
               data-component="body">
    <br>
<p>source location address. Example: <code>jada , street 15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>source_latitude</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="source_latitude"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="31.2384238384782"
               data-component="body">
    <br>
<p>source location latitude. Example: <code>31.2384238384782</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>source_longitude</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="source_longitude"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="43.26543254625"
               data-component="body">
    <br>
<p>source location longitude. Example: <code>43.26543254625</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_address</code></b>&nbsp;&nbsp;
<small>srting</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="destination_address"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="jada , street 40"
               data-component="body">
    <br>
<p>destination location address. Example: <code>jada , street 40</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_latitude</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="destination_latitude"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="31.2384238384782"
               data-component="body">
    <br>
<p>destination location latitude. Example: <code>31.2384238384782</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_longitude</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="destination_longitude"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="43.2384238384782"
               data-component="body">
    <br>
<p>destination location longitude. Example: <code>43.2384238384782</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>loaded_at</code></b>&nbsp;&nbsp;
<small>srting</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="loaded_at"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="2023-10-15 04:30:00"
               data-component="body">
    <br>
<p>load shipment date. Example: <code>2023-10-15 04:30:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>car_type_id</code></b>&nbsp;&nbsp;
<small>interger</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="car_type_id"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="1"
               data-component="body">
    <br>
<p>car type idntifier. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>car_category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="car_category_id"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="1"
               data-component="body">
    <br>
<p>car category idntifier. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipment_type_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="shipment_type_id"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="1"
               data-component="body">
    <br>
<p>shipment type idntifier. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipment_sub_type_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="shipment_sub_type_id"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="1"
               data-component="body">
    <br>
<p>shipment sub type idntifier. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>length</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="length"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="60"
               data-component="body">
    <br>
<p>shipment length. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>width</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="width"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="70"
               data-component="body">
    <br>
<p>shipment width. Example: <code>70</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>height</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="height"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="90"
               data-component="body">
    <br>
<p>shipment height. Example: <code>90</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weight</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="weight"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="112"
               data-component="body">
    <br>
<p>shipment weight. Example: <code>112</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>srting</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value="shipment description"
               data-component="body">
    <br>
<p>shipment description. Example: <code>shipment description</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTapi-v1-client-home-store-shipment"
               value=""
               data-component="body">
    <br>
<p>required. Example: <code>C:\Users\raya\AppData\Local\Temp\php3691.tmp</code></p>
        </div>
        </form>

                    <h2 id="app-client-GETapi-v1-client-home-list-price-offers">List Orders price Offers</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to list orders price offers.</p>

<span id="example-requests-GETapi-v1-client-home-list-price-offers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/client/home/list-price-offers?order_id=4" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/client/home/list-price-offers"
);

const params = {
    "order_id": "4",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-client-home-list-price-offers">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-client-home-list-price-offers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-client-home-list-price-offers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-client-home-list-price-offers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-client-home-list-price-offers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-client-home-list-price-offers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-client-home-list-price-offers" data-method="GET"
      data-path="api/v1/client/home/list-price-offers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-client-home-list-price-offers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-client-home-list-price-offers"
                    onclick="tryItOut('GETapi-v1-client-home-list-price-offers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-client-home-list-price-offers"
                    onclick="cancelTryOut('GETapi-v1-client-home-list-price-offers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-client-home-list-price-offers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/client/home/list-price-offers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-client-home-list-price-offers"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-client-home-list-price-offers"
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
                              name="Accept"                data-endpoint="GETapi-v1-client-home-list-price-offers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-client-home-list-price-offers"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-client-home-list-price-offers"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-client-home-list-price-offers"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="GETapi-v1-client-home-list-price-offers"
               value="4"
               data-component="query">
    <br>
<p>the order identitfer . Example: <code>4</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order_id"                data-endpoint="GETapi-v1-client-home-list-price-offers"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                <h1 id="app-provider">App Provider</h1>

    <p>Manage Provider App Apis</p>

                        <h2 id="app-provider-auth">Auth</h2>
                                        <p>
                    <p>Auth Cycle Apis</p>
                </p>
                                        <h2 id="app-provider-POSTapi-v1-provider-auth-login">Provider Login.</h2>

<p>
</p>

<p>an API which Offers a mean to login a provider</p>

<span id="example-requests-POSTapi-v1-provider-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564777888\",
    \"password\": \"12345678\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564777888",
    "password": "12345678"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-login">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-login" data-method="POST"
      data-path="api/v1/provider/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-login"
                    onclick="tryItOut('POSTapi-v1-provider-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-login"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-login"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-login"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-login"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-provider-auth-login"
               value="0564777888"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564777888</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-provider-auth-login"
               value="12345678"
               data-component="body">
    <br>
<p>The password of User account. Example: <code>12345678</code></p>
        </div>
        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-logout">Provider logout.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to logout a Provider</p>

<span id="example-requests-POSTapi-v1-provider-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-logout">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-logout" data-method="POST"
      data-path="api/v1/provider/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-logout"
                    onclick="tryItOut('POSTapi-v1-provider-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-logout"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-provider-auth-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-logout"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-logout"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-logout"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-logout"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-register">Provider Register.</h2>

<p>
</p>

<p>an API which Offers a mean to register a new Provider</p>

<span id="example-requests-POSTapi-v1-provider-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/register" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --form "name=Fahmi Moustafa"\
    --form "mobile=0564776688"\
    --form "email=fahmi@moltaqa.net"\
    --form "national_identity=1234567893"\
    --form "nationality_id=1"\
    --form "dob=1990-09-30"\
    --form "password=12345678"\
    --form "address=jada - stret 13 - building 5"\
    --form "latitude=31.324342744239"\
    --form "longitude=41.37437832442"\
    --form "car_type_id=1"\
    --form "car_category_id=1"\
    --form "serial_number=djkjfbajkdfnlk"\
    --form "board_number=Kg8f06"\
    --form "password_confirmation=12345678"\
    --form "avatar=@C:\Users\raya\AppData\Local\Temp\php3711.tmp" \
    --form "car_image=@C:\Users\raya\AppData\Local\Temp\php3712.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/register"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

const body = new FormData();
body.append('name', 'Fahmi Moustafa');
body.append('mobile', '0564776688');
body.append('email', 'fahmi@moltaqa.net');
body.append('national_identity', '1234567893');
body.append('nationality_id', '1');
body.append('dob', '1990-09-30');
body.append('password', '12345678');
body.append('address', 'jada - stret 13 - building 5');
body.append('latitude', '31.324342744239');
body.append('longitude', '41.37437832442');
body.append('car_type_id', '1');
body.append('car_category_id', '1');
body.append('serial_number', 'djkjfbajkdfnlk');
body.append('board_number', 'Kg8f06');
body.append('password_confirmation', '12345678');
body.append('avatar', document.querySelector('input[name="avatar"]').files[0]);
body.append('car_image', document.querySelector('input[name="car_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-register">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-register" data-method="POST"
      data-path="api/v1/provider/auth/register"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-register"
                    onclick="tryItOut('POSTapi-v1-provider-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-register"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="Fahmi Moustafa"
               data-component="body">
    <br>
<p>The user personal name. Example: <code>Fahmi Moustafa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="0564776688"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564776688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="fahmi@moltaqa.net"
               data-component="body">
    <br>
<p>(optional) The E-Mail Address of the user. Example: <code>fahmi@moltaqa.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>national_identity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="national_identity"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="1234567893"
               data-component="body">
    <br>
<p>lenght[10] required The user national identity number. Example: <code>1234567893</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nationality_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nationality_id"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="1"
               data-component="body">
    <br>
<p>the nationality id. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dob</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="dob"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="1990-09-30"
               data-component="body">
    <br>
<p>user date of birth formated as Y-m-d. Example: <code>1990-09-30</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>avatar</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="avatar"                data-endpoint="POSTapi-v1-provider-auth-register"
               value=""
               data-component="body">
    <br>
<p>user personal image. Example: <code>C:\Users\raya\AppData\Local\Temp\php3711.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="12345678"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>12345678</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="jada - stret 13 - building 5"
               data-component="body">
    <br>
<p>user address. Example: <code>jada - stret 13 - building 5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="31.324342744239"
               data-component="body">
    <br>
<p>user lattiude. Example: <code>31.324342744239</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="41.37437832442"
               data-component="body">
    <br>
<p>userlongitude. Example: <code>41.37437832442</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>car_type_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="car_type_id"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="1"
               data-component="body">
    <br>
<p>user seelcted car type id. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>car_category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="car_category_id"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="1"
               data-component="body">
    <br>
<p>user seelcted car type id. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>serial_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="serial_number"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="djkjfbajkdfnlk"
               data-component="body">
    <br>
<p>user car serial number. Example: <code>djkjfbajkdfnlk</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>board_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="board_number"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="Kg8f06"
               data-component="body">
    <br>
<p>user car board number. Example: <code>Kg8f06</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>car_image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="car_image"                data-endpoint="POSTapi-v1-provider-auth-register"
               value=""
               data-component="body">
    <br>
<p>user car image. Example: <code>C:\Users\raya\AppData\Local\Temp\php3712.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-provider-auth-register"
               value="12345678"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>12345678</code></p>
        </div>
        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-send-otp">Send OTP To Mobile Number.</h2>

<p>
</p>

<p>an API which Offers a mean to Send OTP To Mobile Number.</p>

<span id="example-requests-POSTapi-v1-provider-auth-send-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/send-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564776688\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/send-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564776688"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-send-otp">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-send-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-send-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-send-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-send-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-send-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-send-otp" data-method="POST"
      data-path="api/v1/provider/auth/send-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-send-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-send-otp"
                    onclick="tryItOut('POSTapi-v1-provider-auth-send-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-send-otp"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-send-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-send-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/send-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-send-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-send-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-send-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-send-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-send-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-provider-auth-send-otp"
               value="0564776688"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564776688</code></p>
        </div>
        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-resend-otp">Re-Send OTP.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Re-Send OTP.</p>

<span id="example-requests-POSTapi-v1-provider-auth-resend-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/resend-otp" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/resend-otp"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-resend-otp">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-resend-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-resend-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-resend-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-resend-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-resend-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-resend-otp" data-method="POST"
      data-path="api/v1/provider/auth/resend-otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-resend-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-resend-otp"
                    onclick="tryItOut('POSTapi-v1-provider-auth-resend-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-resend-otp"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-resend-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-resend-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/resend-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-provider-auth-resend-otp"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-resend-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-resend-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-resend-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-resend-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-resend-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-verify-otp">OTP Verification.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to verify user otp</p>

<span id="example-requests-POSTapi-v1-provider-auth-verify-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/verify-otp" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"code\": \"1234\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/verify-otp"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "code": "1234"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-verify-otp">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-verify-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-verify-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-verify-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-verify-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-verify-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-verify-otp" data-method="POST"
      data-path="api/v1/provider/auth/verify-otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-verify-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-verify-otp"
                    onclick="tryItOut('POSTapi-v1-provider-auth-verify-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-verify-otp"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-verify-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-verify-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/verify-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-provider-auth-verify-otp"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-verify-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-verify-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-verify-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-verify-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-verify-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-provider-auth-verify-otp"
               value="1234"
               data-component="body">
    <br>
<p>The OTP sent via sms to user. Example: <code>1234</code></p>
        </div>
        </form>

                    <h2 id="app-provider-GETapi-v1-provider-auth-profile">Provider Profile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to login a Provider</p>

<span id="example-requests-GETapi-v1-provider-auth-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/provider/auth/profile" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/profile"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-provider-auth-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-provider-auth-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-provider-auth-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-provider-auth-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-provider-auth-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-provider-auth-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-provider-auth-profile" data-method="GET"
      data-path="api/v1/provider/auth/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-provider-auth-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-provider-auth-profile"
                    onclick="tryItOut('GETapi-v1-provider-auth-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-provider-auth-profile"
                    onclick="cancelTryOut('GETapi-v1-provider-auth-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-provider-auth-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/provider/auth/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-provider-auth-profile"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-provider-auth-profile"
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
                              name="Accept"                data-endpoint="GETapi-v1-provider-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-provider-auth-profile"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-provider-auth-profile"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-provider-auth-profile"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-chang-mobile">Provider Change Mobile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to change Provider mobile number.</p>

<span id="example-requests-POSTapi-v1-provider-auth-chang-mobile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/chang-mobile" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564776688\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/chang-mobile"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564776688"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-chang-mobile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-chang-mobile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-chang-mobile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-chang-mobile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-chang-mobile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-chang-mobile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-chang-mobile" data-method="POST"
      data-path="api/v1/provider/auth/chang-mobile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-chang-mobile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-chang-mobile"
                    onclick="tryItOut('POSTapi-v1-provider-auth-chang-mobile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-chang-mobile"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-chang-mobile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-chang-mobile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/chang-mobile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-provider-auth-chang-mobile"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-chang-mobile"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-chang-mobile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-chang-mobile"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-chang-mobile"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-chang-mobile"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-provider-auth-chang-mobile"
               value="0564776688"
               data-component="body">
    <br>
<p>The new Mobile Number of the user. Example: <code>0564776688</code></p>
        </div>
        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-chang-password">Provider Change Password.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Change password for logged in Provider.</p>

<span id="example-requests-POSTapi-v1-provider-auth-chang-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/chang-password" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"password\": \"123456789\",
    \"old_password\": \"12345678\",
    \"password_confirmation\": \"123456789\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/chang-password"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "password": "123456789",
    "old_password": "12345678",
    "password_confirmation": "123456789"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-chang-password">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-chang-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-chang-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-chang-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-chang-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-chang-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-chang-password" data-method="POST"
      data-path="api/v1/provider/auth/chang-password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-chang-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-chang-password"
                    onclick="tryItOut('POSTapi-v1-provider-auth-chang-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-chang-password"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-chang-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-chang-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/chang-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="123456789"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>old_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="old_password"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="12345678"
               data-component="body">
    <br>
<p>The user old password. Example: <code>12345678</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-provider-auth-chang-password"
               value="123456789"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>123456789</code></p>
        </div>
        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-forget-password">Provider Forget Password.</h2>

<p>
</p>

<p>an API which Offers a mean to reset Provider password for logged out Provideres.</p>

<span id="example-requests-POSTapi-v1-provider-auth-forget-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/forget-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564777888\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/forget-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564777888"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-forget-password">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-forget-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-forget-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-forget-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-forget-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-forget-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-forget-password" data-method="POST"
      data-path="api/v1/provider/auth/forget-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-forget-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-forget-password"
                    onclick="tryItOut('POSTapi-v1-provider-auth-forget-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-forget-password"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-forget-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-forget-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/forget-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-forget-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-forget-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-forget-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-forget-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-forget-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-provider-auth-forget-password"
               value="0564777888"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564777888</code></p>
        </div>
        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-auth-reset-password">Provider New Password.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to set new password for logged out providers after verification step.</p>

<span id="example-requests-POSTapi-v1-provider-auth-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/auth/reset-password" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"password\": \"123456789\",
    \"password_confirmation\": \"123456789\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/reset-password"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "password": "123456789",
    "password_confirmation": "123456789"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-auth-reset-password">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-auth-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-auth-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-auth-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-auth-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-auth-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-auth-reset-password" data-method="POST"
      data-path="api/v1/provider/auth/reset-password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-auth-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-auth-reset-password"
                    onclick="tryItOut('POSTapi-v1-provider-auth-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-auth-reset-password"
                    onclick="cancelTryOut('POSTapi-v1-provider-auth-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-auth-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/auth/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-provider-auth-reset-password"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-auth-reset-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-auth-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-auth-reset-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-auth-reset-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-auth-reset-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-provider-auth-reset-password"
               value="123456789"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-provider-auth-reset-password"
               value="123456789"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>123456789</code></p>
        </div>
        </form>

                    <h2 id="app-provider-DELETEapi-v1-provider-auth-delete-account">PRovider Delete Account.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to delete a PRovider account</p>

<span id="example-requests-DELETEapi-v1-provider-auth-delete-account">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://kdadeltariq.test/api/v1/provider/auth/delete-account" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/auth/delete-account"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-provider-auth-delete-account">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-provider-auth-delete-account" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-provider-auth-delete-account"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-provider-auth-delete-account"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-provider-auth-delete-account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-provider-auth-delete-account">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-provider-auth-delete-account" data-method="DELETE"
      data-path="api/v1/provider/auth/delete-account"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-provider-auth-delete-account', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-provider-auth-delete-account"
                    onclick="tryItOut('DELETEapi-v1-provider-auth-delete-account');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-provider-auth-delete-account"
                    onclick="cancelTryOut('DELETEapi-v1-provider-auth-delete-account');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-provider-auth-delete-account"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/provider/auth/delete-account</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-provider-auth-delete-account"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-provider-auth-delete-account"
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
                              name="Accept"                data-endpoint="DELETEapi-v1-provider-auth-delete-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="DELETEapi-v1-provider-auth-delete-account"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="DELETEapi-v1-provider-auth-delete-account"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="DELETEapi-v1-provider-auth-delete-account"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                                <h2 id="app-provider-home">Home</h2>
                                        <p>
                    <p>Home Screen Apis</p>
                </p>
                                        <h2 id="app-provider-GETapi-v1-provider-home-change-avilibilty">Provider Change Avilibility</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to channge provider Avilibility</p>

<span id="example-requests-GETapi-v1-provider-home-change-avilibilty">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/provider/home/change-avilibilty" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/home/change-avilibilty"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-provider-home-change-avilibilty">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-provider-home-change-avilibilty" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-provider-home-change-avilibilty"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-provider-home-change-avilibilty"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-provider-home-change-avilibilty" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-provider-home-change-avilibilty">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-provider-home-change-avilibilty" data-method="GET"
      data-path="api/v1/provider/home/change-avilibilty"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-provider-home-change-avilibilty', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-provider-home-change-avilibilty"
                    onclick="tryItOut('GETapi-v1-provider-home-change-avilibilty');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-provider-home-change-avilibilty"
                    onclick="cancelTryOut('GETapi-v1-provider-home-change-avilibilty');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-provider-home-change-avilibilty"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/provider/home/change-avilibilty</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-provider-home-change-avilibilty"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-provider-home-change-avilibilty"
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
                              name="Accept"                data-endpoint="GETapi-v1-provider-home-change-avilibilty"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-provider-home-change-avilibilty"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-provider-home-change-avilibilty"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-provider-home-change-avilibilty"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="app-provider-GETapi-v1-provider-home-list-orders">Provider List Order</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to list orders for a provider</p>

<span id="example-requests-GETapi-v1-provider-home-list-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/provider/home/list-orders?type=accepted" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"type\": \"accepted\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/home/list-orders"
);

const params = {
    "type": "accepted",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "type": "accepted"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-provider-home-list-orders">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-provider-home-list-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-provider-home-list-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-provider-home-list-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-provider-home-list-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-provider-home-list-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-provider-home-list-orders" data-method="GET"
      data-path="api/v1/provider/home/list-orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-provider-home-list-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-provider-home-list-orders"
                    onclick="tryItOut('GETapi-v1-provider-home-list-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-provider-home-list-orders"
                    onclick="cancelTryOut('GETapi-v1-provider-home-list-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-provider-home-list-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/provider/home/list-orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-provider-home-list-orders"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-provider-home-list-orders"
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
                              name="Accept"                data-endpoint="GETapi-v1-provider-home-list-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-provider-home-list-orders"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-provider-home-list-orders"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-provider-home-list-orders"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="GETapi-v1-provider-home-list-orders"
               value="accepted"
               data-component="query">
    <br>
<p>value in accepted or processing. Example: <code>accepted</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="GETapi-v1-provider-home-list-orders"
               value="accepted"
               data-component="body">
    <br>
<p>Example: <code>accepted</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>accepted</code></li> <li><code>processing</code></li></ul>
        </div>
        </form>

                    <h2 id="app-provider-POSTapi-v1-provider-home-store-price-offer">Provider Store Order Price Offer</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Store Order Price Offer</p>

<span id="example-requests-POSTapi-v1-provider-home-store-price-offer">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/provider/home/store-price-offer" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"order_id\": 2,
    \"price\": \"50\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/provider/home/store-price-offer"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "order_id": 2,
    "price": "50"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-provider-home-store-price-offer">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-provider-home-store-price-offer" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-provider-home-store-price-offer"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-provider-home-store-price-offer"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-provider-home-store-price-offer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-provider-home-store-price-offer">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-provider-home-store-price-offer" data-method="POST"
      data-path="api/v1/provider/home/store-price-offer"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-provider-home-store-price-offer', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-provider-home-store-price-offer"
                    onclick="tryItOut('POSTapi-v1-provider-home-store-price-offer');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-provider-home-store-price-offer"
                    onclick="cancelTryOut('POSTapi-v1-provider-home-store-price-offer');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-provider-home-store-price-offer"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/provider/home/store-price-offer</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-provider-home-store-price-offer"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-provider-home-store-price-offer"
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
                              name="Accept"                data-endpoint="POSTapi-v1-provider-home-store-price-offer"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-provider-home-store-price-offer"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-provider-home-store-price-offer"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-provider-home-store-price-offer"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_id"                data-endpoint="POSTapi-v1-provider-home-store-price-offer"
               value="2"
               data-component="body">
    <br>
<p>order identifier. Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="price"                data-endpoint="POSTapi-v1-provider-home-store-price-offer"
               value="50"
               data-component="body">
    <br>
<p>order offer price. Example: <code>50</code></p>
        </div>
        </form>

                <h1 id="core">Core</h1>

    <p>Apis may be needed globaly in the system</p>

                        <h2 id="core-reusable-selected-lists">Reusable Selected Lists</h2>
                                        <p>
                    <p>Manage Reusable Selected Lists</p>
                </p>
                                        <h2 id="core-GETapi-v1-core-nationalities">list nationalities.</h2>

<p>
</p>

<p>an API which Offers a mean to list all nationalities</p>

<span id="example-requests-GETapi-v1-core-nationalities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/core/nationalities?nationalityId=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/core/nationalities"
);

const params = {
    "nationalityId": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-core-nationalities">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-core-nationalities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-core-nationalities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-core-nationalities"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-core-nationalities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-core-nationalities">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-core-nationalities" data-method="GET"
      data-path="api/v1/core/nationalities"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-core-nationalities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-core-nationalities"
                    onclick="tryItOut('GETapi-v1-core-nationalities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-core-nationalities"
                    onclick="cancelTryOut('GETapi-v1-core-nationalities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-core-nationalities"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/core/nationalities</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-core-nationalities"
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
                              name="Accept"                data-endpoint="GETapi-v1-core-nationalities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-core-nationalities"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-core-nationalities"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-core-nationalities"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nationalityId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nationalityId"                data-endpoint="GETapi-v1-core-nationalities"
               value="1"
               data-component="query">
    <br>
<p>(optional) nationality id. Example: <code>1</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nationalityId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="nationalityId"                data-endpoint="GETapi-v1-core-nationalities"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="core-GETapi-v1-core-car-types">list car types.</h2>

<p>
</p>

<p>an API which Offers a mean to list all car types</p>

<span id="example-requests-GETapi-v1-core-car-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/core/car-types?carTypeId=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/core/car-types"
);

const params = {
    "carTypeId": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-core-car-types">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-core-car-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-core-car-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-core-car-types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-core-car-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-core-car-types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-core-car-types" data-method="GET"
      data-path="api/v1/core/car-types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-core-car-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-core-car-types"
                    onclick="tryItOut('GETapi-v1-core-car-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-core-car-types"
                    onclick="cancelTryOut('GETapi-v1-core-car-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-core-car-types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/core/car-types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-core-car-types"
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
                              name="Accept"                data-endpoint="GETapi-v1-core-car-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-core-car-types"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-core-car-types"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-core-car-types"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>carTypeId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="carTypeId"                data-endpoint="GETapi-v1-core-car-types"
               value="1"
               data-component="query">
    <br>
<p>(optional) car type identifier. Example: <code>1</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>carTypeId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="carTypeId"                data-endpoint="GETapi-v1-core-car-types"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="core-GETapi-v1-core-car-categories">list car categories.</h2>

<p>
</p>

<p>an API which Offers a mean to list all car categories</p>

<span id="example-requests-GETapi-v1-core-car-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/core/car-categories?carCategoryId=3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/core/car-categories"
);

const params = {
    "carCategoryId": "3",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-core-car-categories">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-core-car-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-core-car-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-core-car-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-core-car-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-core-car-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-core-car-categories" data-method="GET"
      data-path="api/v1/core/car-categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-core-car-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-core-car-categories"
                    onclick="tryItOut('GETapi-v1-core-car-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-core-car-categories"
                    onclick="cancelTryOut('GETapi-v1-core-car-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-core-car-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/core/car-categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-core-car-categories"
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
                              name="Accept"                data-endpoint="GETapi-v1-core-car-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-core-car-categories"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-core-car-categories"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-core-car-categories"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>carCategoryId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="carCategoryId"                data-endpoint="GETapi-v1-core-car-categories"
               value="3"
               data-component="query">
    <br>
<p>(optional) car category identifier. Example: <code>3</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>carCategoryId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="carCategoryId"                data-endpoint="GETapi-v1-core-car-categories"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="core-GETapi-v1-core-shipment-types">list shipment types.</h2>

<p>
</p>

<p>an API which Offers a mean to list all shipment types</p>

<span id="example-requests-GETapi-v1-core-shipment-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/core/shipment-types?shipmentType=3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/core/shipment-types"
);

const params = {
    "shipmentType": "3",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-core-shipment-types">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 43
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-core-shipment-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-core-shipment-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-core-shipment-types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-core-shipment-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-core-shipment-types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-core-shipment-types" data-method="GET"
      data-path="api/v1/core/shipment-types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-core-shipment-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-core-shipment-types"
                    onclick="tryItOut('GETapi-v1-core-shipment-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-core-shipment-types"
                    onclick="cancelTryOut('GETapi-v1-core-shipment-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-core-shipment-types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/core/shipment-types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-core-shipment-types"
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
                              name="Accept"                data-endpoint="GETapi-v1-core-shipment-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-core-shipment-types"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-core-shipment-types"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-core-shipment-types"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>shipmentType</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="shipmentType"                data-endpoint="GETapi-v1-core-shipment-types"
               value="3"
               data-component="query">
    <br>
<p>(optional) shipment type identifier. Example: <code>3</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipmentType</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="shipmentType"                data-endpoint="GETapi-v1-core-shipment-types"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="core-GETapi-v1-core-shipment-sub-types">list Shipment Sub Types.</h2>

<p>
</p>

<p>an API which Offers a mean to list all Shipment Sub Types</p>

<span id="example-requests-GETapi-v1-core-shipment-sub-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/core/shipment-sub-types?shipmentSubTypeId=4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/core/shipment-sub-types"
);

const params = {
    "shipmentSubTypeId": "4",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-core-shipment-sub-types">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 42
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-core-shipment-sub-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-core-shipment-sub-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-core-shipment-sub-types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-core-shipment-sub-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-core-shipment-sub-types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-core-shipment-sub-types" data-method="GET"
      data-path="api/v1/core/shipment-sub-types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-core-shipment-sub-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-core-shipment-sub-types"
                    onclick="tryItOut('GETapi-v1-core-shipment-sub-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-core-shipment-sub-types"
                    onclick="cancelTryOut('GETapi-v1-core-shipment-sub-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-core-shipment-sub-types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/core/shipment-sub-types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-core-shipment-sub-types"
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
                              name="Accept"                data-endpoint="GETapi-v1-core-shipment-sub-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-core-shipment-sub-types"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-core-shipment-sub-types"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-core-shipment-sub-types"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>shipmentSubTypeId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="shipmentSubTypeId"                data-endpoint="GETapi-v1-core-shipment-sub-types"
               value="4"
               data-component="query">
    <br>
<p>(optional) shipment sub type identifier. Example: <code>4</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipmentSubTypeId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="shipmentSubTypeId"                data-endpoint="GETapi-v1-core-shipment-sub-types"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                                <h2 id="core-manage-fcm-notifications">Manage FCM Notifications</h2>
                                        <p>
                    <p>Manage FCM Notifications</p>
                </p>
                                        <h2 id="core-GETapi-v1-core-notifications-list">list notifications.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to list all notifications</p>

<span id="example-requests-GETapi-v1-core-notifications-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/core/notifications/list" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"unread\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/core/notifications/list"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "unread": true
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-core-notifications-list">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-core-notifications-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-core-notifications-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-core-notifications-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-core-notifications-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-core-notifications-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-core-notifications-list" data-method="GET"
      data-path="api/v1/core/notifications/list"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-core-notifications-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-core-notifications-list"
                    onclick="tryItOut('GETapi-v1-core-notifications-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-core-notifications-list"
                    onclick="cancelTryOut('GETapi-v1-core-notifications-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-core-notifications-list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/core/notifications/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-core-notifications-list"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-core-notifications-list"
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
                              name="Accept"                data-endpoint="GETapi-v1-core-notifications-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-core-notifications-list"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-core-notifications-list"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-core-notifications-list"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unread</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="GETapi-v1-core-notifications-list" style="display: none">
            <input type="radio" name="unread"
                   value="true"
                   data-endpoint="GETapi-v1-core-notifications-list"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-v1-core-notifications-list" style="display: none">
            <input type="radio" name="unread"
                   value="false"
                   data-endpoint="GETapi-v1-core-notifications-list"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="core-GETapi-v1-core-notifications-mark-read">mark notifications as read.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to mark all notifications as read or single notification</p>

<span id="example-requests-GETapi-v1-core-notifications-mark-read">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/core/notifications/mark-read?notification_id=dfnkjdbfkbry2383423hjk4" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/core/notifications/mark-read"
);

const params = {
    "notification_id": "dfnkjdbfkbry2383423hjk4",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-core-notifications-mark-read">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-core-notifications-mark-read" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-core-notifications-mark-read"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-core-notifications-mark-read"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-core-notifications-mark-read" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-core-notifications-mark-read">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-core-notifications-mark-read" data-method="GET"
      data-path="api/v1/core/notifications/mark-read"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-core-notifications-mark-read', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-core-notifications-mark-read"
                    onclick="tryItOut('GETapi-v1-core-notifications-mark-read');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-core-notifications-mark-read"
                    onclick="cancelTryOut('GETapi-v1-core-notifications-mark-read');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-core-notifications-mark-read"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/core/notifications/mark-read</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-core-notifications-mark-read"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-core-notifications-mark-read"
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
                              name="Accept"                data-endpoint="GETapi-v1-core-notifications-mark-read"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-core-notifications-mark-read"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-core-notifications-mark-read"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-core-notifications-mark-read"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>notification_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notification_id"                data-endpoint="GETapi-v1-core-notifications-mark-read"
               value="dfnkjdbfkbry2383423hjk4"
               data-component="query">
    <br>
<p>notification identifier to delete. Example: <code>dfnkjdbfkbry2383423hjk4</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notification_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="notification_id"                data-endpoint="GETapi-v1-core-notifications-mark-read"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                <h1 id="dashboard-admin">Dashboard Admin</h1>

    <p>Manage Dashboard Apis</p>

                        <h2 id="dashboard-admin-core">Core</h2>
                                        <p>
                    <p>Manage Admins Abilities and other tasks</p>
                </p>
                                        <h2 id="dashboard-admin-GETapi-v1-admin-core-check-abilities">check if admin has has one or more Dashboard abilities.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to list abilities with filtering</p>

<span id="example-requests-GETapi-v1-admin-core-check-abilities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/admin/core/check-abilities" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/core/check-abilities"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-core-check-abilities">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-core-check-abilities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-core-check-abilities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-core-check-abilities"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-core-check-abilities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-core-check-abilities">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-core-check-abilities" data-method="GET"
      data-path="api/v1/admin/core/check-abilities"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-core-check-abilities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-core-check-abilities"
                    onclick="tryItOut('GETapi-v1-admin-core-check-abilities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-core-check-abilities"
                    onclick="cancelTryOut('GETapi-v1-admin-core-check-abilities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-core-check-abilities"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/core/check-abilities</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-core-check-abilities"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-core-check-abilities"
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
                              name="Accept"                data-endpoint="GETapi-v1-admin-core-check-abilities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-admin-core-check-abilities"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-admin-core-check-abilities"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-admin-core-check-abilities"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="dashboard-admin-GETapi-v1-admin-core-check-ability--module---ability-">checks if admin has a spesefic ability.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to list abilities with filtering</p>

<span id="example-requests-GETapi-v1-admin-core-check-ability--module---ability-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/admin/core/check-ability/nostrum/ut" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/core/check-ability/nostrum/ut"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-core-check-ability--module---ability-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-core-check-ability--module---ability-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-core-check-ability--module---ability-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-core-check-ability--module---ability-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-core-check-ability--module---ability-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-core-check-ability--module---ability-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-core-check-ability--module---ability-" data-method="GET"
      data-path="api/v1/admin/core/check-ability/{module}/{ability}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-core-check-ability--module---ability-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-core-check-ability--module---ability-"
                    onclick="tryItOut('GETapi-v1-admin-core-check-ability--module---ability-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-core-check-ability--module---ability-"
                    onclick="cancelTryOut('GETapi-v1-admin-core-check-ability--module---ability-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-core-check-ability--module---ability-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/core/check-ability/{module}/{ability}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
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
                              name="Accept"                data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>module</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="module"                data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
               value="nostrum"
               data-component="url">
    <br>
<p>Example: <code>nostrum</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ability</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ability"                data-endpoint="GETapi-v1-admin-core-check-ability--module---ability-"
               value="ut"
               data-component="url">
    <br>
<p>Example: <code>ut</code></p>
            </div>
                    </form>

                                <h2 id="dashboard-admin-auth">Auth</h2>
                                        <p>
                    <p>Auth Cycle Apis</p>
                </p>
                                        <h2 id="dashboard-admin-POSTapi-v1-admin-auth-login">Admin Login.</h2>

<p>
</p>

<p>an API which Offers a mean to login a Admin</p>

<span id="example-requests-POSTapi-v1-admin-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"email\": \"fahmi@moltaqa.net\",
    \"password\": \"12345678\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "email": "fahmi@moltaqa.net",
    "password": "12345678"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-login">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-login" data-method="POST"
      data-path="api/v1/admin/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-login"
                    onclick="tryItOut('POSTapi-v1-admin-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-login"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-login"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-login"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-login"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-admin-auth-login"
               value="fahmi@moltaqa.net"
               data-component="body">
    <br>
<p>The Email Address of the user. Example: <code>fahmi@moltaqa.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-admin-auth-login"
               value="12345678"
               data-component="body">
    <br>
<p>The password of User account. Example: <code>12345678</code></p>
        </div>
        </form>

                    <h2 id="dashboard-admin-POSTapi-v1-admin-auth-logout">Admin logout.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to logout a Admin</p>

<span id="example-requests-POSTapi-v1-admin-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-logout">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-logout" data-method="POST"
      data-path="api/v1/admin/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-logout"
                    onclick="tryItOut('POSTapi-v1-admin-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-logout"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-auth-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-logout"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-logout"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-logout"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-logout"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="dashboard-admin-POSTapi-v1-admin-auth-send-otp">Send OTP To Mobile Number.</h2>

<p>
</p>

<p>an API which Offers a mean to Send OTP To Mobile Number.</p>

<span id="example-requests-POSTapi-v1-admin-auth-send-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/send-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"mobile\": \"0564776688\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/send-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "mobile": "0564776688"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-send-otp">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-send-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-send-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-send-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-send-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-send-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-send-otp" data-method="POST"
      data-path="api/v1/admin/auth/send-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-send-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-send-otp"
                    onclick="tryItOut('POSTapi-v1-admin-auth-send-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-send-otp"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-send-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-send-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/send-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-send-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-send-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-send-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-send-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-send-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-admin-auth-send-otp"
               value="0564776688"
               data-component="body">
    <br>
<p>The Mobile Number of the user. Example: <code>0564776688</code></p>
        </div>
        </form>

                    <h2 id="dashboard-admin-POSTapi-v1-admin-auth-resend-otp">Re-Send OTP.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Re-Send OTP.</p>

<span id="example-requests-POSTapi-v1-admin-auth-resend-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/resend-otp" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/resend-otp"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-resend-otp">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-resend-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-resend-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-resend-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-resend-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-resend-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-resend-otp" data-method="POST"
      data-path="api/v1/admin/auth/resend-otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-resend-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-resend-otp"
                    onclick="tryItOut('POSTapi-v1-admin-auth-resend-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-resend-otp"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-resend-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-resend-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/resend-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-auth-resend-otp"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-resend-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-resend-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-resend-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-resend-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-resend-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="dashboard-admin-POSTapi-v1-admin-auth-verify-otp">OTP Verification.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to verify user otp</p>

<span id="example-requests-POSTapi-v1-admin-auth-verify-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/verify-otp" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"code\": \"1234\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/verify-otp"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "code": "1234"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-verify-otp">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-verify-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-verify-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-verify-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-verify-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-verify-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-verify-otp" data-method="POST"
      data-path="api/v1/admin/auth/verify-otp"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-verify-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-verify-otp"
                    onclick="tryItOut('POSTapi-v1-admin-auth-verify-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-verify-otp"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-verify-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-verify-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/verify-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-auth-verify-otp"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-verify-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-verify-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-verify-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-verify-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-verify-otp"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-admin-auth-verify-otp"
               value="1234"
               data-component="body">
    <br>
<p>The OTP sent via sms to user. Example: <code>1234</code></p>
        </div>
        </form>

                    <h2 id="dashboard-admin-GETapi-v1-admin-auth-profile">Admin Profile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to login a Admin</p>

<span id="example-requests-GETapi-v1-admin-auth-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://kdadeltariq.test/api/v1/admin/auth/profile" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/profile"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-auth-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-auth-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-auth-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-auth-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-auth-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-auth-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-auth-profile" data-method="GET"
      data-path="api/v1/admin/auth/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-auth-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-auth-profile"
                    onclick="tryItOut('GETapi-v1-admin-auth-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-auth-profile"
                    onclick="cancelTryOut('GETapi-v1-admin-auth-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-auth-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/auth/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-auth-profile"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-auth-profile"
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
                              name="Accept"                data-endpoint="GETapi-v1-admin-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="GETapi-v1-admin-auth-profile"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="GETapi-v1-admin-auth-profile"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="GETapi-v1-admin-auth-profile"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                    <h2 id="dashboard-admin-POSTapi-v1-admin-auth-changpassword">Admin Change Password.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Change password for logged in Admin.</p>

<span id="example-requests-POSTapi-v1-admin-auth-changpassword">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/changpassword" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"password\": \"123456789\",
    \"old_password\": \"12345678\",
    \"password_confirmation\": \"123456789\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/changpassword"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "password": "123456789",
    "old_password": "12345678",
    "password_confirmation": "123456789"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-changpassword">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-changpassword" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-changpassword"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-changpassword"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-changpassword" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-changpassword">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-changpassword" data-method="POST"
      data-path="api/v1/admin/auth/changpassword"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-changpassword', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-changpassword"
                    onclick="tryItOut('POSTapi-v1-admin-auth-changpassword');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-changpassword"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-changpassword');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-changpassword"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/changpassword</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="123456789"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>old_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="old_password"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="12345678"
               data-component="body">
    <br>
<p>The user old password. Example: <code>12345678</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-admin-auth-changpassword"
               value="123456789"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>123456789</code></p>
        </div>
        </form>

                    <h2 id="dashboard-admin-POSTapi-v1-admin-auth-forget-password">Admin Forget Password.</h2>

<p>
</p>

<p>an API which Offers a mean to reset Admin password for logged out Admins.</p>

<span id="example-requests-POSTapi-v1-admin-auth-forget-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/forget-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"email\": \"fahmi@moltaqa.net\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/forget-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "email": "fahmi@moltaqa.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-forget-password">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-forget-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-forget-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-forget-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-forget-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-forget-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-forget-password" data-method="POST"
      data-path="api/v1/admin/auth/forget-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-forget-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-forget-password"
                    onclick="tryItOut('POSTapi-v1-admin-auth-forget-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-forget-password"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-forget-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-forget-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/forget-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-forget-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-forget-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-forget-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-forget-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-forget-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-admin-auth-forget-password"
               value="fahmi@moltaqa.net"
               data-component="body">
    <br>
<p>The E-Mail Address of the user. Example: <code>fahmi@moltaqa.net</code></p>
        </div>
        </form>

                    <h2 id="dashboard-admin-POSTapi-v1-admin-auth-reset-password">Admin New Password.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to set new password for logged out Admins after verification step.</p>

<span id="example-requests-POSTapi-v1-admin-auth-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/admin/auth/reset-password" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar" \
    --data "{
    \"password\": \"123456789\",
    \"password_confirmation\": \"123456789\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/reset-password"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

let body = {
    "password": "123456789",
    "password_confirmation": "123456789"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-auth-reset-password">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-admin-auth-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-auth-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-auth-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-auth-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-auth-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-auth-reset-password" data-method="POST"
      data-path="api/v1/admin/auth/reset-password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-auth-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-auth-reset-password"
                    onclick="tryItOut('POSTapi-v1-admin-auth-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-auth-reset-password"
                    onclick="cancelTryOut('POSTapi-v1-admin-auth-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-auth-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/auth/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-auth-reset-password"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-auth-reset-password"
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
                              name="Accept"                data-endpoint="POSTapi-v1-admin-auth-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-admin-auth-reset-password"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-admin-auth-reset-password"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-admin-auth-reset-password"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-admin-auth-reset-password"
               value="123456789"
               data-component="body">
    <br>
<p>The User bew password. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-admin-auth-reset-password"
               value="123456789"
               data-component="body">
    <br>
<p>The user new password confirmation. Example: <code>123456789</code></p>
        </div>
        </form>

                    <h2 id="dashboard-admin-DELETEapi-v1-admin-auth-delete-account">Admin Delete Account.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to delete an Admin account</p>

<span id="example-requests-DELETEapi-v1-admin-auth-delete-account">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://kdadeltariq.test/api/v1/admin/auth/delete-account" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: ar"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/admin/auth/delete-account"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "ar",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-auth-delete-account">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: {
        &quot;unauthenticated&quot;: [
            &quot;Unauthenticated.&quot;
        ]
    },
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-admin-auth-delete-account" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-auth-delete-account"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-auth-delete-account"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-auth-delete-account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-auth-delete-account">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-auth-delete-account" data-method="DELETE"
      data-path="api/v1/admin/auth/delete-account"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-auth-delete-account', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-auth-delete-account"
                    onclick="tryItOut('DELETEapi-v1-admin-auth-delete-account');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-auth-delete-account"
                    onclick="cancelTryOut('DELETEapi-v1-admin-auth-delete-account');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-auth-delete-account"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/auth/delete-account</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-admin-auth-delete-account"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-auth-delete-account"
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
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-auth-delete-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="DELETEapi-v1-admin-auth-delete-account"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="DELETEapi-v1-admin-auth-delete-account"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="DELETEapi-v1-admin-auth-delete-account"
               value="ar"
               data-component="header">
    <br>
<p>Example: <code>ar</code></p>
            </div>
                        </form>

                <h1 id="dev-only">Dev Only</h1>

    <aside class="badge badge-darkred">Dev Apis for Development Process only.<br><hr>
Must not included in any part of the system.<br><hr>
The purpouse to use as utilties<br>to aid developers without depending on backend developer.</aside>

                        <h2 id="dev-only-static-mobile-or-email-binders-for-testing-otp">Static Mobile Or Email binders for testing OTP</h2>
                                        <p>
                    <p>Allow you to bind any real or fake email or mobile to recieve static OTP code 1234</p>
                </p>
                                        <h2 id="dev-only-POSTapi-v1-dev-static-mobile-otp">static mobile number OTP.</h2>

<p>
</p>

<p>an API which Offers a mean to allocate static OTP to a mobile number</p>

<span id="example-requests-POSTapi-v1-dev-static-mobile-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/dev/static-mobile-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: en" \
    --data "{
    \"mobile\": \"0564777888\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/dev/static-mobile-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "en",
};

let body = {
    "mobile": "0564777888"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-dev-static-mobile-otp">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 41
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-dev-static-mobile-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-dev-static-mobile-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-dev-static-mobile-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-dev-static-mobile-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-dev-static-mobile-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-dev-static-mobile-otp" data-method="POST"
      data-path="api/v1/dev/static-mobile-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-dev-static-mobile-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-dev-static-mobile-otp"
                    onclick="tryItOut('POSTapi-v1-dev-static-mobile-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-dev-static-mobile-otp"
                    onclick="cancelTryOut('POSTapi-v1-dev-static-mobile-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-dev-static-mobile-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/dev/static-mobile-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-dev-static-mobile-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-dev-static-mobile-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-dev-static-mobile-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-dev-static-mobile-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-dev-static-mobile-otp"
               value="en"
               data-component="header">
    <br>
<p>Example: <code>en</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile"                data-endpoint="POSTapi-v1-dev-static-mobile-otp"
               value="0564777888"
               data-component="body">
    <br>
<p>mobile number to recieve static otp. Example: <code>0564777888</code></p>
        </div>
        </form>

                    <h2 id="dev-only-POSTapi-v1-dev-static-mail-otp">static email address OTP.</h2>

<p>
</p>

<p>an API which Offers a mean to allocate static OTP to an email address</p>

<span id="example-requests-POSTapi-v1-dev-static-mail-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://kdadeltariq.test/api/v1/dev/static-mail-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Key: xx" \
    --header "Api-Version: v1" \
    --header "Accept-Language: en" \
    --data "{
    \"email\": \"fahmi@moltaqa.net\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://kdadeltariq.test/api/v1/dev/static-mail-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Key": "xx",
    "Api-Version": "v1",
    "Accept-Language": "en",
};

let body = {
    "email": "fahmi@moltaqa.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-dev-static-mail-otp">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 40
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;data&quot;: [],
    &quot;error&quot;: [
        [
            &quot;Api Key Not Valid&quot;
        ]
    ],
    &quot;pagination&quot;: [],
    &quot;extras&quot;: [],
    &quot;message&quot;: &quot;Api Key Not Valid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-dev-static-mail-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-dev-static-mail-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-dev-static-mail-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-dev-static-mail-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-dev-static-mail-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-dev-static-mail-otp" data-method="POST"
      data-path="api/v1/dev/static-mail-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-dev-static-mail-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-dev-static-mail-otp"
                    onclick="tryItOut('POSTapi-v1-dev-static-mail-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-dev-static-mail-otp"
                    onclick="cancelTryOut('POSTapi-v1-dev-static-mail-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-dev-static-mail-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/dev/static-mail-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-dev-static-mail-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v1-dev-static-mail-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Key</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Key"                data-endpoint="POSTapi-v1-dev-static-mail-otp"
               value="xx"
               data-component="header">
    <br>
<p>Example: <code>xx</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Api-Version</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Api-Version"                data-endpoint="POSTapi-v1-dev-static-mail-otp"
               value="v1"
               data-component="header">
    <br>
<p>Example: <code>v1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept-Language</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept-Language"                data-endpoint="POSTapi-v1-dev-static-mail-otp"
               value="en"
               data-component="header">
    <br>
<p>Example: <code>en</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-dev-static-mail-otp"
               value="fahmi@moltaqa.net"
               data-component="body">
    <br>
<p>email address to recieve static otp. Example: <code>fahmi@moltaqa.net</code></p>
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
